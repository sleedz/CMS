<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-23 00:01:28 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Arr::get(), called in /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/login.php on line 45 and defined ~ SYSPATH/classes/kohana/arr.php [ 275 ]
2012-10-23 00:01:28 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Arr::get(), called in /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/login.php on line 45 and defined ~ SYSPATH/classes/kohana/arr.php [ 275 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/arr.php(275): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/kamil/www...', 275, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/login.php(45): Kohana_Arr::get('key')
#2 [internal function]: Controller_Admin_Login->action_forgot()
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#7 {main}
2012-10-23 00:01:53 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/kohana/arr.php [ 277 ]
2012-10-23 00:01:53 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/kohana/arr.php [ 277 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/arr.php(277): Kohana_Core::error_handler(2, 'Illegal offset ...', '/home/kamil/www...', 277, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/login.php(45): Kohana_Arr::get('key', Array)
#2 [internal function]: Controller_Admin_Login->action_forgot()
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#7 {main}
2012-10-23 00:20:10 --- ERROR: ErrorException [ 1 ]: Call to undefined function va_dump() ~ APPPATH/classes/model/user.php [ 130 ]
2012-10-23 00:20:10 --- STRACE: ErrorException [ 1 ]: Call to undefined function va_dump() ~ APPPATH/classes/model/user.php [ 130 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 00:26:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::hash_password() ~ APPPATH/classes/model/user.php [ 133 ]
2012-10-23 00:26:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::hash_password() ~ APPPATH/classes/model/user.php [ 133 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 00:42:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH/classes/model/user.php [ 138 ]
2012-10-23 00:42:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH/classes/model/user.php [ 138 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}