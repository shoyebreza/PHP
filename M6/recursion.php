<?php

function printN($n)
{
    if ($n == 20) {
        return;
    }
    echo "". $n ."\n";
    $n++ ;
    printN($n);
}

printN(1);




function printNumber($counter,$number){
    if ($counter > $number) {
        return;
    }
    echo "". $counter ."\n";
    $counter++;
    printNumber($counter, $number);
}

printNumber(21,37);

?>