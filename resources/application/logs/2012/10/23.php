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
2012-10-23 00:50:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/model/user/key.php [ 17 ]
2012-10-23 00:50:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/model/user/key.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 00:50:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/model/user/key.php [ 17 ]
2012-10-23 00:50:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/model/user/key.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 12:12:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH/classes/controller/admin.php [ 13 ]
2012-10-23 12:12:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH/classes/controller/admin.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 12:13:06 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to __() must be an array, string given, called in /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php on line 12 and defined ~ SYSPATH/classes/kohana/i18n.php [ 155 ]
2012-10-23 12:13:06 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to __() must be an array, string given, called in /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php on line 12 and defined ~ SYSPATH/classes/kohana/i18n.php [ 155 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/i18n.php(155): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/home/kamil/www...', 155, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php(12): __(':count files', 'few', Array)
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/dashboard.php(6): Controller_Admin->before()
#3 [internal function]: Controller_Admin_Dashboard->before()
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Dashboard))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-10-23 12:13:51 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to __() must be an array, string given, called in /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php on line 12 and defined ~ SYSPATH/classes/kohana/i18n.php [ 155 ]
2012-10-23 12:13:51 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to __() must be an array, string given, called in /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php on line 12 and defined ~ SYSPATH/classes/kohana/i18n.php [ 155 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/i18n.php(155): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/home/kamil/www...', 155, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php(12): __(':count files', 'few', Array)
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/dashboard.php(6): Controller_Admin->before()
#3 [internal function]: Controller_Admin_Dashboard->before()
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Dashboard))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-10-23 12:13:52 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to __() must be an array, string given, called in /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php on line 12 and defined ~ SYSPATH/classes/kohana/i18n.php [ 155 ]
2012-10-23 12:13:52 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to __() must be an array, string given, called in /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php on line 12 and defined ~ SYSPATH/classes/kohana/i18n.php [ 155 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/i18n.php(155): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/home/kamil/www...', 155, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php(12): __(':count files', 'few', Array)
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/dashboard.php(6): Controller_Admin->before()
#3 [internal function]: Controller_Admin_Dashboard->before()
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Dashboard))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-10-23 12:13:52 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to __() must be an array, string given, called in /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php on line 12 and defined ~ SYSPATH/classes/kohana/i18n.php [ 155 ]
2012-10-23 12:13:52 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to __() must be an array, string given, called in /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php on line 12 and defined ~ SYSPATH/classes/kohana/i18n.php [ 155 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/i18n.php(155): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/home/kamil/www...', 155, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php(12): __(':count files', 'few', Array)
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/dashboard.php(6): Controller_Admin->before()
#3 [internal function]: Controller_Admin_Dashboard->before()
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Dashboard))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-10-23 12:13:52 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to __() must be an array, string given, called in /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php on line 12 and defined ~ SYSPATH/classes/kohana/i18n.php [ 155 ]
2012-10-23 12:13:52 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to __() must be an array, string given, called in /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php on line 12 and defined ~ SYSPATH/classes/kohana/i18n.php [ 155 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/i18n.php(155): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/home/kamil/www...', 155, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php(12): __(':count files', 'few', Array)
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/dashboard.php(6): Controller_Admin->before()
#3 [internal function]: Controller_Admin_Dashboard->before()
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Dashboard))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-10-23 12:13:52 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to __() must be an array, string given, called in /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php on line 12 and defined ~ SYSPATH/classes/kohana/i18n.php [ 155 ]
2012-10-23 12:13:52 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to __() must be an array, string given, called in /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php on line 12 and defined ~ SYSPATH/classes/kohana/i18n.php [ 155 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/i18n.php(155): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/home/kamil/www...', 155, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php(12): __(':count files', 'few', Array)
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/dashboard.php(6): Controller_Admin->before()
#3 [internal function]: Controller_Admin_Dashboard->before()
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Dashboard))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-10-23 12:23:38 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to __() must be an array, string given, called in /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php on line 12 and defined ~ SYSPATH/classes/kohana/i18n.php [ 155 ]
2012-10-23 12:23:38 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to __() must be an array, string given, called in /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php on line 12 and defined ~ SYSPATH/classes/kohana/i18n.php [ 155 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/i18n.php(155): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/home/kamil/www...', 155, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php(12): __(':count files', 'few', Array)
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/dashboard.php(6): Controller_Admin->before()
#3 [internal function]: Controller_Admin_Dashboard->before()
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Dashboard))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-10-23 12:23:38 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to __() must be an array, string given, called in /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php on line 12 and defined ~ SYSPATH/classes/kohana/i18n.php [ 155 ]
2012-10-23 12:23:38 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to __() must be an array, string given, called in /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php on line 12 and defined ~ SYSPATH/classes/kohana/i18n.php [ 155 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/i18n.php(155): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/home/kamil/www...', 155, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php(12): __(':count files', 'few', Array)
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/dashboard.php(6): Controller_Admin->before()
#3 [internal function]: Controller_Admin_Dashboard->before()
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Dashboard))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-10-23 12:23:40 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to __() must be an array, string given, called in /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php on line 12 and defined ~ SYSPATH/classes/kohana/i18n.php [ 155 ]
2012-10-23 12:23:40 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to __() must be an array, string given, called in /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php on line 12 and defined ~ SYSPATH/classes/kohana/i18n.php [ 155 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/i18n.php(155): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/home/kamil/www...', 155, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php(12): __(':count files', 'few', Array)
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/dashboard.php(6): Controller_Admin->before()
#3 [internal function]: Controller_Admin_Dashboard->before()
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Dashboard))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-10-23 12:24:38 --- ERROR: ErrorException [ 1 ]: Class 'I18n_Core' not found ~ APPPATH/classes/controller/admin.php [ 12 ]
2012-10-23 12:24:38 --- STRACE: ErrorException [ 1 ]: Class 'I18n_Core' not found ~ APPPATH/classes/controller/admin.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 12:28:55 --- ERROR: ErrorException [ 1 ]: Call to undefined function ___() ~ APPPATH/classes/controller/admin.php [ 13 ]
2012-10-23 12:28:55 --- STRACE: ErrorException [ 1 ]: Call to undefined function ___() ~ APPPATH/classes/controller/admin.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 12:28:56 --- ERROR: ErrorException [ 1 ]: Call to undefined function ___() ~ APPPATH/classes/controller/admin.php [ 13 ]
2012-10-23 12:28:56 --- STRACE: ErrorException [ 1 ]: Call to undefined function ___() ~ APPPATH/classes/controller/admin.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 12:33:27 --- ERROR: ErrorException [ 1 ]: Call to undefined function ___() ~ APPPATH/classes/controller/admin.php [ 13 ]
2012-10-23 12:33:27 --- STRACE: ErrorException [ 1 ]: Call to undefined function ___() ~ APPPATH/classes/controller/admin.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 12:52:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH/i18n/pl.php [ 4 ]
2012-10-23 12:52:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH/i18n/pl.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 12:52:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH/i18n/pl.php [ 4 ]
2012-10-23 12:52:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH/i18n/pl.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 15:36:06 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/account.php [ 113 ]
2012-10-23 15:36:06 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/account.php [ 113 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/account.php(113): Kohana_Core::error_handler(2048, 'Creating defaul...', '/home/kamil/www...', 113, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/login.php(41): Account->logout()
#2 [internal function]: Controller_Admin_Login->action_logout()
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#7 {main}
2012-10-23 15:39:29 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/account.php [ 113 ]
2012-10-23 15:39:29 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/account.php [ 113 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/account.php(113): Kohana_Core::error_handler(2048, 'Creating defaul...', '/home/kamil/www...', 113, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/login.php(41): Account->logout()
#2 [internal function]: Controller_Admin_Login->action_logout()
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#7 {main}
2012-10-23 15:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-23 15:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-23 15:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-23 15:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-23 15:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-23 15:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-23 15:44:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-23 15:44:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-23 15:44:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-23 15:44:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-23 15:44:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/admin/template.php [ 44 ]
2012-10-23 15:44:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/admin/template.php [ 44 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/views/admin/template.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kamil/www...', 44, Array)
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(61): include('/home/kamil/www...')
#2 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kamil/www...', Array)
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php(60): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Admin->after()
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Settings))
#7 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#10 {main}
2012-10-23 15:48:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/admin/template.php [ 44 ]
2012-10-23 15:48:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/admin/template.php [ 44 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/views/admin/template.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kamil/www...', 44, Array)
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(61): include('/home/kamil/www...')
#2 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kamil/www...', Array)
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php(60): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Admin->after()
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Settings))
#7 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#10 {main}
2012-10-23 15:49:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/admin/template.php [ 44 ]
2012-10-23 15:49:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/admin/template.php [ 44 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/views/admin/template.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kamil/www...', 44, Array)
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(61): include('/home/kamil/www...')
#2 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kamil/www...', Array)
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php(60): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Admin->after()
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Settings))
#7 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#10 {main}
2012-10-23 15:49:51 --- ERROR: View_Exception [ 0 ]: The requested view action/settings could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-23 15:49:51 --- STRACE: View_Exception [ 0 ]: The requested view action/settings could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(137): Kohana_View->set_filename('action/settings')
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(30): Kohana_View->__construct('action/settings', NULL)
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/settings.php(13): Kohana_View::factory('action/settings')
#3 [internal function]: Controller_Admin_Settings->action_index()
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Settings))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-10-23 15:51:19 --- ERROR: View_Exception [ 0 ]: The requested view action/settings could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-23 15:51:19 --- STRACE: View_Exception [ 0 ]: The requested view action/settings could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(137): Kohana_View->set_filename('action/settings')
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(30): Kohana_View->__construct('action/settings', NULL)
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/settings.php(13): Kohana_View::factory('action/settings')
#3 [internal function]: Controller_Admin_Settings->action_index()
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Settings))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-10-23 15:51:26 --- ERROR: View_Exception [ 0 ]: The requested view action/settings could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-23 15:51:26 --- STRACE: View_Exception [ 0 ]: The requested view action/settings could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(137): Kohana_View->set_filename('action/settings')
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(30): Kohana_View->__construct('action/settings', NULL)
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/settings.php(13): Kohana_View::factory('action/settings')
#3 [internal function]: Controller_Admin_Settings->action_index()
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Settings))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-10-23 15:51:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings/languages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-23 15:51:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings/languages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-23 15:55:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings/admin/menu/add ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-23 15:55:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings/admin/menu/add ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-23 15:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings/users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-23 15:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings/users was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-23 15:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings/admin/menu/add ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-23 15:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings/admin/menu/add ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-23 15:59:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings/admin/menu/add ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-23 15:59:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings/admin/menu/add ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-23 16:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings/admin/menu/add ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-23 16:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings/admin/menu/add ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-23 16:02:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings/admin/menu/add ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-23 16:02:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings/admin/menu/add ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-23 16:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings/admin/menu/add ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-23 16:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/settings/admin/menu/add ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-23 16:03:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/menu/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-23 16:03:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/menu/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-23 16:04:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/admin/template.php [ 44 ]
2012-10-23 16:04:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/admin/template.php [ 44 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/views/admin/template.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kamil/www...', 44, Array)
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(61): include('/home/kamil/www...')
#2 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kamil/www...', Array)
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php(60): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Admin->after()
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#7 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#10 {main}
2012-10-23 16:05:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_Contact' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-10-23 16:05:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_Contact' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 16:06:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_Contact' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-10-23 16:06:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_Contact' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 16:06:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_Contact' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-10-23 16:06:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_Contact' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 16:06:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_Contact' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-10-23 16:06:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_Contact' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 16:06:22 --- ERROR: Database_Exception [ 1146 ]: Table 'cms.menus' doesn't exist [ SHOW FULL COLUMNS FROM `menus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-23 16:06:22 --- STRACE: Database_Exception [ 1146 ]: Table 'cms.menus' doesn't exist [ SHOW FULL COLUMNS FROM `menus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/kamil/www/moje/CMS/resources/modules/database/classes/kohana/database/mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /home/kamil/www/moje/CMS/resources/modules/orm/classes/kohana/orm.php(1538): Kohana_Database_MySQL->list_columns('menus')
#2 /home/kamil/www/moje/CMS/resources/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns()
#3 /home/kamil/www/moje/CMS/resources/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /home/kamil/www/moje/CMS/resources/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /home/kamil/www/moje/CMS/resources/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/menu.php(6): Kohana_ORM::factory('menu')
#7 [internal function]: Controller_Admin_Menu->action_add()
#8 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#9 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#12 {main}
2012-10-23 17:24:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_Menu' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-10-23 17:24:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_Menu' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 17:24:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/menu/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-23 17:24:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/menu/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-23 17:24:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/menu/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-23 17:24:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/menu/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-23 17:25:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/menu/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-23 17:25:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/menu/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-23 17:25:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/menu/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-23 17:25:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/menu/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-23 17:25:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/category/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-23 17:25:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/category/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-23 17:25:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/admin/template.php [ 44 ]
2012-10-23 17:25:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/admin/template.php [ 44 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/views/admin/template.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kamil/www...', 44, Array)
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(61): include('/home/kamil/www...')
#2 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kamil/www...', Array)
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php(60): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Admin->after()
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#7 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#10 {main}
2012-10-23 17:28:58 --- ERROR: View_Exception [ 0 ]: The requested view admin/category/form could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-23 17:28:58 --- STRACE: View_Exception [ 0 ]: The requested view admin/category/form could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/category/...')
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/category/...', NULL)
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(15): Kohana_View::factory('admin/category/...')
#3 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(8): Controller_Admin_Category->category_form(Object(Model_Category), false)
#4 [internal function]: Controller_Admin_Category->action_add()
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#9 {main}
2012-10-23 19:50:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/category/top_navi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-23 19:50:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/category/top_navi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-23 19:50:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/category/top_navi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-23 19:50:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/category/top_navi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-23 19:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/category/aa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-23 19:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/category/aa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-23 19:54:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/category/top_navi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-23 19:54:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/category/top_navi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-23 19:54:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/category/top_navi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-23 19:54:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/category/top_navi was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-23 20:09:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH/classes/controller/admin/category.php [ 21 ]
2012-10-23 20:09:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH/classes/controller/admin/category.php [ 21 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kamil/www...', 21, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(8): Controller_Admin_Category->category_form(Object(Model_Category), false)
#2 [internal function]: Controller_Admin_Category->action_add()
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#7 {main}
2012-10-23 20:09:35 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Category::get_tree() ~ APPPATH/classes/controller/admin/category.php [ 16 ]
2012-10-23 20:09:35 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Category::get_tree() ~ APPPATH/classes/controller/admin/category.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 20:47:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH/classes/model/category.php [ 15 ]
2012-10-23 20:47:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH/classes/model/category.php [ 15 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/model/category.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kamil/www...', 15, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(16): Model_Category->get_tree()
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(8): Controller_Admin_Category->category_form(Object(Model_Category), false)
#3 [internal function]: Controller_Admin_Category->action_add()
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-10-23 20:47:14 --- ERROR: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/classes/model/category.php [ 27 ]
2012-10-23 20:47:14 --- STRACE: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/classes/model/category.php [ 27 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/model/category.php(27): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/kamil/www...', 27, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/model/category.php(15): Model_Category->menu_sort(Object(Model_Category))
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(16): Model_Category->get_tree()
#3 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(8): Controller_Admin_Category->category_form(Object(Model_Category), false)
#4 [internal function]: Controller_Admin_Category->action_add()
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#9 {main}
2012-10-23 20:49:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-10-23 20:49:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 20:49:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-10-23 20:49:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 20:49:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-10-23 20:49:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 20:49:42 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/category.php [ 27 ]
2012-10-23 20:49:42 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/category.php [ 27 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/model/category.php(27): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/kamil/www...', 27, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/model/category.php(15): Model_category->menu_sort(Object(Model_category))
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(16): Model_category->get_tree()
#3 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(8): Controller_Admin_Category->category_form(Object(Model_category), false)
#4 [internal function]: Controller_Admin_Category->action_add()
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#9 {main}
2012-10-23 20:50:25 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/category.php [ 27 ]
2012-10-23 20:50:25 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/category.php [ 27 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/model/category.php(27): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/kamil/www...', 27, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/model/category.php(15): Model_category->menu_sort(Object(Model_category))
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(16): Model_category->get_tree()
#3 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(8): Controller_Admin_Category->category_form(Object(Model_category), false)
#4 [internal function]: Controller_Admin_Category->action_add()
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#9 {main}
2012-10-23 20:50:34 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/category.php [ 27 ]
2012-10-23 20:50:34 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/category.php [ 27 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/model/category.php(27): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/kamil/www...', 27, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/model/category.php(15): Model_category->menu_sort(Object(Model_category))
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(16): Model_category->get_tree()
#3 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(8): Controller_Admin_Category->category_form(Object(Model_category), false)
#4 [internal function]: Controller_Admin_Category->action_add()
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#9 {main}
2012-10-23 20:51:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/model/category.php [ 18 ]
2012-10-23 20:51:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/model/category.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 20:51:35 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/category.php [ 17 ]
2012-10-23 20:51:35 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/category.php [ 17 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/model/category.php(17): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/kamil/www...', 17, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(16): Model_category->get_tree()
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(8): Controller_Admin_Category->category_form(Object(Model_category), false)
#3 [internal function]: Controller_Admin_Category->action_add()
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-10-23 20:51:55 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/category.php [ 17 ]
2012-10-23 20:51:55 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/category.php [ 17 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/model/category.php(17): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/kamil/www...', 17, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(16): Model_category->get_tree()
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(8): Controller_Admin_Category->category_form(Object(Model_category), false)
#3 [internal function]: Controller_Admin_Category->action_add()
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-10-23 20:52:42 --- ERROR: Kohana_Exception [ 0 ]: The count_all property does not exist in the Model_category class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2012-10-23 20:52:42 --- STRACE: Kohana_Exception [ 0 ]: The count_all property does not exist in the Model_category class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/model/category.php(15): Kohana_ORM->__get('count_all')
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(16): Model_category->get_tree()
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(8): Controller_Admin_Category->category_form(Object(Model_category), false)
#3 [internal function]: Controller_Admin_Category->action_add()
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-10-23 20:58:55 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/category.php [ 26 ]
2012-10-23 20:58:55 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/category.php [ 26 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/model/category.php(26): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/kamil/www...', 26, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(16): Model_category->get_tree()
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(8): Controller_Admin_Category->category_form(Object(Model_category), false)
#3 [internal function]: Controller_Admin_Category->action_add()
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-10-23 21:00:49 --- ERROR: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 921 ]
2012-10-23 21:00:49 --- STRACE: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 921 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/model/category.php(20): Kohana_ORM->find_all()
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(16): Model_category->get_tree()
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(8): Controller_Admin_Category->category_form(Object(Model_category), false)
#3 [internal function]: Controller_Admin_Category->action_add()
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-10-23 21:01:11 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/category.php [ 27 ]
2012-10-23 21:01:11 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/category.php [ 27 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/model/category.php(27): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/kamil/www...', 27, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(16): Model_category->get_tree()
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(8): Controller_Admin_Category->category_form(Object(Model_category), false)
#3 [internal function]: Controller_Admin_Category->action_add()
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-10-23 21:01:37 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/category.php [ 27 ]
2012-10-23 21:01:37 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/category.php [ 27 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/model/category.php(27): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/kamil/www...', 27, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(16): Model_category->get_tree()
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(8): Controller_Admin_Category->category_form(Object(Model_category), false)
#3 [internal function]: Controller_Admin_Category->action_add()
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-10-23 21:03:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Category::count_all() ~ APPPATH/classes/controller/admin/category.php [ 28 ]
2012-10-23 21:03:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Category::count_all() ~ APPPATH/classes/controller/admin/category.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 21:04:53 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin/category.php [ 35 ]
2012-10-23 21:04:53 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin/category.php [ 35 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(35): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/kamil/www...', 35, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(16): Controller_Admin_Category->get_tree()
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(8): Controller_Admin_Category->category_form(Object(Model_category), false)
#3 [internal function]: Controller_Admin_Category->action_add()
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-10-23 21:17:50 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin/category.php [ 49 ]
2012-10-23 21:17:50 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin/category.php [ 49 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(49): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/kamil/www...', 49, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(37): Controller_Admin_Category->menu_sort(Object(Model_category))
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(16): Controller_Admin_Category->get_tree()
#3 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(8): Controller_Admin_Category->category_form(Object(Model_category), false)
#4 [internal function]: Controller_Admin_Category->action_add()
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#9 {main}
2012-10-23 21:21:37 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin/category.php [ 52 ]
2012-10-23 21:21:37 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin/category.php [ 52 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(52): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/kamil/www...', 52, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(40): Controller_Admin_Category->menu_sort(Array)
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(16): Controller_Admin_Category->get_tree()
#3 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(8): Controller_Admin_Category->category_form(Object(Model_category), false)
#4 [internal function]: Controller_Admin_Category->action_add()
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#9 {main}
2012-10-23 21:31:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/controller/admin/category.php [ 67 ]
2012-10-23 21:31:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/controller/admin/category.php [ 67 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 21:33:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/category/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-23 21:33:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/category/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-23 21:44:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/admin/category.php [ 19 ]
2012-10-23 21:44:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/admin/category.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 22:14:58 --- ERROR: ErrorException [ 8 ]: Undefined property: Validation::$errors ~ APPPATH/classes/model/category.php [ 32 ]
2012-10-23 22:14:58 --- STRACE: ErrorException [ 8 ]: Undefined property: Validation::$errors ~ APPPATH/classes/model/category.php [ 32 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/model/category.php(32): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/kamil/www...', 32, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(22): Model_category->save_category(false)
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(8): Controller_Admin_Category->category_form(Object(Model_category), false)
#3 [internal function]: Controller_Admin_Category->action_add()
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-10-23 22:31:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH/classes/model/category.php [ 33 ]
2012-10-23 22:31:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH/classes/model/category.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 22:34:36 --- ERROR: Kohana_Exception [ 0 ]: The contant property does not exist in the Model_category class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2012-10-23 22:34:36 --- STRACE: Kohana_Exception [ 0 ]: The contant property does not exist in the Model_category class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/model/category.php(32): Kohana_ORM->__get('contant')
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(22): Model_category->save_category(false)
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(8): Controller_Admin_Category->category_form(Object(Model_category), false)
#3 [internal function]: Controller_Admin_Category->action_add()
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-10-23 22:40:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_Category_contents' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-10-23 22:40:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_Category_contents' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-23 22:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/categoriy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-23 22:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/categoriy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-23 22:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/categoriy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-23 22:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/categoriy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-23 22:56:09 --- ERROR: View_Exception [ 0 ]: The requested view category/table could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-23 22:56:09 --- STRACE: View_Exception [ 0 ]: The requested view category/table could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(137): Kohana_View->set_filename('category/table')
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(30): Kohana_View->__construct('category/table', NULL)
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(14): Kohana_View::factory('category/table')
#3 [internal function]: Controller_Admin_Category->action_index()
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#8 {main}