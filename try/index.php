<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syed Traders</title>
</head>
<body>
    <h2>Fill Box with suitable information: </h2>

<form action="index.php"  method="post">
  <label for="Product">Product name:</label><br>
  <input type="text" id="Product" name="Product"><br>
  <label for="size">Size:</label><br>
  <input type="text" id="size" name="size" ><br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>

<?php

session_start();

if(isset($_POST['Product']) && isset($_POST['size'])){

$fileName='index.txt';

$fp=fopen($fileName,'a');

$product=$_POST['Product'];
$size=$_POST['size'];

$data= $product.'-'.$size.'<br>';
fwrite($fp,$data);
}
?>

