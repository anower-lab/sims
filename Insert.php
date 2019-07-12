<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$user_no = $_POST['user_no'];
$user_name = $_POST['user_name'];
$father_name = $_POST['father_name'];
$dept_name = $_POST['dept_name'];
$blood_group = $_POST['blood_group'];
$students_class = $_POST['students_class'];
$phone_no = $_POST['call_no'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//u_id 	u_name 	u_father 	u_school 	u_roll 	u_class 
$sql = "INSERT INTO u_reg (u_no ,u_name, u_father, u_dept, u_blood, u_class, u_phone)
VALUES ( '$user_no','$user_name','$father_name','$dept_name','$blood_group','$students_class','$call_no')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
	header("location: user_registration.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 