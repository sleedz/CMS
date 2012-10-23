<?php

return array(
	'title' => array(
		'not_empty' => __('Wpisz tytuł'),
	),
	'url' => array(
		'not_empty' => __('Wpisz adres url'),
	),
	'section' => array(
		'not_empty' => __('Wybierz sekcję'),
	),
	'parent' => array(
		'not_empty' => __('Wybierz kategorię nadżędną'),
		'is_numeric' => __('Błędna kategoria nadżędna'),
	),
	'elements' => array(
		'not_empty' => __('Wybierz co ma się wyświetlać na stronie'),
	),
);