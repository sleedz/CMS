<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-25 00:09:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: article ~ APPPATH/views/admin/articles/form.php [ 5 ]
2012-10-25 00:09:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: article ~ APPPATH/views/admin/articles/form.php [ 5 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/views/admin/articles/form.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kamil/www...', 5, Array)
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(61): include('/home/kamil/www...')
#2 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kamil/www...', Array)
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/kamil/www/moje/CMS/resources/application/views/admin/template.php(50): Kohana_View->__toString()
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(61): include('/home/kamil/www...')
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kamil/www...', Array)
#7 /home/kamil/www/moje/CMS/resources/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php(63): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Admin->after()
#10 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Article))
#11 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /home/kamil/www/moje/CMS/public_html/index.php(106): Kohana_Request->execute()
#14 {main}
2012-10-25 00:10:38 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Form::$objects ~ APPPATH/classes/form.php [ 11 ]
2012-10-25 00:10:38 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Form::$objects ~ APPPATH/classes/form.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-25 00:13:11 --- ERROR: ErrorException [ 1 ]: Class 'Fields' not found ~ APPPATH/classes/controller/admin/article.php [ 29 ]
2012-10-25 00:13:11 --- STRACE: ErrorException [ 1 ]: Class 'Fields' not found ~ APPPATH/classes/controller/admin/article.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-25 00:20:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/views/admin/articles/form.php [ 11 ]
2012-10-25 00:20:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/views/admin/articles/form.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-25 00:21:48 --- ERROR: Kohana_Exception [ 0 ]: The contents property does not exist in the Model_Article class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2012-10-25 00:21:48 --- STRACE: Kohana_Exception [ 0 ]: The contents property does not exist in the Model_Article class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/views/admin/articles/form.php(23): Kohana_ORM->__get('contents')
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(61): include('/home/kamil/www...')
#2 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kamil/www...', Array)
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/kamil/www/moje/CMS/resources/application/views/admin/template.php(50): Kohana_View->__toString()
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(61): include('/home/kamil/www...')
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kamil/www...', Array)
#7 /home/kamil/www/moje/CMS/resources/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php(63): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Admin->after()
#10 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Article))
#11 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /home/kamil/www/moje/CMS/public_html/index.php(106): Kohana_Request->execute()
#14 {main}
2012-10-25 00:24:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: admin ~ APPPATH/views/admin/articles/form.php [ 10 ]
2012-10-25 00:24:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: admin ~ APPPATH/views/admin/articles/form.php [ 10 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/views/admin/articles/form.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kamil/www...', 10, Array)
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(61): include('/home/kamil/www...')
#2 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kamil/www...', Array)
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/kamil/www/moje/CMS/resources/application/views/admin/template.php(50): Kohana_View->__toString()
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(61): include('/home/kamil/www...')
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kamil/www...', Array)
#7 /home/kamil/www/moje/CMS/resources/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php(63): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Admin->after()
#10 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Article))
#11 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /home/kamil/www/moje/CMS/public_html/index.php(106): Kohana_Request->execute()
#14 {main}
2012-10-25 00:25:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/controller/admin/article.php [ 57 ]
2012-10-25 00:25:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/controller/admin/article.php [ 57 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-25 00:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-25 00:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(106): Kohana_Request->execute()
#3 {main}
2012-10-25 00:33:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH/views/admin/articles/form.php [ 10 ]
2012-10-25 00:33:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH/views/admin/articles/form.php [ 10 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/views/admin/articles/form.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kamil/www...', 10, Array)
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(61): include('/home/kamil/www...')
#2 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kamil/www...', Array)
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/kamil/www/moje/CMS/resources/application/views/admin/template.php(50): Kohana_View->__toString()
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(61): include('/home/kamil/www...')
#6 /home/kamil/www/moje/CMS/resources/system/classes/kohana/view.php(343): Kohana_View::capture('/home/kamil/www...', Array)
#7 /home/kamil/www/moje/CMS/resources/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin.php(63): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Admin->after()
#10 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Article))
#11 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /home/kamil/www/moje/CMS/public_html/index.php(106): Kohana_Request->execute()
#14 {main}
2012-10-25 00:34:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH/classes/controller/admin/article.php [ 58 ]
2012-10-25 00:34:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH/classes/controller/admin/article.php [ 58 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/article.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kamil/www...', 58, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/article.php(32): Controller_Admin_Article->article_form(Object(Model_Article), true)
#2 [internal function]: Controller_Admin_Article->action_edit()
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Article))
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/kamil/www/moje/CMS/public_html/index.php(106): Kohana_Request->execute()
#7 {main}
2012-10-25 00:35:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH/classes/controller/admin/article.php [ 59 ]
2012-10-25 00:35:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH/classes/controller/admin/article.php [ 59 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/article.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kamil/www...', 59, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/article.php(33): Controller_Admin_Article->article_form(Object(Model_Article), true)
#2 [internal function]: Controller_Admin_Article->action_edit()
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Article))
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/kamil/www/moje/CMS/public_html/index.php(106): Kohana_Request->execute()
#7 {main}
2012-10-25 00:35:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH/classes/controller/admin/article.php [ 58 ]
2012-10-25 00:35:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH/classes/controller/admin/article.php [ 58 ]
--
#0 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/article.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/kamil/www...', 58, Array)
#1 /home/kamil/www/moje/CMS/resources/application/classes/controller/admin/article.php(32): Controller_Admin_Article->article_form(Object(Model_Article), true)
#2 [internal function]: Controller_Admin_Article->action_edit()
#3 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Article))
#4 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /home/kamil/www/moje/CMS/public_html/index.php(106): Kohana_Request->execute()
#7 {main}
2012-10-25 00:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/gallery was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-25 00:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/gallery was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/kamil/www/moje/CMS/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /home/kamil/www/moje/CMS/public_html/index.php(106): Kohana_Request->execute()
#3 {main}