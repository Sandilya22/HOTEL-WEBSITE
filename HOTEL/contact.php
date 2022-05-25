<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hotel Website | Contact</title> 
        <link rel="stylesheet" type="text/css" href="\PROJECT\HOTEL\css\bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="\PROJECT\HOTEL\CSS\header.css"/>
        <link rel="stylesheet" type="text/css" href="\PROJECT\HOTEL\CSS\contactp.css"/>
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
                    <a href="\PROJECT\HOTEL\about.php"  style="color:white; text-decoration: none;" class="">ABOUT</a>
                </li>
                <li>    
                    <a href="\PROJECT\HOTEL\services.php" style="color:white; text-decoration: none;" class="">SERVICES</a>
                </li>     
                <li>
                    <a href="\PROJECT\HOTEL\contact.php" style="color:white; text-decoration: none;" class="active">CONTACT</a>
                </li>    
            </ul>    
        </div>
        <div class="company">
            <div class="com-info">
                <h2> COMPANY INFORMATION:</h2>
                <p>Near Municipal stadium,</p>
                <p>Mormont road,</p>
                <p>Panjim,Goa,</p>
                <p>INDIA</p>
                <p>Phone number: 0XXXXXXXXX8</p>
                <p>Email:<span><a href="#" class="com-info-a">info@hotel.com</a></span></p>
            </div>
        </div>
        <?php
           include "includes/footer.php";
        ?>   
    </body>
</html>         