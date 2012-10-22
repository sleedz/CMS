<?php

return array(
  'login' => array(
    'not_empty' => __('Please enter username'),
  	'login_exists' => __('Username is already taken')
  ),
  'email' => array(
    'not_empty' => __('Please enter email address'),
  	'valid::email' => __('Please enter a valid email'),
  	'not_exists' => __('There is no such account')
  ),
);