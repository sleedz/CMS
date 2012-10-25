<?php
class Controller_Admin_Article extends Controller_Admin
{
	public function action_index()
	{
		$this->template->content_title = _('Artykuły');
		$this->template->content = View::factory('admin/articles');
	
		
	}

	public function action_add()
	{
		$this->template->content_title = __('Dodaj artykuł');

		$article = ORM::factory('article');
		$this->article_form($article);
				
	}

	public function action_edit()
	{
		$this->template->content_title = __('Edytuj artykuł');

		$article = ORM::factory('article', array('category_id' => $this->request->param('id')));
		if($article->loaded())
		{
			// View::set_global('article', $article);
			// Fields::set($article);
		}
		// var_dump($article->title);
		$this->article_form($article, true);
				
	}

	private function article_form($article, $edit = false)
	{
		$category = ORM::factory('category', $this->request->param('id'));
		if($_POST)
		{
			if($article->save_article($edit))
			{
				Flash::set(__('Dodałeś artykuł :title', array(':title' => $article->title)));
				Request::$initial->redirect(url::site('admin/article'));	
			}
			else
				message::error($article->errors, 'error');
				
		}
		
		$ckeditor = new CKEditor();
		$ckfinder = new CKFinder('/scripts/ckfinder/', 800, 600);
		$ckfinder->SetupCKEditorObject($ckeditor);
		$this->template->content = View::factory('admin/articles/form')
			->set('ckeditor', $ckeditor)
			->set('categories', ORM::factory('category')->find_all())
			->set('article', $article)
			->set('admin', Account::instance()->is_superadmin())
			->set('category', $category);
	}
}