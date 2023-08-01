<?php
session_start();

if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
    header("Location: login.php");
    exit;
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];

echo "Welcome, " . $first_name. $last_name . "! You are now logged in.";
}
?>