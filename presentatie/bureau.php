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
                <a href="bureau1.php"><img id="img" src="img/bureau1.jpg" alt=""></a>
                <div class="content">
                    <h2 id="product-info">LAGKAPTEN</h2>
                </div>
                <span id="product-info">€75,99</span>
            </div>

            <div class="box"> 
                <a href="bureau2.php"><img id="img" src="img/bureau2.jpg" alt=""></a>
                <div class="content">
                    <h2 id="product-info">MICE</h2>
                </div>
                <span id="product-info">€129</span>
            </div>

            <div class="box"> 
                <a href="bureau3.php"><img id="img" src="img/bureau3.jpg" alt=""></a>
                <div class="content">
                    <h2 id="product-info">RODULF</h2>
                </div>
                <span id="product-info">€299</span>
            </div>

            <div class="box"> 
                <a href="bureau4.php"><img id="img" src="img/bureau4.jpg" alt=""></a>
                <div class="content">
                    <h2 id="product-info">MALM</h2>
                </div>
                <span id="product-info">€129</span>
            </div>

            <div class="box"> 
                <a href="bureau5.php"><img id="img" src="img/bureau5.jpg" alt=""></a>
                <div class="content">
                    <h2 id="product-info">MICKE</h2>
                </div>
                <span id="product-info">€119,95</span>
            </div>

            <div class="box"> 
                <a href="bureau6.php"><img id="img" src="img/bureau6.jpg" alt=""></a>
                <div class="content">
                    <h2 id="product-info">TROTTEN</h2>
                </div>
                <span id="product-info">€129</span>
            </div>
        </div>
    </section>
</body>
</html>