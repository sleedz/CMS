<div id="login-form">
	<div id="message" class="<?= message::class_name() ?>" style="<?= message::get() ? 'display: block;' : 'display: none;' ?>" >
		<ul>
			<?= message::get() ?>
		</ul>
	</div>
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
	<span id="pass-forget"><a href="<?= url::site('admin/login/forgot') ?>"><?= __('Forgot your password?') ?></a></span>
</div>