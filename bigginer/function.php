<?php
/*
Odd Even checker
*/
function evenOrOdd($n){

    if($n%2==0){
        return true;
    }
    else {
        return false; 
    }
}

/* 
Two nummber add
*/
function add($m,$n){
    $r=$m+$n;

    return $r;
}


/* 
Factorial Number
*/

function factorial($n){

    $r=1;
    for( $i=$n; $i>0; $i--){

        $r *=$i;

        
}
return $r;
    }


/* 
Multiplication of Two Number
*/

function multiply($m,$n){
    $r=($m*$n);

    return $r;
}


