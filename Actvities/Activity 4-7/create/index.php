<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Activity4-7";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $email = $_POST["email"];

    // SQL query to insert data into the database
    $sql = "INSERT INTO Activity (firstname, lastname, age, email) VALUES ('$firstname', '$lastname', '$age', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data Form</title>
</head>
<body>

<h2>Insert Data Form</h2>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="firstname">First Name:</label>
    <input type="text" name="firstname" required><br>

    <label for="lastname">Last Name:</label>
    <input type="text" name="lastname" required><br>

    <label for="age">Age:</label>
    <input type="number" name="age" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>