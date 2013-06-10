ZendServerWebApi
================

ZF2 module that ease Zend Server API usage

Zend Framework 2 API
--------------------
To use a Zend Server API, call the APIManager form the service locator :

    $apiManager = $serviceLocator->get('zend_server_api');
And then send the request and retrieve the response like this :

    $apiResponse = $apiManager->apiMethodName();
    
Where ApiMethodName is the API method : getNotifications, cacheClear, etc.... see Zend Server Web API documentation.
$apiResponse will be ApiResponse instance and can be used a SimpleXMLElement to get XML Data.
By exemple the clusterGetServerStatus metho will return a response in which you can acces data like that :

    $nodeCount = $apiResponse->responseData->serverList->count(); //To know the number a nodes in the cluster
    $serverStatus = $apiResponse->responseData->serverList->serverInfo[0]->status // To know the status of the first node
    
API Request parameters POST or GET can be passed to the ApiManger by using an array :

    $response = $apiManager->auditGetList(array(
            'limit' => 5,
            'order' => 'creation_time',
            'direction' => 'DESC'
        ));

CLI mode
--------
Zend Server Web API can be called in CLI mode by using :
    php index.php <method name> --parameterName
    
/!\ Array parameters are not properly developped for the moment.

