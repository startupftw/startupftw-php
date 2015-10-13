<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-18 00:27:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_roles_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-05-18 00:27:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 00:27:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-05-18 00:27:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 00:32:30 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'kohana.members' doesn't exist [ SHOW FULL COLUMNS FROM `members` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2015-05-18 00:32:30 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('members')
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(32): Kohana_ORM::factory('Member')
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_create()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2015-05-18 00:39:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-05-18 00:39:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 00:39:26 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_roles_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-05-18 00:39:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 00:39:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_roles_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-05-18 00:39:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 00:40:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_roles_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-05-18 00:40:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 00:41:13 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'kohana.hahas' doesn't exist [ SHOW FULL COLUMNS FROM `hahas` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2015-05-18 00:41:13 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('hahas')
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(32): Kohana_ORM::factory('haha')
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_create()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2015-05-18 00:42:15 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'kohana.hahas' doesn't exist [ SHOW FULL COLUMNS FROM `hahas` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2015-05-18 00:42:15 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('hahas')
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(32): Kohana_ORM::factory('haha')
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_create()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2015-05-18 00:44:17 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'kohana.hahas' doesn't exist [ SHOW FULL COLUMNS FROM `hahas` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2015-05-18 00:44:17 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('hahas')
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(33): Kohana_ORM->__construct()
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_create()
#7 [internal function]: Kohana_Controller->execute()
#8 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2015-05-18 00:48:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Haha_1' not found ~ APPPATH/classes/Controller/Welcome.php [ 33 ] in file:line
2015-05-18 00:48:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 00:51:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_RolesUsers' not found ~ APPPATH/classes/Controller/Welcome.php [ 33 ] in file:line
2015-05-18 00:51:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 00:52:07 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/Kohana/Response.php [ 160 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Response.php:160
2015-05-18 00:52:07 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Response.php(160): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/X...', 160, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(35): Kohana_Response->body(Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Response.php:160
2015-05-18 00:52:34 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/Kohana/Response.php [ 160 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Response.php:160
2015-05-18 00:52:34 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Response.php(160): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/X...', 160, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(35): Kohana_Response->body(Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Response.php:160
2015-05-18 00:53:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Welcome.php [ 35 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php:35
2015-05-18 00:53:11 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(35): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/X...', 35, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php:35
2015-05-18 01:34:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/classes/Controller/Welcome.php [ 34 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php:34
2015-05-18 01:34:50 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 34, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php:34
2015-05-18 01:35:07 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ SYSPATH/classes/Kohana/Response.php [ 160 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Response.php:160
2015-05-18 01:35:07 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Response.php(160): Kohana_Core::error_handler(4096, 'Object of class...', '/Applications/X...', 160, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(35): Kohana_Response->body(Object(Database_MySQL_Result))
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Response.php:160
2015-05-18 01:35:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'in' (T_STRING), expecting ';' ~ APPPATH/classes/Controller/Welcome.php [ 35 ] in file:line
2015-05-18 01:35:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 01:35:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ';' ~ APPPATH/classes/Controller/Welcome.php [ 35 ] in file:line
2015-05-18 01:35:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 01:37:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '+=' (T_PLUS_EQUAL) ~ APPPATH/classes/Controller/Welcome.php [ 37 ] in file:line
2015-05-18 01:37:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 01:37:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '.=' (T_CONCAT_EQUAL) ~ APPPATH/classes/Controller/Welcome.php [ 37 ] in file:line
2015-05-18 01:37:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 01:39:18 --- EMERGENCY: ErrorException [ 1 ]: Cannot access protected property Database_MySQL_Result::$_total_rows ~ APPPATH/classes/Controller/Welcome.php [ 39 ] in file:line
2015-05-18 01:39:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 01:42:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '*' ~ APPPATH/classes/Controller/Welcome.php [ 55 ] in file:line
2015-05-18 01:42:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 01:47:58 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::where(), called in /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php on line 37 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1849 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php:1849
2015-05-18 01:47:58 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1849): Kohana_Core::error_handler(2, 'Missing argumen...', '/Applications/X...', 1849, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(37): Kohana_ORM->where('username = user')
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php:1849
2015-05-18 03:14:27 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function __get() on null ~ APPPATH/classes/Controller/Welcome.php [ 23 ] in file:line
2015-05-18 03:14:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 03:58:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_UserProfile' not found ~ APPPATH/classes/Controller/Welcome.php [ 90 ] in file:line
2015-05-18 03:58:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 04:00:10 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`kohana`.`user_profile`, CONSTRAINT `user_profile_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`)) [ INSERT INTO `user_profile` (`first_name`) VALUES ('anubhav') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-05-18 04:00:10 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(93): Kohana_ORM->save()
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-05-18 04:03:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: firstname ~ APPPATH/classes/Controller/Welcome.php [ 93 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php:93
2015-05-18 04:03:15 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(93): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 93, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php:93
2015-05-18 04:04:03 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '10' for key 'PRIMARY' [ INSERT INTO `user_profile` (`id`, `first_name`, `last_name`, `website`, `github`, `linkedin`) VALUES ('10', 'anubhav', 'shrivastava', 'google', 'haha', 'haha') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-05-18 04:04:03 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(99): Kohana_ORM->save()
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-05-18 04:04:41 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '10' for key 'PRIMARY' [ INSERT INTO `user_profile` (`id`, `first_name`, `last_name`, `website`, `github`, `linkedin`) VALUES ('10', 'anubhav', 'shrivastava', 'google1', 'haha', 'haha') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-05-18 04:04:41 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(99): Kohana_ORM->save()
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-05-18 04:11:49 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot update userprofile model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1357 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php:99
2015-05-18 04:11:49 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(99): Kohana_ORM->update()
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php:99
2015-05-18 04:12:02 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '10' for key 'PRIMARY' [ INSERT INTO `user_profile` (`id`, `first_name`, `last_name`, `website`, `github`, `linkedin`) VALUES ('10', 'anubhav', 'shrivastava', 'google1', 'haha', 'haha') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-05-18 04:12:02 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(99): Kohana_ORM->save()
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-05-18 04:49:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: success ~ APPPATH/classes/Controller/Welcome.php [ 19 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php:19
2015-05-18 04:49:50 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 19, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php:19
2015-05-18 04:49:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH/classes/Controller/Welcome.php [ 12 ] in file:line
2015-05-18 04:49:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 05:25:07 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '10' for key 'PRIMARY' [ INSERT INTO `user_profile` (`id`, `first_name`, `last_name`, `website`, `github`, `linkedin`) VALUES ('10', 'anubhav', 'shrivastava', 'google1', 'haha', 'haha') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-05-18 05:25:07 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(99): Kohana_ORM->save()
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-05-18 08:09:56 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_UserProfile::_get() ~ APPPATH/classes/Controller/Welcome.php [ 126 ] in file:line
2015-05-18 08:09:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 08:10:16 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_UserProfile::count() ~ APPPATH/classes/Controller/Welcome.php [ 126 ] in file:line
2015-05-18 08:10:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 08:10:49 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::__get() ~ APPPATH/classes/Controller/Welcome.php [ 126 ] in file:line
2015-05-18 08:10:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line