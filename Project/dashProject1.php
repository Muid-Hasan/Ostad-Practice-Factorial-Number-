<?php
session_start();

// Checking if the user is logged in and has a valid role
if (!isset($_SESSION['username']) || !isset($_SESSION['role'])) {
    header('Location: project1.php');
    exit();
}

// Checking the user's role
$role = $_SESSION['role'];

// Retrieving student profiles (replace with your own logic to retrieve data)
$students = [];
if ($role === 'admin' || $role === 'editor') {
    // Admin and editor have access to edit student profiles
    $students = retrieveStudentProfiles();
} else {
    // Normal user can only view student profiles
    $students = retrieveStudentProfilesReadOnly();
}
function retrieveStudentProfiles() {
    // Replace this with your own logic to retrieve all student profiles
    // For example, fetch data from a database and return the results
    $students = [
        ['id' => 1,'name' => 'John Doe', 'class' => '10', 'roll' => '101'],
        ['id' => 2,'name' => 'Jane Smith', 'class' => '12', 'roll' => '205'],
        ['id' => 3,'name' => 'David Johnson', 'class' => '11', 'roll' => '152'],
    ];

    return $students;
}

function retrieveStudentProfilesReadOnly() {
    // Replace this with your own logic to retrieve student profiles for normal users
    // For example, fetch data from a database and return the results
    $students = [
        ['id' => 1,'name' => 'John Doe', 'class' => '10', 'roll' => '101'],
        ['id' => 2,'name' => 'Jane Smith', 'class' => '12', 'roll' => '205'],
        ['id' => 3,'name' => 'David Johnson', 'class' => '11', 'roll' => '152'],
    ];

    return $students;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
            color: #333;
        }

        h2 {
            color: #555;
            text-align: center;
            margin-top: 30px;
        }

        h3 {
            color: #777;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .action-links a {
            color: #3498db;
            text-decoration: none;
            margin-right: 10px;
        }

        .action-links a:hover {
            text-decoration: underline;
        }

        .no-profiles {
            color: #777;
            margin-top: 10px;
        }

        .logout-link {
            display: block;
            text-align: center;
            margin-top: 20px;
        }

        .logout-link a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }

        .logout-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <h3>Student Profiles</h3>
    <?php if (!empty($students)): ?>
        <table>
            <tr>
                <th>Name</th>
                <th>Class</th>
                <th>Roll</th>
                <?php if ($role === 'admin' || $role === 'editor'): ?>
                    <th>Action</th>
                <?php endif; ?>
            </tr>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?php echo $student['name']; ?></td>
                    <td><?php echo $student['class']; ?></td>
                    <td><?php echo $student['roll']; ?></td>
                    <?php if ($role === 'admin' || $role === 'editor'): ?>
                        <td class="action-links">
                            <?php if ($role === 'admin'): ?>
                                <a href="edit_student.php?id=<?php echo $student['id']; ?>">Edit</a>
                                <a href="delete_student.php?id=<?php echo $student['id']; ?>">Delete</a>
                            <?php elseif ($role === 'editor'): ?>
                                <a href="edit_student.php?id=<?php echo $student['id']; ?>">Edit</a>
                            <?php endif; ?>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p class="no-profiles">No student profiles available.</p>
    <?php endif; ?>
    <div class="logout-link">
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>

