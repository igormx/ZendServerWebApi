<?php
return array (
        'console' => array (
                'router' => array (
                        'routes' => array (
                                'codetracingDisable' => array (
                                        'options' => array (
                                                'route' => 'codetracingDisable [--restartNow=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'codetracingDisable',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                )
                                ,
                                'codetracingEnable' => array (
                                        'options' => array (
                                                'route' => 'codetracingEnable [--restartNow=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'codetracingEnable',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                )
                                ,
                                'codetracingIsEnabled' => array (
                                        'options' => array (
                                                'route' => 'codetracingIsEnabled',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'codetracingIsEnabled'
                                                )
                                        )
                                )
                                ,
                                'codetracingCreate' => array (
                                        'options' => array (
                                                'route' => 'codetracingCreate --url=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'codetracingCreate',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                )
                                ,
                                'codetracingGetInfo' => array (
                                        'options' => array (
                                                'route' => 'codetracingGetInfo --id=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'codetracingGetInfo'
                                                )
                                        )
                                )
                                ,
                                'codetracingDelete' => array (
                                        'options' => array (
                                                'route' => 'codetracingDelete --traceFile=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'codetracingDelete',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                )
                                ,
                                'codetracingDownloadTraceFile' => array (
                                        'options' => array (
                                                'route' => 'codetracingDownloadTraceFile --traceFile= [--eventsGroupId=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'codetracingDownloadTraceFile'
                                                )
                                        )
                                )
                                ,
                                // Deployment
                                'applicationGetStatus' => array (
                                        'options' => array (
                                                'route' => 'applicationGetStatus [--applications=] [--direction=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'applicationGetStatus'
                                                )
                                        )
                                )
                                ,
                                'applicationDeploy' => array (
                                        'options' => array (
                                                'route' => 'applicationDeploy --appPackage= --baseUrl= [--createVhost=] [--defaultserver=] [--userAppName=] [--ignoreFialures=] [--userParams=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'applicationDeploy',
                                                        'apiMethod' => 'post',
                                                        'files'   => array(
                                                                // Specifies which parameter values should be treated as file names
                                                                'appPackage'
                                                        )
                                                ),

                                        )
                                )
                                ,
                                'applicationUpdate' => array (
                                        'options' => array (
                                                'route' => 'applicationUpdate --appId= --appPackage= [--ignoreFailures=] [--userParams=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'applicationUpdate',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                )
                                ,
                                'applicationRemove' => array (
                                        'options' => array (
                                                'route' => 'applicationRemove --appId=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'applicationRemove',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                )
                                ,
                                'applicationSynchronize' => array (
                                        'options' => array (
                                                'route' => 'applicationSynchronize --appId= [--servers=] [--ignoreFailures=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'applicationSynchronize',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                )
                                ,
                                'applicationRollback' => array (
                                        'options' => array (
                                                'route' => 'applicationRollback --appId=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',

                                                        'action' => 'applicationRollback',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                // Monitor
                                'monitorGetRequestSummary' => array (
                                        'options' => array (
                                                'route' => 'monitorGetRequestSummary --requestUid=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'monitorGetRequestSummary'
                                                )
                                        )
                                )
                                ,
                                'monitorGetIssuesListPredefinedFilter' => array (
                                        'options' => array (
                                                'route' => 'monitorGetIssuesListPredefinedFilter --filterId= [--limit=] [--offset=] [--order=] [--direction=] [--filters=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'monitorGetIssuesListPredefinedFilter'
                                                )
                                        )
                                )
                                ,
                                'monitorGetIssuesDetails' => array (
                                        'options' => array (
                                                'route' => 'monitorGetIssuesDetails --issueId= [--limit=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'monitorGetIssuesDetails'
                                                )
                                        )
                                )
                                ,
                                'monitorGetEventGroupDetails' => array (
                                        'options' => array (
                                                'route' => 'monitorGetEventGroupDetails --issueId= --eventsGroupId=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'monitorGetEventGroupDetails'
                                                )
                                        )
                                )
                                ,
                                'monitorExportIssueByEventsGroup' => array (
                                        'options' => array (
                                                'route' => 'monitorExportIssueByEventsGroup --eventsGroupId=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'monitorExportIssueByEventsGroup'
                                                )
                                        )
                                )
                                ,
                                'monitorChangeIssueStatus' => array (
                                        'options' => array (
                                                'route' => 'monitorChangeIssueStatus --issueId= --newStatus=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'monitorChangeIssueStatus',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                )
                                ,
                                // Studio integration
                                'studioStartDebug' => array (
                                        'options' => array (
                                                'route' => 'studioStartDebug --eventsGroupId= [--noRemote=] [--overrideHost=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'studioStartDebug',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                )
                                ,
                                'studioStartProfile' => array (
                                        'options' => array (
                                                'route' => 'studioStartProfile --eventsGroupId= [--overrideHost=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'studioStartProfile',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                )
                                ,
                                'studioShowSource' => array (
                                        'options' => array (
                                                'route' => 'studioShowSource --eventsGroupId= [--overrideHost=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'studioShowSource',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                )

                        )
                )
        )
);
