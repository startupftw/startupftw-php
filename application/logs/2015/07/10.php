<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-10 23:38:35 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant newpwd - assumed 'newpwd' ~ MODPATH/database/config/database.php [ 24 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/database/config/database.php:24
2015-07-10 23:38:35 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/database/config/database.php(24): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/X...', 24, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Core.php(829): include('/Applications/X...')
#2 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/Applications/X...')
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(11): Kohana_Database_Query->execute()
#7 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#13 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/database/config/database.php:24
2015-07-10 23:38:52 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Welcome.php [ 12 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:12
2015-07-10 23:38:52 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(12): Kohana_Core::error_handler(4096, 'Object of class...', '/Applications/X...', 12, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:12
2015-07-10 23:39:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/Controller/Welcome.php [ 12 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:12
2015-07-10 23:39:00 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/Applications/X...', 12, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:12
2015-07-10 23:39:06 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Welcome.php [ 12 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:12
2015-07-10 23:39:06 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(12): Kohana_Core::error_handler(8, 'Trying to get p...', '/Applications/X...', 12, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:12
2015-07-10 23:39:11 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Welcome.php [ 12 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:12
2015-07-10 23:39:11 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(12): Kohana_Core::error_handler(8, 'Trying to get p...', '/Applications/X...', 12, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:12
2015-07-10 23:57:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$consumer_key' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Welcome.php [ 6 ] in file:line
2015-07-10 23:57:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-10 23:57:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$consumer_key' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Welcome.php [ 6 ] in file:line
2015-07-10 23:57:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-10 23:58:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'TwitterOAuth' not found ~ APPPATH/classes/Controller/Welcome.php [ 13 ] in file:line
2015-07-10 23:58:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-10 23:59:33 --- EMERGENCY: ErrorException [ 1 ]: Class 'TwitterOAuth' not found ~ APPPATH/classes/Controller/Welcome.php [ 13 ] in file:line
2015-07-10 23:59:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line