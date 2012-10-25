<ul>
	<li><a href="<?= url::site('admin/category/add')?>" class="submit">Nowa kategoria</a></li>
</ul>
<table class="admin-table">
	<thead>
		<tr>
			<td><?= __('Tytuł') ?></td>
			<td><?= __('url') ?></td>
			<td><?= __('Autor') ?></td>
			<td><?= __('Język') ?></td>
			<td><?= __('Data dodania') ?></td>
			<!-- <td><?= __('Data modyfikacji') ?></td> -->
			<td><?= __('Akcja') ?></td>
		</tr>
	</thead>
	<tbody>
	<?foreach($categories as $category):?>
		<tr>
			<td><?=$category->title?></td>
			<td><?=$category->url?></td>
			<td><?=$category->author->login?></td>
			<td><?=$category->language()?></td>
			<td><?=$category->created_at?></td>
			<!-- <td><?=$category->updated_at?></td> -->
			<td>
				<!-- Artykuły -->
				<?=$category->content_type()->type == 'article' ? '<a href="'.$category->edit_art_url().'">Edytuj artykuł</a>' : ''?>

				<!-- Galerie -->
				<?=$category->content_type()->type == 'gallery' ? '<a href="'.url::site('admin/gallery/add').'">Dodaj galerię</a>' : ''?>
				<?=$category->content_type()->type == 'gallery' ? '<a href="'.url::site('admin/gallery').'">Lista galerii</a>' : ''?>

				<!-- Aktualności -->
				<?=$category->content_type()->type == 'news' ? '<a href="'.url::site('admin/news/add').'">Dodaj newsa</a>' : ''?>
				<?=$category->content_type()->type == 'news' ? '<a href="'.url::site('admin/news').'">Lista newsów</a>' : ''?>
			</td>
		</tr>
	<?endforeach;?>
	</tbody>
</table>