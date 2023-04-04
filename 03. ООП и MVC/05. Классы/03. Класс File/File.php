<?php 
require_once 'iFile.php';
class File implements iFile
{
  private $filePath;
  private $pathInfo = [];

  public function __construct($filePath)
  {
    $this -> filePath = $filePath;
    $this -> pathInfo = pathinfo($this -> filePath);
  }

  public function getPath()
  {
    return $this -> pathInfo['dirname'];
  }
}