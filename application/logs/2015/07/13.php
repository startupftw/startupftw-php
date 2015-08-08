<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-13 03:49:44 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `users` (`user_name`, `twitter_handle`, `pic_url`) VALUES ('kabandi saikia', 'kabandisaikia', 'https://pbs.twimg.com/profile_images/610908437845704704/cNTCaZOM_normal.jpg') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/database/classes/Kohana/Database/Query.php:251
2015-07-13 03:49:44 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/startupftw/application/classes/Controller/Welcome.php(94): Kohana_Database_Query->execute()
#2 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_home()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/XAMPP/xamppfiles/htdocs/startupftw/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/XAMPP/xamppfiles/htdocs/startupftw/index.php(118): Kohana_Request->execute()
#8 {main} in /Applications/XAMPP/xamppfiles/htdocs/startupftw/modules/database/classes/Kohana/Database/Query.php:251