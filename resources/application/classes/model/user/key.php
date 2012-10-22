<?

class Model_User_Key extends ORM
{
	protected $_created_column = array('column' => 'created_at', 'format' => 'Y-m-d H:i:s');
	protected $_updated_column = array('column' => 'updated_at', 'format' => 'Y-m-d H:i:s');
	
	public $errors = array();

	protected $_belongs_to = array(
		'user' => array('model' => 'user', 'foreign_key' => 'user_id'),
	);

	public function find()
	{
		$this->where('used', '=', '0');
		$this->where('created_at', '>=', date('Y-m-d H:i:s', mktime(date('H'), date('m'), date('s'), date('m'), date('d')-1, date('Y'))));
		return parent::find();
	}
}