<?php
class Controller_Admin_Settings_Users extends  Controller_Admin_Settings
{
	public $auth = TRUE;
	public function before()
	{
		
		parent::before();
		$this->add_title(__('Users'));
		$this->template->content_title = __('Users');
	}
	
	public function action_index()
	{
		$this->template->content_title = __('Users');
		$this->template->content = 'aa';
		//$this->add_title('Użytkownicy');
	}
	
	public function action_add()
	{		
		$user = ORM::factory('user');
    	$this->user_form($user, FALSE);
	}
	
	private function user_form($user, $edit = FALSE)
	{
		if($edit)
		{
			$this->add_title(__('Edit user'), $user->url('edit'));
			$this->template->content_title = __('Edit user');
		}
		else
		{
			$this->add_title(__('Add user'));
			$this->template->content_title = __('Add user');
		}
		
		if($_POST)
		{
			if($user->save_user($edit))
			{
				
			}
			else 
			{
				message::error($user->errors);
			}
		}
		$this->template->content = View::factory('admin/settings/users/form');
		
		
	}
}