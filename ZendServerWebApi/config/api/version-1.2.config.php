<?php
return array(
    'console' => array(
        'router' => array(
            'routes' => array(
                'codetracingDisable' => array(
                    'options' => array(
                        'route' => 'zsapi codetracingDisable [--restartNow=]',
                        'defaults' => array(
                            'action' => 'codetracingDisable',
                            'apiMethod' => 'post'
                        )
                    )
                    
                ),
                'codetracingEnable' => array(
                    'options' => array(
                        'route' => 'zsapi codetracingEnable [--restartNow=]',
                        'defaults' => array(
                            'action' => 'codetracingEnable',
                            'apiMethod' => 'post'
                        )
                    )
                    
                ),
                'codetracingIsEnabled' => array(
                    'options' => array(
                        'route' => 'zsapi codetracingIsEnabled',
                        'defaults' => array(
                            'action' => 'codetracingIsEnabled'
                        )
                    )
                    
                ),
                'codetracingCreate' => array(
                    'options' => array(
                        'route' => 'zsapi codetracingCreate --url=',
                        'defaults' => array(
                            'action' => 'codetracingCreate',
                            'apiMethod' => 'post'
                        )
                    )
                    
                ),
                'codetracingGetInfo' => array(
                    'options' => array(
                        'route' => 'zsapi codetracingGetInfo --id=',
                        'defaults' => array(
                            'action' => 'codetracingGetInfo'
                        )
                    )
                    
                ),
                'codetracingDelete' => array(
                    'options' => array(
                        'route' => 'zsapi codetracingDelete --traceFile=',
                        'defaults' => array(
                            'action' => 'codetracingDelete',
                            'apiMethod' => 'post'
                        )
                    )
                    
                ),
                'codetracingDownloadTraceFile' => array(
                    'options' => array(
                        'route' => 'zsapi codetracingDownloadTraceFile --traceFile= [--eventsGroupId=]',
                        'defaults' => array(
                            'action' => 'codetracingDownloadTraceFile'
                        )
                    )
                    
                ),
                // Deployment
                'applicationGetStatus' => array(
                    'options' => array(
                        'route' => 'zsapi applicationGetStatus [--applications=] [--direction=]',
                        'defaults' => array(
                            'action' => 'applicationGetStatus'
                        )
                    )
                    
                ),
                'applicationDeploy' => array(
                    'options' => array(
                        'route' => 'zsapi applicationDeploy --appPackage= --baseUrl= [--createVhost=] [--defaultserver=] [--userAppName=] [--ignoreFialures=] [--userParams=]',
                        'defaults' => array(
                            'action' => 'applicationDeploy',
                            'apiMethod' => 'post'
                        )
                    )
                    
                ),
                'applicationUpdate' => array(
                    'options' => array(
                        'route' => 'zsapi applicationUpdate --appId= --appPackage= [--ignoreFailures=] [--userParams=]',
                        'defaults' => array(
                            'action' => 'applicationUpdate',
                            'apiMethod' => 'post'
                        )
                    )
                    
                ),
                'applicationRemove' => array(
                    'options' => array(
                        'route' => 'zsapi applicationRemove --appId=',
                        'defaults' => array(
                            'action' => 'applicationRemove',
                            'apiMethod' => 'post'
                        )
                    )
                    
                ),
                'applicationSynchronize' => array(
                    'options' => array(
                        'route' => 'zsapi applicationSynchronize --appId= [--servers=] [--ignoreFailures=]',
                        'defaults' => array(
                            'action' => 'applicationSynchronize',
                            'apiMethod' => 'post'
                        )
                    )
                    
                ),
                'applicationRollback' => array(
                    'options' => array(
                        'route' => 'zsapi applicationRollback --appId=',
                        'defaults' => array(
                            'action' => 'applicationRollback',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                // Monitor
                'monitorGetRequestSummary' => array(
                    'options' => array(
                        'route' => 'zsapi monitorGetRequestSummary --requestUid=',
                        'defaults' => array(
                            'action' => 'monitorGetRequestSummary'
                        )
                    )
                    
                ),
                'monitorGetIssuesListPredefinedFilter' => array(
                    'options' => array(
                        'route' => 'zsapi monitorGetIssuesListPredefinedFilter --filterId= [--limit=] [--offset=] [--order=] [--direction=] [--filters=]',
                        'defaults' => array(
                            'action' => 'monitorGetIssuesListPredefinedFilter'
                        )
                    )
                    
                ),
                'monitorGetIssuesDetails' => array(
                    'options' => array(
                        'route' => 'zsapi monitorGetIssuesDetails --issueId= [--limit=]',
                        'defaults' => array(
                            'action' => 'monitorGetIssuesDetails'
                        )
                    )
                    
                ),
                'monitorGetEventGroupDetails' => array(
                    'options' => array(
                        'route' => 'zsapi monitorGetEventGroupDetails --issueId= --eventsGroupId=',
                        'defaults' => array(
                            'action' => 'monitorGetEventGroupDetails'
                        )
                    )
                    
                ),
                'monitorExportIssueByEventsGroup' => array(
                    'options' => array(
                        'route' => 'zsapi monitorExportIssueByEventsGroup --eventsGroupId=',
                        'defaults' => array(
                            'action' => 'monitorExportIssueByEventsGroup'
                        )
                    )
                    
                ),
                'monitorChangeIssueStatus' => array(
                    'options' => array(
                        'route' => 'zsapi monitorChangeIssueStatus --issueId= --newStatus=',
                        'defaults' => array(
                            'action' => 'monitorChangeIssueStatus',
                            'apiMethod' => 'post'
                        )
                    )
                    
                ),
                // Studio integration
                'studioStartDebug' => array(
                    'options' => array(
                        'route' => 'zsapi studioStartDebug --eventsGroupId= [--noRemote=] [--overrideHost=]',
                        'defaults' => array(
                            'action' => 'studioStartDebug',
                            'apiMethod' => 'post'
                        )
                    )
                    
                ),
                'studioStartProfile' => array(
                    'options' => array(
                        'route' => 'zsapi studioStartProfile --eventsGroupId= [--overrideHost=]',
                        'defaults' => array(
                            'action' => 'studioStartProfile',
                            'apiMethod' => 'post'
                        )
                    )
                    
                ),
                'studioShowSource' => array(
                    'options' => array(
                        'route' => 'zsapi studioShowSource --eventsGroupId= [--overrideHost=]',
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
