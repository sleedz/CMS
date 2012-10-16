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
}