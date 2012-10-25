<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-24 00:00:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/category/admin/category ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-24 00:00:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/category/admin/category ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-24 00:17:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/categoriy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-24 00:17:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/categoriy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-24 00:17:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/categoriy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-24 00:17:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/categoriy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-24 10:31:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/set_filter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-24 10:31:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/set_filter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-24 10:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/set_filter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-24 10:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/set_filter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-24 12:23:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ajax/set_filtere was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-24 12:23:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ajax/set_filtere was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-24 12:23:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/ajax/set_filtere was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-24 12:23:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/ajax/set_filtere was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-24 12:27:14 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Arr::get(), called in /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/ajax.php on line 13 and defined ~ SYSPATH/classes/kohana/arr.php [ 275 ]
2012-10-24 12:27:14 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Arr::get(), called in /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/ajax.php on line 13 and defined ~ SYSPATH/classes/kohana/arr.php [ 275 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/arr.php(275): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/kamil/www...', 275, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/ajax.php(13): Kohana_Arr::get(Array)
#2 [internal function]: Controller_Admin_Ajax->action_set_filter()
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Ajax))
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#7 {main}
2012-10-24 12:27:50 --- ERROR: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH/classes/controller/admin/ajax.php [ 18 ]
2012-10-24 12:27:50 --- STRACE: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH/classes/controller/admin/ajax.php [ 18 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', '/home/kamil/www...', 18, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/ajax.php(18): json_decode(Array)
#2 [internal function]: Controller_Admin_Ajax->action_set_filter()
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Ajax))
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#7 {main}
2012-10-24 13:39:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ APPPATH/classes/controller/admin.php [ 48 ]
2012-10-24 13:39:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ APPPATH/classes/controller/admin.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-24 14:04:44 --- ERROR: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH/classes/controller/admin/category.php [ 16 ]
2012-10-24 14:04:44 --- STRACE: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH/classes/controller/admin/category.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-24 14:05:06 --- ERROR: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/controller/admin/category.php [ 19 ]
2012-10-24 14:05:06 --- STRACE: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/controller/admin/category.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-24 14:05:46 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_category::filter() ~ APPPATH/classes/controller/admin/category.php [ 16 ]
2012-10-24 14:05:46 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_category::filter() ~ APPPATH/classes/controller/admin/category.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-24 14:06:00 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_category::filter() ~ APPPATH/classes/controller/admin/category.php [ 16 ]
2012-10-24 14:06:00 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_category::filter() ~ APPPATH/classes/controller/admin/category.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-24 14:06:53 --- ERROR: ErrorException [ 1 ]: Call to undefined method Session::factory() ~ APPPATH/classes/model/category.php [ 50 ]
2012-10-24 14:06:53 --- STRACE: ErrorException [ 1 ]: Call to undefined method Session::factory() ~ APPPATH/classes/model/category.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-24 14:17:17 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/config/lang.php [ 19 ]
2012-10-24 14:17:17 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/config/lang.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-24 14:18:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH/views/admin/category/table.php [ 17 ]
2012-10-24 14:18:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH/views/admin/category/table.php [ 17 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/views/admin/category/table.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kamil/www...', 17, Array)
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(61): include('/home/kamil/www...')
#2 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kamil/www...', Array)
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/kamil/www/moje/CMS/resources/application/views/admin/template.php(50): Kohana_View->__toString()
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(61): include('/home/kamil/www...')
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kamil/www...', Array)
#7 /home/kamil/www/moje/CMS/resources/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php(63): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Admin->after()
#10 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#11 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#14 {main}
2012-10-24 14:19:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH/classes/controller/admin/category.php [ 15 ]
2012-10-24 14:19:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH/classes/controller/admin/category.php [ 15 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kamil/www...', 15, Array)
#1 [internal function]: Controller_Admin_Category->action_index()
#2 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#6 {main}
2012-10-24 14:20:08 --- ERROR: Kohana_Exception [ 0 ]: The author property does not exist in the Model_category class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2012-10-24 14:20:08 --- STRACE: Kohana_Exception [ 0 ]: The author property does not exist in the Model_category class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/views/admin/category/table.php(21): Kohana_ORM->__get('author')
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(61): include('/home/kamil/www...')
#2 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kamil/www...', Array)
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/kamil/www/moje/CMS/resources/application/views/admin/template.php(50): Kohana_View->__toString()
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(61): include('/home/kamil/www...')
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kamil/www...', Array)
#7 /home/kamil/www/moje/CMS/resources/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php(63): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Admin->after()
#10 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#11 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#14 {main}
2012-10-24 14:20:42 --- ERROR: Kohana_Exception [ 0 ]: The author property does not exist in the Model_category class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2012-10-24 14:20:42 --- STRACE: Kohana_Exception [ 0 ]: The author property does not exist in the Model_category class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/views/admin/category/table.php(21): Kohana_ORM->__get('author')
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(61): include('/home/kamil/www...')
#2 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kamil/www...', Array)
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/kamil/www/moje/CMS/resources/application/views/admin/template.php(50): Kohana_View->__toString()
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(61): include('/home/kamil/www...')
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kamil/www...', Array)
#7 /home/kamil/www/moje/CMS/resources/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php(63): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Admin->after()
#10 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#11 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#14 {main}
2012-10-24 14:23:53 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_category::language() ~ APPPATH/views/admin/category/table.php [ 22 ]
2012-10-24 14:23:53 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_category::language() ~ APPPATH/views/admin/category/table.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-24 14:38:44 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_category::content() ~ APPPATH/views/admin/category/table.php [ 25 ]
2012-10-24 14:38:44 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_category::content() ~ APPPATH/views/admin/category/table.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-24 14:41:17 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/admin/category/table.php [ 25 ]
2012-10-24 14:41:17 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/admin/category/table.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-24 14:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/article/edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-24 14:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/article/edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-24 21:50:18 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/model/category.php [ 58 ]
2012-10-24 21:50:18 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/model/category.php [ 58 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/model/category.php(58): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/kamil/www...', 58, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(15): Model_category->filter()
#2 [internal function]: Controller_Admin_Category->action_index()
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#7 {main}
2012-10-24 21:50:52 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/model/category.php [ 58 ]
2012-10-24 21:50:52 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/model/category.php [ 58 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/model/category.php(58): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/kamil/www...', 58, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/category.php(15): Model_category->filter()
#2 [internal function]: Controller_Admin_Category->action_index()
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#7 {main}
2012-10-24 21:51:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/article/edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-24 21:51:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/article/edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-24 22:06:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/article/edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-24 22:06:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/article/edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-24 22:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/article/edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-24 22:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/article/edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-24 22:10:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/article/edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-24 22:10:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/article/edit was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-24 22:10:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/admin/template.php [ 50 ]
2012-10-24 22:10:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/admin/template.php [ 50 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/views/admin/template.php(50): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kamil/www...', 50, Array)
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(61): include('/home/kamil/www...')
#2 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kamil/www...', Array)
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php(63): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Admin->after()
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Article))
#7 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#10 {main}
2012-10-24 22:11:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_Article' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-10-24 22:11:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_Article' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-24 22:12:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/model/article.php [ 15 ]
2012-10-24 22:12:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/model/article.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-24 22:12:43 --- ERROR: View_Exception [ 0 ]: The requested view admin/articles/form could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-24 22:12:43 --- STRACE: View_Exception [ 0 ]: The requested view admin/articles/form could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/articles/...')
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/articles/...', NULL)
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/article.php(24): Kohana_View::factory('admin/articles/...')
#3 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/article.php(17): Controller_Admin_Article->article_form(Object(Model_Article))
#4 [internal function]: Controller_Admin_Article->action_add()
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Article))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#9 {main}
2012-10-24 22:22:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/admin/articles/form.php [ 11 ]
2012-10-24 22:22:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/admin/articles/form.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-24 22:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/article/www/moje/CMS/resources/application/classes/ckeditor.phpckeditor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-24 22:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/article/www/moje/CMS/resources/application/classes/ckeditor.phpckeditor.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/kamil/www/moje/CMS/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-24 22:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ckfinder/ckfinder.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-24 22:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ckfinder/ckfinder.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/kamil/www/moje/CMS/public_html/index.php(106): Kohana_Request->execute()
#1 {main}
2012-10-24 23:00:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ckfinder/ckfinder.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-24 23:00:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ckfinder/ckfinder.html ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/kamil/www/moje/CMS/public_html/index.php(106): Kohana_Request->execute()
#1 {main}
2012-10-24 23:01:48 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: nothing to repeat at offset 24 ~ SYSPATH/classes/kohana/route.php [ 402 ]
2012-10-24 23:01:48 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: nothing to repeat at offset 24 ~ SYSPATH/classes/kohana/route.php [ 402 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', '/home/kamil/www...', 402, Array)
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/route.php(402): preg_match('#^ckfinder(?:/(...', 'ckfinder/ckfind...', NULL)
#2 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(582): Kohana_Route->matches('ckfinder/ckfind...')
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(800): Kohana_Request::process_uri('ckfinder/ckfind...', Array)
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(208): Kohana_Request->__construct('/ckfinder/ckfin...', NULL, Array)
#5 /home/kamil/www/moje/CMS/public_html/index.php(105): Kohana_Request::factory()
#6 {main}
2012-10-24 23:02:03 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: nothing to repeat at offset 25 ~ SYSPATH/classes/kohana/route.php [ 402 ]
2012-10-24 23:02:03 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: nothing to repeat at offset 25 ~ SYSPATH/classes/kohana/route.php [ 402 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', '/home/kamil/www...', 402, Array)
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/route.php(402): preg_match('#^ckfinder(?:/(...', 'ckfinder/ckfind...', NULL)
#2 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(582): Kohana_Route->matches('ckfinder/ckfind...')
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(800): Kohana_Request::process_uri('ckfinder/ckfind...', Array)
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(208): Kohana_Request->__construct('/ckfinder/ckfin...', NULL, Array)
#5 /home/kamil/www/moje/CMS/public_html/index.php(105): Kohana_Request::factory()
#6 {main}
2012-10-24 23:02:12 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 827 ]
2012-10-24 23:02:12 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 827 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(827): Kohana_Core::error_handler(8, 'Undefined index...', '/home/kamil/www...', 827, Array)
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(208): Kohana_Request->__construct('/ckfinder/ckfin...', NULL, Array)
#2 /home/kamil/www/moje/CMS/public_html/index.php(105): Kohana_Request::factory()
#3 {main}
2012-10-24 23:03:03 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 827 ]
2012-10-24 23:03:03 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 827 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(827): Kohana_Core::error_handler(8, 'Undefined index...', '/home/kamil/www...', 827, Array)
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(208): Kohana_Request->__construct('/ckfinder/ckfin...', NULL, Array)
#2 /home/kamil/www/moje/CMS/public_html/index.php(105): Kohana_Request::factory()
#3 {main}
2012-10-24 23:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ckfinder/ckfinder.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-24 23:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ckfinder/ckfinder.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(106): Kohana_Request->execute()
#3 {main}
2012-10-24 23:07:31 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: navigation ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-10-24 23:07:31 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: navigation ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php(52): Kohana_View->__get('navigation')
#1 [internal function]: Controller_Admin->after()
#2 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/kamil/www/moje/CMS/public_html/index.php(106): Kohana_Request->execute()
#6 {main}
2012-10-24 23:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/article/9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-24 23:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/article/9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(106): Kohana_Request->execute()
#3 {main}
2012-10-24 23:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/article/9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-24 23:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/article/9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(106): Kohana_Request->execute()
#3 {main}
2012-10-24 23:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/article/8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-24 23:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/article/8 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(106): Kohana_Request->execute()
#3 {main}
2012-10-24 23:38:48 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Article::save_article() ~ APPPATH/classes/controller/admin/article.php [ 24 ]
2012-10-24 23:38:48 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Article::save_article() ~ APPPATH/classes/controller/admin/article.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-24 23:46:32 --- ERROR: View_Exception [ 0 ]: The requested view admin/articles could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-24 23:46:32 --- STRACE: View_Exception [ 0 ]: The requested view admin/articles could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/articles')
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/articles', NULL)
#2 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/article.php(7): Kohana_View::factory('admin/articles')
#3 [internal function]: Controller_Admin_Article->action_index()
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Article))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /home/kamil/www/moje/CMS/public_html/index.php(106): Kohana_Request->execute()
#8 {main}
2012-10-24 23:59:34 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 897 ]
2012-10-24 23:59:34 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 897 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/article.php(25): Kohana_ORM->find()
#1 [internal function]: Controller_Admin_Article->action_edit()
#2 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Article))
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /home/kamil/www/moje/CMS/public_html/index.php(106): Kohana_Request->execute()
#6 {main}