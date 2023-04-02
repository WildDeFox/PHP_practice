<?php
class Interval
{
  private $date1;
  private $date2;
  private $diff;

  public function __construct(Date $date1, Date $date2)
  {
    $this -> date1 = $date1;
    $this -> date2 = $date2;
    $origin = date_create($this -> date1);
    $target = date_create($this -> date2);
    $interval = date_diff($origin, $target);
    $this -> diff = $interval;
  }

  public function toDays()
  {
    // вернет разницу в днях
    echo $this -> diff -> format('%a days');
    // $newDate =(int) $interval -> format('%a');
    // echo $newDate / 30;
  }

  public function toMonth() {
    // вернет разницу в месяцах
    $newDate = (int) $this -> diff -> format('%a');
    echo round($newDate / 30);
  }

  public function toYear() {
    // вернет разницу в годах
    $newYear = (int) $this -> diff -> format('%a');
    echo round($newYear / 360);
  }
}