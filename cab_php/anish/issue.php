<?php
$na = $_POST['na'];
$mob = $_POST['mob'];
$eid = $_POST['eid'];
$inconvenience = $_POST['inconvenience'];
$comment = $_POST['comment'];
$visit = $_POST['visit'];

$conn = new mysqli('localhost', 'root', '', 'cabh');

$sql = "INSERT INTO drivissue VALUES('$na', '$mob', '$eid', '$inconvenience', '$comment', '$visit')";


if ($conn->query($sql) === TRUE){
    header('location:subm.html');
}

else{
    echo "Error:".$sql."<br>".$conn->error;
}


?>