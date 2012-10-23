<div id="top-navi-content" class="site">
	<ul id="top-left-navi">
	<? foreach($navi as $key => $element): ?>
		<? if($element['access'] == 'super_admin' AND Account::instance()->is_superadmin()): ?>
			<li class="<?= ($tab == $key) ? 'active' : '' ?>"><a href="<?= url::site($element['url']) ?>" sub="<?= $key ?>"><?= $element['name'] ?></a>
		<? elseif($element['access'] == 'admin'): ?>
			<li class="<?= ($tab == $key) ? 'active' : '' ?>"><a href="<?= url::site($element['url']) ?>" sub="<?= $key ?>"><?= $element['name'] ?></a>
		<? endif; ?>
	<? endforeach; ?>
	</ul>
			
	<ul id="top-right-navi">
		<li class="navi-divider"></li>
		<li><a href="<?= url::site('admin/settings') ?>" id="my-account"><?= __('Settings')?></a>
		<li class="navi-divider"></li>
		<li><a href="#" id="my-account"><?= __('My account')?></a>
		<li class="navi-divider"></li>
		<li><a href="<?= url::site('admin/logout') ?>" id="logout"><?= __('Logout')?></a>
	</ul>
</div>