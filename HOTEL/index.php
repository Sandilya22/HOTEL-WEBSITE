<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hotel Website | Home</title> 
        <link rel="stylesheet" type="text/css" href="\PROJECT\HOTEL\css\bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="\PROJECT\HOTEL\CSS\header.css"/>
        <link rel="stylesheet" type="text/css" href="\PROJECT\HOTEL\CSS\stylep.css"/>
    </head>
    <body>
       <?php
           include "includes/header.php";
       ?>   
        <div class="menu">
            <ul class="content">
                <li>        
                    <a href="\PROJECT\HOTEL\index.php" style="color:white; text-decoration: none;" class="active">HOME</a>
                </li>    
                <li>
                    <a href="\PROJECT\HOTEL\about.php"  style="color:white; text-decoration: none;" class="">ABOUT</a>
                </li>
                <li>    
                    <a href="\PROJECT\HOTEL\services.php" style="color:white; text-decoration: none;" class="">SERVICES</a>
                </li>       
                <li>
                    <a href="\PROJECT\HOTEL\contact.php" style="color:white; text-decoration: none;" class="">CONTACT</a>
                </li>    
            </ul>    
        </div>    
        <div id="property-images" class="carousel slide" data-ride="carousel">
            <div class="carousel-item active">
                <img class="d-block w-100" src="\PROJECT\HOTEL\images\slider2.jpg" alt="slide"/>
            </div>
        </div>
        <div class="motto">
            <div class="motto-line">
                <p><span>Have</span> a Happy Vacation at our <span>Hotel.</span></p>
            </div>
        </div>
        <div class="services">
            <div class="services-provide"> 
                <a href="#"><img src="\PROJECT\HOTEL\images\icon1.png"/></a>
            </div>
            <div class="services-provide-info">      
                <h3>BEST FOOD EVER</h3>
                <p>We offer multicuisine food in our hotel...</p>
            </div>
            <div class="services-provide">
                <a href="#"><img src="\PROJECT\HOTEL\images\icon2.png"/></a>
            </div>
            <div class="services-provide-info">    
                <h3>24X7 Phone Support</h3>
                <p>We provide a good assistance at our hotel...</p>
            </div>
            <div class="services-provide">
                <a href="#"><img src="\PROJECT\HOTEL\images\iocn3.png"/></a>
            </div> 
            <div class="services-provide-info">   
                <h3>BEST ROOM SERVICES</h3>
                <p>Room service will available here...</p>
            </div>
        </div>
        <div class="detail">
            <div class="detail-info">
                <h3>WELCOME TO OUR HOTEL</h3>
                <p>Feel's like the way home.</p>
            </div>
            <div class="detail-info-1">
                <p>For more information about our hotel<br/> call 7XXXXXXXX2</p>
            </div>
            <div class="detail-rooms">
                <div class="detail-rooms-info" id="dr">
                    <h3>DELUXE ROOMS</h3>
                    <p>Deluxe rooms provide a good view towards the environment and the view is top most.</p>
                    <a href="#"><img src="\PROJECT\HOTEL\images\slider1.jpg"/></a>
                </div>
                <div class="detail-rooms-info" id="lr">
                    <h3>LUXURY ROOMS</h3>
                    <p>Luxury rooms provides comfront and with a good experience with the room ambience.</p>
                    <a href="#"><img src="\PROJECT\HOTEL\images\slider2.jpg"/></a>
                </div>
                <div class="detail-rooms-info" id="er">
                    <h3>EXECUTIVE ROOMS</h3>
                    <p>Executive rooms provides comfront and a nice view through the beach side.</p>
                    <a href="#"><img src="\PROJECT\HOTEL\images\slider3.jpg"/></a>
                </div>
            </div>
            <div class="detail-offer">
                <h3>TODAY'S SPECIALS</h3>
                <a href="#"><img src="\PROJECT\HOTEL\images\slider3.jpg"/></a>
                <h5>SPECIAL DISCOUNT OFFER</h5>
                <p>Get 25% discount on Executive rooms</p>
            </div>
        </div>
        <?php
            include "includes/footer.php";
        ?>    
    </body>
</html>        