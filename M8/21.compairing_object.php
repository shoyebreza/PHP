<?php 
class Planet{

    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}

$e = new Planet('Earth');
$e1 = new Planet('Earth');
$m = new Planet('Mars');

if($e == $e1){
    echo 'Similar planet';
} else {
    echo 'Not similar';
}

?>