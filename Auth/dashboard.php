<?php
//** Include auth.php to ensure only logged-in users can access this page
include_once 'auth.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2>Dashboard</h2>
    <h4>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h4>
    
    <!-- Links to view and update details -->
    <a href="view_details.php" class="btn btn-info">View Details</a>
    <a href="update_details.php" class="btn btn-warning">Update Details</a>
    <a href="logout.php" class="btn btn-danger">Logout</a>
</div>

</body>
</html>
