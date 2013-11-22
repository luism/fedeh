<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-15 16:20:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 12 ] in /var/www/fedeh/application/views/login.php:12
2013-11-15 16:20:52 --- DEBUG: #0 /var/www/fedeh/application/views/login.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/fedeh/...', 12, Array)
#1 /var/www/fedeh/system/classes/Kohana/View.php(61): include('/var/www/fedeh/...')
#2 /var/www/fedeh/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/fedeh/...', Array)
#3 /var/www/fedeh/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/fedeh/application/views/template/login.php(28): Kohana_View->__toString()
#5 /var/www/fedeh/system/classes/Kohana/View.php(61): include('/var/www/fedeh/...')
#6 /var/www/fedeh/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/fedeh/...', Array)
#7 /var/www/fedeh/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/fedeh/application/classes/Controller/Template/Base.php(40): Kohana_Controller_Template->after()
#9 /var/www/fedeh/system/classes/Kohana/Controller.php(87): Controller_Template_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/fedeh/site/index.php(109): Kohana_Request->execute()
#15 {main} in /var/www/fedeh/application/views/login.php:12
2013-11-15 16:35:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/Controller/Login.php [ 42 ] in file:line
2013-11-15 16:35:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-15 16:43:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/login.php [ 23 ] in file:line
2013-11-15 16:43:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-15 16:54:54 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in /var/www/fedeh/modules/auth/classes/Kohana/Auth/File.php:40
2013-11-15 16:54:54 --- DEBUG: #0 /var/www/fedeh/modules/auth/classes/Kohana/Auth/File.php(40): Kohana_Auth->hash('123')
#1 /var/www/fedeh/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_File->_login('luis', '123', false)
#2 /var/www/fedeh/application/classes/Controller/Login.php(25): Kohana_Auth->login('luis', '123', false)
#3 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/fedeh/site/index.php(109): Kohana_Request->execute()
#9 {main} in /var/www/fedeh/modules/auth/classes/Kohana/Auth/File.php:40
2013-11-15 17:06:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in file:line
2013-11-15 17:06:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-15 17:08:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in file:line
2013-11-15 17:08:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-15 17:12:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in file:line
2013-11-15 17:12:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-15 17:12:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in file:line
2013-11-15 17:12:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-15 17:15:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'DATE' not found ~ APPPATH/config/fedeh.php [ 6 ] in file:line
2013-11-15 17:15:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-15 17:45:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'DATE' not found ~ APPPATH/config/fedeh.php [ 6 ] in file:line
2013-11-15 17:45:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-15 17:46:41 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'YEAR' ~ APPPATH/config/fedeh.php [ 6 ] in file:line
2013-11-15 17:46:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line