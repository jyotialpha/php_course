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

// Handle form submission to update user info
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user->name = $_POST['name'];
    $user->email = $_POST['email'];
    
    if ($user->updateUser()) {
        // Update session data
        $_SESSION['user_name'] = $user->name;
        echo "Information updated successfully!";
        // Refresh user data
        $user_data = $user->getUserById();
    } else {
        echo "Failed to update information.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Update Your Details</h2>
    <form action="update_details.php" method="POST">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($user_data['name']); ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($user_data['email']); ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Update Information</button>
        <a href="dashboard.php" class="btn btn-primary">Back to Dashboard</a>
    </form>
</div>
</body>
</html>
