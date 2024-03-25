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
            <a href="/PHP/project3/logout.php">logout</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <section class="home">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide"
                    style="background: url(images/pexels-asad-photo-maldives-457881.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide"
                    style="background: url(images/pexels-nathalie-de-boever-1398049.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>discover the new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide"
                    style="background: url(images/pexels-shvets-anna-2563593.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worthwile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <section class="services">
        <h1 class="heading-title">our services</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/adventure.png" alt="">
                <h3>adventure</h3>
            </div>
            <div class="box">
                <img src="images/location.png" alt="">
                <h3>tour guide</h3>
            </div>
            <div class="box">
                <img src="images/hiking.png" alt="">
                <h3>trekking</h3>
            </div>
            <div class="box">
                <img src="images/bonfire.png" alt="">
                <h3>camp fire</h3>
            </div>
            <div class="box">
                <img src="images/adventures.png" alt="">
                <h3>off road</h3>
            </div>
            <div class="box">
                <img src="images/tent.png" alt="">
                <h3>camping</h3>
            </div>
        </div>
    </section>

    <section class="home-about">
        <div class="image">
            <img src="images/pexels-august-de-richelieu-4427430.jpg" alt="">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit corrupti saepe numquam iste delectus
                minus
                facilis, perferendis atque deserunt dicta repellat vel quidem blanditiis? Officia et nostrum quis
                velit
                blanditiis?</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>

    <div class="hi">
        <section class="home-about">
            <h1 class="heading-title">our packages</h1>
            <div class="box">
                <div class="image">
                    <img src="images/pexels-yasir-gürbüz-11195793.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit corrupti saepe numquam iste
                        delectus minus facilis, perferendis atque deserunt dicta repellat vel quidem blanditiis? Officia
                        et nostrum quis velit blanditiis?</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/pexels-maahid-photos-3881104.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit corrupti saepe numquam iste
                        delectus minus facilis, perferendis atque deserunt dicta repellat vel quidem blanditiis? Officia
                        et nostrum quis velit blanditiis?</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/pexels-omar-mofeed-16288048.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit corrupti saepe numquam iste
                        delectus minus facilis, perferendis atque deserunt dicta repellat vel quidem blanditiis? Officia
                        et nostrum quis velit blanditiis?</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="load-more"><a href="package.php" class="btn">load more</a></div>
        </section>
    </div>

    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla ratione, repudiandae voluptas illum autem
                explicabo recusandae placeat deserunt ut voluptatem soluta eius rem nam quos, minima molestias,
                blanditiis in? Aliquam?</p>
            <a href="book.php" class="btn">book now</a>
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