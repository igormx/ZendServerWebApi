<?php
return array (
        'controllers' => array (
                'invokables' => array (
                        'ZendServerWebApi\Controller\Api'    => 'ZendServerWebApi\Controller\ApiController',
                        'ZendServerWebApi\Controller\Target' => 'ZendServerWebApi\Controller\TargetController',
                        'ZendServerWebApi\Controller\App' => 'ZendServerWebApi\Controller\AppController'
                )
        ),
        'console' => array (
                'router' => array (
                        'routes' => array (
                                'addtarget' => array (
                                        'options' => array (
                                                'route' => 'addTarget --target= [--zsurl=] --zskey= --zssecret=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Target',
                                                        'action' => 'add',
                                                        'no-target' => true,
                                                ),
                                                'info' => array (
                                                    'This command has to be executed first if you do not want to pass always the zskey zssecret and zsurl.',
                                                    array('--target', 'The unique name of the target'),
                                                    array('--zsurl','The Zend Server URL. If not specified then it will be http://localhost:10081'),
                                                    array('--zskey', 'The name of the API key'),
                                                    array('--zssecret', 'The hash of the API key'),
                                                )
                                        )
                                ),
                                'installapp' => array (
                                        'options' => array (
                                                'route' => 'installApp --zpk= --baseUri= [--userParams=] [--userAppName=] [--target=] [--zsurl=] [--zskey=] [--zssecret=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\App',
                                                        'action' => 'install'
                                                ),
                                                'info' => array (
                                                        'This command installs or updates an application',
                                                        array('--zpk', 'The zpk package file'),
                                                        array('--baseUri','The baseUri of where the application will be installed'),
                                                        array('--userParams', 'User parameters that have to formated as a query string'),
                                                        array('--userAppName', 'Name of the application'),
                                                        array('--target', 'The unique name of the target'),
                                                        array('--zsurl','The Zend Server URL. If not specified then it will be http://localhost:10081'),
                                                        array('--zskey', 'The name of the API key'),
                                                        array('--zssecret', 'The hash of the API key'),
                                                ),
                                                'arrays' => array (
                                                       'userParams',
                                                )
                                        )
                                )
                        ),
                )

        ),

        'service_manager' => array (
                'factories' => array (
                        'zend_server_api' => 'ZendServerWebApi\Service\ApiManagerFactory'
                )
        ),

        //  Zend Server API specific Settings
        'zsapi' => array (
            'file' => $_SERVER['HOME'].'/.zsapi.ini',
            // Default Zend Server URL
            'url' => 'http://localhost:10081',
            'version' => '6.0.1',
            // HTTP Client
            'client' => array(
                'adapter' => 'Zend\Http\Client\Adapter\Socket',
            )
        ),
);
