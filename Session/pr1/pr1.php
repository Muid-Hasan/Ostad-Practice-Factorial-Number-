<?php
session_name('my_wife');
session_start(['cookie_lifetime'=>300]);

$_SESSION['userName']='Moni';
$_SESSION['loggedIn']=false;
$_SESSION['counter']= $_SESSION['counter']?? 0;
$_SESSION['counter']++;
//echo $_SESSION['counter'];

$userName=$_SESSION['userName'];
$loggedIn=$_SESSION['loggedIn'];

if($_SESSION['counter']==1){
    echo "Hello {$_SESSION['userName']}!!<br> This is your 1st Time Visit in this webpage.<br> ";
}
else{
    echo " Hello {$_SESSION['userName']} !<br> This your {$_SESSION['counter']} times vist in this website.<br>";
}
echo "User Name: {$userName} <br> "; 
echo "Login Status: ".($loggedIn?'Yes':'No');


echo '<br> <a href="nextpage.php"> NextPage </a>' ;
