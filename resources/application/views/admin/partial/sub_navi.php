<? foreach($navi as $key => $element): ?>
	<? if(!empty($element['sub'])): ?>
	<div id="<?= $key ?>" class="site top-sub-navi-content <?= $tab == $key ? 'active' : '' ?>">
		<ul>
		<? foreach($element['sub'] as $sub): ?>
			<? if($sub['access'] == 'super_admin' AND Account::instance()->is_superadmin()): ?>
				<li><a href="<?= $sub['url']?>"><?= $sub['name'] ?></a></li>
			<? elseif($sub['access'] == 'admin'): ?>
				<li><a href="<?= $sub['url']?>"><?= $sub['name'] ?></a></li>
			<? endif; ?>
		<? endforeach; ?>
		</ul>
	</div>
	<? endif; ?>
<? endforeach; ?>