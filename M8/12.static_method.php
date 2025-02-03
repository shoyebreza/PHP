<?php 


class MathCalculator{
    private $number;
    static $name;
    static function fibonacci($n) {
        self::$name = 12;
        echo"fibonacci series up to {$n}\n";
    }
    static function doSomething() {
        echo"doing something \n";
    }

    function factorial($n) {
        self::doSomething();
        $this->doSomething();
        $this->number = 12;
        echo "Calculating facttorial of {$n}";
    }
}



$mathc=new MathCalculator();
$mathc->fibonacci(8);

MathCalculator::fibonacci(2);
?>