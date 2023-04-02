<?php
class Date 
{
  private $data;
  private $arrMonthRus = ["Январь", "Февраль", "Март", "Апрель", "Май",
                       "Июнь", "Июль", "Август", "Сентябрь", "Октябрь",
                        "Ноябрь", "Декабрь"];
  private $arrMonthEng = ["January", "February", "March", "April", "May",
                         "June", "July", "August", "September", "October",
                        "November", "December"];
  private $arrWeekRus = ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"];
  private $arrWeekEng = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
  

  public function __construct($date = null)
  {
    // Если дата не переданна - пусть берется текущаяя
    if ($date === null) {
      $this -> data = date_create(date("Y-m-d"));
    } else {
      $this -> data = date_create($date);
    }
  }

  public function getDay() {
    // Возвращает день
    return date_format($this -> data, 'd');
  }

  public function getMonth($lang = null)
  {
    // Возвращает месяцx
    // переменная $lang может принимать значение ru или en
		// если эта не пуста - пусть месяц будет словом на заданном языке
    $nowMonth = (int) date_format($this -> data, 'm') - 1;

    if ($lang == 'ru') {
      return $this -> arrMonthRus[$nowMonth];
    } else if ($lang == 'en') {
      return $this -> arrMonthEng[$nowMonth];
    } else {
      return date_format($this -> data, 'm');
    }
  }

  public function getYear()
  {
    // Возвращает год
    return date_format($this -> data, 'Y');
  }

  public function getWeekDay($lang = null)
  {
    // Возвращает день недели
    // Переменная $lang может принимать значение ru или en
    // если эта не пуста - пусть день будет словом на заданном языке

    $mk = mktime(0, 0, 0, date_format($this -> data, 'm'), date_format($this -> data, 'd'), date_format($this -> data, 'Y'));
    $weekDay = date('w', $mk);

    if ($lang == 'ru') {
      return $this -> arrWeekRus[$weekDay];
    } else if ($lang == 'en') {
      return $this -> arrWeekEng[$weekDay];
    } else {
      return $weekDay;
    }
  }

  public function addDay($value)
  {
    // Добавляет значение $value к дню
    date_modify($this -> data, "$value day");
  }

  public function subDay($value)
  {
    // Отнимает значение $value от дня
    date_modify($this -> data, "-$value day");
  }

  public function addMonth($value)
  {
    // Добавляет значение $value к месяцу
    date_modify($this -> data, "$value month");
  }

  public function subMonth($value)
  {
    // Отнимает значение $value от месяца
    date_modify($this -> data, "-$value month");
  }

  public function addYear($value)
  {
    // Добавляет значение $value к году
    date_modify($this -> data, "$value year");
  }

  public function subTear($value)
  {
    // Отнимает значение $value от года
    date_modify($this -> data, "-$value year");
  }

  public function format($format)
  {
    // Выведет дату в указанном формате
    // Формат пусть будет такой же как в функции date
    return date_format($this -> data, $format);
  }

  public function __toString()
  {
    // Выведет дату в формате "год-месяц-день"
    return date_format($this -> data, 'Y-m-d');
  }
}