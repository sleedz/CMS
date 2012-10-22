<form action="" method="POST">
	<table id="login-table" style="padding: 40px 0 0 0;">
		<tr>
			<td><?= __('New password') ?></td>
			<td><input type="password" name="password" value="<?= form::value('password') ?>" /></td>
		</tr>
		<tr>
			<td><?= __('Confirm password') ?></td>
			<td><input type="password" name="confirm-password" value="<?= form::value('confirm-password') ?>" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="<?= __('Save') ?>" class="button" /></td>
		</tr>
	</table>
</form>