<?php
session_start();
require 'connect.php';
if(!empty($_SESSION["customerCode"])){
    $customerCode = $_SESSION["customerCode"];
    $result = mysqli_query($mysqli, "SELECT * FROM customers WHERE customerCode = $customerCode");
    $row = mysqli_fetch_assoc($result);
}
// else{
//     header("location: login.php");
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HELLO <?php echo $row["firstName"];  ?></h1>
    <button><a href = "logout.php">Logout</a></button>
</body>
</html>