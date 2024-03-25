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

    <div class="heading" style="background: url(images/pexels-pixmike-413195.jpg) no-repeat">
        <h1>about us</h1>
    </div>

    <section class="about">
        <div class="image">
            <img src="images/pexels-august-de-richelieu-4427430.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit voluptate dolor temporibus repellendus
                suscipit, minus in, ipsa unde aliquam nemo expedita ullam vero, magni esse magnam facilis libero est
                eligendi!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt quia totam sequi placeat veritatis
                saepe fugiat tenetur odit sint architecto aliquam vel ipsum laborum, ipsa adipisci reiciendis. Beatae,
                magni unde.</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <spam>top destinations</spam>
                </div>
                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <spam>affordable price</spam>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <spam>24/7 guide service</spam>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews">
        <div class="swiper reviews-slider">
            <h1 class="heading-title">client reviews</h1>
            <div class="w">
                <div class="slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto earum praesentium ullam
                        repellendus</p>
                    <h3>john doe</h3>
                    <span>traveller</span>
                    <div class="box">
                        <img src="images/derick-mckinney-bBuUjB98PPY-unsplash.jpg" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto earum praesentium ullam
                        repellendus</p>
                    <h3>john doe</h3>
                    <span>traveller</span>
                    <div class="box">
                        <img src="images/pexels-daniel-xavier-1239291.jpg" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto earum praesentium ullam
                        repellendus</p>
                    <h3>john doe</h3>
                    <span>traveller</span>
                    <div class="box">
                        <img src="images/pexels-italo-melo-2379005.jpg" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto earum praesentium ullam
                        repellendus</p>
                    <h3>john doe</h3>
                    <span>traveller</span>
                    <div class="box">
                        <img src="images/pexels-chloe-1043473.jpg" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto earum praesentium ullam
                        repellendus</p>
                    <h3>john doe</h3>
                    <span>traveller</span>
                    <div class="box">
                        <img src="images/pexels-spencer-selover-775358.jpg" alt="">
                    </div>
                </div>
                <div class="slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto earum praesentium ullam
                        repellendus</p>
                    <h3>john doe</h3>
                    <span>traveller</span>
                    <div class="box">
                        <img src="images/pexels-andrea-piacquadio-774866.jpg" alt="">
                    </div>
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