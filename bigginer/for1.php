<?php
for($i=10 , $j=0; $i>0 ; $i--, $j++){
    if($i==4){
        continue;
    }
    

    echo "$i : $j " . PHP_EOL;
}