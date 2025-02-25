<?php

function __autoload($name)
{
    if(!class_exists($name)){
        echo "$name Loading...  \n";
        include "{$name}.php";
    }
}

/* function autoload( $name ){
    include strtolower("{$name}.php");
} */

/* spl_autoload_register("autoload"); */

(new Spaceship)->lunch();

/* (new MotorCycle())->getType(); */


?>