
<?php

$con = new mysqli('localhost', 'root', '', 'cabh');

$sql = "SELECT * FROM driver";
$result = $con->query($sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Admin Panel</title>
</head>

<body>
    <div class="side-menu">

        <div class="brand-name">
            <img src="bgfr.png" height="300px" width="300px" style="margin-top: 50px;"><br/>
        </div>

        <h2 style="margin-top: 35px; margin-left: 41px; color: white;" >BookMyCab</h2>
        
        <ul style="margin-top: 125px;">
        <li><a href="http://localhost/cab_php/adm_login/admeeeeen/inde.html"><img src="dashboard (2).png" alt=""></a>&nbsp; <span>Dashboard</span> </li>
            <li><a href="http://localhost/cab_php/adm_login/admeeeeen/inde_cust.php"><img src="usser.png" height="30px" width="30px"></a>&nbsp;<span>Users</span> </li>
            <li><a href="http://localhost/cab_php/adm_login/admeeeeen/inde_driver.php"><img src="dri.png" height="30px" width="30px"></a>&nbsp;<span>Drivers</span> </li>
            <li><a href="http://localhost/cab_php/adm_login/admeeeeen/inde_drivcab.php"><img src="baba.png" height="35px" width="35px" alt=""></a>&nbsp;<span>Cabs</span> </li>
            <!--<li><a href="https://www.w3schools.com"><img src="payment.png" alt=""></a>&nbsp;<span>Issues</span> </li>-->
            <!--<li><a href="https://www.w3schools.com"><img src="settings.png" alt=""></a>&nbsp;<span>Settings</span> </li> -->
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="search.png" alt=""></button>
                </div>
                <div class="user">
                <a href="http://localhost/cab_php/adm_login/admeeeeen/inde.html" class="btn">HOME</a>
                    <img src="notifications.png" alt="">
                    <div class="img-case">
                        <img src="user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                <div class="box" >
                        <h1>Users</h1>
                        
                    </div>
                    <div class="icon-case">
                        <a href="http://localhost/cab_php/adm_login/admeeeeen/inde_cust.php"><img src="acc.png" height="70px" width="70px"></a>
                    </div>
                </div>


                <div class="card">
                    <div class="box">
                        
                        <h1>Drivers</h1>
                    </div>
                    <div class="icon-case">
                        <a href="http://localhost/cab_php/adm_login/admeeeeen/inde_driver.php"><img src="steer.png" height="80px" width="80px" alt=""></a>
                    </div>
                </div>


                <div class="card" style ="background-color:grey">
                    <div class="box">
                        
                        <h1>Cabs</h1>
                    </div>
                    <div class="icon-case">
                        <a href="http://localhost/cab_php/adm_login/admeeeeen/inde_drivcab.php"><img src="bb.png" height="70px" width="70px"></a>
                    </div>
                </div>


                <div class="card">
                    <div class="box">
                    <h1>Issues</h1>
                        
                        </div>
                    <div class="icon-case">
                        <a href="http://localhost/cab_php/adm_login/admeeeeen/inde_driver_iss.php"><img src="iss.png" height="70px" width="70px"></a>
                    </div>
                </div>
            </div>

            
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Cab details</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Driver name</th>
                            <th>Mobile</th>
                            <th>Email </th>
                            <th>Cab Number</th>
                        </tr>
                        <tbody>
                        <?php
                        while ($row = $result->fetch_assoc()) {

                        echo
                        "<tr>
                        <td>{$row['dname']}</td>
                        <td>{$row['mobile']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['cab_no']}</td>
                        </tr>";
                        }
                        ?>
                        </tbody>






                        <!--<tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr> -->
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>Request Locations</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>From</th>
                            <th>To</th>
                        </tr>
                        <tr>
                            <td>Chennai</td>
                            <td>Gandhipuram</td>
                        </tr>
                        <tr>
                            <td>Gajuwaka</td>
                            <td>MVP Colony</td>
                        </tr>
                        <tr>
                            <td>Durgamcheruvu</td>
                            <td>DIlshukshnagar</td>
                        </tr>
                        <tr>
                            <td>Coimbatore</td>
                            <td>Ettimadai</td>
                        </tr>
                        <tr>
                            <td>West Thane</td>
                            <td>Navi Mumbai</td>
                        </tr>
                        <tr>
                            <td>Thomas Bakery Road</td>
                            <td>Old City Road</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
