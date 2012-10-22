<?php defined('SYSPATH') or die('No direct script access.');

class Form
{
  public static $object = NULL;
  public static $errors = array();
  
  public static function value($field, $default = NULL)
  {
    
    
    if(arr::path($_POST, $field) !== NULL)
    {
      $value = arr::path($_POST, $field);
          
      if(is_array($value)) {
      	return $value;
      }
     	else
			return html::chars(trim($value));
    }
    else
    {
      $fields = explode('.', $field);
      
      if(isset($fields[1]) AND isset($fields[2]))
      {
        	if($fields[2] != 0)
			{
		  		$obj = self::$object->{$fields[0]}->offset($fields[2]-1)->find();
				//echo $obj->name;	
		  		$value = $obj->{$fields[1]}; //(isset($obj->{$fields[1]})) ? $obj->{$fields[1]} : NULL;
				
				//debug::dump($obj);
			} 
			else
				$value = $default;
      }
      else      
      {
        //echo $value = self::$object->{$fields[0]};
        //$value = self::$object->{$fields[0]}
		  $value = (isset(self::$object->{$fields[0]})) ? self::$object->{$fields[0]} : $default;
      }
        
      //$field = $field.'.'.$key.'.'.$number;
      
          
      return $value;
    }
    

  }
  
  public static function elements($field, $count = NULL)
  {
    $elements = array();
	 
	 /*if(isset($_FILES[$field]))
    {
      $elements = range(0, count(current($_FILES[$field])) - 1);  
    }*/

		if(isset($_POST[$field]) OR isset($_FILES[$field]))
		{
			$count = 0;
			if(isset($_POST[$field]))
				$count += count(current($_POST[$field]));
			
			if(isset($_FILES[$field]))
				$count += count(current($_FILES[$field]));
			
			//echo $count;	
			
			$elements = range(0, $count - 1);  
		}   
		elseif(isset(self::$object->{$field}))
		{
			if($field == 'companies')
			{
				$elements = range(0, 0);
			}
			else
			{
				$count = self::$object->{$field}->count_all();
				$elements = range(0, ($count == 0) ? 0 : $count);  
			}
		}
		else
		{
    		$elements = range(0, ($count == 0) ? 0 : $count);  	
		}
    
    return (count($elements) == 0) ? array(0) : $elements; 
  }
  
  public static function select($field, $value, $default = NULL)
  {
    return (self::value($field, $default) == $value) ? 'selected="selected"' : '';
  }
  
  public static function checkbox($field, $value)
  {
    return (self::value($field) == $value) ? 'checked="checked"' : '';
  }
  
	public static function error_class($field)
	{
  		if(isset(self::$errors[$field]))
  			return 'error';
  			
		return '';
 	}
 	
 	public static function error($field)
	{
  		if(isset(self::$errors[$field]))
  			return '<span class="validation error">'.self::$errors[$field].'</span>';
  			
		return '';
 	}
}