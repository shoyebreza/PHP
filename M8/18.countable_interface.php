<?php 

class DistrictCollection implements IteratorAggregate,Countable {
    private $districts = array();

    function __construct(array $districts = array()) {
        $this->districts = $districts;
    }

    function addDistrict($district) { // Renamed parameter to $district for clarity
        $this->districts[] = $district; // More efficient than array_push
    }

    function getDistricts() {
        return $this->districts;
    }

    function getIterator() {
        return new ArrayIterator($this->districts);
    }

    function count() { 
        return count($this->districts); 
    }
}

$dis = new DistrictCollection();

$dis->addDistrict("Rajshahi");
$dis->addDistrict("Khulna");
$dis->addDistrict("Barisal");
$dis->addDistrict("Sylhet");

// countable interface 
echo count($dis);

?>
