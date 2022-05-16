<?php
$con = new mysqli('localhost', 'root', '', 'cabh');
$user = $_POST['usrname'];

$sql1 = "select * from driver where email = '$user'";


$res = mysqli_query($con, $sql1);  
        $row = mysqli_fetch_array($res, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($res);  
                 
        if($count == 1){  
            $sql = "delete from customerdata where cemail = '$user'";
            header('location:inde_cust.php');
          //print_r($_SESSION['email']);
        }  
        else{  
            echo '<script>alert("User account does not exists")</script>';  
            
        }
?>