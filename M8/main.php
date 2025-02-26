<?php 
include("26.namespace.php");
$planet = new \Astronomy\Spaceship(); // qualified name 
$planet = new Astronomy\Spaceship(); // unqualified name 
$planet->lunch();

/* $planet2 = new Astronomy\Spaceship();
$planet2->getName(); */

?>



