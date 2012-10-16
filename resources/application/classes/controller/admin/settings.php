<?php
class Controller_Admin_Settings extends Controller_Admin
{
	public function before()
	{
		parent::before();
		$this->add_title(__('Settings'));
	}
}