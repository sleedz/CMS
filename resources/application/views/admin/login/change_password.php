<div id="login-form">
	<div id="message" class="<?= message::class_name() ?>" style="<?= message::get() ? 'display: block;' : 'display: none;' ?>" >
		<ul>
			<?= message::get() ?>
		</ul>
	</div>
	<form action="" method="POST">
		<table id="login-table">
			<tr>
				<td><?= __('New password') ?></td>
				<td><input type="password" name="password" value="<?= form::value('password') ?>" /></td>
			</tr>
			<tr>
				<td><?= __('Confirm password') ?></td>
				<td><input type="password" name="confirm-password" value="<?= form::value('password') ?>" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="<?= __('Save') ?>" class="button" /></td>
			</tr>
		</table>
	</form>
</div>