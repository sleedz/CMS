<?php

class I18n extends Kohana_I18n 
{
	public static function load($lang)
	{
		$lang_files = (Kohana::list_files('i18n/pl'));
		$lfiles = array();
		foreach($lang_files as $file)
		{
			$pathinfo = pathinfo($file);
			$lfiles[] = ($pathinfo['filename']);
		}
		if (isset(I18n::$_cache[$lang]))
		{
			return I18n::$_cache[$lang];
		}

		// New translation table
		$table = array();

		// Split the language: language, region, locale, etc
		$parts = explode('-', $lang);
		//$parts = array_merge($parts, $files);
		$lg = ($parts[0]);
		do
		{
			// Create a path for this set of parts
			$path = implode(DIRECTORY_SEPARATOR, $parts);
			if ($files = Kohana::find_file('i18n', $path, NULL, TRUE))
			{
				$t = array();
				foreach ($files as $file)
				{
					// Merge the language strings into the sub table
					$t = array_merge($t, Kohana::load($file));
				}

				// Append the sub table, preventing less specific language
				// files from overloading more specific files
				$table += $t;
			}

			// Remove the last part
			array_pop($parts);
		}
		while ($parts);

		
		foreach($lfiles as $file)
		{
			$path = $lg. DIRECTORY_SEPARATOR.$file;
			if ($files = Kohana::find_file('i18n', $path, NULL, TRUE))
			{
				$t = array();
				foreach ($files as $file2)
				{
					$t = array_merge($t, Kohana::load($file2));
				}
				$table += $t;
			}
		}
		// Cache the translation table locally
		return I18n::$_cache[$lang] = $table;
	}
}