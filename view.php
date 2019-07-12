<html>

<head> 
<title>Viewing the Students Record</title>
</head>

<body>
<table align='center' width='1000' border='4' >

<tr>
<td colspan='20' align='center' bgcolor='yellow'>

<h1> Viewing All Records</h1>
</td>
</tr>

<tr align="center">
<th>Serial No:</th>
<th>Students ID:</th>
<th>Student's Name:</th>
<th>Father's Name:</th>
<th>Dept Name:</th>
<th>Blood Group:</th>
<th>Class:</th>
<th>Phone No:</th>
<th>Delete</th>
<th>Edit</th>
<th>Details</th>
</tr>


<tr align="center">



 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from u_reg";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
	
	//u_id 	u_name 	u_father 	u_school 	u_roll 	u_class
	
	
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["u_id"]. " - Name: " . $row["u_name"]. " " . $row["u_father"]. "<br>";
    







   
    

    
    
?>


<td> <?php echo $row["u_id"];?></td>
<td> <?php echo $row["u_no"];?></td>
<td> <?php echo $row["u_name"];?></td>
<td> <?php echo $row["u_father"];?></td>
<td> <?php echo $row["u_dept"];?></td>
<td> <?php echo $row["u_blood"];?></td>
<td> <?php echo $row["u_class"];?></td>
<td> <?php echo $row["u_phone"];?></td>
<td> <a href='delete.php? del=<?php echo $u_id;?>' >Delete</a></td>
<td>Edit</td>
<td>Details</td>

</tr>
 
	<?php }} else {
    echo "0 results";
}
$conn->close();
?> 

</table>
</body>

</html>