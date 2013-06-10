<?php
return array(
    'console' => array(
        'router' => array(
            'routes' => array(
                'codetracingDisable' => array(
                    'options' => array(
                        'route' => 'codetracingDisable [--restartNow=]',
                        'defaults' => array(
                            'action' => 'codetracingDisable',
                            'apiMethod' => 'post'
                        )
                    )
                    
                ),
                'codetracingEnable' => array(
                    'options' => array(
                        'route' => 'codetracingEnable [--restartNow=]',
                        'defaults' => array(
                            'action' => 'codetracingEnable',
                            'apiMethod' => 'post'
                        )
                    )
                    
                ),
                'codetracingIsEnabled' => array(
                    'options' => array(
                        'route' => 'codetracingIsEnabled',
                        'defaults' => array(
                            'action' => 'codetracingIsEnabled'
                        )
                    )
                    
                ),
                'codetracingCreate' => array(
                    'options' => array(
                        'route' => 'codetracingCreate --url=',
                        'defaults' => array(
                            'action' => 'codetracingCreate',
                            'apiMethod' => 'post'
                        )
                    )
                    
                ),
                'codetracingGetInfo' => array(
                    'options' => array(
                        'route' => 'codetracingGetInfo --id=',
                        'defaults' => array(
                            'action' => 'codetracingGetInfo'
                        )
                    )
                    
                ),
                'codetracingDelete' => array(
                    'options' => array(
                        'route' => 'codetracingDelete --traceFile=',
                        'defaults' => array(
                            'action' => 'codetracingDelete',
                            'apiMethod' => 'post'
                        )
                    )
                    
                ),
                'codetracingDownloadTraceFile' => array(
                    'options' => array(
                        'route' => 'codetracingDownloadTraceFile --traceFile= [--eventsGroupId=]',
                        'defaults' => array(
                            'action' => 'codetracingDownloadTraceFile'
                        )
                    )
                    
                ),
                // Deployment
                'applicationGetStatus' => array(
                    'options' => array(
                        'route' => 'applicationGetStatus [--applications=] [--direction=]',
                        'defaults' => array(
                            'action' => 'applicationGetStatus'
                        )
                    )
                    
                ),
                'applicationDeploy' => array(
                    'options' => array(
                        'route' => 'applicationDeploy --appPackage= --baseUrl= [--createVhost=] [--defaultserver=] [--userAppName=] [--ignoreFialures=] [--userParams=]',
                        'defaults' => array(
                            'action' => 'applicationDeploy',
                            'apiMethod' => 'post'
                        )
                    )
                    
                ),
                'applicationUpdate' => array(
                    'options' => array(
                        'route' => 'applicationUpdate --appId= --appPackage= [--ignoreFailures=] [--userParams=]',
                        'defaults' => array(
                            'action' => 'applicationUpdate',
                            'apiMethod' => 'post'
                        )
                    )
                    
                ),
                'applicationRemove' => array(
                    'options' => array(
                        'route' => 'applicationRemove --appId=',
                        'defaults' => array(
                            'action' => 'applicationRemove',
                            'apiMethod' => 'post'
                        )
                    )
                    
                ),
                'applicationSynchronize' => array(
                    'options' => array(
                        'route' => 'applicationSynchronize --appId= [--servers=] [--ignoreFailures=]',
                        'defaults' => array(
                            'action' => 'applicationSynchronize',
                            'apiMethod' => 'post'
                        )
                    )
                    
                ),
                'applicationRollback' => array(
                    'options' => array(
                        'route' => 'applicationRollback --appId=',
                        'defaults' => array(
                            'action' => 'applicationRollback',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                // Monitor
                'monitorGetRequestSummary' => array(
                    'options' => array(
                        'route' => 'monitorGetRequestSummary --requestUid=',
                        'defaults' => array(
                            'action' => 'monitorGetRequestSummary'
                        )
                    )
                    
                ),
                'monitorGetIssuesListPredefinedFilter' => array(
                    'options' => array(
                        'route' => 'monitorGetIssuesListPredefinedFilter --filterId= [--limit=] [--offset=] [--order=] [--direction=] [--filters=]',
                        'defaults' => array(
                            'action' => 'monitorGetIssuesListPredefinedFilter'
                        )
                    )
                    
                ),
                'monitorGetIssuesDetails' => array(
                    'options' => array(
                        'route' => 'monitorGetIssuesDetails --issueId= [--limit=]',
                        'defaults' => array(
                            'action' => 'monitorGetIssuesDetails'
                        )
                    )
                    
                ),
                'monitorGetEventGroupDetails' => array(
                    'options' => array(
                        'route' => 'monitorGetEventGroupDetails --issueId= --eventsGroupId=',
                        'defaults' => array(
                            'action' => 'monitorGetEventGroupDetails'
                        )
                    )
                    
                ),
                'monitorExportIssueByEventsGroup' => array(
                    'options' => array(
                        'route' => 'monitorExportIssueByEventsGroup --eventsGroupId=',
                        'defaults' => array(
                            'action' => 'monitorExportIssueByEventsGroup'
                        )
                    )
                    
                ),
                'monitorChangeIssueStatus' => array(
                    'options' => array(
                        'route' => 'monitorChangeIssueStatus --issueId= --newStatus=',
                        'defaults' => array(
                            'action' => 'monitorChangeIssueStatus',
                            'apiMethod' => 'post'
                        )
                    )
                    
                ),
                // Studio integration
                'studioStartDebug' => array(
                    'options' => array(
                        'route' => 'studioStartDebug --eventsGroupId= [--noRemote=] [--overrideHost=]',
                        'defaults' => array(
                            'action' => 'studioStartDebug',
                            'apiMethod' => 'post'
                        )
                    )
                    
                ),
                'studioStartProfile' => array(
                    'options' => array(
                        'route' => 'studioStartProfile --eventsGroupId= [--overrideHost=]',
                        'defaults' => array(
                            'action' => 'studioStartProfile',
                            'apiMethod' => 'post'
                        )
                    )
                    
                ),
                'studioShowSource' => array(
                    'options' => array(
                        'route' => 'studioShowSource --eventsGroupId= [--overrideHost=]',
                        'defaults' => array(
                            'action' => 'studioShowSource',
                            'apiMethod' => 'post'
                        )
                    )
                    
                )
            )
        )
    )
);
