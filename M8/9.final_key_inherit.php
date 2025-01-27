<?php 
abstract class OurClass{
    final function doSomething(){
        echo" Iam Doing something";
    }
}


class MyClass extends OurClass
{
    // cannot override this class
    
   /*  function doSomething()
    {
        echo "Doing another thing";
    } */

}

$mc = new MyClass();
$mc->doSomething();





?>