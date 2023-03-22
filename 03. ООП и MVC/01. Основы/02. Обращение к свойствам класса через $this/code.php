<?php
// Сделайте класс Employee, в котором будут следующие свойства - name, age, salary.
class Employee {
    public $name;
    public $age;
    public $salary;

    // Сделайте в классе Employee метод getName, который будет возвращать имя работника.
    public function getName() {
        return $this -> name;
    }

    // Сделайте в классе Employee метод getAge, который будет возвращать возраст работника.
    public function getAge() {
        return $this -> age;
    }

    // Сделайте в классе Employee метод getSalary, который будет возвращать зарплату работника.
    public function getSalary() {
        return $this -> salary;
    }

    // Сделайте в классе Employee метод checkAge, который будет проверять то,
    // что работнику больше 18 лет и возвращать true, если это так, и false, если это не так.
    public function checkAge() {
        if ($this -> age >= 18) {
            return true;
        } else {
            return false;
        }
    }

    // Сделайте метод doubleSalary, который текущую зарплату будет увеличивать в 2 раза.
    public function doubleSalary() {
        $this -> salary = $this -> salary * 2;
    }
}

$emp1 = new Employee();
$emp1 -> name = 'Nikita';
$emp1 -> age = 24;
$emp1 -> salary = 25000;

echo $emp1 -> getName() . '<br>';
echo $emp1 -> getAge() . '<br>';
echo $emp1 -> getSalary() . '<br>';
echo $emp1 -> checkAge() . '<br>';


// Сделайте класс User, в котором будут следующие свойства - name и age.
class User {
    public $name;
    public $age;

    // Сделайте метод setAge, который параметром будет принимать новый возраст пользователя.
    // Модифицируйте метод setAge так, чтобы он вначале проверял, что переданный возраст больше или равен 18.
    public function setAge($age) {
        if ($age >= 18) {
            $this -> age = $age;
        }
    }
}

// Создайте объект класса User с именем 'john' и возрастом 25.
// С помощью метода setAge поменяйте возраст на 30. Выведите новое значение возраста на экран.
$user1 = new User();
$user1 -> name = 'john';
$user1 -> age = 25;
$user1 -> setAge(30);


// Сделайте класс Rectangle, в котором в свойствах будут записаны ширина и высота прямоугольника.
class Rectangle {
    public $width;
    public $height;

    // В классе Rectangle сделайте метод getSquare, который будет возвращать площадь этого прямоугольника.
    public function getSquare() {
        return $this -> width * $this -> height;
    }
}