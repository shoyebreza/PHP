<?php 

class DistrictCollection implements IteratorAggregate {
    private $districts = array();

    function __construct(array $districts = array()) {
        $this->districts = $districts;
    }

    function addDistrict($district) {
        $this->districts[] = $district; 
    }

    function getDistricts() {
        return $this->districts;
    }

    function getIterator() {
        return new ArrayIterator($this->districts);
    }
}

$dis = new DistrictCollection();

$dis->addDistrict("Rajshahi");
$dis->addDistrict("Khulna");
$dis->addDistrict("Barisal");
$dis->addDistrict("Sylhet");


/* $district = $dis->getDistricts();
print_r($district); */


foreach ($dis as $district) {
    echo $district . "\n"; // Cleaner output
}

?>
