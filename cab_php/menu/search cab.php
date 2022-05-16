<?php 
session_start();
print_r($_SESSION['email']);
?>
<!doctype html>
<html lang="en-us">
<head>
    <link rel="stylesheet" href="searchcab.css">
</head>
<body>
    
    <header class="header-1">
        <div class="container ">
            <nav>
                <ul>
                    
                    <li><a href="">Offers</a><span>|</span></li>
                    <li><a href="">Support</a></li>
    
                </ul>
            </nav>
        </div>
    </header>

    <section class="header-2">
        <div class="container">
            <nav>
                <img class="ola-img" src="wlogo.png">
                <ul>
                    
                    <li><a href="">Features</a></li>
                    <li>
                    <a href="" class="bookbtn">Book Now</a>
                    </li>
    
                </ul>
            </nav>
        </div>
    </section>

    <section class="body-1">
        <div class="overlay"></div>
        <div class="z-index-content">

        <div class="container" class="text-main">
        <h1 class="img-txt">Book a City Taxi to your destination in town</h1>
        <p class="img-txt">Choose from a range of categories and prices</p>
        </div>


        <div class="cab-book container">
            <nav>
                <ul>
                    <li class="fix-col"><a href=""></a>CITY TAXY</li>
                    <li><a href=""></a>OUTSTATION</li>
                    <li><a href=""></a>RENTALS</li>
                </ul>
            </nav>

            <div>
                <h3>Your everyday travel partner</h3>
                <p>AC Cabs for point to point travel</p>
            </div>

            <div class="input-flex">
                <form action="search_cab_p.php" method="post">
                   
                <input type="text" name="clocation" placeholder="Current location" required class="black" maxlength="50" size="50">
                </br>
                <input type="text" name="dlocation" placeholder="Enter drop for ride estimate" required class="black" maxlength="50" size="50">
                </br>
                    <label>Schedule the Trip</label></br>
                    <select id="country" name="country">
                      <option value="australia" >NOW</option>
                      <option value="canada">Schudule for later</option>
                    </select>
            <center><button style="font-weight: 100;font-size: large;">Search Cabs</button></a>   </center>
            </form>
            </div>
            
        </div>
        
    </div>
    </section>

    <section>
        <div class="container">
            <div class="carousel">
                <div class="abs">
                    <img src="https://cms-web.olacabs.com/00000000363.svg" alt="">
                    <div class="side-content">
                        <h4>Have a safe ride with us</h4>
                        <p class="info-lab">Enjoy your ride</p>
                    </div>
                    
                </div>

                <div class="abs">
                    <img src="https://cms-web.olacabs.com/00000000361.jpeg" alt="">
                    <div class="side-content">
                        <h4 class="heading">Be entertained with Ola Play</h4>
                    <p class="info-lab">Discover movies and music on your daily ride</p>
                    </div>
                </div>
                <div class="abs">
                    <img src="https://cms-web.olacabs.com/00000000362.jpeg" alt="">
                    <div class="side-content">
                        <h4 class="heading">Get yourself a Share Pass</h4>
                    <p class="info-lab">Enjoy cheapest rides on the go</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container section-4">   
        <h4 >A car for every occasion</h4>
        <p>our cab service offers city taxis, inter-city cabs, and local cabs at hourly packages</p>

        <div class="cards">
            <div class="card-1">
                <img class="img1" src="https://cms-web.olacabs.com/00000000356.jpg" alt="">
                <img class="city-img" src="https://www.olacabs.com/webstatic/img/service-type/ola-prime-sedan-active.svg" alt="">
                <h2 class="heading">CITY TAX</h2>
                <p>
                    
                    The perfect way to get through your everyday travel needs. City taxis are available 24/7 and you can book and travel in an instant. With rides starting from as low as Rs. 6/km, you can choose from a wide range of options! You can also opt to do your bit for the environment with Our cab service!
                </p>

                <div class="features">
                    <div class="ind_flex">
                        <img src="https://www.olacabs.com/webstatic/img/service-type/ct_1.svg" alt="">
                        <span>AC <br> Cabs</span>
                    </div>

                    <div class="ind_flex">
                        <img src="https://www.olacabs.com/webstatic/img/service-type/ct_2.svg" alt="">
                        <span>Pocket <br> Friendly</span>
                    </div>

                    <div class="ind_flex">
                        <img src="https://www.olacabs.com/webstatic/img/service-type/ct_3.svg" alt="">
                        <span>Cashless <br> Rides</span>
                    </div>

                </div>



            </div>

            <div class="card-2">
                <img class="img2" src="https://cms-web.olacabs.com/00000000357.jpg" alt="">
                <img class="out-img" src="https://www.olacabs.com/webstatic/img/service-type/ola-outstation-active.svg" alt="">
               
                <h2 class="heading">OUTSTATION</h2>

                <p>
                    
                    Ride out of town at affordable one-way and round-trip fares with our cab service intercity travel service. Choose from a range of AC cabs driven by top partners, available in 1 hour or book upto 7 days in advance. We have you covered across India with presence in 90+ cities with over 500 one way routes.
                                
                </p>

                
                <div class="features">
                
                    <div class="ind_flex">
                        <img src="https://www.olacabs.com/webstatic/img/service-type/os_1.svg" alt="">
                        <span>One-Way <br> Trips</span>
                    </div>

                    <div class="ind_flex">
                        <img src="https://www.olacabs.com/webstatic/img/service-type/os_2.svg" alt="">
                        <span>Advance <br> Booking</span>
                    </div>

                    <div class="ind_flex">
                        <img src="https://www.olacabs.com/webstatic/img/service-type/os_3.svg" alt="">
                        <span>Safe <br> Rides</span>
                    </div>

                    </div>
                   

            </div>

            <div class="card-3">
                <img class="img3" src="https://cms-web.olacabs.com/00000000380.jpg" alt="">
                <img class="ren-img" src="https://www.olacabs.com/webstatic/img/service-type/ola-prime-suv-active.svg" alt="">
            
            
                <h2 class="heading">RENTALS</h2>

                <p>
                
                With our cab service Rentals you get a cab at your disposal. So be it a  day long business meeting, a shopping trip with your friends or just a day out in a new city, we have you covered. Packages start at 1 hour and can be extended upto 12 hours!
                                
            </p>

            
            <div class="features">

                <div class="ind_flex">
                    <img src="https://www.olacabs.com/webstatic/img/service-type/rental_1.svg" alt="">
                    <span>Hourly <br> Packages</span>
                </div>

                <div class="ind_flex">
                    <img src="https://www.olacabs.com/webstatic/img/service-type/rental_2.svg" alt="">
                    <span>Multiple <br> Stops</span>
                </div>

                <div class="ind_flex">
                    <img src="https://www.olacabs.com/webstatic/img/service-type/rental_3.svg" alt="">
                    <span>Top<br>Rated <br> Partners</span>
                </div>

            </div>

        </div>

    </section>

    

    


    <section class="section-7">
        <div class="container flex-sec-7">
            <div class="nest_7">
           
            </div>
            <div class="nest_7 niche">
                
               
                <div class="img-content">

             

                </div>
                
            </div>
        </div>
        <hr>
    </section>

   

    <section  class=" section-9">

        <div class="flex-sec-9 container">
            <div class="nest-flex-9">

                <img src="https://www.olacabs.com/webstatic/img/ola-support.svg" alt="">
                <div>
                    <h2>24/7 Customer Support</h2>
                    <p>A dedicated 24x7 customer
                        support team always at your
                        service to help solve any problem
                    </p>
                </div>
                
            </div>

            <div class="nest-flex-9">

                <img src="https://www.olacabs.com/webstatic/img/send_out_succour.svg" alt="">
                <div>
                    <h2>Your Safety First</h2>
                    <p>Keep your loved ones informed
                        about your travel routes or call
                        emergency services when in need
                    </p>
                </div>
                
            </div>


            <div class="nest-flex-9">

                <img src="https://www.olacabs.com/webstatic/img/ola-best-driver.svg" alt="">
                <div>
                    <h2>Top Rated Driver-Partners</h2>
                    <p>All our driver-partners are
                        background verified and trained to
                        deliver only the best experience
                    </p>
                </div>
                
            </div>

        </div>

    </section>

    <footer >
        <div class="container">
            <p>
                Top Visited Cities
            </p>
            <hr>
        <div class="one">

            
            
                <h3>Popular Outstation Routes</h3>
              
              <section>
                
                <nav>
                  <ul>
                      <li><h3>Northern India</h3></li>
                    <li><a href="">Delhi to Chandigarh Outstation Cabs
          
                      </a></li>
                    <li><a href="">Delhi to Agra Outstation Cabs</a></li>
                    <li><a href="">Delhi to Jaipur Outstation Cabs</a></li>
                    <li><a href="">Delhi to Shimla Outstation Cabs
          
                    </a></li>
                  <li><a href="">Delhi to Nainital Outstation Cabs</a></li>
                  <li><a href="">Jaipur to Delhi Outstation Cabs</a></li>
                  </ul>
                </nav>
              </section>


              <section>
                
                <nav>
                  <ul>
                      <li><h3>Southern India</h3></li>
                    <li><a href="">Chennai to Pondicherry Outstation Cabs</a></li>
                    <li><a href="">Chennai to Tirupati Outstation Cabs</a></li>
                    <li><a href="">Chennai to Vellore Outstation Cabs</a></li>
                    <li><a href="">Hyderabad to Vijayawada Outstation Cabs</a></li>
                    <li><a href="">Hyderabad to Warangal Outstation Cabs</a></li>
                    <li><a href="">Hyderabad to Tirupati Outstation Cabs</a></li>
                  </ul>
                </nav>
              </section>

              <section>
                
                <nav>
                  <ul>
                      <li><h3>East & West India</h3></li>
                    <li><a href="">Mumbai to Pune Outstation Cabs</a></li>
                    <li><a href="">Mumbai to Mahabaleshwar Outstation Cabs</a></li>
                    <li><a href="">Mumbai to Lonavala Outstation Cabs</a></li>
                    <li><a href="">Mumbai to Nashik Outstation Cabs</a></li>
                    <li><a href="">Mumbai to Matheran Outstation Cabs</a></li>
                    <li><a href="">
                        Mumbai to Shirdi Outstation Cabs</a></li>
                  </ul>
                </nav>
              </section>
            </div>

            <hr>

            <div class="two">
                <h3>Social Links</h3>
                <div class="social_media">
                    <img src="https://www.olacabs.com/webstatic/img/footer/fb-footer-icon.svg" alt="">
                    <img src="https://www.olacabs.com/webstatic/img/footer/insta-footer-icon.svg" alt="">
                    <img src="https://www.olacabs.com/webstatic/img/footer/youtube-footer-icon.svg" alt="">
                    <img src="https://www.olacabs.com/webstatic/img/footer/twitter-footer-icon.svg" alt="">
                </div>

                <select name="" id="">
                    <option value="">India</option>
                    <option value="">Australia</option>
                    <option value="">United Kingdom</option>
                    <option value="">New Zealand</option>

                </select>

            </div>

            <hr>

            <div class="three">
                <h3>Discover Ola</h3>
                <div class="about_us">
                    <a href="">About Ola</a>
                    <a href="">Careers</a>
                    <a href="">Offers</a>
                    <a href="">Contact Us</a>
                    <a href="">Media Center</a> 
                </div>

                <div class="ab_2">
                    <span> <a href="">Become a Driver</a> </span>
                    <span><a href="">Booka a Ride</a></span>
                </div>
            </div>

                <hr>

            <div class="four">
                <img src="" alt="">
                <div>
                    <span>Notices</span>
                    <span>Terms & Conditions</span>
                    <span>Privacy Policy</span>
                    <p>Copyright © 2021 ANI Technologies Pvt. Ltd. All rights reserved.</p>
                </div>

            </div>

        </div>
        
    </footer>
      
      </body>