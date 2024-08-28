<?php
session_start();
include_once 'app/user.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Create a User object and fetch user data
$user = new User();
$user->id = $_SESSION['user_id'];
$user_data = $user->getUserById();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Your Details</h2>
    <p>Name: <?php echo htmlspecialchars($user_data['name']); ?></p>
    <p>Email: <?php echo htmlspecialchars($user_data['email']); ?></p>
    <a href="dashboard.php" class="btn btn-primary">Back to Dashboard</a>
</div>
</body>
</html>
