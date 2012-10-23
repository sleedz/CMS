<?php
class Controller_Admin_Settings extends Controller_Admin
{
	public function before()
	{
		parent::before();
		$this->add_title(__('Ustawienia'));
	}

	public function action_index()
	{
		$this->template->content_title = __('Ustawienia');
		$this->template->content = View::factory('admin/settings');;
	
		
	}
}