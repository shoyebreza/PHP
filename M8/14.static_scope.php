<?php 
class A{
    static $name;
    static function sayHi(){
        self::$name = "Hello";
        echo "Hi From A\n";
    }
}

class B extends A
{
    static function sayHi()
    {
        echo "Hi from B\n";
        echo parent::$name;
        parent::sayHi();
    }
}


B::sayHi();
echo B::$name;

?>