<?php

include_once "function.php";

$x=5;
$y=6;

if (evenOrOdd($x)){
    echo "{$x} is an even Number.\n";
}  
else{
    
        echo "{$x} is an odd Number.\n";
    } 

    if (evenOrOdd($y)){
        echo "{$y} is an even Number.\n";
    }  
    else{
        
            echo "{$y} is an odd Number.\n";
        } 
    
    
    echo " $x ! = ". factorial($x)."\n";
    echo " $y ! = ". factorial($y)."\n";

    echo "The summation of $x and $y = ".add($x,$y)."\n";
    echo "The Multiplication of $x and $y = ".multiply($x,$y)."\n";


        
    
    