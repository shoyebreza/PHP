<?php 


class Fund{
    /* public */private $fund;
    public function __construct($fund=0){
        $this->fund = $fund;
    }

    public function addFund($money){
        $this->fund += $money;
    }

    public function deductFund($money){
        $this->fund -= $money;
    }

    public function getMoney(){
        echo"Total Fund is : {$this->fund}";
    }

    
}

$ourfund = new Fund(100);
$ourfund->getMoney();
$ourfund->addFund(200);
$ourfund->deductFund(100);
$ourfund->getMoney();





?>