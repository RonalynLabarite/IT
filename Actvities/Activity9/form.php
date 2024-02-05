<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="display.php" method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="" ><br>

  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="" ><br>

  <label for="gender">Gender:</label><br>
  <select id="gender" name="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
  </select><br>

  <label for="age">Age:</label><br>
  <input type="text" id="age" name="age" value="" ><br><br>

  <input type="submit" value="Submit">
</form> 

</body>
</html>