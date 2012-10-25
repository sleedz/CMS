<form action="" class="admin-form" method="POST">
	<table class="form-table">
		<tr>
			<td>Nazwa</td>
			<td><input type="text" name="title" id="category-title" value="<?= form::value('title') ?>"></td>
		</tr>
		<tr>
			<td>url</td>
			<td><input type="text" name="url" id="category-url" value="<?= form::value('url') ?>"></td>
		</tr>
		<tr>
			<td>Język</td>
			<td>
				<select name="language">
					<!-- <option value="all" <?= form::filter('language') == 'all' ? 'selected="selected"' : ''; ?>>Wszystkie</option> -->
					<option value="pl" <?= form::filter('language') == 'pl' ? 'selected="selected"' : ''; ?>>Polski</option>
					<option value="en" <?= form::filter('language') == 'en' ? 'selected="selected"' : ''; ?>>Angielski</option>
					<!-- <option value="de" <?= form::filter('language') == 'de' ? 'selected="selected"' : ''; ?>>Niemiecki</option> -->
				</select>
			</td>
		</tr>
		<tr>
			<td>Sekcja</td>
			<td>
				<input type="button" value="<?=__('Wybierz')?>" class="submit button" id="section-box-open">
				<input type="hidden" name="section" id="section-holder">
				<div style="display: none;" id="section-box-content">
					<ul>
					<? foreach($sections as $id=>$section): ?>
						<li><a href="<?=$id?>" class="section-select"><?=$section['name']?></a></li>
					<? endforeach;?>
					</ul>
				</div>
			</td>
		</tr>
		<tr>
			<td>Należy do</td>
			<td>
				<input type="button" value="<?=__('Wybierz')?>" class="submit button" id="category-parent-box">
				<input type="hidden" name="parent" id="category-parent-holder">
				<div style="display: none;" id="category-parent-box-content">
					<?= $categories ?>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="2">Wyświetlane elementy</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<select name="elements" id="select-content-element">
					<option></option>
				<? foreach($content_types as $key=>$type): ?>
					<option value="<?=$key?>"><?=$type['name']?></option>
				<? endforeach; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="<?= __('Zapisz') ?>" class="submit"></td>
		</tr>
	</table>
</form>