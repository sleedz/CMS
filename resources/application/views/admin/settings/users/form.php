<form action="" method="POST">
	<table class="form-table">
		<tr>
			<td><?= __('Username')?>: </td>
			<td><input type="text" name="login" value="<?= form::value('login') ?>" /></td>
			<td class="info"><?= message::get('login'); ?></td>
		</tr>
		<tr>
			<td><?= __('Email')?>: </td>
			<td><input type="text" name="email" value="<?= form::value('email') ?>" /></td>
			<td class="info"><?= message::get('email'); ?></td>
		</tr>
		<tr>
			<td><?= __('Pełne prawa')?>: </td>
			<td><input type="text" name="email" value="<?= form::value('email') ?>" /></td>
			<td class="info"><?= message::get('email'); ?></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="<?= __('Save') ?>" class="submit" /></td>
			<td class="info"></td>
		</tr>
	</table>
</form>