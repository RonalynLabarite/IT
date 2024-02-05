<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Data</title>
</head>
<body>

<h2>Display Data</h2>

<table border="1">
  <tr>
    <th>firstname</th>
    <th>lastname</th>
    <th>age</th>
    
    <th>email</th>
    <th>Action</th>
    
  </tr>
  
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "activity";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data
$sql = "SELECT a firstname, lastname, email FROM activity";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["age"]. "</td><td>" . $row["email"]. "</td><td><a href='../update/?id=". $row["firstname"]. "'>edit</a></td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

  
</table>

</body>
</html>