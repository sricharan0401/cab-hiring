<?php
$con = new mysqli('localhost', 'root', '', 'cabh');
$user = $_POST['usrname'];

$sql1 = "select * from driver where email = '$user'";

$res = mysqli_query($con, $sql1);  
        $row = mysqli_fetch_array($res, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($res);  
                 
        if($count == 1){  
            $sql = "delete from driver where email = '$user'";
            header('location:inde_driver.php');
          //print_r($_SESSION['email']);
        }  
        else{  
            echo '<script>alert("Driver account does not exists")</script>';  
            
        }
        
?>