<?php 

class Color{
    public $color;
    public function __construct($color){
        $this->color = $color;
    }

    function setColor($color)
    {
        $this->color = $color;
    }
    function __toString()
    {
        return "This color is  {$this->color}.";
    }
}

$c = new Color('red');

echo $c;

?>