<?php
$class=array("Rahim","Karim",1,2);

//print_r($class);

array_pop($class);
array_pop($class);
array_push($class,"Salam");
array_change_key_case($class,CASE_LOWER);

print_r($class);