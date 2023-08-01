<?php
session_start();

$file=fopen('user.txt','r+');

$data=fgetcsv($file);



echo "Name:".$data[0].$data[1]."<br>"."Usename: ".$data[2]."<br>";
echo "<a href='login.php'>LOGIN</a>";