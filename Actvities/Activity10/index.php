<?php
session_start();

// Check if user is already logged in
if(isset($_SESSION['isLogin']) && $_SESSION['isLogin'] === true) {
    header("Location: Home.php");
    exit;
} else {
    header("Location: Login.php");
    exit;
}
?>