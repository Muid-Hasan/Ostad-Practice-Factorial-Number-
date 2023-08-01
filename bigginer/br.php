<?php

echo "We are practicing Array releted php code".PHP_EOL;

$names=array(

    "Jakia ", "Sultana", "Moni", "Syed", "Muid", "Hasan","Enar"
);

$name=array_shift($names);

echo "Shifted word is " . $name ."\n";

$name=array_pop($names);

echo "poped word is " . $name ."\n";

$name=array_push($names,"Enar");
echo "pushed word is " . $name ."\n";
$name=array_unshift($names,"Jakia");
echo "unshifted word is " . $name ."\n";







$n=count($names);


for($i=0; $i<$n; $i++){

  
    echo "$names[$i]". "\n";

}


