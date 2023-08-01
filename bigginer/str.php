<?php
//$name= explode(', ','Jakia, Sultana, Moni, Enar');

$name= preg_split('/(, |,)/ ','Jakia, Sultana, Moni,Enar');

print_r($name);
//echo count($name);
