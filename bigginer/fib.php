<?php



$f1 = 0;
$f2 = 1;
 for($i=0; $i<=5; $i++){

    echo "$f1" . " ";

    $f3 = $f1 + $f2;

    $f2 = $f1;

    $f1 = $f3;
 }
 