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
		<form action="" method="POST">
			<table id="login-table">
				<tr>
					<td><?= __('Username') ?></td>
					<td><input type="text" name="login" value="<?= form::value('login') ?>" /></td>
				</tr>
				<tr>
					<td><?= __('Password') ?></td>
					<td><input type="password" name="password" value="<?= form::value('password') ?>" /></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="checkbox" name="remember" /> <?= __('Remember me') ?></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="<?= __('Login') ?>" class="button" /></td>
				</tr>
			</table>
			</form>
			<span id="pass-forget"><a href="#"><?= __('Forgot your password?') ?>Zapomniałeś hasła?</a></span>
		</div>
	</div>
</body>
</html>