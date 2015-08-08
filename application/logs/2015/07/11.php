<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-11 00:00:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: consumer_key ~ APPPATH/classes/Controller/Welcome.php [ 14 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:14
2015-07-11 00:00:09 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 14, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:14
2015-07-11 00:00:35 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Abraham\TwitterOAuth\TwitterOAuth could not be converted to string ~ APPPATH/classes/Controller/Welcome.php [ 15 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:15
2015-07-11 00:00:35 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(15): Kohana_Core::error_handler(4096, 'Object of class...', '/Applications/X...', 15, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:15
2015-07-11 00:02:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$connection' (T_VARIABLE) ~ APPPATH/classes/Controller/Welcome.php [ 15 ] in file:line
2015-07-11 00:02:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-11 00:02:55 --- EMERGENCY: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, object given ~ APPPATH/classes/Controller/Welcome.php [ 15 ] in file:line
2015-07-11 00:02:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', '/Applications/X...', 15, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(15): json_decode(Object(Abraham\TwitterOAuth\TwitterOAuth))
#2 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-07-11 00:09:08 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Welcome.php [ 22 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:22
2015-07-11 00:09:08 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(22): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/X...', 22, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:22
2015-07-11 00:31:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/Controller/Welcome.php [ 32 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:32
2015-07-11 00:31:08 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 32, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_done()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:32
2015-07-11 00:31:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/Controller/Welcome.php [ 32 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:32
2015-07-11 00:31:20 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 32, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_done()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:32
2015-07-11 00:32:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/Controller/Welcome.php [ 32 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:32
2015-07-11 00:32:42 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 32, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_done()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:32
2015-07-11 00:34:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/Controller/Welcome.php [ 32 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:32
2015-07-11 00:34:56 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 32, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_done()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:32
2015-07-11 00:36:23 --- EMERGENCY: Abraham\TwitterOAuth\TwitterOAuthException [ 0 ]: Request timed out. ~ APPPATH/classes/Controller/twitteroauth/src/TwitterOAuth.php [ 311 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/twitteroauth/src/TwitterOAuth.php:251
2015-07-11 00:36:23 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/twitteroauth/src/TwitterOAuth.php(251): Abraham\TwitterOAuth\TwitterOAuth->request('https://api.twi...', 'POST', 'Authorization: ...', Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/twitteroauth/src/TwitterOAuth.php(134): Abraham\TwitterOAuth\TwitterOAuth->oAuthRequest('https://api.twi...', 'POST', Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(21): Abraham\TwitterOAuth\TwitterOAuth->oauth('oauth/request_t...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/twitteroauth/src/TwitterOAuth.php:251
2015-07-11 00:36:23 --- EMERGENCY: Abraham\TwitterOAuth\TwitterOAuthException [ 0 ]: Request timed out. ~ APPPATH/classes/Controller/twitteroauth/src/TwitterOAuth.php [ 311 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/twitteroauth/src/TwitterOAuth.php:251
2015-07-11 00:36:23 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/twitteroauth/src/TwitterOAuth.php(251): Abraham\TwitterOAuth\TwitterOAuth->request('https://api.twi...', 'POST', 'Authorization: ...', Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/twitteroauth/src/TwitterOAuth.php(134): Abraham\TwitterOAuth\TwitterOAuth->oAuthRequest('https://api.twi...', 'POST', Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(21): Abraham\TwitterOAuth\TwitterOAuth->oauth('oauth/request_t...', Array)
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/twitteroauth/src/TwitterOAuth.php:251
2015-07-11 00:36:32 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Welcome.php [ 32 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:32
2015-07-11 00:36:32 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(32): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/X...', 32, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_done()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:32
2015-07-11 00:46:16 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant void - assumed 'void' ~ APPPATH/classes/Controller/Welcome.php [ 14 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:14
2015-07-11 00:46:16 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(14): Kohana_Core::error_handler(8, 'Use of undefine...', '/Applications/X...', 14, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:14
2015-07-11 00:54:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: connection ~ APPPATH/classes/Controller/Welcome.php [ 15 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:15
2015-07-11 00:54:56 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 15, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:15
2015-07-11 00:55:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: connection ~ APPPATH/classes/Controller/Welcome.php [ 15 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:15
2015-07-11 00:55:45 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 15, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:15
2015-07-11 00:55:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: connection ~ APPPATH/classes/Controller/Welcome.php [ 15 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:15
2015-07-11 00:55:49 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 15, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:15
2015-07-11 00:57:16 --- EMERGENCY: ErrorException [ 2 ]: session_start(): Function spl_autoload_call() hasn't defined the class it was called for ~ APPPATH/classes/Controller/Welcome.php [ 1 ] in file:line
2015-07-11 00:57:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'session_start()...', '/Applications/X...', 1, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(1): session_start()
#2 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Core.php(511): require('/Applications/X...')
#3 [internal function]: Kohana_Core::auto_load('Controller_Welc...')
#4 [internal function]: spl_autoload_call('Controller_Welc...')
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(74): class_exists('Controller_Welc...')
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-11 00:57:36 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get() on null ~ APPPATH/classes/Controller/Welcome.php [ 20 ] in file:line
2015-07-11 00:57:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-11 01:00:12 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get() on boolean ~ APPPATH/classes/Controller/Welcome.php [ 20 ] in file:line
2015-07-11 01:00:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-11 01:02:41 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Abraham\TwitterOAuth\TwitterOAuth could not be converted to string ~ APPPATH/classes/Controller/Welcome.php [ 22 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:22
2015-07-11 01:02:41 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(22): Kohana_Core::error_handler(4096, 'Object of class...', '/Applications/X...', 22, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:22
2015-07-11 01:02:56 --- EMERGENCY: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH/classes/Controller/Welcome.php [ 21 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:21
2015-07-11 01:02:56 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(21): Kohana_Core::error_handler(4096, 'Object of class...', '/Applications/X...', 21, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:21
2015-07-11 01:08:54 --- EMERGENCY: Abraham\TwitterOAuth\TwitterOAuthException [ 0 ]: This feature is temporarily unavailable ~ APPPATH/classes/Controller/twitteroauth/src/TwitterOAuth.php [ 141 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:47
2015-07-11 01:08:54 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(47): Abraham\TwitterOAuth\TwitterOAuth->oauth('oauth/access_to...', Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_signInComplete()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:47
2015-07-11 01:11:25 --- EMERGENCY: Abraham\TwitterOAuth\TwitterOAuthException [ 0 ]: This feature is temporarily unavailable ~ APPPATH/classes/Controller/twitteroauth/src/TwitterOAuth.php [ 141 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:47
2015-07-11 01:11:25 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(47): Abraham\TwitterOAuth\TwitterOAuth->oauth('oauth/access_to...', Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_signInComplete()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:47
2015-07-11 01:11:30 --- EMERGENCY: Abraham\TwitterOAuth\TwitterOAuthException [ 0 ]: This feature is temporarily unavailable ~ APPPATH/classes/Controller/twitteroauth/src/TwitterOAuth.php [ 141 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:47
2015-07-11 01:11:30 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(47): Abraham\TwitterOAuth\TwitterOAuth->oauth('oauth/access_to...', Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_signInComplete()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:47
2015-07-11 08:06:37 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'MySQLi' at 'MODPATH/MySQLi' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/bootstrap.php:135
2015-07-11 08:06:37 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/bootstrap.php(135): Kohana_Core::modules(Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(102): require('/Applications/X...')
#2 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/bootstrap.php:135
2015-07-11 08:13:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'View_Test' not found ~ APPPATH/classes/Controller/Welcome.php [ 14 ] in file:line
2015-07-11 08:13:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-11 08:15:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'View_Test' not found ~ APPPATH/classes/Controller/Welcome.php [ 14 ] in file:line
2015-07-11 08:15:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-11 08:16:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'View_Test' not found ~ APPPATH/classes/Controller/Welcome.php [ 14 ] in file:line
2015-07-11 08:16:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-11 08:17:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'View_Test' not found ~ APPPATH/classes/Controller/Welcome.php [ 14 ] in file:line
2015-07-11 08:17:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-11 08:17:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'View_Test' not found ~ APPPATH/classes/Controller/Welcome.php [ 14 ] in file:line
2015-07-11 08:17:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-11 11:14:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: access_token ~ APPPATH/classes/Controller/Welcome.php [ 25 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:25
2015-07-11 11:14:07 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(25): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 25, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:25
2015-07-11 11:14:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: access_token ~ APPPATH/classes/Controller/Welcome.php [ 26 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:26
2015-07-11 11:14:46 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 26, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:26
2015-07-11 11:17:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Welcome.php [ 34 ] in file:line
2015-07-11 11:17:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-11 11:18:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: access_token ~ APPPATH/classes/Controller/Welcome.php [ 36 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:36
2015-07-11 11:18:54 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(36): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 36, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:36
2015-07-11 11:22:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: baseWelcome ~ APPPATH/classes/Controller/Welcome.php [ 37 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:37
2015-07-11 11:22:37 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 37, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:37
2015-07-11 12:59:26 --- EMERGENCY: Mustache_Exception_SyntaxException [ 0 ]: Unexpected closing tag: /isLoginPage ~ MODPATH/KOstache/vendor/mustache/src/Mustache/Parser.php [ 75 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/KOstache/vendor/mustache/src/Mustache/Parser.php:34
2015-07-11 12:59:26 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/KOstache/vendor/mustache/src/Mustache/Parser.php(34): Mustache_Parser->buildTree(Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/KOstache/vendor/mustache/src/Mustache/Engine.php(643): Mustache_Parser->parse(Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/KOstache/vendor/mustache/src/Mustache/Engine.php(657): Mustache_Engine->parse('<html>\n\t<head>\n...')
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/KOstache/vendor/mustache/src/Mustache/Engine.php(591): Mustache_Engine->compile('<html>\n\t<head>\n...')
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/KOstache/vendor/mustache/src/Mustache/Engine.php(511): Mustache_Engine->loadSource('<html>\n\t<head>\n...')
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/KOstache/classes/Kohana/Kostache/Layout.php(43): Mustache_Engine->loadTemplate('layout')
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(16): Kohana_Kostache_Layout->render(Object(View_LoginPage))
#7 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_login()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#13 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/KOstache/vendor/mustache/src/Mustache/Parser.php:34
2015-07-11 12:59:33 --- EMERGENCY: Mustache_Exception_SyntaxException [ 0 ]: Unexpected closing tag: /isLoginPage ~ MODPATH/KOstache/vendor/mustache/src/Mustache/Parser.php [ 75 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/KOstache/vendor/mustache/src/Mustache/Parser.php:34
2015-07-11 12:59:33 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/KOstache/vendor/mustache/src/Mustache/Parser.php(34): Mustache_Parser->buildTree(Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/KOstache/vendor/mustache/src/Mustache/Engine.php(643): Mustache_Parser->parse(Array)
#2 /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/KOstache/vendor/mustache/src/Mustache/Engine.php(657): Mustache_Engine->parse('<html>\n\t<head>\n...')
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/KOstache/vendor/mustache/src/Mustache/Engine.php(591): Mustache_Engine->compile('<html>\n\t<head>\n...')
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/KOstache/vendor/mustache/src/Mustache/Engine.php(511): Mustache_Engine->loadSource('<html>\n\t<head>\n...')
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/KOstache/classes/Kohana/Kostache/Layout.php(43): Mustache_Engine->loadTemplate('layout')
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(16): Kohana_Kostache_Layout->render(Object(View_LoginPage))
#7 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_login()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#13 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/KOstache/vendor/mustache/src/Mustache/Parser.php:34
2015-07-11 13:42:40 --- EMERGENCY: Abraham\TwitterOAuth\TwitterOAuthException [ 0 ]: This feature is temporarily unavailable ~ APPPATH/classes/Controller/twitteroauth/src/TwitterOAuth.php [ 141 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:65
2015-07-11 13:42:40 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(65): Abraham\TwitterOAuth\TwitterOAuth->oauth('oauth/access_to...', Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_signInComplete()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:65
2015-07-11 13:42:46 --- EMERGENCY: Abraham\TwitterOAuth\TwitterOAuthException [ 0 ]: This feature is temporarily unavailable ~ APPPATH/classes/Controller/twitteroauth/src/TwitterOAuth.php [ 141 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:65
2015-07-11 13:42:46 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(65): Abraham\TwitterOAuth\TwitterOAuth->oauth('oauth/access_to...', Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_signInComplete()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:65
2015-07-11 13:42:48 --- EMERGENCY: Abraham\TwitterOAuth\TwitterOAuthException [ 0 ]: This feature is temporarily unavailable ~ APPPATH/classes/Controller/twitteroauth/src/TwitterOAuth.php [ 141 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:65
2015-07-11 13:42:48 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(65): Abraham\TwitterOAuth\TwitterOAuth->oauth('oauth/access_to...', Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_signInComplete()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:65
2015-07-11 13:42:57 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Welcome.php [ 75 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:75
2015-07-11 13:42:57 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(75): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/X...', 75, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_home()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:75
2015-07-11 13:43:39 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Welcome.php [ 75 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:75
2015-07-11 13:43:39 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', '/Applications/X...', 75, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_home()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:75
2015-07-11 13:56:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Insert::into() ~ APPPATH/classes/Controller/Welcome.php [ 13 ] in file:line
2015-07-11 13:56:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-11 13:57:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_name ~ APPPATH/classes/Controller/Welcome.php [ 13 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:13
2015-07-11 13:57:09 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 13, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_lol()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:13
2015-07-11 14:01:36 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Welcome.php [ 14 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:14
2015-07-11 14:01:36 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(14): Kohana_Core::error_handler(8, 'Array to string...', '/Applications/X...', 14, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_lol()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:14
2015-07-11 14:03:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_name ~ APPPATH/classes/Controller/Welcome.php [ 92 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:92
2015-07-11 14:03:44 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(92): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 92, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_home()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php:92
2015-07-11 14:37:07 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be of the type array, string given, called in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php on line 39 and defined ~ MODPATH/database/classes/Kohana/Database/Query/Builder/Insert.php [ 83 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/database/classes/Kohana/Database/Query/Builder/Insert.php:83
2015-07-11 14:37:07 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/database/classes/Kohana/Database/Query/Builder/Insert.php(83): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Applications/X...', 83, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(39): Kohana_Database_Query_Builder_Insert->values('COMICS')
#2 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_lol()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/database/classes/Kohana/Database/Query/Builder/Insert.php:83