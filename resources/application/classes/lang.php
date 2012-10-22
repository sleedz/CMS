<?php
class Lang
{
	
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