<?php

class ParentClass {
    protected $name;
    function __construct($name) {
        $this->name = $name;
        $this->sayHi();
    }

    function sayHi() {
        echo "Hi from {$this->name}\n";
    }
}


class ChildClass extends ParentClass {
    function sayHi() {
        parent::sayHi();
        echo"Hello from Child";
    }
}

$cc = new ChildClass("Parent class");


?>