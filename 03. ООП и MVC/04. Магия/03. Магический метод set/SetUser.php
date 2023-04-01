<?php
class SetUser
{
  private $name;
	private $age;
		
  public function __get($property)
  {
    return $this -> $property; 
  }
		
  public function __set($name, $value)
  {
    if ($name == 'name') {
      if ($value != '') {
        $this -> name = $value;
      }
    }
    if ($name == 'age') {
      if ($value >= 0 and $value <= 70) {
        $this -> age = $value;
      }
    }
  }
}