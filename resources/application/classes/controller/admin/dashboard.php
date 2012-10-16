<?php
class Controller_Admin_Dashboard extends Controller_Admin
{
	public function before()
	{
		parent::before();
		
		View::factory()->set_global('tab', 'dashboard');
	}
	public function action_index()
	{
		
		$this->template->content = View::factory('admin/dashboard');
	}
}