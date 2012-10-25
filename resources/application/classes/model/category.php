<?php
class Model_category extends ORM
{
	protected $_created_column = array('column' => 'created_at', 'format' => 'Y-m-d H:i:s');
	protected $_updated_column = array('column' => 'updated_at', 'format' => 'Y-m-d H:i:s');
	
	protected $_table_name = 'categories';

	protected $_has_many = array(
		'content' => array('model' => 'category_content', 'foreign_key' => 'category_id'),
	);

	protected $_belongs_to = array(
		'author' => array('model' => 'user', 'foreign_key' => 'author_id'),
	);

	public $errors = array();

	public function save_category($edit = true)
	{
		$post = $_POST;
		$post = arr::map('trim', $post);
		
		$valid = Validation::factory($post)
			->rule('title', 'not_empty')
			->rule('url', 'not_empty')
			->rule('section', 'not_empty')
			->rule('parent', 'not_empty')
			->rule('parent', 'is_numeric')
			->rule('elements', 'not_empty');

		if($valid->check())
		{
			$this->values($valid->as_array());
			$this->author_id = Account::instance()->user()->id;
			$this->save();

			$contents = ORM::factory('category_content');
			$contents->category_id = $this->id;
			$contents->type = $valid['elements'];
			$contents->save();

			return $this;
		}
		else
		{
			$this->errors = $valid->errors('category');
			// var_dump($valid->errors());
		}
	}

	public function filter()
	{
		$filter = array(
			'language' => Kohana::$config->load('lang.available')
		);
		$filters = Session::instance()->get('filters', array());
		foreach($filters as $key=>$val)
		{
			if(isset($filter[$key]))
				if(in_array($val, $filter[$key]))
					$this->where($key, '=', $val);
		}
		return $this;
	}

	public function language()
	{
		return Kohana::$config->load('lang.languages.'.$this->language);
	}

	public function can_add_article()
	{
		// if($this->)
	}

	public function content_type()
	{
		return $this->content->find();
	}

	public function edit_art_url()
	{
		return url::site('admin/article/edit/cat-'.$this->id);
	}
}