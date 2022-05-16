<?php

$con = new mysqli('localhost', 'root', '', 'cabh');

$sql = "SELECT * FROM rideshist";
$result = $con->query($sql);



?>

<!DOCTYPE html>
<html>
    <head>
       <title>WIP</title> 
    </head>
    <body>
        <!--<img src="emp.png" style="margin-top: 250px; margin-left: 650px;"><br>
        <h1 style="margin-top: 50px; margin-left: 520px; color: black; float: left;"> You have no booking requests yet.</h1>-->
        

        <table>
        <thead>
            <tr>
                <th>username</th>
                <th>from loc</th>
                <th>dest loc</th>
                <th>User phone</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {
                $user = $row['username'];
                $sql1 = "SELECT * FROM customerdata WHERE cemail = '$user'";

                $res = $con->query($sql1);
                $row1 = $res->fetch_assoc();
                echo
                "<tr>
          <td>{$row['username']}</td>
          <td>{$row['fromloc']}</td>
          <td>{$row['destloc']}</td>
          <td>{$row1['cphno']}</td>
        </tr>";
            }
            ?>
        </tbody>
    </table>

    </body>
</html>