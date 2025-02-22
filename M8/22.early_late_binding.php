<?php 

class Planet{
    /* static function echoName()
    {
        echo self::getName();
    } */

    static function echoName()
    {
        echo static::getName();
    }
    static function getName()  {
        return "Planet";
    }
}


class Earth extends Planet
{
   /*  static function echoName() {
        echo "Earth";
    } */

    static function getName(){
        return "Earth";
    }
}



/* Planet::echoName(); */
Earth::echoName();

?>