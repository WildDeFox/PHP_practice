<?php
class Tag
{
  private $name; // Свойство для хранения имени тега
  private $attrs;

  public function __construct($name, $attrs = [])
  {
    $this -> name = $name;
    $this -> attrs = $attrs; // Записываем атрибуты в свойство
  }

  // Выводим открывающую часть тега:
  public function open()
  {
    $name = $this->name;
    $attrsStr = $this->getAttrsStr($this->attrs); // Формируем строку с атрибутами
    return "<$name $attrsStr>"; // Добавляем атрибуты после имени тега
  }

  // Выводим закрывающую часть тега
  public function close()
  {
    $name = $this->name;
    return "</$name>";
  }

  private function getAttrsStr($attrs)
  {
    if (!empty($attrs)) {
      $result = '';

      foreach ($attrs as $name => $value) {
        $result .= "$name=\"$value\"";
      }
      return $result;
    } else {
      return '';
    }
  }
}