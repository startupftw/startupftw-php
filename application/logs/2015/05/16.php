<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-16 02:55:10 --- EMERGENCY: ErrorException [ 1 ]: Non-static method Kohana_Database_Query::__construct() cannot be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Welcome.php [ 11 ] in file:line
2015-05-16 02:55:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-16 02:55:36 --- EMERGENCY: ErrorException [ 1 ]: Non-static method Kohana_Database_Query::__construct() cannot be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Welcome.php [ 11 ] in file:line
2015-05-16 02:55:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-16 02:56:59 --- EMERGENCY: ErrorException [ 1 ]: Non-static method Kohana_Database::__construct() cannot be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Welcome.php [ 13 ] in file:line
2015-05-16 02:56:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-16 02:57:11 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database::__construct(), called in /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php on line 13 and defined ~ MODPATH/database/classes/Kohana/Database.php [ 111 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database.php:111
2015-05-16 02:57:11 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database.php(111): Kohana_Core::error_handler(2, 'Missing argumen...', '/Applications/X...', 111, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(13): Kohana_Database->__construct()
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database.php:111
2015-05-16 03:05:25 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'test.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2015-05-16 03:05:25 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(12): Kohana_ORM::factory('user')
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2015-05-16 03:05:50 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'kohana.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2015-05-16 03:05:50 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(12): Kohana_ORM::factory('user')
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2015-05-16 03:06:09 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'kohana.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2015-05-16 03:06:09 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(12): Kohana_ORM->__construct()
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2015-05-16 07:39:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Welcome.php [ 17 ] in file:line
2015-05-16 07:39:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-16 07:39:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Welcome.php [ 17 ] in file:line
2015-05-16 07:39:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-16 07:39:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Welcome.php [ 17 ] in file:line
2015-05-16 07:39:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-16 07:41:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Welcome.php [ 16 ] in file:line
2015-05-16 07:41:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-16 07:41:15 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php:1302
2015-05-16 07:41:15 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->create(Object(Validation))
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(16): Model_Auth_User->create_user(Array, Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php:1302
2015-05-16 07:45:32 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php:1302
2015-05-16 07:45:32 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->create(Object(Validation))
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(16): Model_Auth_User->create_user(Array, Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php:1302
2015-05-16 07:48:48 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php:1302
2015-05-16 07:48:48 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->create(Object(Validation))
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(16): Model_Auth_User->create_user(Array, Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php:1302
2015-05-16 07:53:26 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php:1302
2015-05-16 07:53:26 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->create(Object(Validation))
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(13): Model_Auth_User->create_user(Array, Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php:1302
2015-05-16 07:54:02 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php:1302
2015-05-16 07:54:02 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->create(Object(Validation))
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(13): Model_Auth_User->create_user(Array, Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php:1302
2015-05-16 07:56:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: cred ~ APPPATH/classes/Controller/Welcome.php [ 23 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php:23
2015-05-16 07:56:46 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 23, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php:23
2015-05-16 07:56:59 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in file:line
2015-05-16 07:56:59 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('password')
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1210): call_user_func_array(Array, Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(732): Kohana_ORM->run_filter('password', 'password')
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('password', 'password')
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(804): Kohana_ORM->__set('password', 'password')
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->values(Array, Array)
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(24): Model_Auth_User->create_user(Array, Array)
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2015-05-16 08:15:09 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'abcdebug-test@example.com' for key 'PRIMARY' [ INSERT INTO `users` (`username`, `password`, `email`) VALUES ('abcdebug', 'f2b00f8f50a4aaa51dfb23a942090798985cb4e170d776816e625118410bed9e', 'test@example.com') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-05-16 08:15:09 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->create(Object(Validation))
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(24): Model_Auth_User->create_user(Array, Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-05-16 08:26:13 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'user-anubhav@g.com' for key 'PRIMARY' [ INSERT INTO `users` (`username`, `password`, `email`) VALUES ('user', '35f07d0492106d98776897764ca363770c919ca0fc8fa804806929b2c9fef888', 'anubhav@g.com') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-05-16 08:26:13 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->create(Object(Validation))
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(37): Model_Auth_User->create_user(Array, Array)
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-05-16 08:27:51 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'user-anubhav@g.com' for key 'PRIMARY' [ INSERT INTO `users` (`username`, `password`, `email`) VALUES ('user', '35f07d0492106d98776897764ca363770c919ca0fc8fa804806929b2c9fef888', 'anubhav@g.com') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-05-16 08:27:51 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(45): Kohana_ORM->save()
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-05-16 08:30:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: password ~ APPPATH/classes/Controller/Welcome.php [ 38 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php:38
2015-05-16 08:30:50 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(38): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 38, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php:38
2015-05-16 08:31:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: _PUT ~ APPPATH/classes/Controller/Welcome.php [ 37 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php:37
2015-05-16 08:31:05 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 37, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php:37
2015-05-16 08:31:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: command ~ APPPATH/classes/Controller/Welcome.php [ 31 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php:31
2015-05-16 08:31:40 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 31, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php:31
2015-05-16 08:36:16 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'kohana.roles' doesn't exist [ SHOW FULL COLUMNS FROM `roles` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2015-05-16 08:36:16 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('roles')
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM::factory('Role', Array)
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('anubhav@g.com', 'Test1234', false)
#8 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(35): Kohana_Auth->login('anubhav@g.com', 'Test1234')
#9 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_create()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2015-05-16 08:36:49 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'kohana.roles' doesn't exist [ SHOW FULL COLUMNS FROM `roles` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2015-05-16 08:36:49 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('roles')
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM::factory('Role', Array)
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('anubhav@g.com', 'Test1234', false)
#8 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(35): Kohana_Auth->login('anubhav@g.com', 'Test1234')
#9 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_create()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2015-05-16 08:39:33 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'kohana.roles' doesn't exist [ SHOW FULL COLUMNS FROM `roles` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2015-05-16 08:39:33 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('roles')
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM::factory('Role', Array)
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('anubhav@g.com', 'Test1234', false)
#8 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(11): Kohana_Auth->login('anubhav@g.com', 'Test1234')
#9 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2015-05-16 09:04:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'ORM_Auth' not found ~ APPPATH/classes/Controller/Welcome.php [ 11 ] in file:line
2015-05-16 09:04:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-16 09:04:18 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'kohana.roles' doesn't exist [ SHOW FULL COLUMNS FROM `roles` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2015-05-16 09:04:18 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('roles')
#2 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM::factory('Role', Array)
#7 /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('anubhav@g.com', 'Test1234', false)
#8 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(11): Kohana_Auth->login('anubhav@g.com', 'Test1234')
#9 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2015-05-16 09:08:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/Controller/Welcome.php [ 11 ] in file:line
2015-05-16 09:08:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-16 09:08:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: token ~ APPPATH/classes/Controller/Welcome.php [ 10 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php:10
2015-05-16 09:08:10 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 10, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php:10