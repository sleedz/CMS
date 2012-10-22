<?php

class Validate extends Kohana_Valid
{
	public static function email_exists($value)
	{
		$user = ORM::factory('user', array('email' => $value));
		if($user->loaded())
			return true;
		else
			return false;
	}

	public static function key_exists($value)
	{
		$user = ORM::factory('user', array('email' => $value));
		if($user->key()->count_all() != 0)
			return false;
		else
			return true;
	}
}