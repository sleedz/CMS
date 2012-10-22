<?php
class Model_User extends ORM
{
	protected $_created_column = array('column' => 'created_at', 'format' => 'Y-m-d H:i:s');
	protected $_updated_column = array('column' => 'updated_at', 'format' => 'Y-m-d H:i:s');
	
	public $errors = array();
	
	public $is_super_admin = NULL;
	
	public function save_user($edit = TRUE)
	{
		$post = $_POST;
		$post = arr::map('trim', $post);
		
		$valid = Validation::factory($post)
			->rule('login', 'not_empty')
			->rule('login', array($this, 'check_login_exists'), array(':validation', ':field'))
			->rule('email', 'not_empty')
			->rule('email', 'valid::email');
		
		if($valid->check())
		{
			$this->values($post);
			$password = text::random(NULL, 10);
			$hash = sha1(text::random(NULL, 10));
			$this->hash = $hash;
			$this->password = $this->hash_password($password, $hash);
			$this->save();
			mail::send($valid['email'], 'Nowe konto do panelu', View::factory('mails/add_user')
					->set('user', $this)
					->set('password', $password));
		}
		else 
		{
			$this->errors = $valid->errors('user');
		}
	}
	
	public function login()
	{
		$post = $_POST;
		$post = arr::map('trim', $post);
		
		$user = ORM::factory('user', array(
				'login' => $post['login']
		));
		
		if($user->loaded())
		{
			Account::instance()->login($user, $post);
			return true;
		} 
		else
		{
			message::error(__('Podane dane są nie prawidłowe'));
		}
	}
	
	public function check_login_exists($valid, $field)
	{
		$user = ORM::factory('user', array('login' => $valid[$field]));
		
		if($user->loaded())
		{
			$valid->error('login', 'login_exists');
		}
	}

	// Funkcja do odzyskiwania haseł
	public function add_key()
	{
		if($_POST)
		{
			$post = $_POST;
			$post = arr::map('trim', $post);
			
			$valid = Validation::factory($post);
			$valid->rule('email', 'not_empty');
			$valid->rule('email', 'email');
			$valid->rule('email', 'validate::email_exists', array(':value'));
			$valid->rule('email', 'validate::key_exists', array(':value'));

			if($valid->check())
			{
				$user = ORM::factory('user', array('email' => $valid['email']));
				if($user->loaded())
				{
					$key = ORM::factory('user_key');
					$key->hash = sha1($user->email.time());
					$key->user_id = $user->id;
					$key->save();
					$content = View::factory('mails/change_password')
						->set('url', url::base_url().'/admin/login/forgot')
						->set('key', $key);
					$send = mail::send($valid['email'], 'Przypomnienie hasła do strony '.Kohana::$config->load('site.title'), $content);
					return $send;
				}
			}
			else
			{
				// var_dump($valid->errors('user'));
				$this->errors = $valid->errors('forgot');
			}
		}
	}

	public function key()
	{
		$key = ORM::factory('user_key')
			->where('used', '=', '0')
			->where('created_at', '>=', date('Y-m-d H:i:s', mktime(date('H'), date('m'), date('s'), date('m'), date('d')-1, date('Y'))))
			->where('user_id', '=', $this->id);

		return $key;
	}

	public function change_password()
	{
		if($_POST)
		{
			$post = $_POST;
			$post = arr::map('trim', $post);
			
			$valid = Validation::factory($post)
				->rule('password', 'not_empty')
				->rule('confirm-password', 'not_empty')
				->rule('confirm-password', 'matches', array(':validation', ':field', 'password'));

			if($valid->check())
			{
				$hash = sha1(text::random(NULL, 10));
				$this->hash = $hash;
				$this->password = $this->hash_password($valid['password'], $hash);
				$this->save();
				$key = $this->key();
				if($key->find()->loaded())
				{
					$key->used = '1';
					$key->save();
				}
				return $this;
			}
			else
				$this->errors = $valid->errors('user');
		}
	}

	private function hash_password($password, $hash)
	{
		return hash('whirlpool', sha1($password).$hash);
	}
}