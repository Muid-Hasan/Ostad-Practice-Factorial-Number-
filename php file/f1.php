<?php

$filename= "f1.txt";

$fp= fopen($filename,'r');

while($fl=fgets($fp)){
    echo $fl;
}

fclose($fp);

