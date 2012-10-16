<div id="language" class="site">
	<ul>
	<? foreach($languages as $lang): ?>
		<li><a href="<?= $lang['url'] ?>" class="flag <?= $lang['active'] ? 'active' : '' ?>" style="background: url('<?= url::base()?>images/flags/<?= $lang['icon'] ?>');"></a></li>
	<? endforeach; ?>
	</ul>
</div>