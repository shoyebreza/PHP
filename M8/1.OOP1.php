<?php

class Human{
    public $name;
    function sayHi() {
        echo "Assalamualikum \n";
        $this->sayName();
    }

    function sayName() {
        echo "My name is {$this->name}";
    }
}


class Cat{
    function sayHi() {
        echo "Mew \n";
    }
}

class Dog{
    function sayHi() {
        echo"Wof \n";
    }
}


$h1 = new Human();
$h1->name = "Rubel\n";
$c1 = new Cat();
$d1 = new Dog();

$h1->sayHi();
echo $h1->name;
$c1->sayHi();
$d1->sayHi();




?>