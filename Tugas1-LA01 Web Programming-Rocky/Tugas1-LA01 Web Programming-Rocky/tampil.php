<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Web Programming LA01 - Tugas 1 - Kelompok Rocky</title>
</head>
<body>

<header>
        <h1 class= "head">List of Profile</h1>
        <a href="index.php" class="back">Back</a>
</header>

<div class="bod1">
<table border="1" class="ta2">
<tr>
	<th>Profile_id</th>
	<th>Name</th>
	<th>Email</th>
	<th>Address</th>
    <th>Phone_number</th>
    <th>Action</th>
    </tr> 
</div>
</body>
</html>

<?php
include "connect.php";

$sql = "SELECT * FROM tr_profile";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($result)){
    echo "
    <tr>
	<td>$row[profile_id]</td>
	<td>$row[name]</td>
	<td>$row[email]</td>
	<td>$row[address]</td>
    <td>$row[phone_num]</td>
    <td>
        <a class = 'update' href='update.php?profile_id=$row[profile_id]'>Update</a>
        <a class = 'delete' href='delete.php?profile_id=$row[profile_id]'>Delete</a>
    </td>
    </tr>  
    ";
}
?>
</table>