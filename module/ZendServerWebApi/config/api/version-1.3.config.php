<?php
return array (
        'console' => array (
                'router' => array (
                        'routes' => array (
                                // Adminsitration
                                'userAuthentificationSettings' => array (
                                        'options' => array (
                                                'route' => 'userAuthentificationSettings --type= --ldap= --password= --confirmNewPassword=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'userAuthentificationSettings',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'userSetPassword' => array (
                                        'options' => array (
                                                'route' => 'userSetPassword --username= --password= --newPassword= --confirmNewPassword=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'userSetPassword',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'setPassword' => array (
                                        'options' => array (
                                                'route' => 'setPassword --password= --newPassword= --confirmNewPassword=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'userSetPassword',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'apiKeysGetList' => array (
                                        'options' => array (
                                                'route' => 'apiKeysGetList',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'apiKeysGetList'
                                                )
                                        )
                                ),
                                'apiKeysAddKey' => array (
                                        'options' => array (
                                                'route' => 'apiKeysAddKey --name= --username=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'apiKeysAddKey',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'apiKeysRemoveKey' => array (
                                        'options' => array (
                                                'controller' => 'ZendServerWebApi\Controller\Api',
                                                'route' => 'apiKeysRemoveKey --ids=',
                                                'defaults' => array (
                                                        'action' => 'apiKeysRemoveKey',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'serverValidateLicense' => array (
                                        'options' => array (
                                                'route' => 'serverValidateLicense --licenseName= --licenseValue=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'serverValidateLicense',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'aclSetGroups' => array (
                                        'options' => array (
                                                'route' => 'aclSetGroups --role_groups= [--app_groups=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'aclSetGroups',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'bootstrapSingleserver' => array (
                                        'options' => array (
                                                'route' => 'bootstrapSingleserver [--production=] --adminPassword= [--applicationUrl=] [--adminEmail=] [--developerPassword=] [--orderNumber=] [--licenseKey=] --acceptEula=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'bootstrapSingleserver',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'serverStoreLicense' => array (
                                        'options' => array (
                                                'route' => 'serverStoreLicense --licenseName= --licenseValue=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'serverStoreLicense',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                // Audit
                                'auditGetList' => array (
                                        'options' => array (
                                                'route' => 'auditGetList [--limit=] [--offset=] [--order=] [--direction=] [--filter=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'auditGetList'
                                                )
                                        )
                                ),
                                'auditGetDetails' => array (
                                        'options' => array (
                                                'route' => 'auditGetDetails --auditId=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'auditGetDetails'
                                                )
                                        )
                                ),
                                'auditSetSettings' => array (
                                        'options' => array (
                                                'route' => 'auditSetSettings --history= [--email=] [--callbackUrl=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'auditSetSettings',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                // Cache
                                'cacheClear' => array (
                                        'options' => array (
                                                'route' => 'cacheClear --component=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'cacheClear',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                // Configuration Management
                                'emailSend' => array (
                                        'options' => array (
                                                'route' => 'emailSend --to= [--toName=] --from= [--fromName=] --subject= --templateName= [--templateParams=] [--headers=] [--html=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'emailSend',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'configurationExtensionsOn' => array (
                                        'options' => array (
                                                'route' => 'configurationExtensionsOn --extensions=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'configurationExtensionsOn',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'configurationExtensionsOff' => array (
                                        'options' => array (
                                                'route' => 'configurationExtensionsOff --extensions=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'configurationExtensionsOff',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'configurationValidateDirectives' => array (
                                        'options' => array (
                                                'route' => 'configurationValidateDirectives --directives=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'configurationValidateDirectives'
                                                )
                                        )
                                ),
                                'configurationStoreDirectives' => array (
                                        'options' => array (
                                                'route' => 'configurationStoreDirectives --directives=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'configurationStoreDirectives',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'configurationSearch' => array (
                                        'options' => array (
                                                'route' => 'configurationSearch --query= [--filter=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'configurationSearch'
                                                )
                                        )
                                ),
                                'configurationExtensionsList' => array (
                                        'options' => array (
                                                'route' => 'configurationExtensionsList [--type=] [--order=] [--direction=] [--filter=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'configurationExtensionsList'
                                                )
                                        )
                                ),
                                'configurationDirectivesList' => array (
                                        'options' => array (
                                                'route' => 'configurationDirectivesList [--extension=] [--daemon=] [--filter=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api'
                                                )
                                        )
                                ),

                                'configurationComponentsList' => array (
                                        'options' => array (
                                                'route' => 'configurationComponentsList [--filter=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',

                                                        'action' => 'configurationComponentsList'
                                                )
                                        )
                                ),
                                'configurationRevertChanges' => array (
                                        'options' => array (
                                                'route' => 'configurationRevertChanges --serverId= [--doRestart=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'configurationRevertChanges',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'configurationApplyChanges' => array (
                                        'options' => array (
                                                'route' => 'configurationApplyChanges --serverId=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'configurationApplyChanges',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'configurationReset' => array (
                                        'options' => array (
                                                'route' => 'configurationReset --configFile= [--ignoreSystemMismatch=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'configurationReset',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                // Deployment
                                'applicationGetDetails' => array (
                                        'options' => array (
                                                'route' => 'applicationGetDetails --application=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'applicationGetDetails'
                                                )
                                        )
                                ),
                                'redeployAllApplications' => array (
                                        'options' => array (
                                                'route' => 'redeployAllApplications [--servers=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'redeployAllApplications',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),

                                'applicationDefine' => array (
                                        'options' => array (
                                                'route' => 'applicationDefine --name= --baseUrl= [--version=] [--healthCheck=] [--logo=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'applicationDefine',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                // Filter
                                'filterGetByType' => array (
                                        'options' => array (
                                                'route' => 'filterGetByType --type=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'filterGetByType'
                                                )
                                        )
                                ),
                                'filterSave' => array (
                                        'options' => array (
                                                'route' => 'filterSave --type= --name= [--data=] [--id=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'filterSave'
                                                )
                                        )
                                ),
                                'filterDelete' => array (
                                        'options' => array (
                                                'route' => 'filterDelete --name=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'filterDelete'
                                                )
                                        )
                                ),
                                // Job Queue
                                'jobqueueStatistics' => array (
                                        'options' => array (
                                                'route' => 'jobqueueStatistics',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'jobqueueStatistics'
                                                )
                                        )
                                ),
                                'jobqueueJobsList' => array (
                                        'options' => array (
                                                'route' => 'jobqueueJobsList [--limit=] [--offset=] [--orderBy=] [--direction=] [--filter=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api'
                                                )
                                        )
                                ),
                                'jobqueueJobInfo' => array (
                                        'options' => array (
                                                'route' => 'jobqueueJobInfo --id=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'jobqueueJobInfo'
                                                )
                                        )
                                ),
                                'jobqueueDeleteJobs' => array (
                                        'options' => array (
                                                'route' => 'jobqueueDeleteJobs --jobs=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'jobqueueDeleteJobs',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'jobqueueRequeueJobs' => array (
                                        'options' => array (
                                                'route' => 'jobqueueRequeueJobs --jobs=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'jobqueueRequeueJobs',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'jobqueueListRules' => array (
                                        'options' => array (
                                                'route' => 'jobqueueListRules [--limit=] [--offset=] [--orderBy=] [--direction=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'jobqueueListRules'
                                                )
                                        )
                                ),
                                'jobqueueRuleInfo' => array (
                                        'options' => array (
                                                'route' => 'jobqueueRuleInfo [--limit=] [--offset=] [--orderBy=] [--direction=] --id=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'jobqueueRuleInfo'
                                                )
                                        )
                                ),
                                'jobqueueSaveRule' => array (
                                        'options' => array (
                                                'route' => 'jobqueueSaveRule --url= --options= [--vars=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'jobqueueSaveRule',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'jobqueueSuspendRules' => array (
                                        'options' => array (
                                                'route' => 'jobqueueSuspendRules --rules=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'jobqueueSuspendRules',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'jobqueueResumeRules' => array (
                                        'options' => array (
                                                'route' => 'jobqueueResumeRules --rules=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'jobqueueResumeRules',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'jobqueueDeleteRules' => array (
                                        'options' => array (
                                                'route' => 'jobqueueDeleteRules --rules=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'jobqueueDeleteRules',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'jobqueueRunNowRule' => array (
                                        'options' => array (
                                                'route' => 'jobqueueRunNowRule --rule=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'jobqueueRunNowRule',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                // Monitor

                                'monitorCountIssuesListPredefinedFilter' => array (
                                        'options' => array (
                                                'route' => 'monitorCountIssuesListPredefinedFilter --filterId= [--filters=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'monitorCountIssuesListPredefinedFilter'
                                                )
                                        )
                                ),

                                'getBacktraceFile' => array (
                                        'options' => array (
                                                'route' => 'getBacktraceFile --backtraceNum= --eventsGroupId=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'getBacktraceFile'
                                                )
                                        )
                                ),

                                'monitorDeleteIssuesByPredefinedFilter' => array (
                                        'options' => array (
                                                'route' => 'monitorDeleteIssuesByPredefinedFilter --filterId= [--limit=] [--offset=] [--order=] [--direction=] [--filters=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'monitorDeleteIssuesByPredefinedFilter',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'monitorDeleteIssues' => array (
                                        'options' => array (
                                                'route' => 'monitorDeleteIssues --issueIds=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'monitorDeleteIssues',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                // Monitor Rules
                                'monitorSetRuleUpdated' => array (
                                        'options' => array (
                                                'route' => 'monitorSetRuleUpdated',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'monitorSetRuleUpdated',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'monitorExportRules' => array (
                                        'options' => array (
                                                'route' => 'monitorExportRules [--applicationId=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'monitorExportRules'
                                                )
                                        )
                                ),
                                'monitorImportRules' => array (
                                        'options' => array (
                                                'route' => 'monitorImportRules --monitorRules=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api'
                                                )
                                        )
                                ),
                                'monitorGetRulesList' => array (
                                        'options' => array (
                                                'route' => 'monitorGetRulesList [--filters=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'monitorGetRulesList'
                                                )
                                        )
                                ),
                                'monitorEnableRules' => array (
                                        'options' => array (
                                                'route' => 'monitorEnableRules --rulesIds=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'monitorEnableRules',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'monitorDisableRules' => array (
                                        'options' => array (
                                                'route' => 'monitorDisableRules --rulesIds=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'monitorDisableRules',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'monitorSetRule' => array (
                                        'options' => array (
                                                'route' => 'monitorSetRule --rulesId= --ruleProperties= [--ruleConditions=] --ruleTriggers=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'monitorSetRule',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'monitorRemoveRules' => array (
                                        'options' => array (
                                                'route' => 'monitorRemoveRules --rulesIds=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'monitorRemoveRules',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                // Notification
                                'getNotifications' => array (
                                        'options' => array (
                                                'route' => 'getNotifications [--hash=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'getNotifications'
                                                )
                                        )
                                ),
                                'deleteNotification' => array (
                                        'options' => array (
                                                'route' => 'deleteNotification --type=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'deleteNotification',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'updateNotification' => array (
                                        'options' => array (
                                                'route' => 'updateNotification --type= [--repeat=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'updateNotification',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'sendNotification' => array (
                                        'options' => array (
                                                'route' => 'sendNotification --type= --ip=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'sendNotification',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                // Server & Cluster Management
                                'tasksComplete' => array (
                                        'options' => array (
                                                'route' => 'tasksComplete [--servers=] [--tasks=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'tasksComplete'
                                                )
                                        )
                                ),
                                'getServerInfo' => array (
                                        'options' => array (
                                                'route' => 'getServerInfo --serverId=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'getServerInfo'
                                                )
                                        )
                                ),

                                'clusterGetServersCount' => array (
                                        'options' => array (
                                                'route' => 'clusterGetServersCount',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'clusterGetServersCount'
                                                )
                                        )
                                ),

                                'serverAddToCluster' => array (
                                        'options' => array (
                                                'route' => 'serverAddToCluster --serverName= --dbHost= --dbUsername= --dbPassword= --nodeIp= [--failIfConnected=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api'
                                                )
                                        )
                                ),
                                'changeServerNameById' => array (
                                        'options' => array (
                                                'route' => 'changeServerNameById --serverName= --serverId=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'changeServerNameById',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'clusterForceRemoveServer' => array (
                                        'options' => array (
                                                'route' => 'clusterForceRemoveServer --serverId=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'clusterForceRemoveServer',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'restartDaemon' => array (
                                        'options' => array (
                                                'route' => 'restartDaemon --daemon= [--servers=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'restartDaemon',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'logsReadLines' => array (
                                        'options' => array (
                                                'route' => 'logsReadLines --logName= [--serverId=] [--lineToRead=] [--filter=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'logsReadLines'
                                                )
                                        )
                                ),
                                'logsGetLogfile' => array (
                                        'options' => array (
                                                'route' => 'logsGetLogfile --logName= [--serverId=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'logsGetLogfile'
                                                )
                                        )
                                ),
                                // Statistics
                                'statisticsGetSeries' => array (
                                        'options' => array (
                                                'route' => 'statisticsGetSeries --type= [--appId=] [--from=] [--to=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'statisticsGetSeries'
                                                )
                                        )
                                ),
                                'statisticsClearData' => array (
                                        'options' => array (
                                                'route' => 'statisticsClearData',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'statisticsClearData',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                // Studio integration
                                'studioStartDebugMode' => array (
                                        'options' => array (
                                                'route' => 'studioStartDebugMode --filters= [--options=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'studioStartDebugMode',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'studioStopDebugMode' => array (
                                        'options' => array (
                                                'controller' => 'ZendServerWebApi\Controller\Api',
                                                'route' => 'studioStopDebugMode',
                                                'defaults' => array (
                                                        'action' => 'studioStopDebugMode',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'studioIsDebugModeenabled' => array (
                                        'options' => array (
                                                'route' => 'studioIsDebugModeenabled',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'studioIsDebugModeenabled',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                // Page cache
                                'pagecacheListRules' => array (
                                        'options' => array (
                                                'route' => 'pagecacheListRules [--applicationsId=] [--freeText=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'pagecacheListRules'
                                                )
                                        )
                                ),
                                'pagecacheSaveRule' => array (
                                        'options' => array (
                                                'route' => 'pagecacheSaveRule [--ruleId=] --urlScheme= --urlHost= --urlPath= --matchType= --lifetime= [--compress=] [--name=] [--conditionsType=] [--conditions=] [--splitBy=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'pagecacheSaveRule',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'pagecacheSaveApplicationRule' => array (
                                        'options' => array (
                                                'route' => 'pagecacheSaveApplicationRule [--ruleId=] --urlPath= --matchType= --lifetime= [--compress=] [--name=] --applicationId [--conditionsType=] [--conditions=] [--splitBy=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'pagecacheSaveApplicationRule',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'pagecacheDeleteRules' => array (
                                        'options' => array (
                                                'route' => 'pagecacheDeleteRules [--rules=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'pagecacheListRules'
                                                )
                                        )
                                ),
                                'pagecacheRuleInfo' => array (
                                        'options' => array (
                                                'route' => 'pagecacheRuleInfo --id=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'pagecacheRuleInfo'
                                                )
                                        )
                                ),
                                'pagecacheClearCacheByRuleName' => array (
                                        'options' => array (
                                                'route' => 'pagecacheClearCacheByRuleName --ruleName=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'pagecacheClearCacheByRuleName',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'pagecacheClearRulesCache' => array (
                                        'options' => array (
                                                'route' => 'pagecacheClearRulesCache --rules=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'pagecacheClearRulesCache',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                )
                        )
                )
        )
);
