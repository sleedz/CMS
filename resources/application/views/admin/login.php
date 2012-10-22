<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?= $title ?></title>
<link rel="stylesheet" href="<? url::base() ?>/styles/admin/login.css" type="text/css" media="all" />
</head>
<body>
	<div class="countainer">
	<div id="shine"></div>
		<h1>Admin Panel</h1>
		<div id="login-form">
			<div id="message" class="<?= message::class_name() ?>" style="<?= message::get() ? 'display: block;' : 'display: none;' ?>" >
				<ul>
					<?= message::get() ?>
				</ul>
			</div>
			<?= $content ?>
		</div>
	</div>
</body>
</html>