<?php
namespace ZendServerWebApi\Controller;
use Zend\Mvc\Controller\AbstractActionController;

/**
 * App Console Controller
 *
 * High-Level Application Deployment CLI commands
 */
class AppController extends AbstractActionController
{
    public function installAction()
    {
        $requestParameters = array();
        $zpk     = $this->params('zpk');
        $baseUri = $this->params('baseUri');
        $userParams = $this->params('userParams');
        $appName    = $this->params('userAppName');
        $appId      = 0;

        $apiManager = $this->serviceLocator->get('zend_server_api');

        if(!$appName) {
            // get the name of the application from the package
            $zip = new \ZipArchive;
            if(!@$zip->open($zpk)) {
                throw new \Zend\Mvc\Exception\RuntimeException('Invalid ZPK file was provided');
            }

            $content = @$zip->getFromName('deployment.xml');
            $zip->close();
            if(!$content) {
                throw new \Zend\Mvc\Exception\RuntimeException('Missing deployment.xml in the zpk file.');
            }

            $xml = new \SimpleXMLElement($content);
            $appName = sprintf("%s", $xml->name);

            // or the baseUri
            if(!$appName) {
                $appName = str_replace($baseUri, '/', '');
            }
        }

        // check what applications are deployed
        $response = $apiManager->applicationGetStatus();
        foreach ($response->responseData->applicationsList->applicationInfo as $appElement) {
            if($appElement->appName == $appName) {
                $appId = $appElement->id;
                break;
            }
        }

        if(!$appId) {
            // if there is no match then install the application
            $response = $apiManager->applicationDeploy(array(
                'appPackage'  => $zpk,
                'baseUrl'     => $baseUri,
                'userAppName' => $appName,
                'userParams'  => $userParams,
            ));
        } else {
            // otherwise update the application
            $response = $apiManager->applicationUpdate(array(
                'appId'      => $appId,
                'appPackage' => $zpk,
                'userParams' => $userParams,
            ));
        }

        $this->getEvent()->setResult(false);
        print $response->getHttpResponse()->getBody();
    }
}
