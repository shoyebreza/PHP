<?php 

class Shapes{

}
class Shape{
    private $shape;
    function __construct(){
        $this->shape = array();
    }

    function addShape(Shapes $shape){
        array_push($this->shape, $shape);
    }

    function totalShape(){
        return count($this->shape);
    }
}

class Rectangle extends Shapes{

}

class Triangle extends Shapes{

}

class Student extends Shapes{

}

$sc = new Shape() ;
$sc->addShape(new Rectangle());
$sc->addShape(new Triangle());
$sc->addShape(new Student());
echo $sc->totalShape();



?>