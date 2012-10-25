<?php
class Controller_Admin_Ajax extends Controller_Admin
{
	public function action_set_filter()
	{
		$this->auto_render = false;

		if($_POST)
		{
			$post = $_POST;
			$post = arr::map('trim', $post);

			if($filter = arr::get($post, 'filter'))
			{
				$filters = Session::instance()->get('filters');
				$filters[$filter[0]] = $filter[1];
				Session::instance()->set('filters', $filters);
			}
		}
	}
}