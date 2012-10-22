<?php

class Info
{
	public static function message()
	{
		$info = Flash::get();
		
		//die($info);
		
		if(! empty($info))
		{
			return $info = arr::get(Kohana::message('info'), $info, $info);
			//return '<div class="message ok">'.$info.'</div>';	
		}
		
		return NULL;
	}
}