<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="header">
        <a href="home.php" class="logo">travel.</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <div class="heading" style="background: url(images/pexels-photomix-company-96627.jpg) no-repeat">
        <h1>packages</h1>
    </div>

    <section class="packages">
        <h1 class="heading-title">top destinations</h1>
        <div class="box-container">
            
        
            <div class="box">
                <div class="image">
                    <img src="images/pexels-stein-egil-liland-1933318.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <a class="btn" id="m" href="Map 2/index.php">Iceland</a>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/pexels-errin-casano-2356045.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <a class="btn" id="m" href="Map 3/index.php">Switzerland</a>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/pexels-aleksandar-pasaric-2341830.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <a class="btn" id="m" href="Map 4/index.php">Auckland</a>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            
            <div class="box">
                <div class="image">
                    <img src="images/pexels-engin-akyurt-2992314.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <a class="btn" id="m" href="Map 5/index.php">Bali</a>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/pexels-engin-akyurt-2771921.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <a class="btn" id="m" href="Map 6/index.php">Singapore</a>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/pexels-oliver-sjöström-1005417.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <a class="btn" id="m" href="Map 7/index.php">Miami</a>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/pexels-walid-ahmad-847402.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <a class="btn" id="m" href="Map 8/index.php">Africa</a>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/pexels-eugene-dorosh-739407.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <a class="btn" id="m" href="Map 9/index.php">Paris</a>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/pexels-suzukii-xingfu-872831.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <a class="mbtn id="m" href="Map 10/index.php">Goa</a>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="box-container">
            <!--<div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angel-right"></i>home</a>
                <a href="about.php"><i class="fas fa-angel-right"></i>about</a>
                <a href="package.php"><i class="fas fa-angel-right"></i>package</a>
                <a href="book.php"><i class="fas fa-angel-right"></i>book</a>
            </div>-->

            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angel-right"></i>ask questions</a>
                <a href="#"><i class="fas fa-angel-right"></i>about us</a>
                <a href="#"><i class="fas fa-angel-right"></i>privacy policy</a>
                <a href="#"><i class="fas fa-angel-right"></i>terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"><i class="fas fa-phone"></i> +111-222-333</a>
                <a href="#"><i class="fas fa-envelope"></i> gos067109@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Lucknow, India</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
            </div>
        </div>
        <div class="credit"> created by <span>Jatin Gupta</span> | all rights reserved! </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>