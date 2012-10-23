<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
	'navi' => array(
		'dashboard' => array(
			'name' => __('Tablica'),
			'url' => 'admin',
			'access' => 'admin',
			'sub' => array()
		),
		'menu' => array(
			'name' => __('Menu'),
			'url' => 'admin/menu',
			'access' => 'admin',
			'sub' => array(
				array('name' => __('Dodaj kategorię'), 'url' => '/admin/category/add', 'access' => 'super_admin'),
				array('name' => __('Dodaj artykuł'), 'url' => 'admin/article/add', 'access' => 'admin'),
				array('name' => __('Wszystkie artykuły'), 'url' => 'admin/article', 'access' => 'admin'),
				array('name' => __('Pokaż menu'), 'url' => 'admin/category', 'access' => 'admin')
			)
		),
		'gallery' => array(
			'name' => __('Gallery'),
			'url' => 'admin/gallery',
			'access' => 'admin',
			'sub' => array(
				array('name' => __('Dodaj galerię'), 'url' => 'admin/gallery/add', 'access' => 'admin'),
				array('name' => __('Lista galerii'), 'url' => 'admin/gallery', 'access' => 'admin'),
			),
		),
	),
	'settings' => array(
		array('name' => __('Użytkownicy'), 'url' => 'admin/settings/users', 'access' => 'admin'),
		array('name' => __('Języki'), 'url' => 'admin/settings/languages', 'access' => 'super_admin'),
	)
);