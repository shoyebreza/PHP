<?php

class Human{
    public $name;
    public $age;
    public function __construct($name,$age = 0) { 
        $this->name = $name;
        $this->age = $age;
    }
    function sayHi(){
        echo "Assalamualikum\n";
        $this->sayName();
    }

    function sayName(){
        echo "My name is {$this->name}\nAge is {$this->age}\n";
    }
}

$h1 = new Human("Hasin",33);
//$h1->name = 'Human name';
$h1->sayHi();

?>