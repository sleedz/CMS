<?php
class Controller_Admin_Category extends Controller_Admin
{
	public function action_add()
	{
		$category = ORM::factory('category');
		
		$this->category_form($category, FALSE);
	}

	public function action_index()
	{
		$this->template->content_title = __('Kategorie');
		$this->template->content = View::factory('admin/category/table');;
	
		
	}

	private function category_form($category, $edit = false)
	{

		$this->template->content_title = $edit ? __('Edytuj kategorię') : __('Dodaj kategorię');

		if($edit AND $category->loaded())
		{
			$this->template->content_title = __('Edytuj kategorię :title', array(':title' => $category->title));
		}
		if($_POST)
		{
			if($category->save_category($edit))
			{
				Flash::set(__('Dodałeś kategorię :title', array(':title' => $category->title)));
				Request::$initial->redirect(url::site('admin/categoriy'));	
			}
			else
				message::error($category->errors, 'error');
				
		}

		$sections = Kohana::$config->load('articles.category.sections');
		$categories = $this->get_tree();

		$this->template->content = View::factory('admin/category/form')
			->set('category', $category)
			->set('content_types', Kohana::$config->load('articles.category.contents'))
			->set('sections', $sections)
			->set('categories', $categories);
	}

	public function get_tree()
	{
		$categories = ORM::factory('category');
		
		$tree = array(
			0 => array(
				'id' => 1,
				'parent' => 0,
				'title' => __('Kategoria główna')
			)
		);

		foreach($categories->find_all() as $category)
		{
			$arr = array(
				'id' => $category->id,
				'parent' => $category->parent,
				'title' => $category->title
			);
			$tree[] = $arr;
		}
		return ($this->menu_sort($tree));
	}

	private function menu_sort($categories, $master = 0)
	{

	    $open = array();
	    $return = NULL;

	    foreach($categories as $category)
	    {
	        if($category['parent'] == $master){

	            if(!$open){
	                $return .= '<ul>';
	                $open = true;
	            }

	            $return .= '<li class="tree"><a href="'.$category['id'].'" class="category-parent-select">'.$category['title'].'</a>';

	            $return .= $this->menu_sort($categories, $category['id']);
	            $return .= '</li>';

	        }
	    }

	    if($open)
	        $return .= '</ul>';

	    return $return;

	}
}