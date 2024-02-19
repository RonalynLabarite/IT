<?php
include("db_conn.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to your database (replace dbname, username, password, and host)
    $conn = new mysqli("dbname", "username", "password", "host");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database
    $sql = "SELECT * FROM `activity` WHERE  username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User exists, set session variables
        $row = $result->fetch_assoc();
        $_SESSION['isLogin'] = true;
        $_SESSION['id'] = $row['id'];
        header("Location: Home.php");
        exit;
    } else {
        // User doesn't exist, display error message
        echo "Invalid username or password";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
