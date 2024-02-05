<?php
echo "Post"; print_r($_POST);
echo "<br/> GET"; print_r($_GET);

if(isset($_POST['fname'])){
     echo "First Name: ". $_POST['fname'];
     echo "<br/>Last Name: ". $_POST['lname'];
     echo "<br/>Gender: ". $_POST['gender'];
     echo "<br/>Age: ". $_POST['age'];
}
?>