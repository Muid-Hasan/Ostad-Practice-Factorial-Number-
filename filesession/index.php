<?php
session_start();

?>
<html>
    <title>Syed Traders </title>
<body>
<h2>Welcome To Syed Traders</h2>

<form action="/main.php" method="post">

  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" ><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" ><br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>