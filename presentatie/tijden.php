<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="home.css"> 
</head>
<body>
<style> 
    body{
        background-image: url(img/homepagebackground.jpg);
        background-size: cover;
    }
    #text{
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        border: 5px solid #8c52ff;
        width: 250px;
        background-color: #8c52ff;
        color: white;
    }
</style>
<nav>
        <ul>
            <li><a href="index.php">home</a></li>
            <li>
                <a href="#">Producten</a>
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
            <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i>
            <span class="amount">0</span>
            </a></li>
        </ul>
    </nav>
<center><div id="text">
    <h1>Openingstijden</h1>
    <p>
    maandag	10:00-20:00 <br>
    dinsdag	10:00-20:00 <br>
    woensdag 10:00-20:00 <br>
    donderdag 10:00-20:00 <br>
    vrijdag	10:00-21:00 <br>
    zaterdag 10:00-19:00 <br>
    zondag 10:00-18:00 <br>
    </p>
</div></center>
</body>
</html>