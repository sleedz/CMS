<?php

class Url extends Kohana_Url
{
	public static function base_url()
	{
		return arr::get($_SERVER, 'SERVER_NAME');
	}
}