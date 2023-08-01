<?php
session_start();
//session_name('reg');
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = $first_name . ',' . $last_name . ',' . $username . ',' . $password . PHP_EOL;

    // Open the file in append mode

    
    $file = fopen("user.txt", "a");

   

    //if ($file) {
        // Write the user data to the file
        fwrite($file, $data);

        // Close the file
        fclose($file);

        echo "Registration successful.<br> 
        To overview Your Information <a href='overview.php'>CLICK HERE</a><br>
        Or, <a href='login.php'>login</a> to continue.";
    //} else {
       // echo "Error occurred while registering. Please try again.";
   // }
}
?>
