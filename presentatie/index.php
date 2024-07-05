<?php
session_start();

    include("connection.php");
    include("functions.php");
    //kijkt of de user ingelogd is
    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikea</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="home.css">  
</head>
<body>
<style> 
    body{
        background-image: url(img/homepagebackground.jpg);
        background-size: cover;
    }
    #h1{
        font-family: Arial, Helvetica, sans-serif;
    }
    #p{
        font-family: Arial, Helvetica, sans-serif;
        border-style: solid #8c52ff;
        border-color: black;
        text-align: center;
    }

</style>
<nav>
        <ul>
            <li><a href="index.php">home</a></li>
            <li>
                <a href="#">Producten</a>
                    <!--wanneer je met je muis op producten staat komt er een dropdown menu-->    
                <ul class="dropdown">
                    <li><a href="bureau.php">Bureaus</a></li>
                    <li><a href="stoel.php">Stoelen</a></li>
                    <li><a href="bed.php">Bedden</a></li>
                    <li><a href="kast.php">Kasten</a></li>
                </ul>
            </li>
            <li><a href="tijden.php">Openingstijden</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
                <!--winkelwagen icon-->
            <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i>
            <span class="amount">0</span>
            </a></li>
        </ul>
    </nav>
<div id="box">
    <br>
    <!--zegt hallo tegen de ingelogde user-->
    <center><div id="p">
    <p> Hallo, <?php echo $user_data['user_name']; ?>. 
   Wij bij Ikea richten ons op de kwaliteit en betaalbare producten voor in U huis. <Br>
    Vragen? Ons team helpt u graag! Kom bij een van onze winkels langs met uw vraag en laat ons team U helpen.</p>
</div></center>
</div>
</body>
</html>