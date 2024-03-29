<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------
  
// Load the core Kohana class
require SYSPATH.'classes/kohana/core'.EXT;

if (is_file(APPPATH.'classes/kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/kohana'.EXT;
}
/**
 * Set the default time zone.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/timezones
 */
date_default_timezone_set('Europe/Warsaw');

/**
 * Set the default locale.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/function.setlocale
 */
setlocale(LC_ALL, 'pl_PL.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @link http://kohanaframework.org/guide/using.autoloading
 * @link http://www.php.net/manual/function.spl-autoload-register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @link http://www.php.net/manual/function.spl-autoload-call
 * @link http://www.php.net/manual/var.configuration#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/*$lang = Cookie::get('lang', Lang::get());
if(!in_array($lang, Kohana::$config->load('lang.available'))) {
	$lang = Kohana::$config->load('lang.default');
}
Cookie::set('lang', $lang);*/


I18n::lang(I18n::$default);


/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
if (isset($_SERVER['KOHANA_ENV']))
{
	Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
}

Cookie::$salt = 'Be2A7magMCRt8e';
Cookie::$httponly = FALSE;
Cookie::$secure = FALSE;

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - integer  cache_life  lifetime, in seconds, of items cached              60
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 * - boolean  expose      set the X-Powered-By header                        FALSE
 */
Kohana::init(array(
	'base_url'   => '/',
	'index_file' => ''
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

$lang = Cookie::get('lang', I18n::browser());
if(!in_array($lang, Kohana::$config->load('lang.available'))) 
{
	$lang = I18n::$default;
}
Cookie::set('lang', $lang);
I18n::lang($lang);
 
/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
	 'auth'       => MODPATH.'auth',       // Basic authentication
	// 'cache'      => MODPATH.'cache',      // Caching with multiple backends
	// 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
	 'database'   => MODPATH.'database',   // Database access
	// 'image'      => MODPATH.'image',      // Image manipulation
	 'orm'        => MODPATH.'orm',        // Object Relationship Mapping
	// 'unittest'   => MODPATH.'unittest',   // Unit testing
	// 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
	 'I18n_plural'=> MODPATH.'I18n_plural',
	));
// var_dump(Kohana::modules());

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
Route::set('login', 'admin/login')
->defaults(array(
		'directory'		=> 'admin',
		'controller'	=> 'login',
		'action'		=> 'login',
));

Route::set('forgot', 'admin/login/forgot')
->defaults(array(
		'directory'		=> 'admin',
		'controller'	=> 'login',
		'action'		=> 'forgot',
));

Route::set('logout', 'admin/logout')
->defaults(array(
		'directory'		=> 'admin',
		'controller'	=> 'login',
		'action'		=> 'logout',
));

Route::set('admin', 'admin')
	->defaults(array(
		'directory'		=> 'admin',
		'controller'	=> 'dashboard',
		'action'		=> 'index',
));

Route::set('settings_index', 'admin/settings')
	->defaults(array(
		'directory' => 'admin',
		'controller' => 'settings',
		'action' => 'index'	
));

Route::set('settings', 'admin/settings(/<controller>(/<action>))')
	->defaults(array(
		'directory' => 'admin/settings',
		'controller' => 'settings',
		'action' => 'index'	
));

Route::set('change_language', 'admin/language/<lang>', array('lang' => '[a-z_-]+'))
->defaults(array(
		'controller' => 'admin',
		'action' => 'change_language',
		'lang' => null
));

Route::set('admin_actions', 'admin/<controller>(/<action>(/<type>-<id>))', array('id' => '[0-9]+', 'type' => '(cat|art|gal|news)'))
	->defaults(array(
		'directory' => 'admin',
		'action' => 'index'	
));

Route::set('ckfinder', 'ckfinder(/<string>)', array('string' => '(.*)'))
	->defaults(array(
		'controller' => 'admin',
		'action' => 'ckfinder'	
));

Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'welcome',
		'action'     => 'index',
));


