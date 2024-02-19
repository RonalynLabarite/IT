<?php
session_start();

// Check if user is logged in, if not redirect to login page
if(!isset($_SESSION['isLogin']) || $_SESSION['isLogin'] !== true) {
    header("Location: Login.php");
    exit;
}

// Access user's ID from session
$id = $_SESSION['id'];

// Retrieve other user data from database using the ID if needed
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h2>Welcome to the Home Page!</h2>
    <p>User ID: <?php echo $id; ?></p>
    <a href="Logout.php">Logout</a>
</body>
</html>
