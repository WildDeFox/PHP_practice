<?php
// Сделайте объект какого-нибудь класса. Примените к объекту функцию
// get_class и узнайте имя класса, которому принадлежит объект.
class Test {
    public $name;
    public $age;
}
$test1 = new Test();
echo get_class($test1);

// Сделайте два класса: Test1 и Test2. Пусть оба класса имеют свойство name.
// Создайте некоторое количество объектов этих классов и запишите в массив $arr в произвольном порядке.
// Переберите этот массив циклом и для каждого объекта выведите значение
// его свойства name и имя класса, которому принадлежит объект.
class Test1 {
    public $name;

    public function __construct($name) {
        $this -> name = $name;
    }
}

class Test2 {
    public $name;

    public function __construct($name) {
        $this -> name = $name;
    }
}

$obj1 = new Test1('Oleg');
$obj2 = new Test2('Igor');
$obj3 = new Test1('Nikita');

$arr = [$obj2, $obj3, $obj1];

foreach ($arr as $elem) {
    echo $elem -> name . ' - ' . get_class($elem) . '<br>';
}