<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hotel Website | About</title>
        <link rel="stylesheet" type="text/css" href="\PROJECT\HOTEL\CSS\bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="\PROJECT\HOTEL\CSS\header.css"/>
        <link rel="stylesheet" type="text/css" href="\PROJECT\HOTEL\CSS\aboutp.css"/>
    </head>
    <body>
       <?php
           include "includes/header.php";
       ?>    
        <div class="menu">
            <ul class="content">
                <li>        
                    <a href="\PROJECT\HOTEL\index.php" style="color:white; text-decoration: none;" class="">HOME</a>
                </li>    
                <li>
                    <a href="\PROJECT\HOTEL\about.php"  style="color:white; text-decoration: none;" class="active">ABOUT</a>
                </li>
                <li>    
                    <a href="\PROJECT\HOTEL\services.php" style="color:white; text-decoration: none;" class="">SERVICES</a>
                </li>       
                <li>
                    <a href="\PROJECT\HOTEL\contact.php" style="color:white; text-decoration: none;" class="">CONTACT</a>
                </li>    
            </ul>    
        </div>  
        <div class="desc">
            <div class="desc-detail">
                <h2>ABOUT OUR HOTEL</h2>
                <a href="#"><img src="\PROJECT\HOTEL\images\slider3.jpg"/></a>
                <p>Our hotel is providing the customers safe,healthy and enjoyable place.</p>
                <p>Feels like home.</p>
            </div>
            <div class="desc-detail-1">
                <h2>WHY CHOSE US?</h2>
                <p>We provide clean rooms with healthy and well made <br/> foods in our hotel. </p>
                <h3>ROOMS</h3>
                <p>Our hotel provides a 3 different types of rooms<br/>
                    <ol>
                        <li>Executive Rooms</li>
                        <li>Luxury Rooms</li>
                        <li>Deluxe Rooms</li>
                    </ol>
                </p>
                <h3>RESTAURANT</h3>
                <p>We serve multicuisine food with healthy and fresh food.</p>
            </div>
            <div class="desc-detail-2">
                <h2>OUR HOTEL'S STAFF</h2>
                <h2>INFO.</h2>
                <div>
                    <a href="#"><img src="\PROJECT\HOTEL\images\c1.jpg"/></a>
                    <h4>MANAGER</h4>
                    <p>P.Raghurama raju</p>
                </div>
                <div class="asst">    
                    <a href="#"><img src="\PROJECT\HOTEL\images\c1.jpg"/></a>
                    <h4>ASSISTANT MANAGER</h4>
                    <p>M.Suresh</p>
                </div>    
            </div>
        </div>
        <?php
            include "includes/footer.php";
        ?>    
    </body>
</html>        