<?php
session_start();
$user = $_SESSION['email'];
$clocation = $_POST['clocation'];
$dlocation = $_POST['dlocation'];


$conn = new mysqli('localhost', 'root', '', 'cabh');
       
        
    $sql = "INSERT INTO rideshist (username, fromloc, destloc)
    VALUES('$user', '$clocation', '$dlocation')";

    if ($conn->query($sql) === TRUE){
        //echo '<script>alert("User Account Created... Login to your Account..")</script>';
       header('location:menu.php');
    }
    else{
        echo "Error:".$sql."<br>".$conn->error;
    }
?>
