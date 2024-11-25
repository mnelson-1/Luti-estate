<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUTI - Real Estate for Social Impact</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
    <header class="scrolled"> <!-- NavBar -->
        <img class="logo" src="src/assets/Logos/Logo blue@2x.png" alt="logo">
        <nav>
            <ul class="nav_links">
                <li><a href="index.php">Home</a></li>
                <li><a href="About.php">About Us</a></li>
                <li><a href="Opportunities.php">Opportunities</a></li>
                <li><a href="Donate.php">Donate/Invest</a></li>
            </ul>
        </nav>
        <div>
            <a class="cta" href="BookAppointment.php"><button class="Header-button">Book Appointment</button></a>
        </div>
        <div id="menu-btn" class="fas fa-bars"></div>
    </header>
    <!-- Hero Section -->
    <section class="Hero">
        <h1>Book an Appointment Today</h1>
        <p>Discuss plans about your future housing with our professionals</p>
        
        <div class="container">
            <div class="col-left"><img src="images/Luti-web_07.webp" alt=""></div>
            <div class="col-mid">
                <div class="row row1"><img src="images/Luti-web_10.jpg" alt=""></div>
                <div class="row row2"><img src="images/Luti-web_06.jpg" alt=""></div>
            </div>
            <div class="col-right"><img src="images/Luti-web_02.jpg" alt=""></div>
        </div>
        
        <div class="part_container">
            <section class="partners-logos slider">
                <div class="slide"><img src="src/assets/Partners/Access_Bank.png"></div>
                <div class="slide"><img src="src/assets/Partners/Julius_Berger_PLC.png"></div>
                <div class="slide"><img src="src/assets/Partners/olaniwun_png.png"></div>
                <div class="slide"><img src="src/assets/Partners/Softcom.png"></div>
                <div class="slide"><img src="src/assets/Partners/UN_Habitat.png"></div>
            </section>
        </div>
    </section>

    <!--Appointment Form starts here-->
    <div class="home">
        <section class="Operator">
            <!--Real Estate Widget-->
            <form action="thankyoubook.html" method="get">
                <h3>Book an Appointment</h3>
                <div class="op-container">
                    <p>Full Name<span>*</span></p>
                    <input type="text" name="name" placeholder="Enter your name " class="op-input">
                </div>

                <div class="op-container">
                    <p>Email<span>*</span></p>
                    <input type="email" name="email" placeholder="Enter your email" class="op-input">
                </div>

                <div class="op-container">
                    <p>Appointment Date<span>*</span></p>
                    <input type="date" id="date" name="date" required maxlength="50" placeholder="dd--mm--yyyy" class="op-input">
                </div>

                <div class="Op">
                    <input type="submit" value="Book Now" name="search" class="btn">
                </div>
            </form>
        </section>
    </div>
    <!--Appointment Form ends here-->   





    <footer class="footer">
        <div class="footer-content">
            <div class="footer-left">
                <div class="logo-placeholder"><img class="footer-logo" src="src/assets/Logos/Logomark gray@2x.png" alt=""></div>
                <h3>Real Estate for <br>Social Impact.</h3>
            </div>
            
            <div class="footer-links">
                <div class="link-group">
                    <h2>Company</h2>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">News Room</a></li>
                        <li><a href="#">Donate</a></li>
                    </ul>
                </div>
                <div class="link-group">
                    <h2>Resources</h42>
                    <ul>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Opportunities</a></li>
                    </ul>
                </div>
                <div class="link-group">
                    <h2>Company</h2>
                    <ul>
                        <li><a href="#">Find Properties</a></li>
                        <li><a href="#">Apply for Aid</a></li>
                        <li><a href="#">Invest</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-right">
                <h3>Become a Subscriber</h3>
                <p>Subscribe to our blog and get the latest updates on <br> houses and opportunities straight to your inbox.</p>
                <div class="footer-box">
                    <form action="index.php" method="POST">
                        <?php
                            $userEmail = ""; //declaring user email
                            if(isset($_POST['subscribe'])){ //if subscribe btn is clicked
                                $userEmail = $_POST['EmailAddress']; //getting user email
                                if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){
                                    $subject = "Thank you for subscribing to LUTI";
                                    $message = "Thank you for subscribing to LUTI. You will receive updates on our latest properties and opportunities.";
                                    $sender = "From: benji.chukwu.20@gmail.com";
                                    if(mail($userEmail, $subject, $message, $sender)){
                                        echo "Thank you for subscribing to LUTI. You will receive updates on our latest properties and opportunities.";
                                    } else {
                                        echo "$userEmail is incorrect";
                                    }
                                }
                            }
                        ?>
                        <div class="form-box">
                            <input type="text" name="EmailAddress" placeholder="Enter your email address" required value="<?php echo $userEmail ?>">
                            <button type="submit" name="subscribe">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <a href="#">Privacy Policy</a> 
            <a href="#">Terms of Use</a>  
            <a href="#">LUTI. Copyright reserved ©2024</a>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-grid.min.css" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="Luti.js"></script>
</body>
</html>