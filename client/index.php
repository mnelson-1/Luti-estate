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
        <h1>Affordable, sustainable homes for <br>thriving communities.</h1>
        <p>LUTI bridges the housing gap in Lagos by offering innovative, eco-friendly homes. Our mission <br>is to create inclusive spaces where everyone can flourish, regardless of income.</p>
        
        <div class="container">
            <div class="col-left"><img src="images/Luti-web_07.webp" alt=""></div>
            <div class="col-mid">
                <div class="row row1"><img src="images/Luti-web_10.jpg" alt=""></div>
                <div class="row row2"><img src="images/Luti-web_06.jpg" alt=""></div>
            </div>
            <div class="col-right"><img src="images/Luti-web_02.jpg" alt=""></div>
        </div>
        <p class="outro-text">We have partnered with 10+ Real Estate Agencies across Nigeria <br>and have gathered over 600 million USD in funds.</p>
        
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
    <section class="info-section">
        <div class="info-text">
            <h2>Inclusive Housing for a brighter future.</h2>
            <p>LUTI is committed to solving Lagos' housing challenges by providing affordable, sustainable homes. Our mission is to create inclusive urban <br>spaces where everyone can thrive. By combining profitability with social responsibility, we aim to build resilient communities and ensure housing <br>is accessible to all.</p>
            <br>
            <p>We offer affordable housing with financial support to help individuals <br>cover costs until they secure steady employment, after which they <br>can begin paying their mortgage or rent.</p>
            <br>
            <p><a href="#"><strong>Are you eligible for Support?</strong></a></p>
        </div>
        <div class="info-graphics">
            <div class="box"><img src="images/Luti-web_04.jpg" alt=""></div>
        </div>
    </section>
    <div class="home">
        <section class="Operator">
            <!--Real Estate Widget-->
            <form action="search.html" method="get">
                <h3>Find your perfect home</h3>
                <div class="op-container">
                    <p>enter City name<span>*</span></p>
                    <input type="text" name="location" required maxlength="50" placeholder="Enter Location" class="op-input">
                </div>
                <div class="Op">
                    <div class="op-container">
                        <p>enter Property Type<span>*</span></p>
                        <select name="type" class="op-input" required>
                            <option value="flat">Flat</option>
                            <option value="house">house</option>
                            <option value="shop">Shop</option>
                        </select>
                    </div>
                    <div class="op-container">
                        <p>how many BHK <span>*</span></p>
                        <select name="bhk" class="op-input" required>
                            <option value="1">1 BHK</option>
                            <option value="2">2 BHK</option>
                            <option value="3">3 BHK</option>
                            <option value="4">4 BHK</option>
                            <option value="5">5 BHK</option>
                            <option value="6">6 BHK</option>
                            <option value="7">7 BHK</option>
                            <option value="8">8 BHK</option>
                            <option value="9">9 BHK</option>
                        </select>
                    </div>
                    <div class="op-container">
                        <p>maximum budget <span>*</span></p>
                        <select name="minimum" class="op-input" required>
                            <option value="5000000">5 lac</option>
                            <option value="1000000">10 lac</option>
                            <option value="2000000">20 lac</option>
                            <option value="3000000">30 lac</option>
                            <option value="4000000">40 lac</option>
                            <option value="4000000">40 lac</option>
                            <option value="5000000">50 lac</option>
                            <option value="6000000">60 lac</option>
                            <option value="7000000">70 lac</option>
                            <option value="8000000">80 lac</option>
                            <option value="9000000">90 lac</option>
                            <option value="10000000">1 Cr</option>
                            <option value="20000000">2 Cr</option>
                            <option value="30000000">3 Cr</option>
                            <option value="40000000">4 Cr</option>
                            <option value="50000000">5 Cr</option>
                            <option value="60000000">6 Cr</option>
                            <option value="70000000">7 Cr</option>
                            <option value="80000000">8 Cr</option>
                            <option value="90000000">9 Cr</option>
                            <option value="100000000">10 Cr</option>
                            <option value="150000000">15 Cr</option>
                            <option value="200000000">20 Cr</option>
                        </select>
                    </div>
                    <div class="op-container">
                        <p>maximum budget <span>*</span></p>
                        <select name="maximum" class="op-input" required>
                            <option value="5000000">5 lac</option>
                            <option value="1000000">10 lac</option>
                            <option value="2000000">20 lac</option>
                            <option value="3000000">30 lac</option>
                            <option value="4000000">40 lac</option>
                            <option value="4000000">40 lac</option>
                            <option value="5000000">50 lac</option>
                            <option value="6000000">60 lac</option>
                            <option value="7000000">70 lac</option>
                            <option value="8000000">80 lac</option>
                            <option value="9000000">90 lac</option>
                            <option value="10000000">1 Cr</option>
                            <option value="20000000">2 Cr</option>
                            <option value="30000000">3 Cr</option>
                            <option value="40000000">4 Cr</option>
                            <option value="50000000">5 Cr</option>
                            <option value="60000000">6 Cr</option>
                            <option value="70000000">7 Cr</option>
                            <option value="80000000">8 Cr</option>
                            <option value="90000000">9 Cr</option>
                            <option value="100000000">10 Cr</option>
                            <option value="150000000">15 Cr</option>
                            <option value="200000000">20 Cr</option>
                        </select>
                    </div>
                    <input type="submit" value="search property" name="search" class="btn">
                </div>
            </form>
        </section>
    </div>

    <section class="listings">

        <h1 class="heading">Latest Listings</h1>
    
        <div class="box-container">
    
            <div class="op-container">
                <div class="admin">
                    <h3>E</h3>
                    <div>
                        <p>Exodus Olanrewaju</p>
                        <span>10-11-2022</span>
                    </div>
                </div>
                <div class="thumb">
                    <p class="total-images"><i class="far fa-image"></i><span>4</span></p>
                    <p class="type"><span>house</span><span>sale</span></p>
                    <form action="" method="post" class="save">
                        <button type="submit" name="save" class="far fa-heart"></button>
                    </form>
                    <img src="images/house-img-1.webp" alt="">
                </div>
                <h3 class="name">modern flats and appartments</h3>
                <p class="location"><i class="fas fa-map-marker-alt"></i><span>andheri, mumbai, india - 401303</span></p>
                <div class="Op">
                    <p><i class="fas fa-bed"></i><span>3</span></p>
                    <p><i class="fas fa-bath"></i><span>2</span></p>
                    <p><i class="fas fa-maximize"></i><span>750sqft</span></p>
                </div>
                <a href="view_property0.html" class="btn">view property</a>
            </div>
        
            <div class="op-container">
                <div class="admin">
                    <h3>C</h3>
                    <div>
                        <p>Chisom Okafor</p>
                        <span>10-11-2022</span>
                    </div>
                </div>
                <div class="thumb">
                    <p class="total-images"><i class="far fa-image"></i><span>4</span></p>
                    <p class="type"><span>flat</span><span>sale</span></p>
                    <form action="" method="post" class="save">
                        <button type="submit" name="save" class="far fa-heart"></button>
                    </form>
                    <img src="images/house-img-2.webp" alt="">
                </div>
                <h3 class="name">modern flats and appartments</h3>
                <p class="location"><i class="fas fa-map-marker-alt"></i><span>andheri, mumbai, india - 401303</span></p>
                <div class="Op">
                    <p><i class="fas fa-bed"></i><span>3</span></p>
                    <p><i class="fas fa-bath"></i><span>2</span></p>
                    <p><i class="fas fa-maximize"></i><span>750sqft</span></p>
                </div>
                <a href="view_property1.html" class="btn">view property</a>
            </div>
        
            <div class="op-container">
                <div class="admin">
                    <h3>T</h3>
                    <div>
                        <p>Tunde Benson</p>
                        <span>10-11-2023</span>
                    </div>
                </div>
                <div class="thumb">
                    <p class="total-images"><i class="far fa-image"></i><span>4</span></p>
                    <p class="type"><span>flat</span><span>sale</span></p>
                    <form action="" method="post" class="save">
                        <button type="submit" name="save" class="far fa-heart"></button>
                    </form>
                    <img src="images/house-img-3.jpg" alt="">
                </div>
                <h3 class="name">modern flats and appartments</h3>
                <p class="location"><i class="fas fa-map-marker-alt"></i><span>andheri, mumbai, india - 401303</span></p>
                <div class="Op">
                    <p><i class="fas fa-bed"></i><span>3</span></p>
                    <p><i class="fas fa-bath"></i><span>2</span></p>
                    <p><i class="fas fa-maximize"></i><span>750sqft</span></p>
                </div>
                <a href="view_property2.html" class="btn">view property</a>
            </div>
        
        </div>
    
        <div style="margin-top: 2rem; text-align:center;">
            <a href="listings.html" class="inline-btn">view all</a>
        </div>
    
    </section>
    





    <section class="infrastructure-section">
        <h2>Current state of Infrastructure <br>and Urbanization in Lagos.</h2>
        <div class="card-container">
            <div class="card">
                <div class="image-placeholder"><img src="images/Luti-web_04.jpg" alt=""></div>
                <span class="label">Article</span>
                <a class="i-links" href="https://mepb.lagosstate.gov.ng/2024/02/01/lagos-to-invest-n550-689bn-on-infrastructure-in-2024/"><p>Lagos to invest N550.689bn on Infrastructure in 2024</p></a>
            </div>
            <div class="card">
                <div class="image-placeholder"><img src="images/Luti-web_01.jpg" alt=""></div>
                <span class="label">Article</span>
                <a class="i-links" href="http://ramosrealestateng.com/real-estate-market-analysis-exploring-the-dynamics-of-lagos-nigeria/"><p>Exploring the Dynamics of Lagos, Nigeria</p></a>
            </div>
            <div class="card">
                <div class="image-placeholder"><img src="images/Luti-web_09.jpg" alt=""></div>
                <span class="label">Article</span>
                <a class="i-links" href="https://guardian.ng/property/real-estate/we-align-with-global-push-for-sustainable-urban-development/"><p>‘We align with global push for sustainable urban...’</p></a>
            </div>
        </div>
    </section>
    <section class="Chatbot">

    </section>
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