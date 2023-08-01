<?php
// Check if the user is logged in and has the necessary permissions
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['role'])) {
    header('Location: project1.php');
    exit();
}

$role = $_SESSION['role'];

// Check if the user has permission to delete
if ($role !== 'admin') {
    header('Location: access_denied.php');
    exit();
}

// Check if the student ID is provided in the URL
if (!isset($_GET['id'])) {
    header('Location: student_list.php');
    exit();
}

$studentId = $_GET['id'];

// Code to delete the student's information from the database or perform any necessary operations

// Redirect the user back to the student list page
header('Location: student_list.php');
exit();
?>
