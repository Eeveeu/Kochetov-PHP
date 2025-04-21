<?php
// абстрактный класс животное
abstract class Animal {
    // защищенное имя
    protected $name;
    // приватный возраст
    private $age;

    // конструктор
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // получить имя
    public function getName() {
        return $this->name;
    }

    // получить возраст
    public function getAge() {
        return $this->age;
    }

    // метод кушать
    public function eat() {
        echo $this->name . ' ест<br>';
    }

    // метод спать
    public function sleep() {
        echo $this->name . ' спит<br>';
    }

    // абстрактный метод звук
    abstract public function makeSound();
}

// класс кот
class Cat extends Animal {
    public function makeSound() {
        echo $this->getName() . ': мяу<br>';
    }
}

// класс собака
class Dog extends Animal {
    public function makeSound() {
        echo $this->getName() . ': гав<br>';
    }
}

// класс птица
class Bird extends Animal {
    public function makeSound() {
        echo $this->getName() . ': чирик<br>';
    }
}

// создаем объекты
$cat = new Cat('барсик', 2);
$dog = new Dog('бакс', 4);
$bird = new Bird('петя', 1);

// массив животных
$animals = [$cat, $dog, $bird];

// вывод инфы и методов
foreach ($animals as $animal) {
    echo 'имя: ' . $animal->getName() . ', возраст: ' . $animal->getAge() . '<br>';
    $animal->eat();
    $animal->sleep();
    $animal->makeSound();
    echo '<br>';
}
?>