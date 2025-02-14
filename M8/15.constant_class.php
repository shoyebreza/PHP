<?php

class MyClass
{
    const city =  "Dhaka";

    function sayHi(){
        echo "Hi from self".$this::city;
        //echo "Hi from self".self::city;
    }
}



$c = new MyClass();
$c->sayHi();
PHP_EOL;
echo MyClass::city;

?>