<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
	'category' => array(
		'contents' => array(
			'articles_list' => array(
				'name' => __('Lista artykułów'),
				'model' => 'article',
				'method' => 'find_all'
			),
			'article' => array(
				'name' => __('Pojedyńczy artykuł'),
				'model' => 'article',
				'method' => 'find',
			),
			'gallery' => array(
				'name' => __('Galeria'),
				'model' => 'gallery',
				'method' => 'find_all'
			),
		),
		'sections' => array(
			'top_navi' => array(
				'name' => __('Nawigacja'),
			),
 		),
	),
);