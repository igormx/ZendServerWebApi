<?php
namespace ZendServerWebApi\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Config\Writer\Ini as ConfigWriter;
use Zend\Config\Reader\Ini as ConfigReader;

/**
 * Main Console Controller
 *
 * Controller that manage all CLI commands
 */
class TargetController extends AbstractActionController
{
    public function addAction()
    {
        $appConfig  = $this->serviceLocator->get('config');
        $target = $this->getRequest()->getParam('target');

        // Read the current configuration
        $data = array();
        try {
            $reader = new ConfigReader();
            $data = $reader->fromFile($appConfig['zsapi']['file']);
        } catch(\Zend\Config\Exception $ex) {}

        $data[$target] = array();
        foreach (array('zsurl','zskey','zssecret') as $key) {
            $value = $this->getRequest()->getParam($key);
            if($value) {
               $data[$target][$key] = $value;
            }
        }

        $config = new ConfigWriter();
        $config->toFile($appConfig['zsapi']['file'], $data);
    }
}
