<?php
class Model_Article extends ORM
{
	protected $_created_column = array('column' => 'created_at', 'format' => 'Y-m-d H:i:s');
	protected $_updated_column = array('column' => 'updated_at', 'format' => 'Y-m-d H:i:s');
	
	// protected $_has_many = array(
	// 	'content' => array('model' => 'category_content', 'foreign_key' => 'category_id'),
	// );

	protected $_belongs_to = array(
		'author' => array('model' => 'user', 'foreign_key' => 'author_id'),
		'category' => array('model' => 'category', 'foreign_key' => 'category_id'),
	);

	public $errors = array();

	public function save_article($edit = false)
	{
		if($_POST)
		{
			$post = $_POST;
			$post = arr::map('trim', $post);

			$valid = Validation::factory($post)
			->rule('title', 'not_empty')
			->rule('category_id', 'not_empty')
			->rule('category_id', 'is_numeric');

			if($valid->check())
			{
				$this->values($valid->as_array());
				$this->content = $valid['contents'];
				$this->author_id = Account::instance()->user()->id;
				$this->save();
				return $this;
			}
			else
				$this->errors = $valid->errors('article');
		}
	}

}