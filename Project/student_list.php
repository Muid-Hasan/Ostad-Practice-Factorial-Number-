<?php
// Check if the user is logged in
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: project1.php');
    exit();
}

// Check if the user has the necessary permissions to view the student list
$role = $_SESSION['role'];
if ($role !== 'admin' && $role !== 'editor' && $role !== 'normal') {
    header('Location: access_denied.php');
    exit();
}

// Retrieve the student profiles based on the user's role
$students = [];
if ($role === 'admin' || $role === 'editor') {
    // Admin and editor have access to edit student profiles
    $students = retrieveStudentProfiles();
} else {
    // Normal user can only view student profiles
    $students = retrieveStudentProfilesReadOnly();
}

// Function to retrieve student profiles for admin and editor
function retrieveStudentProfiles() {
    // Replace this with your own logic to retrieve student profiles for admin and editor
    // For example, fetch data from a database and return the results
    $students = [
        ['id' => 1, 'name' => 'John Doe', 'class' => '10', 'roll' => '101'],
        ['id' => 2, 'name' => 'Jane Smith', 'class' => '12', 'roll' => '205'],
        ['id' => 3, 'name' => 'David Johnson', 'class' => '11', 'roll' => '152'],
    ];

    return $students;
}

// Function to retrieve student profiles for normal user (read-only mode)
function retrieveStudentProfilesReadOnly() {
    // Replace this with your own logic to retrieve student profiles for normal user
    // For example, fetch data from a database and return the results
    $students = [
        ['id' => 1, 'name' => 'John Doe', 'class' => '10', 'roll' => '101'],
        ['id' => 2, 'name' => 'Jane Smith', 'class' => '12', 'roll' => '205'],
        ['id' => 3, 'name' => 'David Johnson', 'class' => '11', 'roll' => '152'],
    ];

    return $students;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>
    <h2>Student List</h2>
    <?php if ($role === 'admin' || $role === 'editor'): ?>
        <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
        <p>You have the necessary permissions to edit student profiles.</p>
    <?php else: ?>
        <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
        <p>You have read-only access to student profiles.</p>
    <?php endif; ?>

    <h3>Student Profiles:</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Class</th>
            <th>Roll</th>
            <?php if ($role === 'admin' || $role === 'editor'): ?>
                <th>Actions</th>
            <?php endif; ?>
        </tr>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?php echo $student['id']; ?></td>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['class']; ?></td>
                <td><?php echo $student['roll']; ?></td>
                <?php if ($role === 'admin' || $role === 'editor'): ?>
                    <td>
                        <a href="edit_student.php?id=<?php echo $student['id']; ?>">Edit</a>
                        <a href="delete_student.php?id=<?php echo $student['id']; ?>">Delete</a>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </table>

    <br>
    <a href="logout.php">Logout</a>
</body>
</html>
