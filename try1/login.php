<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];

    // Read the file line by line
    $file = fopen("user.txt", "r");
    if ($file) {
        $isAuthenticated = false;

        while (($line = fgets($file)) !== false) {
            $user = explode(",", $line);
            $storedUsername = trim($user[2]);
            $storedPassword = trim($user[3]);

            if ($storedUsername === $username && $storedPassword === $password) {
                $isAuthenticated = true;
                break;
            }
        }

        fclose($file);

        if ($isAuthenticated) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['first_name'] = $first_name;
            $_SESSION['last_name'] = $last_name;
            
            header("Location: welcome.php");
            exit;
        } else {
            echo "Invalid username or password. Please try again.";
        }
    } else {
        echo "Error occurred while reading user data. Please try again.";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
</head>
<body>
    <h2>User Login</h2>
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
