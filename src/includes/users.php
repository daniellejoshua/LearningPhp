<?php
require_once "../database.php";
require_once "../Classes/Signup.php";

// Create an instance of the Signup class
$signup = new Signup("", "", "" , 0 ); // Pass empty values since the constructor requires parameters

// Fetch all users
$users = $signup->getUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Users List</h1>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['username'] ?? 'N/A'); ?></td>
                    <td><?= htmlspecialchars($user['email'] ?? 'N/A'); ?></td>
                    <td><?= htmlspecialchars($user['age'] ?? 'n/a'); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>