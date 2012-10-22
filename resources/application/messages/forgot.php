<?php

return array(
	'email' => array(
		'not_empty' => __('Wpisz adres email'),
		'email' => __('Adres email jest nie poprawny'),
		'validate::email_exists' => __('Podany adres email nie istnieje'),
		'validate::key_exists' => __('Na ten adres już został wysłany email do zmiany hasła'),
	),
);