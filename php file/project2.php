<?php

session_start();




   


if(isset($_POST['login'])){
    $userName=$_POST['userName'];
    $passWord=$_POST['passWord'];
    $mobileNumber=$_POST['mobileNumber'];

    if($userName==='name' && $passWord==='password' && $mobileNumber==='1234'){
        $_SESSION['userName']=$userName;
        $_SESSION['loggedin']=true;
        header('Location:f2.txt');
        exit();
    }
    else{
        $error='Username,password or mobile number are not matching. Please Try Again...  ';

    }
}

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']===true){
    header('Location: f2.txt');
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Syed Traders</title>
</head>
<body>
    
    <h2>Welcome To Syed Traders</h2><br>
    <h2>LOGIN</h2>

    <?php if(isset($error)): ?>
        <p><?php echo $error ;?>
        <?php endif?>
        <form method="POST" action="">
        <label for="userName">Username:</label>
        <input type="text" name="userName" id="userName" required><br><br>

        <label for="passWord">Password:</label>
        <input type="passWord" name="passWord" id="passWord" required><br><br>

        <label for="mobileNumber">Mobile Number:</label>
        <input type="mobileNumber" name="mobileNumber" id="mobileNumber" required><br><br>


        <input type="submit" name="login" value="Login">
    </form>
</body>
