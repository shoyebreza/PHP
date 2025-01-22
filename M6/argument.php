<?php

function sum(int ...$numbers): int
{
    $sum = 0;
    for($i=0;$i<count($numbers);$i++){
        $sum += $numbers[$i];
    } 

    return $sum;
}

echo sum(1,2,3,4,5);


?>