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

  public function getDir() {
    $replaceText = dirname($this -> filePath, 2);
    $replaceString = dirname($this -> filePath, 1);
    $result = str_replace($replaceText . '\\', '', $replaceString);
    return $result;
  }

  public function getName() 
  {
    return $this -> pathInfo['filename'];
  }

  public function getExt()
  {
    return $this -> pathInfo['extension'];
  }

  public function getSize()
  {
    return filesize($this -> filePath);
  }

  public function getText()
  {
    return file_get_contents($this -> filePath);
  }

  public function setText($text)
  {
    file_put_contents($this -> filePath, $text);
  }

  public function appendText($text)
  {
    file_put_contents($this -> filePath, $text, FILE_APPEND);
  }

  public function copy($copyPath)
  {
    rename($this -> filePath, $copyPath);
  }
}