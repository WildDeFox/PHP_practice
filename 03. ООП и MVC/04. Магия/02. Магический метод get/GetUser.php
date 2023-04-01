<?php
class GetUser 
{
  private $name;
  private $age;

  public function __construct($name, $age)
  {
    $this -> name = $name;
    $this -> age = $age;
  }

  public function __get($property)
  {
    if ($property === 'full') {
      return $this -> name . ' ' . $this -> age;
    }

    return $this -> $property;
  }
}