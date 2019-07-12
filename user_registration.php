

<html>
<head>
<title>Student's Registration Form</title>
</head>
<body>
<form method='post' action='insert.php'>
<table width='600' border='3' align='center'>

<tr>
<th bgcolor='green' colspan="5">Student's Registration Form</th>
</tr>

<tr>
<td align='right'>Student's ID:</td>
<td><input type='text' name='user_no'></td>
</tr> 
<tr>
<td align='right'>Student's Name:</td>
<td><input type='text' name='user_name'></td>
</tr>     

<tr>
<td align='right'>Father's Name:</td>
<td><input type='text' name='father_name'></td>
</tr>

<tr>
<td align='right'>Department's Name:</td>
<td><input type='text' name='dept_name'></td>
</tr>

<tr>
<td align='right'>Blood Group:</td>
<td>
<select name='blood_group'>
<option value='null'>Select Blood</option>
<option value='O+'>O+</option>
<option value='O-'>O-</option>
<option value='A+'>A+</option>
<option value='A-'>A-</option>
<option value='B+'>B+</option>
<option value='B-'>B-</option>
<option value='AB+'>AB+</option>
<option value='AB-'>AB-</option>


</select>
</td>
</tr>

<tr>
<td align='right'>Class:</td>
<td>
<select name='students_class'>
<option value='null'>Select Class</option>
<option value='BSSE'>BSSE</option>
<option value='PGD in IT'>PGD in IT</option>
<option value='Msc In IT'>MSc in IT</option>

</select>
</td>
</tr>

<tr>
<td align='right'>Phone Number:</td>
<td><input type='text' name='phone_no'></td>
</tr>
<tr>

<td align='center' colspan='6'>
<input type='submit' name='submit' value='Submit'>

</td>
</tr>
</table>
</form>
</body>
</html>


  <?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?> 