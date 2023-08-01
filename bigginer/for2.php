<?php
echo "\n pattern1\n";
$n=5;

for($i=0; $i<=$n; $i++){

    for ($j=1; $j<=$i; $j++){

        echo " * ";
    }
     echo PHP_EOL;
}

echo "\n Pattern 2\n";

for($k=1; $k<=$n; $k++){

    for ($l=1; $l<=$k; $l++){
        echo " $k ";
    }
    echo PHP_EOL; 
}

echo "\n Pattern 3\n";

for($o=1; $o<=$n; $o++){

    for ($p=1; $p<=$o; $p++){
        echo " $p ";
    }
    echo PHP_EOL; 
}