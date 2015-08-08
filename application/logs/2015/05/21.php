<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-21 22:22:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/Controller/Welcome.php [ 67 ] in /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php:67
2015-05-21 22:22:59 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php(67): Kohana_Core::error_handler(8, 'Undefined index...', '/Applications/X...', 67, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/XAMPP/xamppfiles/htdocs/kohana/application/classes/Controller/Welcome.php:67