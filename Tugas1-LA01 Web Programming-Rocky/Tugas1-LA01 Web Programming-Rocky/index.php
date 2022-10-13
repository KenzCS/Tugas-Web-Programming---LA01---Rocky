<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Web Programming LA01 - Tugas 1 - Kelompok Rocky</title>
</head>
<body>
<header>
        <h1 class= "">Insert a Profile</h1>
        <a href="tampil.php" class="lihat">Lihat data</a>
</header>
<div class="form">
    <form action="" method = "post">
      <table>
    <tr>
        <td class="t1"> Profile ID </td>
        <td><input type="text" placeholder = "Insert Your Profile ID" name = "profile_id" class="box1"></td> 
</tr>
<br>
<tr>
        <td class="t1"> Name </td>
        <td><input type="text" placeholder = "Insert Your Name" name = "name" class="box1"></td> 
</tr>
<br>
<tr>
        <td class="t1"> Email </td>
        <td><input type="text" placeholder = "Insert Your Email" name = "email" class="box1"></td> 
</tr>
<br>
<tr>
        <td class="t1"> Address </td>
        <td><input type="text" placeholder = "Insert Your Address" name = "address" class="box1"></td> 
</tr>
<br>
<tr>
        <td class="t1"> Phone Number </td>
        <td><input type="text" placeholder = "Insert Your Phonenumber" name = "phone_num" class="box1"></td> 
</tr>
<br>
<tr>
        <td><input type="submit" value = "Save" name = "ok" class="btn1"></td> 
</tr>
</table>
    </form>
  </div>
</body>
</html>

<?php
    include "connect.php";

        if(isset($_POST['ok'])) {
                $profile_id = $_POST['profile_id']; 
         
                $name = $_POST['name']; 
         
                $email = $_POST['email']; 
        
                $address = $_POST['address']; 
             
                $phone_num = $_POST['phone_num']; 
                
                $sql = "INSERT INTO tr_profile (profile_id,name,email,address,phone_num)
                VALUES ('$profile_id', '$name', '$email', '$address', '$phone_num');";
                mysqli_query($con, $sql);
                    
                } 
?>

