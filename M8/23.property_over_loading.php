<?php 
class MotorCycle{
    private $parameter;
    function __construct($displacement, $capacity, $mileage)
    {
        $this->parameter = [];
        $this->parameter['displacement'] = $displacement;
        $this->parameter['capacity'] = $capacity;
        $this->parameter['mileage'] = $mileage;
    }
    /* function getDisplacement()
    {
        return $this->parameter['displacement'];
    }
    function setDisplacement($displacement)
    {
        $this->parameter['displacement'] = $displacement;
    } */
    
    function __isset($name){
        if (!isset($this->parameter[$name])) {
            echo"{$name} not found\n";
            return false;
        } else {
            return true;
        }
    }

    function __unset($name){
        print_r($this->parameter);

        unset($this->parameter[$name]);

        print_r($this->parameter);
    }

    function __get( $name )
    {
        echo $this->parameter[$name];
    }
    function __set( $name, $value )
    {
        echo $this->parameter[$name] = $value;
    }

    
}

$pulsar = new MotorCycle('150cc','16ltr','45kmph');
echo $pulsar->displacement;

if(isset($pulsar->tiresize)){
    echo "Found\n";
} else {
    echo "Not found\n";
}

unset($pulsar->mileage);

?>