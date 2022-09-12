<?php
$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

    if($insert) {
        $message[] = 'appointment made successfully!';
    }else {
        $message[] = 'appointment failed';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Dentist Website Design Tutorial</title>

    <!-- FONT AWESOME CDN LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- BOOTSTRAP CDN LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css">

    <!-- CUSTOM CSS FILE LINK -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- HEADER SECTION STARTS -->
<header class="header fixed-top">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <a href="#home" class="logo">dental<span>Care.</span></a>
            <nav class="nav">
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#services">services</a>
                <a href="#reviews">reviews</a>
                <a href="#contact">contact</a>
            </nav>
            <a href="#contact" class="link-btn">make appointment</a>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
    </div>
</header>
<!-- HEADER SECTION ENDS -->

<!-- HOME SECTION STARTS -->
<section class="home" id="home">
    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-md-left">
                <h3>let us brighten your smile</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea voluptates 
                nulla nemo dolores perspiciatis modi.</p>
                <a href="#contact" class="link-btn">make appointment</a>
            </div>
        </div>
    </div>
</section>
<!-- HOME SECTION ENDS -->

<!-- ABOUT SECTION STARTS -->
<section class="about" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 image">
                <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
            </div>
            <div class="col-md-6 content">
                <span>about us</span>
                <h3>True Healthcare For Your Family</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, laudantium quae, 
                reiciendis quisquam reprehenderit expedita illum in voluptatum, ratione voluptates 
                distinctio qui maiores. Eligendi quia modi, placeat odit ipsam perspiciatis!.</p>
                <a href="#contact" class="link-btn">make appointment</a>
            </div>
        </div>
    </div>
</section>
<!-- ABOUT SECTION ENDS -->

<!-- SERVICES SECTION STARTS -->
<section class="services" id="services">
    <h1 class="heading">our services</h1>
    <div class="box-container container">
        <div class="box">
            <img src="images/icon-1.svg" alt="">
            <h3>Alignment specialist</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, neque?</p>
        </div>

        <div class="box">
            <img src="images/icon-2.svg" alt="">
            <h3>Cosmetic dentistry</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, neque?</p>
        </div>

        <div class="box">
            <img src="images/icon-3.svg" alt="">
            <h3>Oral hygiene experts</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, neque?</p>
        </div>

        <div class="box">
            <img src="images/icon-4.svg" alt="">
            <h3>Root canal specialist</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, neque?</p>
        </div>

        <div class="box">
            <img src="images/icon-5.svg" alt="">
            <h3>Live dental advisory</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, neque?</p>
        </div>

        <div class="box">
            <img src="images/icon-6.svg" alt="">
            <h3>Cavity inspection</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, neque?</p>
        </div>

    </div>
</section>
<!-- SERVICES SECTION ENDS -->

<!-- PROCESS SECTION STARTS -->
<section class="process">
    <h1 class="heading">work process</h1>
    <div class="box-container container">
        <div class="box">
            <img src="images/process-1.png" alt="">
            <h3>Cosmetic Dentistry</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, aliquid?</p>
        </div>

        <div class="box">
            <img src="images/process-2.png" alt="">
            <h3>Pediatric Dentistry</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, aliquid?</p>
        </div>

        <div class="box">
            <img src="images/process-3.png" alt="">
            <h3>Dental Implants</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, aliquid?</p>
        </div>
    </div>
</section>
<!-- PROCESS SECTION ENDS -->

<!-- REVİEWS SECTION STARTS -->
<section class="reviews" id="reviews">
    <h1 class="heading">satisfied clients</h1>
    <div class="box-container container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas cum 
            ipsam placeat, odit ex molestiae qui velit? Excepturi, delectus velit?</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
            <span>satisfied client</span>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas cum 
            ipsam placeat, odit ex molestiae qui velit? Excepturi, delectus velit?</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
            <span>satisfied client</span>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas cum 
            ipsam placeat, odit ex molestiae qui velit? Excepturi, delectus velit?</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
            <span>satisfied client</span>
        </div>

    </div>
</section>
<!-- REVİEWS SECTION ENDS -->

<!-- CONTACT SECTION STARTS -->
<section class="contact" id="contact">
    <h1 class="heading">make appointment</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                    echo '<p class="message">'.$message.'</p>';
                }
            };
        ?>
        <span>your name :</span>
        <input type="text" name="name" placeholder="enter your name" class="box" required>
        <span>your email :</span>
        <input type="email" name="email" placeholder="enter your email" class="box" required>
        <span>your number :</span>
        <input type="number" name="number" placeholder="enter your number" class="box" required>
        <span>appointment date :</span>
        <input type="datetime-local" name="date" class="box" required>
        <input type="submit" value="make appointment" name="submit" class="link-btn">
    </form>
</section>
<!-- CONTACT SECTION ENDS -->

<!-- FOOTER SECTION STARTS -->
<section class="footer">
    <div class="box-container container">

        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>phone number</h3>
            <p>324-567-4654</p>
            <p>634-567-7945</p>
        </div>

        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>our address</h3>
            <p>Bursa, Turkey - 16160</p>
        </div>

        <div class="box">
            <i class="fas fa-clock"></i>
            <h3>opening hours</h3>
            <p>24:00   08:00</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email address</h3>
            <p>kanaryali@gmail.com</p>
        </div>

    </div>
    <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Sadi BEKCAN</span></div>
</section>
<!-- FOOTER SECTION ENDS -->









<!-- CUSTOM JS FILE LINK -->
<script src="js/script.js"></script>
    
</body>
</html>