<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.0.18.10';

// Database
$Configuration['Database']['Name'] = 'vanilla_prod';
$Configuration['Database']['Host'] = 'localhost';
$Configuration['Database']['User'] = 'chiko';
$Configuration['Database']['Password'] = '2christc';

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledPlugins
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';
$Configuration['EnabledPlugins']['BulkEdit'] = TRUE;
$Configuration['EnabledPlugins']['StopForumSpam'] = TRUE;
$Configuration['EnabledPlugins']['VanillaStats'] = TRUE;
$Configuration['EnabledPlugins']['Gravatar'] = TRUE;
$Configuration['EnabledPlugins']['ReportSpam'] = TRUE;
$Configuration['EnabledPlugins']['BotStop'] = TRUE;
$Configuration['EnabledPlugins']['Akismet'] = TRUE;
$Configuration['EnabledPlugins']['Cleanser'] = TRUE;

// Garden
$Configuration['Garden']['Title'] = 'Vanilla 2';
$Configuration['Garden']['Cookie']['Salt'] = 'UHW0IN31AD';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = '1';
$Configuration['Garden']['Registration']['Method'] = 'Captcha';
$Configuration['Garden']['Registration']['ConfirmEmailRole'] = '33';
$Configuration['Garden']['Registration']['CaptchaPrivateKey'] = '6LezUggTAAAAAFs0Of5WQBZn7TUCiLYkVxp8wGAM';
$Configuration['Garden']['Registration']['CaptchaPublicKey'] = '6LezUggTAAAAAJlmdQfvSw37Dv7FzR-H4JzB32dK';
$Configuration['Garden']['Registration']['InviteExpiration'] = '-1 week';
$Configuration['Garden']['Registration']['InviteRoles']['8'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['32'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['16'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['33'] = '0';
$Configuration['Garden']['Email']['SupportName'] = 'Vanilla 2';
$Configuration['Garden']['Version'] = '2.0.18.10';
$Configuration['Garden']['RewriteUrls'] = TRUE;
$Configuration['Garden']['CanProcessImages'] = TRUE;
$Configuration['Garden']['Installed'] = TRUE;
$Configuration['Garden']['InstallationID'] = '7589-EE12D023-7467F596';
$Configuration['Garden']['InstallationSecret'] = '29fe020d1e0d3a815b2ce67dbab27e1129c719b7';
$Configuration['Garden']['Theme'] = 'apptastic';
$Configuration['Garden']['Errors']['MasterView'] = 'deverror.master.php';
$Configuration['Garden']['InputFormatter'] = 'Html';
$Configuration['Garden']['Embed']['Allow'] = TRUE;
$Configuration['Garden']['Embed']['RemoteUrl'] = 'http://freedomfone.org/forum';

// Modules
$Configuration['Modules']['Vanilla']['Content'] = 'a:6:{i:0;s:13:"MessageModule";i:1;s:7:"Notices";i:2;s:21:"NewConversationModule";i:3;s:19:"NewDiscussionModule";i:4;s:7:"Content";i:5;s:3:"Ads";}';
$Configuration['Modules']['Conversations']['Content'] = 'a:6:{i:0;s:13:"MessageModule";i:1;s:7:"Notices";i:2;s:21:"NewConversationModule";i:3;s:19:"NewDiscussionModule";i:4;s:7:"Content";i:5;s:3:"Ads";}';

// Plugins
$Configuration['Plugins']['EmbedVanilla']['RemoteUrl'] = 'http://freedomfone.org/forum';
$Configuration['Plugins']['EmbedVanilla']['ForceRemoteUrl'] = '1';
$Configuration['Plugins']['EmbedVanilla']['EmbedDashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Plugins'] = '1';
$Configuration['Plugins']['GettingStarted']['Discussion'] = '1';
$Configuration['Plugins']['GettingStarted']['Registration'] = '1';
$Configuration['Plugins']['GettingStarted']['Profile'] = '1';
$Configuration['Plugins']['GettingStarted']['Categories'] = '1';
$Configuration['Plugins']['BotStop']['Question'] = 'If there are 12 apples and you take away 8, how many do you have?';
$Configuration['Plugins']['BotStop']['Answer1'] = '4';
$Configuration['Plugins']['BotStop']['Answer2'] = 'four';
$Configuration['Plugins']['StopForumSpam']['UserID'] = '440';
$Configuration['Plugins']['BulkEdit']['UserIDs'] = '["1810","1809","1813","1815","1812","1807","1808","1804"]';
$Configuration['Plugins']['BulkEdit']['RoleIDs'] = array('33');
$Configuration['Plugins']['ReportSpam']['APIKey'] = 'm1zqpx0nju32w5';
$Configuration['Plugins']['Akismet']['UserID'] = '1801';
$Configuration['Plugins']['Akismet']['Key'] = '999561fbec75';
$Configuration['Plugins']['Akismet']['Server'] = '';
$Configuration['Plugins']['Cleanser']['Action'] = 'create';
$Configuration['Plugins']['Cleanser']['MaxRecords'] = '500';
$Configuration['Plugins']['Cleanser']['Offset'] = '';
$Configuration['Plugins']['Cleanser']['RoleSet'] = '1';
$Configuration['Plugins']['Cleanser']['IPAddress'] = '';
$Configuration['Plugins']['Cleanser']['PatternMatch'] = '';

// Routes
$Configuration['Routes']['DefaultController'] = 'discussions';

// Vanilla
$Configuration['Vanilla']['Version'] = '2.0.18.10';
$Configuration['Vanilla']['Discussion']['SpamCount'] = '3';
$Configuration['Vanilla']['Discussion']['SpamTime'] = '60';
$Configuration['Vanilla']['Discussion']['SpamLock'] = '120';
$Configuration['Vanilla']['Comment']['SpamCount'] = '3';
$Configuration['Vanilla']['Comment']['SpamTime'] = '60';
$Configuration['Vanilla']['Comment']['SpamLock'] = '120';
$Configuration['Vanilla']['Comment']['MaxLength'] = '8000';

// Last edited by bren (169.239.24.214)2016-08-16 14:18:51