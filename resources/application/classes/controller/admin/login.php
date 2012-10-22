<?php
class Controller_Admin_Login extends Controller_Admin
{
	public $template = 'admin/login';
	public $auth = FALSE;
		
	public function action_login()
	{
		$this->template->content = View::factory('admin/login/form');
		if(!Account::instance()->logged_in())
		{
			$this->add_title(__('Login'));
			$user = ORM::factory('user');
			
			if($_POST)
			{
				$user->login();
				Request::$initial->redirect(url::site(arr::get($_GET, 'redirect')));
			}
		}
		else
		{
			Request::$initial->redirect(url::site('admin'));
		}
	}
	
	public function action_logout()
	{
		$this->auth = TRUE;
		
		Account::instance()->logout();
		
		Request::$initial->redirect(url::site('admin/login'));
	}

	public function action_forgot()
	{
		$this->template->content = View::factory('admin/login/forgot');

		if(arr::get($_GET, 'key'))
		{
			$this->template->content = View::factory('admin/login/change_password');
		}
		else 
		{
			$user = ORM::factory('user');
			$user->add_key();
			Request::$initial->redirect(url::site('admin/login'));
		}
	}
}