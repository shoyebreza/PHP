<?php

abstract class Shape {
    protected $name;
    protected $area;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getArea() {
        $this->calculateArea(); // Ensure area is calculated before accessing it
        echo "The area of this {$this->name} is {$this->area}\n";
    }

    abstract public function calculateArea();
}

class Triangle extends Shape {
    private $a, $b, $c;

    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct("Triangle");
    }

    public function calculateArea() {
        $perimeter = ($this->a + $this->b + $this->c) / 2;
        $this->area = sqrt($perimeter * ($perimeter - $this->a) * ($perimeter - $this->b) * ($perimeter - $this->c));
    }
}

class Rectangle extends Shape {
    private $a, $b;

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
        parent::__construct("Rectangle");
    }

    public function calculateArea() {
        $this->area = $this->a * $this->b; // Correct rectangle area calculation
    }
}

// Testing the classes
$r = new Rectangle(2, 4);
$r->getArea();

$t = new Triangle(10, 12, 8);
$t->getArea();
?>
