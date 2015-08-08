<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-03 07:10:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: action ~ APPPATH/classes/Controller/Api.php [ 6 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:6
2015-08-03 07:10:26 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php(6): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 6, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Api->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Api.php:6