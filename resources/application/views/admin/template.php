<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?= $title ?></title>
<link rel="stylesheet" href="<?= url::base()?>styles/admin/base.css" type="text/css" media="all" />
<script type="text/javascript" src="<?= url::base() ?>scripts/jquery-1.8.2.min.js"></script>
<link rel="stylesheet" href="<?= url::base() ?>scripts/fancybox/source/jquery.fancybox.css?v=2.1.2" type="text/css" media="screen" />
<script type="text/javascript" src="<?= url::base() ?>scripts/fancybox/source/jquery.fancybox.pack.js?v=2.1.2"></script>
<script type="text/javascript" src="<?= url::base() ?>scripts/admin/scripts.js"></script>
</head>
<body>
	<div class="wrap" id="top-header">
		<?= $lang_navi ?>
		<div id="top-header-content" class="site">
			<h1>admin panel</h1>
			
			<div id="search">
				<form action="" method="GET">
					<input type="text" id="search" name="search-text" value="<?= __('Search') ?>" default="<?= __('Search') ?>" />
				</form>
			</div>
		</div>
	</div>
	
	<div class="wrap" id="top-navi">
		<?= $navi ?>
		
		<div class="wrap" id="top-sub-navi">
			<?= $sub_navi ?>
			<?= $settings_navi ?>
		</div>
	</div>
	<div class="gradient"></div>
	
	<div id="main-wrap" class="wrap">
		<div id="main" class="site">
			<h1><?= $content_title ?></h1>
			
			
			<div id="content" class="radius">
				<?= View::factory('admin/partial/filter') ?>
				<div class="wrap" style="float: left">
				<div id="message" class="<?= message::class_name() ?>" style="<?= message::get() ? 'display: block;' : 'display: none;' ?>" >
					<ul>
						<?= message::get() ?>
					</ul>
				</div>
				</div>
				<?= $content ?>
			</div>
		
		</div>
	</div>
	
	<div class="wrap">
		<div id="site-footer" class="site"><span>Copyright &copy; by Kamil Wojciech. All rights reserved.</span></div>
	</div>
</body>
</html>