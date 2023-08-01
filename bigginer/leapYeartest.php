


<?php

$n = -11;

$r = $n % 2;

switch(true){

    case ($r == 0 && $n > 0):
        echo "$n is a positive even number ";
        break;
    case ($r == 0 && $n < 0):
        echo "$n is a negative even number ";
        break;
    case ($r != 0 && $n > 0):
        echo "$n is a positive odd number ";
        break;
    case ($r != 0 && $n < 0):
        echo "$n is a negative odd number ";
        break;
}
