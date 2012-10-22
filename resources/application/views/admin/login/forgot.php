<p><?= __('To the specified e-mail address will be sent a link to change your password. Link will be active for 24 hours.') ?></p>
<form action="" method="POST">
	<table id="login-table">
		<tr>
			<td><?= __('E-mail') ?></td>
			<td><input type="text" name="email" value="<?= form::value('email') ?>" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="<?= __('Send') ?>" class="button" /></td>
		</tr>
	</table>
</form>