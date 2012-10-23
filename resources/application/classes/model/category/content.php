<?php
class Model_category_Content extends ORM
{
	protected $_created_column = array('column' => 'created_at', 'format' => 'Y-m-d H:i:s');
	protected $_updated_column = array('column' => 'updated_at', 'format' => 'Y-m-d H:i:s');

}