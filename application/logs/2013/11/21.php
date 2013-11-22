<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-21 16:23:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH/classes/Controller/Account.php [ 62 ] in file:line
2013-11-21 16:23:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-21 16:25:46 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Account.php [ 119 ] in /var/www/fedeh/application/classes/Controller/Account.php:119
2013-11-21 16:25:46 --- DEBUG: #0 /var/www/fedeh/application/classes/Controller/Account.php(119): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/fedeh/...', 119, Array)
#1 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Account->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#4 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/fedeh/site/index.php(109): Kohana_Request->execute()
#7 {main} in /var/www/fedeh/application/classes/Controller/Account.php:119
2013-11-21 17:03:24 --- EMERGENCY: View_Exception [ 0 ]: The requested view account/create could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-21 17:03:24 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('account/create')
#1 /var/www/fedeh/system/classes/Kohana/View.php(30): Kohana_View->__construct('account/create', NULL)
#2 /var/www/fedeh/application/classes/Controller/Account.php(122): Kohana_View::factory('account/create')
#3 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Account->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/fedeh/site/index.php(109): Kohana_Request->execute()
#9 {main} in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-21 17:03:49 --- EMERGENCY: View_Exception [ 0 ]: The requested view create could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-21 17:03:49 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('create')
#1 /var/www/fedeh/system/classes/Kohana/View.php(30): Kohana_View->__construct('create', NULL)
#2 /var/www/fedeh/application/classes/Controller/Account.php(122): Kohana_View::factory('create')
#3 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Account->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/fedeh/site/index.php(109): Kohana_Request->execute()
#9 {main} in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-21 17:03:50 --- EMERGENCY: View_Exception [ 0 ]: The requested view create could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-21 17:03:50 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('create')
#1 /var/www/fedeh/system/classes/Kohana/View.php(30): Kohana_View->__construct('create', NULL)
#2 /var/www/fedeh/application/classes/Controller/Account.php(122): Kohana_View::factory('create')
#3 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Account->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/fedeh/site/index.php(109): Kohana_Request->execute()
#9 {main} in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-21 17:03:51 --- EMERGENCY: View_Exception [ 0 ]: The requested view create could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-21 17:03:51 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('create')
#1 /var/www/fedeh/system/classes/Kohana/View.php(30): Kohana_View->__construct('create', NULL)
#2 /var/www/fedeh/application/classes/Controller/Account.php(122): Kohana_View::factory('create')
#3 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Account->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/fedeh/site/index.php(109): Kohana_Request->execute()
#9 {main} in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-21 17:04:07 --- EMERGENCY: View_Exception [ 0 ]: The requested view create could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-21 17:04:07 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('create')
#1 /var/www/fedeh/system/classes/Kohana/View.php(30): Kohana_View->__construct('create', NULL)
#2 /var/www/fedeh/application/classes/Controller/Account.php(122): Kohana_View::factory('create')
#3 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Account->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/fedeh/site/index.php(109): Kohana_Request->execute()
#9 {main} in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-21 17:04:08 --- EMERGENCY: View_Exception [ 0 ]: The requested view create could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-21 17:04:08 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('create')
#1 /var/www/fedeh/system/classes/Kohana/View.php(30): Kohana_View->__construct('create', NULL)
#2 /var/www/fedeh/application/classes/Controller/Account.php(122): Kohana_View::factory('create')
#3 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Account->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/fedeh/site/index.php(109): Kohana_Request->execute()
#9 {main} in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-21 17:04:36 --- EMERGENCY: View_Exception [ 0 ]: The requested view create could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-21 17:04:36 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('create')
#1 /var/www/fedeh/system/classes/Kohana/View.php(30): Kohana_View->__construct('create', NULL)
#2 /var/www/fedeh/application/classes/Controller/Account.php(122): Kohana_View::factory('create')
#3 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Account->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/fedeh/site/index.php(109): Kohana_Request->execute()
#9 {main} in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-21 17:04:37 --- EMERGENCY: View_Exception [ 0 ]: The requested view create could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-21 17:04:37 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('create')
#1 /var/www/fedeh/system/classes/Kohana/View.php(30): Kohana_View->__construct('create', NULL)
#2 /var/www/fedeh/application/classes/Controller/Account.php(122): Kohana_View::factory('create')
#3 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Account->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/fedeh/site/index.php(109): Kohana_Request->execute()
#9 {main} in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-21 17:04:38 --- EMERGENCY: View_Exception [ 0 ]: The requested view create could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-21 17:04:38 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('create')
#1 /var/www/fedeh/system/classes/Kohana/View.php(30): Kohana_View->__construct('create', NULL)
#2 /var/www/fedeh/application/classes/Controller/Account.php(122): Kohana_View::factory('create')
#3 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Account->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/fedeh/site/index.php(109): Kohana_Request->execute()
#9 {main} in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-21 17:05:47 --- EMERGENCY: View_Exception [ 0 ]: The requested view create could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-21 17:05:47 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('create')
#1 /var/www/fedeh/system/classes/Kohana/View.php(30): Kohana_View->__construct('create', NULL)
#2 /var/www/fedeh/application/classes/Controller/Account.php(122): Kohana_View::factory('create')
#3 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Account->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/fedeh/site/index.php(109): Kohana_Request->execute()
#9 {main} in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-21 17:05:48 --- EMERGENCY: View_Exception [ 0 ]: The requested view create could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-21 17:05:48 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('create')
#1 /var/www/fedeh/system/classes/Kohana/View.php(30): Kohana_View->__construct('create', NULL)
#2 /var/www/fedeh/application/classes/Controller/Account.php(122): Kohana_View::factory('create')
#3 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Account->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/fedeh/site/index.php(109): Kohana_Request->execute()
#9 {main} in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-21 17:06:21 --- EMERGENCY: View_Exception [ 0 ]: The requested view create could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-21 17:06:21 --- DEBUG: #0 /var/www/fedeh/system/classes/Kohana/View.php(137): Kohana_View->set_filename('create')
#1 /var/www/fedeh/system/classes/Kohana/View.php(30): Kohana_View->__construct('create', NULL)
#2 /var/www/fedeh/application/classes/Controller/Account.php(122): Kohana_View::factory('create')
#3 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Account->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/fedeh/site/index.php(109): Kohana_Request->execute()
#9 {main} in /var/www/fedeh/system/classes/Kohana/View.php:137
2013-11-21 17:10:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: loginerrors ~ APPPATH/views/account/create.php [ 2 ] in /var/www/fedeh/application/views/account/create.php:2
2013-11-21 17:10:14 --- DEBUG: #0 /var/www/fedeh/application/views/account/create.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/fedeh/...', 2, Array)
#1 /var/www/fedeh/system/classes/Kohana/View.php(61): include('/var/www/fedeh/...')
#2 /var/www/fedeh/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/fedeh/...', Array)
#3 /var/www/fedeh/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/fedeh/application/views/template/base.php(134): Kohana_View->__toString()
#5 /var/www/fedeh/system/classes/Kohana/View.php(61): include('/var/www/fedeh/...')
#6 /var/www/fedeh/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/fedeh/...', Array)
#7 /var/www/fedeh/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/fedeh/application/classes/Controller/Template/Base.php(40): Kohana_Controller_Template->after()
#9 /var/www/fedeh/system/classes/Kohana/Controller.php(87): Controller_Template_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#12 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/fedeh/site/index.php(109): Kohana_Request->execute()
#15 {main} in /var/www/fedeh/application/views/account/create.php:2