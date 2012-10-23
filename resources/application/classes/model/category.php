<?php
class Model_category extends ORM
{
	protected $_created_column = array('column' => 'created_at', 'format' => 'Y-m-d H:i:s');
	protected $_updated_column = array('column' => 'updated_at', 'format' => 'Y-m-d H:i:s');
	
	protected $_table_name = 'categories';

	protected $_has_many = array(
		'content' => array('model' => 'category_content', 'foreign_key' => 'category_id'),
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

}