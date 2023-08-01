<?php
session_start();

// Simulating user authentication
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform authentication (replace with your own authentication logic)
    if ($username === 'admin' && $password === 'adminpass') {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = 'admin';
        header('Location: dashProject1.php');
        exit();
    } elseif ($username === 'editor' && $password === 'editorpass') {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = 'editor';
        header('Location: dashProject1.php');
        exit();
    } elseif ($username === 'user' && $password === 'userpass') {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = 'user';
        header('Location: dashProject1.php');
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            background-color: #ffffff;
            font-family: Arial, sans-serif;
        }

        h2 {
            color: #333333;
            text-align: center;
            margin-top: 50px;
        }

        .error-message {
            color: #ff0033;
            font-weight: bold;
            text-align: center;
        }

        .login-form {
            margin: 50px auto;
            max-width: 300px;
            padding: 30px;
            background-color: #d1f7d3;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333333;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #ffffff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)): ?>
        <p class="error-message"><?php echo $error; ?></p>
    <?php endif; ?>
    <form class="login-form" method="POST" action="">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>

        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>


