<?php
class Controller_Admin_Login extends Controller_Admin
{
	public $template = 'admin/login';
	public $auth = FALSE;

	public function after()
	{
		if(Account::instance()->logged_in() AND $this->auth == FALSE)
		{
			Request::$initial->redirect(url::site('admin'));
		}

		parent::after();
	}
		
	public function action_login()
	{
		$this->template->content = View::factory('admin/login/form');
		
			$this->add_title(__('Login'));
			$user = ORM::factory('user');
			
			if($_POST)
			{
				if($user->login())
				{
					if(arr::get($_GET, 'redirect'))
						Request::$initial->redirect(url::site(arr::get($_GET, 'redirect')));
					else
						Request::$initial->redirect(url::site('admin'));
				}
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
			$get = $_GET;
			$get = arr::map('trim', $get);

			$key = ORM::factory('user_key');
			$key->where('hash', '=', arr::get($get, 'key'));
			$key->find();
			if($key->loaded())
			{
				if($key->user->change_password())
				{
					Flash::set(__('Hasło zostało zmienione'));
					Request::$initial->redirect(url::site('admin/login'));
				}
				else
				{
					message::error($key->user->errors);
				}
			}
			else
			{
				// var_dump($key->errors);
				message::error(__('Niestety klucz jest nie poprawny'));
			}

			$this->template->content = View::factory('admin/login/change_password');
			

			if($_POST)
			{
				$post = $_POST;
				$post = arr::map('trim', $post);

				$user = ORM::factory('user');
			}
			

		}
		else 
		{
			$user = ORM::factory('user');
			if($key = $user->add_key())
			{
				Flash::set(__('Na podany adres wysłano maila z linkiem do zmiany hasła'));
				Request::$initial->redirect(url::site('admin/login'));
			}
			else
				message::error($user->errors);
		}
	}
}