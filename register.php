<?php
include 'connect.php';
// INSERTING DATA INTO DATABASE
if(isset($_POST['registerbtn'])){
    $Firstname = $_POST['Firstname'];
    $Lastname  = $_POST['Lastname'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Adress = $_POST['Adress'];
    $Phone = $_POST['Phone'];
    
    }
    if($_POST['Firstname']!="" and $_POST['Lastname']!="" and $_POST['Email']!="" and $_POST['Password']!="" and $_POST['Adress']!="" and $_POST['Phone']!=""){
    $sql="INSERT INTO `customers` (`lastName`, `firstName`,`adress`, `phone`,`email`,`password`) VALUES ( '$Lastname', '$Firstname', '$Adress', '$Phone', '$Email', '$Password')";
        $result= mysqli_query($mysqli,$sql);
        header("location:login.php");
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registerstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet"> 



    <title>Register</title>

</head>
<body>
    <div class ="offer">Free shipping on orders over 25$</div>
    <div class ="navbar">
     <img  id ='img'src="./images/logo.png" alt="">
     <ul>
     <li>About</li>
     <li>What’s new</li>
     <li>Hair Care</li>
     <li>Skin Care</li>
     </ul>
     <div class="line"></div>
    </div>
    <h1 id='login'>REGISTER</h1>
    <P id='enteremail'>Please fill in the information below:</P>
    <form method="post">
    <input type="text"  id ="Firstname" name ="Firstname" placeholder="Firstname">
    <input type="text"  id ="Lastname" name ="Lastname" placeholder="Lastname">
    <input type="email"  id ="Email" name="Email" placeholder="Email">
    <input type="password"  id ="Password" name="Password" placeholder="Password">
    <input type="text"  id ="Adress" name="Adress" placeholder="Adress">
    <input type="text"  id ="Phone" name="Phone" placeholder="Phone number">
    <button type ="submit" name ="registerbtn"id="registerbtn">CREATE MY ACCOUNT</button>
</form>

</body>
</html>