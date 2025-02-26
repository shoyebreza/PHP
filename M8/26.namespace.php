<?php

namespace Astronomy;

class Spaceship{
    function lunch()
    {
        echo "Go to  Planet \nSpaceship is loading ...\n";
        
        for ($i = 10; $i >= 0; $i--) {
            echo $i . "\n";
            sleep(1);
            if ($i == 0) {
                echo "YaY!! Spaceship is going ...";
            }
        }

    }

}

class Earth extends Spaceship{
    function getName()
    {
        echo "This is the earth";
    }
}

/* 
$planet = new Spaceship();
$planet->lunch(); */




?>