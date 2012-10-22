<?php
class Account
{
	private static $instance = NULL;
	
	private $base = NULL;
	private $db_prefix = NULL;
	private $token_id = NULL;
	
	public static function instance()
	{
		if(self::$instance == NULL)
		{
			self::$instance = new self();
		}
		
		return self::$instance;
	}
	
	public function logged_in($user = NULL)
	{
		$user = $this->get_user($user);
		
		return (is_object($user) AND $user instanceof Model_User AND $user->loaded());	
	}
	
	public function get_user($user = NULL)
	{
		$user = $this->user($user);
	
		if($user === FALSE)
		{
			$user = $this->auto_login();
		}
	
	
	
		return $user;
	}
	
	public function user($user = NULL)
	{
		if($user != NULL)
			return $user;
			
		if(($user = Session::instance()->get('auth_user', FALSE)) !== FALSE)
		{
			if($user instanceof Model_User)
			{
				return $user;
			}
		}
	
		return FALSE;
	}
	
	public function login($user, $post)
	{
		if($this->hash_password($post['password'], $user->hash) == $user->password)
		{
			$user->logins++;
			$user->last_login = db::expr('NOW()');
			if(isset($post['remember']))
				$user->remind_hash = $this->add_token();
			//die;
			$user->save();
			Session::instance()->set('auth_user', $user);
		}
	}
	
	public function add_token()
	{
		$token = $this->generate_token();
		$expiration = Date::WEEK;
		Cookie::set('token', $token, $expiration);
		
		return $token;
	}
	
	private function generate_token()
	{	
		return sha1(rand().Request::$user_agent).md5(rand());
	}
	
	public function auto_login()
	{
		if(($token = Cookie::get('token')) !== FALSE)
		{
			$user = ORM::factory('user', array('remind_hash' => $token));
			if($user->loaded())
			{
				$token = $this->add_token();
				
				$user->remind_hash = $token;
				$user->logins++;
				$user->save();
				Session::instance()->set('auth_user', $user);
						
				return $user;
				
			}
		}
	
		return FALSE;
	}
	
	public function logout()
	{
		if(($token = Cookie::get('token')) !== FALSE)
		{
			Cookie::delete('token');
			$user = $this->get_user();
			$user->remind_hash = null;
			$user->save();
			
		}
		Session::instance()->delete('auth_user');
		Session::instance()->destroy();
	}
	
	private function hash_password($password, $hash)
	{
		return hash('whirlpool', sha1($password).$hash);
	}
	
	public function is_superadmin()
	{
		$user = $this->user();
		if($user->role == 'super_admin')
			return true;
		else
			return false;
	}
	
	
}