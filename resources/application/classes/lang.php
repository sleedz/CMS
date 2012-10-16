<?php
class Lang
{
	public static function get()
	{
		$http_accept = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
		if(isset($http_accept) && strlen($http_accept) > 1)  
		{
			$languages = explode(",",$http_accept);
			foreach ($languages as $language) 
			{
				if(preg_match("/(.*);q=([0-1]{0,1}\.\d{0,4})/i",$language,$matches))
				{
					$matches[1] = strtolower(str_replace(array(' ', '_'), '-', $matches[1]));
					$lang[$matches[1]] = (float)$matches[2];
				}
				else
				{
					$language = strtolower(str_replace(array(' ', '_'), '-', $language));
					$lang[$language] = 1.0;
				}
				
				
			}
			
			$qval = 0.0;
			foreach ($lang as $key => $value) {
				if ($value > $qval) {
					$qval = (float)$value;
					$deflang = $key;
				}
			}
		}
		return strtolower($deflang);
	}
	
	public static function icons()
	{
		$icons = Kohana::$config->load('lang.icons');
		
		$langs = array();
		
		if($_POST)
		{
			
			Session::instance()->set('post_data', $_POST);
		}
		//$lang = explode('-', $lang);
		foreach($icons as $lg => $icon)
		{
			$lang = I18n::lang();
			$active = false;
			
			if($lang == $lg)
				$active = true;
			else 
			{
				$lang = explode('-', $lang);
				if($lang[0] == $lg)
					$active = true;
			}
			
			$langs[] = array(
					'url' => '/admin/language/'.$lg.'?redirect='.trim(arr::get($_SERVER, 'PATH_INFO'), '/'),
					'icon' => $icon,
					'active' => $active
			);
		}
		return $langs;
	}
}