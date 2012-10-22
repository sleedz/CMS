<div id="settings-navi" class="active site">
	<ul>
	<? foreach($navi as $element): ?>
		<? if($element['access'] == 'super_admin' AND Account::instance()->is_superadmin()): ?>
			<li><a href="<?= url::site($element['url']) ?>"><?= $element['name'] ?></a>
		<? elseif($element['access'] == 'admin'): ?>
			<li><a href="<?= url::site($element['url']) ?>"><?= $element['name'] ?></a>
		<? endif; ?>
	<? endforeach; ?>
	</ul>
</div>