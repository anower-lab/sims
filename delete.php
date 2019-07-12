
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection



$delete_record = $_GET['del'];

$query = "delete from u_reg where u_id= '$delete_record'";

if (mysqli_query ($query)){
	
	echo"<script>window.open('view.php?deleted=Delete successfully!','self')</script>";
}
?>