<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-13 16:03:45 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'cms' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2012-10-13 16:03:45 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'cms' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
--
#0 /home/sledz/www/cms/resources/modules/database/classes/kohana/database/mysql.php(75): Kohana_Database_MySQL->_select_db('cms')
#1 /home/sledz/www/cms/resources/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#2 /home/sledz/www/cms/resources/modules/database/classes/kohana/database/mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /home/sledz/www/cms/resources/modules/orm/classes/kohana/orm.php(1538): Kohana_Database_MySQL->list_columns('users')
#4 /home/sledz/www/cms/resources/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns()
#5 /home/sledz/www/cms/resources/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#6 /home/sledz/www/cms/resources/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#7 /home/sledz/www/cms/resources/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(Array)
#8 /home/sledz/www/cms/resources/application/classes/account.php(89): Kohana_ORM::factory('user', Array)
#9 /home/sledz/www/cms/resources/application/classes/account.php(33): Account->auto_login()
#10 /home/sledz/www/cms/resources/application/classes/account.php(22): Account->get_user(NULL)
#11 /home/sledz/www/cms/resources/application/classes/controller/admin.php(13): Account->logged_in()
#12 /home/sledz/www/cms/resources/application/classes/controller/admin/dashboard.php(6): Controller_Admin->before()
#13 [internal function]: Controller_Admin_Dashboard->before()
#14 /home/sledz/www/cms/resources/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Dashboard))
#15 /home/sledz/www/cms/resources/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /home/sledz/www/cms/resources/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#17 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#18 {main}
2012-10-13 16:03:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 16:03:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-13 17:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 17:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-13 17:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 17:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-13 18:17:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 18:17:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-13 18:17:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 18:17:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-13 18:19:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 18:19:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-13 18:19:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 18:19:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-13 18:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 18:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-13 18:20:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 18:20:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-13 18:21:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 18:21:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-13 18:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 18:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-13 18:21:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 18:21:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-13 18:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 18:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-13 18:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 18:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-13 18:22:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 18:22:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-13 18:22:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 18:22:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-13 18:22:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 18:22:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-13 18:22:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 18:22:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-13 18:22:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 18:22:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-13 18:23:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 18:23:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-13 18:23:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 18:23:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-13 18:23:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 18:23:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-13 18:31:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 18:31:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-13 18:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 18:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-13 18:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 18:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /home/sledz/www/cms/public_html/index.php(104): Kohana_Request->execute()
#1 {main}