<?php
require_once 'iMath.php';

class Math implements iMath
{
  public function sum($a, $b)
  {
    return $a + $b;
  }

  public function subtract($a, $b)
  {
    return $a - $b;
  }

  public function multiply($a, $b)
  {
    return $a * $b;
  }

  public function divide($a, $b)
  {
    return $a / $b;
  }
}