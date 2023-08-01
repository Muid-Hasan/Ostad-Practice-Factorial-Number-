<?php

$couple=[
 
    'Me'=>'Enar,Moni',
    'Sister'=> 'Swarna,Mehedi',
    'BroInLaw'=>'Anik, Sweety'

];

echo $couple['Me']. "\n";

//foreach($couple as $Relation=>$name){

//    echo "$Relation :  ". $name. "\n";
//}


$couple ['Sister'].= ",Sarim";

$rel=array_values($couple);

print_r ($rel);

