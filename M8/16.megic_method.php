<?php

class Student
{
    private $name;
    private $age;
    private $class;

    function __construct($name = '', $age = '', $class = '')
    {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    /* 
        function getNm(){
            return $this->name;
        }
        function setName($name){
            $this->name = $name;
        }
        function getAge(){
            return $this->age;
        }
        function setAge($age){
            $this->age = $age;  
        }
        function getClass(){
            return $this->class;
        }
        function setClass($class){
            $this->class = $class;
        } */

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function __set($prop,$value){
        $this->$prop = $value;
    }



}

$r = new Student('Rahim','16', '10');
$r->name = 'Kamal';
echo $r->name;

?>