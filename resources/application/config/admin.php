<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
	'navi' => array(
		'dashboard' => array(
			'name' => __('Dashboard'),
			'url' => 'admin',
			'access' => 'admin',
			'sub' => array()
		),
		'menu' => array(
			'name' => __('Menu'),
			'url' => 'admin/menu',
			'access' => 'admin',
			'sub' => array(
				array('name' => __('Add category'), 'url' => 'admin/menu/add', 'access' => 'super_admin'),
				array('name' => __('Add article'), 'url' => 'admin/article/add', 'access' => 'admin'),
				array('name' => __('All articles'), 'url' => 'admin/article', 'access' => 'admin'),
				array('name' => __('Show menu'), 'url' => 'admin/menu', 'access' => 'admin')
			)
		),
		'gallery' => array(
			'name' => __('Gallery'),
			'url' => 'admin/gallery',
			'access' => 'admin',
			'sub' => array(
				array('name' => __('Add gallery'), 'url' => 'admin/gallery/add', 'access' => 'admin'),
				array('name' => __('Gallery list'), 'url' => 'admin/gallery', 'access' => 'admin'),
			),
		),
	),
	'settings' => array(
		array('name' => __('Users'), 'url' => 'admin/settings/users', 'access' => 'admin'),
		array('name' => __('Languages'), 'url' => 'admin/settings/languages', 'access' => 'super_admin'),
	)
);