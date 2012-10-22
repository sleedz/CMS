<?php

class Message
{
	public static $messages = array();
	
	public static function add($messages, $class = NULL)
	{
		$messages = (array)$messages;
				
		foreach($messages as $field=>$message)
		{
			self::$messages[$field] = array($message, $class);	
		}
		//var_dump(self::$messages);
	}
	
	public static function error($message)
	{
		self::add($message, 'error');	
	}
	
	public static function info($message)
	{
		self::add($message, 'info');	
	}
	
	public static function success($message)
	{
		self::add($message, 'success');	
	}
	
	
	public static function get($field = null)
	{
		$messages = self::$messages;
		if($field AND isset($messages[$field]))
			return $messages[$field][0];
		elseif($field AND !isset($messages[$field]))
			return false;
		
		$info = "";
		foreach(self::$messages as $message)
		{
			$info .= "<li>{$message[0]}</li>\n";
		}
		
		return $info;	
	}
	
	public static function class_name()
	{
		foreach(self::$messages as $message)
		{
			return $message[1];	
		}
		
		return NULL;	
	}
}