<form action="" class="admin-form" method="POST">
	<table class="form-table">
		<tr>
			<td>Tytuł</td>
			<td><input type="text" name="title" value="<?=form::value('title', $article->title)?>"></td>
		</tr>
		<tr>
			<td>Kategoria</td>
			<td>
				<input type="button" name="category" <?= $admin ? '' : 'disabled="disabled"'?> value="<?=$category->title ? $article->category->title : __('Wybierz') ?>" id="cat-id-open" class="button submit">
				<input type="hidden" name="category_id" value="<?=form::value('category_id', $category->id)?>" id="cat-id-holder">
				<div style="display: none;" id="category-box">
					<ul>
					<?foreach($categories as $category): ?>
						<li><a href="<?=$category->id?>" class="category-select"><?=$category->title?></a></li>
					<?endforeach?>
					</ul>
				</div>
			</td>
		</tr>
		<tr>
			<td>Treść</td>
			<td><?=$ckeditor->editor('contents', form::value('contents', $article->content, false))?></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="<?=__('Zapisz')?>" class="submit"></td>
		</tr>
	</table>
</form>