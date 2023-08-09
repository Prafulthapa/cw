<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Softwarica Coffee</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <a href="#" class="logo">
            <img src="logo.png" alt="">
        </a>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="menu.html">menu</a>
            <a href="products.html#products">products</a>
            <a href="review.html">review</a>
            <a href="contact.html">contact</a>
            <?php if (isset($user)): ?>
        
                <p style="color: white; font-size: 20px;">
    Hello <?= htmlspecialchars($user["username"]) ?>
</p>

        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
        
    <?php endif; ?>

        </nav>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>

        <div class="cart-items-container">
            <div class="cart-items">
                <span class="fas fa-times"></span>
                <img src="cart-item-1.jpg" alt="">
                <div class="content">
                    <h3>cart item 01</h3>
                    <div class="price">$6.9/-</div>
                </div>
            </div>
            <div class="cart-items">
                <span class="fas fa-times"></span>
                <img src="cart-item-2.jpg" alt="">
                <div class="content">
                    <h3>cart item 02</h3>
                    <div class="price">$6.9/-</div>
                </div>
            </div>
            <div class="cart-items">
                <span class="fas fa-times"></span>
                <img src="cart-item-3.jpg" alt="">
                <div class="content">
                    <h3>cart item 03</h3>
                    <div class="price">$6.9/-</div>
                </div>
            </div>
            <div class="cart-items">
                <span class="fas fa-times"></span>
                <img src="cart-item-4.jpg" alt="">
                <div class="content">
                    <h3>cart item 04</h3>
                    <div class="price">$6.9/-</div>
                </div>
            </div>
            <a href="#" class="btn">checkout now</a>
        </div>

    </header>

    <section class="home" id="home">
        <div class="content">
            <h3>fresh coffee for fresh morning</h3>
            <p>Fresh coffee in the morning is a delight for the senses.
                Its rich aroma and smooth flavor provide a warm and energizing start to the day.
            </p>
            <a href="#" class="btn">Get yours now</a>
        </div>
    </section>

    <section class="about" id="about">
        <h1 class="heading"><span>about</span> us</h1>
        <div class="row">
            <div class="image">
                <img src="about.jpg" alt="">
            </div>
            <div class="content">
                <h3>what makes our coffee special?</h3>
                <p>Our coffee is unlike any other since we use only the highest quality beans from the world's most reputable farmers. Then, our master roasters expertly roast the beans to bring out the best in each blend's individual flavor profile..</p>
                <p>Our highly trained baristas are passionate about creating the perfect cup of coffee, using the best brewing techniques and equipment available to deliver a consistently excellent experience. 
                    These elements combine to create a truly exceptional cup of coffee that is enjoyed by coffee lovers everywhere.</p>    
                <a href="#" class="btn">learn more</a>    
            </div>
        </div>
    </section>
    <section class="footer">

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="links">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="menu.html">menu</a>
            <a href="products.html">products</a>
            <a href="review.html">review</a>
            <a href="contact.html">contact</a>
        </div>

        <div class="credit">created by <span>Praful Thapa</span> | all right reserved</div>

    </section>   
    <script src="script.js"></script>
</body>
</html>
