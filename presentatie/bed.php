<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="producten.css">
</head>
<body>
<style> 
    #text{
        font-family: Arial, Helvetica, sans-serif;
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
    <section class="product" id="product">
        <div class="heading">
            <h1>Onze <span>Producten</span></h1>
        </div>
        <div class="product-container">
            <div class="box"> 
                <a href="bed1.php"><img id="img" src="img/bed1.jpg" alt=""></a>
                <div class="content">
                    <h2 id="product-info">MALM</h2>
                </div>
                <span id="product-info">€339</span>
            </div>

            <div class="box"> 
                <a href="bed2.php"><img id="img" src="img/bed2.jpg" alt=""></a>
                <div class="content">
                    <h2 id="product-info">SLATTUM</h2>
                </div>
                <span id="product-info">
                    <strike>€109</strike> 
                    €99,95</span>
            </div>

            <div class="box"> 
                <a href="bed3.php"><img id="img" src="img/bed3.jpg" alt=""></a>
                <div class="content">
                    <h2 id="product-info">MALM</h2>
                </div>
                <span id="product-info">€189</span>
            </div>

            <div class="box"> 
                <a href="bed4.php"><img id="img" src="img/bed4.jpg" alt=""></a>
                <div class="content">
                    <h2 id="product-info">HEMNES</h2>
                </div>
                <span id="product-info">€279</span>
            </div>

            <div class="box"> 
                <a href="bed5.php"><img id="img" src="img/bed5.jpg" alt=""></a>
                <div class="content">
                    <h2 id="product-info">NEIDEN</h2>
                </div>
                <span id="product-info">€59,95</span>
            </div>

            <div class="box"> 
                <a href="bed6.php"><img id="img" src="img/bed6.jpg" alt=""></a>
                <div class="content">
                    <h2 id="product-info">TÄLLASEN</h2>
                </div>
                <span id="product-info">€219</span>
            </div>
        </div>
</body>
</html>