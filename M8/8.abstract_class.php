<?php
abstract class Shape {
    abstract function getArea();
    abstract function getPerimeter();
}

class Rectangle extends Shape {
    private $base, $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function setBase($base) {
        $this->base = $base;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function getArea() {
        return $this->base * $this->height;
    }

    public function getPerimeter() {
        return 2 * ($this->base + $this->height);
    }
}

class Triangle extends Shape {
    private $a, $b, $c;

    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getArea() {
        $perimeter = ($this->a + $this->b + $this->c) / 2;
        return sqrt($perimeter * ($perimeter - $this->a) * ($perimeter - $this->b) * ($perimeter - $this->c));
    }

    public function getPerimeter() {
        return $this->a + $this->b + $this->c;
    }
}

// Testing the classes
$rectangle = new Rectangle(5, 10);
echo "Rectangle Area: " . $rectangle->getArea() . "\n";
echo "Rectangle Perimeter: " . $rectangle->getPerimeter() . "\n";

$triangle = new Triangle(3, 4, 5);
echo "Triangle Area: " . $triangle->getArea() . "\n";
echo "Triangle Perimeter: " . $triangle->getPerimeter() . "\n";
?>
