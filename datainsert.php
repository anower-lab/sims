<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$user_name = $_POST['user_name'];
$father_name = $_POST['father_name'];
$school_name = $_POST['school_name'];
$roll_no = $_POST['roll_no'];
$students_class = $_POST['students_class'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//u_id 	u_name 	u_father 	u_school 	u_roll 	u_class 
$sql = "INSERT INTO u_reg (u_name, u_father, u_school, u_roll, u_class)
VALUES ('$user_name','$father_name','$school_name','$roll_no','$students_class' )";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
	header("location: user_registration.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 