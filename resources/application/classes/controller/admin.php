<?php

class Controller_Admin extends Controller_Template
{
	public $template = 'admin/template';
	public $auth = TRUE;
	
	public function before()
	{
		
		parent::before();
		
		if($this->auth AND !Account::instance()->logged_in())
		{
			Request::$initial->redirect(Route::get('login')->uri().'?redirect='.trim(arr::get($_SERVER, 'PATH_INFO'), '/'));	
		}
		// Jeszcze do poprawy
		if($post = Session::instance()->get('post_data') AND Session::instance()->get('post_target') == trim(arr::get($_SERVER, 'PATH_INFO'), '/'))
		{
			$_POST = $post;
			Session::instance()->set('post_data', null);
			Session::instance()->set('post_target', null);
		}
		if(Session::instance()->get('post_target') == null)
			Session::instance()->set('post_data', null);
		
		$navi = Kohana::$config->load('admin.navi');
		$settings_navi = Kohana::$config->load('admin.settings');
		
		$this->template->title = array();
		$this->template->title[] = __('Admin panel');
		$this->template->content_title = __('Admin panel');
		$this->template->navigation = array();
		$this->template->navi = View::factory('admin/partial/navi')
			->set('navi', $navi);
		$this->template->sub_navi = View::factory('admin/partial/sub_navi')
			->set('navi', $navi);
		$this->template->lang_navi = View::factory('admin/partial/lang')
			->set('languages', lang::icons());
		$this->template->settings_navi = View::factory('admin/partial/settings_navi')
			->set('navi', $settings_navi);
		
		View::factory()->set_global('tab');
	}
	
	public function after()
	{
		$navigation = array();
		foreach($this->template->navigation as $url=>$name)
		{
			$navigation[] = '<li>'.html::anchor($url, $name).'</li>';
		}
			
		$this->template->title = (! empty($this->template->title)) ? implode(' - ', $this->template->title) : NULL;
		$this->template->navigation = (! empty($navigation)) ? implode('<li>&rarr;</li>', $navigation) : NULL;
		
		parent::after();
	}
	
	public function add_title($name, $url = NULL, $in_title = TRUE)
	{
		if(! empty($url))
			$this->template->navigation[$url] = $name;
	
		if($in_title)
			$this->template->title[] = $name;
	}
	
	public function generate_navi()
	{
		$navi = Kohana::$config->load('admin.navi');
		
		return View::factory('admin/partial/navi')
			->set('navi', $navi);
	}
	
	public function action_change_language()
	{
		$this->auto_render = FALSE;
		
		$lang = $this->request->param('lang');
		
		if(!in_array($lang, Kohana::$config->load('lang.available'))) 
		{
			$lang = Kohana::$config->load('lang.default');
		}
		Cookie::set('lang', $lang);
		I18n::lang($lang);
		Session::instance()->set('post_target', arr::get($_GET, 'redirect'));
		Request::$initial->redirect(url::site(arr::get($_GET, 'redirect')));
	}
}