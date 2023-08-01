<?php
session_start();



// Simulating user login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
     
    
  

    // Validate username and password (you can replace this with your own validation logic)
    if ($username === 'syed' && $password === '2162') {
        // Authentication successful
        $_SESSION['username'] = $username;
        $_SESSION['loggedIn'] = true;
        header('Location: f2.php'); // Redirect to the dashboard page
        exit();
    } else {
        // Authentication failed
        $error = "Invalid username or password";
    }
}


//session_destroy();

// Checking if the user is already logged in
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    // User is already logged in, redirect to the dashboard page
    header('Location: f2.php');
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
  
    <?php if (isset($error)): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
