<?php

$servername= "localhost";
$username= "root";
$password= "";

$dbname= "activity10";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    echo "Connection failed";
}