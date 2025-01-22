<?php
$veryold = 0;
$old = 1;
$new = 1;

for ($i = 0; $i < 93; $i++) {
    echo $veryold." , ";

    $old = $new;
    $new = $old + $veryold;
    $veryold = $old;
}

$fib = [0, 1];
for ($i = 2; $i < 10; $i++) {
    $fib[] = $fib[$i - 1] + $fib[$i - 2];
}

echo implode(', ', $fib);




?>