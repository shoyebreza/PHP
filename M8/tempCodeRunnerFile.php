<?php
class Human{
    public $name;
    function sayHi(){
        echo "Assalamualikum\n";
        $this->sayName();
    }

    function sayName(){
        echo "My name is {$this->name}\n";
    }
}

$h1 = new Human();

$h1->name = 'Human name';