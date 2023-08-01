
<?php
session_name('my_wife');
session_start();
echo '<br> <a href="pr1.php"> HOME </a> <br>' ;
echo "Hello ! Welcome this page...!<br>";
echo "Hello {$_SESSION['userName']}!<br> ";