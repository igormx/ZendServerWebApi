<?php
namespace ZendServerWebApi\Controller;
use Zend\Mvc\Controller\AbstractController;
use Zend\Mvc\MvcEvent;
use ZendServerWebApi\Model\Request;

/**
 * Main Console Controller
 *
 * Controller that manage all CLI commands
 */
class ZendServerController extends AbstractController
{

    /**
     * (non-PHPdoc)
     *
     * @see \Zend\Mvc\Controller\AbstractController::onDispatch()
     */
    public function onDispatch (MvcEvent $e)
    {
        $routeMatch = $e->getRouteMatch();
        if (! $routeMatch) {
            throw new \Exception(
                    'Missing route matches; unsure how to retrieve action');
        }
        $action = $routeMatch->getParam('action', 'not-found');
        $response = $this->sendApiRequest();
        $e->setResult(false);
        echo $response->getHttpResponse()->getBody();
    }

    /**
     * Send the API Request to Zend Server
     *
     * @return Response
     */
    protected function sendApiRequest ()
    {
        $serviceLocator = $this->getServiceLocator();
        $apiManager = $serviceLocator->get('zend_server_api');
        $action = $this->params('action');
        $response = $apiManager->$action();
        return $response;
    }
}