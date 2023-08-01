<?php
echo "\n pattern 01 : \n";

$n=5;
for($i=$n; $i>0; $i--){

    for($j=$i; $j>0; $j--){

        echo " * ";
    }

    echo PHP_EOL; 
}


echo " \n pattern \n";

for ($k=$n; $k>0; $k--){

    for($l=$k; $l>0; $l--){

        echo " $k ";

    }
    echo PHP_EOL; 
}

echo "\n Pattern 3 \n";
for($o=$n; $o>0; $o--){

    for($p=1; $p<=$o; $p++){
        echo " $p ";
    }

    echo PHP_EOL;

}