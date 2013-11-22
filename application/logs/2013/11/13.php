<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-13 12:48:35 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /var/www/fedeh/system/classes/Kohana/Cookie.php:67
2013-11-13 12:48:35 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('_session_id', NULL)
#1 /var/www/fedeh/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('_session_id')
#2 /var/www/fedeh/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/fedeh/system/classes/Kohana/Cookie.php:67
2013-11-13 12:53:24 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /var/www/fedeh/system/classes/Kohana/Cookie.php:67
2013-11-13 12:53:24 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('_session_id', NULL)
#1 /var/www/fedeh/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('_session_id')
#2 /var/www/fedeh/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/fedeh/system/classes/Kohana/Cookie.php:67
2013-11-13 15:21:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_Base' not found ~ APPPATH/classes/Controller/Login.php [ 2 ] in file:line
2013-11-13 15:21:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-13 15:21:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_Base' not found ~ APPPATH/classes/Controller/Login.php [ 2 ] in file:line
2013-11-13 15:21:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-13 15:21:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_Base' not found ~ APPPATH/classes/Controller/Login.php [ 2 ] in file:line
2013-11-13 15:21:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-13 15:21:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_Base' not found ~ APPPATH/classes/Controller/Login.php [ 2 ] in file:line
2013-11-13 15:21:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-13 15:21:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_Base' not found ~ APPPATH/classes/Controller/Login.php [ 2 ] in file:line
2013-11-13 15:21:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-13 15:21:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_Base' not found ~ APPPATH/classes/Controller/Login.php [ 2 ] in file:line
2013-11-13 15:21:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-13 15:21:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_Base' not found ~ APPPATH/classes/Controller/Login.php [ 2 ] in file:line
2013-11-13 15:21:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-13 15:22:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_Base' not found ~ APPPATH/classes/Controller/Login.php [ 2 ] in file:line
2013-11-13 15:22:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-13 15:22:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_Base' not found ~ APPPATH/classes/Controller/Login.php [ 2 ] in file:line
2013-11-13 15:22:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-13 15:22:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_Base' not found ~ APPPATH/classes/Controller/Login.php [ 2 ] in file:line
2013-11-13 15:22:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-13 15:22:43 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/website could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-13 15:22:43 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template/websit...')
#1 /var/www/fedeh/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/websit...', NULL)
#2 /var/www/fedeh/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template/websit...')
#3 /var/www/fedeh/application/classes/Controller/Template/Base.php(13): Kohana_Controller_Template->before()
#4 /var/www/fedeh/system/classes/Kohana/Controller.php(69): Controller_Template_Base->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/fedeh/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-13 15:24:26 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Login.php [ 7 ] in /var/www/fedeh/application/classes/Controller/Login.php:7
2013-11-13 15:24:26 --- DEBUG: #0 /var/www/fedeh/application/classes/Controller/Login.php(7): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/fedeh/...', 7, Array)
#1 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/fedeh/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/fedeh/application/classes/Controller/Login.php:7
2013-11-13 15:25:37 --- EMERGENCY: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-13 15:25:37 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('login')
#1 /var/www/fedeh/system/classes/Kohana/View.php(30): Kohana_View->__construct('login', NULL)
#2 /var/www/fedeh/application/classes/Controller/Login.php(9): Kohana_View::factory('login')
#3 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/fedeh/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-13 15:27:35 --- EMERGENCY: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-13 15:27:35 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('login')
#1 /var/www/fedeh/system/classes/Kohana/View.php(30): Kohana_View->__construct('login', NULL)
#2 /var/www/fedeh/application/classes/Controller/Login.php(9): Kohana_View::factory('login')
#3 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/fedeh/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-13 15:27:36 --- EMERGENCY: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-13 15:27:36 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('login')
#1 /var/www/fedeh/system/classes/Kohana/View.php(30): Kohana_View->__construct('login', NULL)
#2 /var/www/fedeh/application/classes/Controller/Login.php(9): Kohana_View::factory('login')
#3 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/fedeh/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-13 15:28:48 --- EMERGENCY: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-13 15:28:48 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('login')
#1 /var/www/fedeh/system/classes/Kohana/View.php(30): Kohana_View->__construct('login', NULL)
#2 /var/www/fedeh/application/classes/Controller/Login.php(9): Kohana_View::factory('login')
#3 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/fedeh/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-13 15:28:49 --- EMERGENCY: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-13 15:28:49 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('login')
#1 /var/www/fedeh/system/classes/Kohana/View.php(30): Kohana_View->__construct('login', NULL)
#2 /var/www/fedeh/application/classes/Controller/Login.php(9): Kohana_View::factory('login')
#3 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/fedeh/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-13 15:28:59 --- EMERGENCY: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-13 15:28:59 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('login')
#1 /var/www/fedeh/system/classes/Kohana/View.php(30): Kohana_View->__construct('login', NULL)
#2 /var/www/fedeh/application/classes/Controller/Login.php(9): Kohana_View::factory('login')
#3 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/fedeh/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-13 15:29:00 --- EMERGENCY: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-13 15:29:00 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('login')
#1 /var/www/fedeh/system/classes/Kohana/View.php(30): Kohana_View->__construct('login', NULL)
#2 /var/www/fedeh/application/classes/Controller/Login.php(9): Kohana_View::factory('login')
#3 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/fedeh/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-13 15:29:00 --- EMERGENCY: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-13 15:29:00 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('login')
#1 /var/www/fedeh/system/classes/Kohana/View.php(30): Kohana_View->__construct('login', NULL)
#2 /var/www/fedeh/application/classes/Controller/Login.php(9): Kohana_View::factory('login')
#3 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/fedeh/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-13 15:29:01 --- EMERGENCY: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-13 15:29:01 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('login')
#1 /var/www/fedeh/system/classes/Kohana/View.php(30): Kohana_View->__construct('login', NULL)
#2 /var/www/fedeh/application/classes/Controller/Login.php(9): Kohana_View::factory('login')
#3 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/fedeh/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-13 15:29:17 --- EMERGENCY: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-13 15:29:17 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('login')
#1 /var/www/fedeh/system/classes/Kohana/View.php(30): Kohana_View->__construct('login', NULL)
#2 /var/www/fedeh/application/classes/Controller/Login.php(9): Kohana_View::factory('login')
#3 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/fedeh/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-13 15:29:18 --- EMERGENCY: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-13 15:29:18 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('login')
#1 /var/www/fedeh/system/classes/Kohana/View.php(30): Kohana_View->__construct('login', NULL)
#2 /var/www/fedeh/application/classes/Controller/Login.php(9): Kohana_View::factory('login')
#3 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/fedeh/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/fedeh/system/classes/Kohana/View.php:137