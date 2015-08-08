<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-28 09:13:58 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Api.php [ 8 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:8
2015-07-28 09:13:58 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(8): Kohana_Core::error_handler(4096, 'Object of class...', '/Applications/X...', 8, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Api->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:8
2015-07-28 09:15:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/Controller/Api.php [ 10 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:10
2015-07-28 09:15:57 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(10): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 10, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Api->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:10
2015-07-28 09:17:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/Controller/Api.php [ 11 ] in file:line
2015-07-28 09:17:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-28 09:21:59 --- EMERGENCY: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH/database/classes/Kohana/Database/MySQL/Result.php [ 33 ] in file:line
2015-07-28 09:21:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', '/Applications/X...', 33, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/database/classes/Kohana/Database/MySQL/Result.php(33): mysql_data_seek(Resource id #77, 'follow_tags')
#2 /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/database/classes/Kohana/Database/Result.php(240): Kohana_Database_MySQL_Result->seek('follow_tags')
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(31): Kohana_Database_Result->offsetGet('follow_tags')
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(11): Controller_Api->getUserTopicList(Array)
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Api->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#8 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-07-28 09:29:34 --- EMERGENCY: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, object given ~ APPPATH/classes/Controller/Api.php [ 36 ] in file:line
2015-07-28 09:29:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', '/Applications/X...', 36, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(36): array_push(Object(Database_MySQL_Result), Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(11): Controller_Api->getUserTopicList(Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Api->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-28 09:41:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: action ~ APPPATH/classes/Controller/Api.php [ 16 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:16
2015-07-28 09:41:25 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 16, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Api->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:16
2015-07-28 09:42:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: action ~ APPPATH/classes/Controller/Api.php [ 16 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:16
2015-07-28 09:42:10 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 16, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Api->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:16
2015-07-28 09:43:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: action ~ APPPATH/classes/Controller/Api.php [ 16 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:16
2015-07-28 09:43:50 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 16, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Api->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:16
2015-07-28 09:45:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH/classes/Controller/Api.php [ 18 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:18
2015-07-28 09:45:00 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 18, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Api->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:18
2015-07-28 09:50:47 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Api.php [ 46 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:46
2015-07-28 09:50:47 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(46): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Applications/X...', 46, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(18): Controller_Api->updateUserTopicList(Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Api->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:46
2015-07-28 09:51:13 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Api.php [ 46 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:46
2015-07-28 09:51:13 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(46): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Applications/X...', 46, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(18): Controller_Api->updateUserTopicList(Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Api->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:46
2015-07-28 09:51:45 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Api.php [ 46 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:46
2015-07-28 09:51:45 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(46): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Applications/X...', 46, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(18): Controller_Api->updateUserTopicList(Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Api->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:46
2015-07-28 09:52:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$selected_tags' (T_VARIABLE) ~ APPPATH/classes/Controller/Api.php [ 46 ] in file:line
2015-07-28 09:52:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-28 09:57:02 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Api.php [ 46 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:46
2015-07-28 09:57:02 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(46): Kohana_Core::error_handler(8, 'Trying to get p...', '/Applications/X...', 46, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(18): Controller_Api->updateUserTopicList(Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Api->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:46
2015-07-28 10:42:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''$x\',true);;//$selected_tags;' (T_CONSTANT_ENCAPSED_STRING), expecting identifier (T_STRING) ~ APPPATH/classes/Controller/Api.php [ 48 ] in file:line
2015-07-28 10:42:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-28 10:42:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''$x\\'' (T_CONSTANT_ENCAPSED_STRING), expecting identifier (T_STRING) ~ APPPATH/classes/Controller/Api.php [ 48 ] in file:line
2015-07-28 10:42:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-28 10:43:37 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Api.php [ 48 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:48
2015-07-28 10:43:37 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(48): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/X...', 48, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(18): Controller_Api->updateUserTopicList(Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Api->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:48
2015-07-28 10:43:59 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Api.php [ 48 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:48
2015-07-28 10:43:59 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(48): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/X...', 48, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(18): Controller_Api->updateUserTopicList(Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Api->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:48
2015-07-28 10:44:50 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Api.php [ 48 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:48
2015-07-28 10:44:50 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(48): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/X...', 48, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(18): Controller_Api->updateUserTopicList(Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Api->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:48
2015-07-28 10:45:13 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Api.php [ 48 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:48
2015-07-28 10:45:13 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(48): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/X...', 48, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(18): Controller_Api->updateUserTopicList(Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Api->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:48
2015-07-28 10:49:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$execute ~ APPPATH/classes/Controller/Api.php [ 51 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:51
2015-07-28 10:49:07 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(51): Kohana_Core::error_handler(8, 'Undefined prope...', '/Applications/X...', 51, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(18): Controller_Api->updateUserTopicList(Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Api->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:51
2015-07-28 10:49:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Update::values() ~ APPPATH/classes/Controller/Api.php [ 56 ] in file:line
2015-07-28 10:49:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-28 10:53:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Api.php [ 56 ] in file:line
2015-07-28 10:53:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-28 10:53:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Api.php [ 56 ] in file:line
2015-07-28 10:53:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line