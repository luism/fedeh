<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-20 10:32:15 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'YEAR' ~ APPPATH/config/fedeh.php [ 6 ] in file:line
2013-11-20 10:32:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-20 14:58:49 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'YEAR' ~ APPPATH/config/fedeh.php [ 6 ] in file:line
2013-11-20 14:58:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-20 16:54:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in file:line
2013-11-20 16:54:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-20 16:55:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in file:line
2013-11-20 16:55:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-20 16:55:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in file:line
2013-11-20 16:55:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-20 16:55:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in file:line
2013-11-20 16:55:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-20 16:56:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysql' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2013-11-20 16:56:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-20 16:57:22 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `role`.`id` AS `id`, `role`.`nombre` AS `nombre`, `role`.`descripcion` AS `descripcion` FROM `roles` AS `role` WHERE `name` = 'login' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/fedeh/modules/database/classes/Kohana/Database/Query.php:251
2013-11-20 16:57:22 --- DEBUG: #0 /var/www/fedeh/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `role`.`...', false, Array)
#1 /var/www/fedeh/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/fedeh/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /var/www/fedeh/modules/orm/classes/Kohana/ORM.php(266): Kohana_ORM->find()
#4 /var/www/fedeh/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#5 /var/www/fedeh/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM::factory('Role', Array)
#6 /var/www/fedeh/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('rlmender', '123456', false)
#7 /var/www/fedeh/application/classes/Controller/Login.php(25): Kohana_Auth->login('rlmender', '123456', false)
#8 /var/www/fedeh/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/fedeh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 /var/www/fedeh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/fedeh/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/fedeh/site/index.php(109): Kohana_Request->execute()
#14 {main} in /var/www/fedeh/modules/database/classes/Kohana/Database/Query.php:251