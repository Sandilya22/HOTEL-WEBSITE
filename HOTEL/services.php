<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hotel Website | Services</title> 
        <link rel="stylesheet" type="text/css" href="\PROJECT\HOTEL\css\bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="\PROJECT\HOTEL\CSS\header.css"/>
        <link rel="stylesheet" type="text/css" href="\PROJECT\HOTEL\CSS\servicesp.css"/>
    </head>
    <body>
        <?php
            include "includes\header.php";
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
                    <a href="\PROJECT\HOTEL\services.php" style="color:white; text-decoration: none;" class="active">SERVICES</a>
                </li>     
                <li>
                    <a href="\PROJECT\HOTEL\contact.php" style="color:white; text-decoration: none;" class="">CONTACT</a>
                </li>    
            </ul>    
        </div>
        <div class="services-desc">
            <div class="services-desc-info">
                <h3>OUR HOTEL SERVICES</h3>
                <ul>
                    <li>
                        <span>1.</span>
                    </li>
                    <li class="big">
                        <p>
                            <h4>CULTURE SHOW</h4>
                            Every evening we provide programs at the beach-side.
                        </p>
                    </li>
                </ul>
                <ul>    
                    <li>
                        <span>2.</span>
                    </li>
                    <li class="big">
                        <p>
                            <h4>SWIMMING POOL</h4>
                            You can enjoy swimming in the pool  and relax with a drink.
                        </p>
                    </li>
                </ul>
                <ul>    
                    <li>
                        <span>3.</span>
                    </li>
                    <li class="big">
                        <p>
                            <h4>RESTAURANT</h4>
                            You can a variety of food at our restaurant.
                        </p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <span>4.</span>
                    </li>
                    <li class="big">
                        <p>
                            <h4>CONFERENCE HALL</h4>
                            Here you can attend for meetings,family gatherings,functions.
                        </p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <span>5.</span>
                    </li>
                    <li class="big">
                        <p>
                            <h4>SPA</h4>
                            Here you can enjoy spa.
                        </p>
                    </li>
                </ul>
                <ul>    
                    <li>
                        <span>6.</span>
                    </li>
                    <li class="big">
                        <p>
                            <h4>POOLSIDE BAR</h4>
                            To get chill by the pool side.
                        </p>
                    </li>
                </ul>
            </div>
            <div class="services-addldesc">
                <h3>WE PROVIDE</h3>
                <div class="servicess">    
                    <h4>24X7 Phone Support</h4>
                    <p>We provide a good assistance<br/> at our hotel...</p>
                </div>
                <div class="servicess-1">
                    <a href="#"><img src="\PROJECT\HOTEL\images\iocn3.png"/></a>
                </div> 
            </div>
        </div>
        <?php
            include "includes/footer.php";
        ?>
    </body>
</html>            