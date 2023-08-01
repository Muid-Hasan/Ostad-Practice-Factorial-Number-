<?php

$fileName="G:\\Ostad\\Practice\\with w3 school\\01\\p1.txt";

$fp=fopen($fileName,"r");



while($fl=fgets($fp)){
    echo $fl. "<br>";
}