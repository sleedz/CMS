<?php

class Flash
{

  public static function get()
  {
    $session = Session::instance();
    $data = $session->get_once('info');
    //$session->delete('flash');
    
    return $data;
  }
  
  public static function set($value)
  {
    Session::instance()->set('info', $value);
  }
}