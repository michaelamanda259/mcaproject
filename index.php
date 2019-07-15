<?php
 session_start();
 if (isset($_GET['error'])) {
        if ($_GET['error'] == 'emptyfields') {
            alert("Fill in all fields.");
        }
        elseif ($_GET['error'] == 'wrongpassword') {
            alert("Password is not valid.");
        }
        elseif ($_GET['error'] == 'nouser') {
            alert("No user found.");
        }
    }

    function alert($msg) { 
     echo "<script type='text/javascript'>alert('$msg');</script>";
    }

?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>F Square | Home </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="images\fav.png">    
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css\bootstrap.min.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="css\font-awesome.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css\animate.css">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="css\rsmenu-main.css">
        <!-- rsmenu transitions css -->
        <link rel="stylesheet" href="css\rsmenu-transitions.css">
        <!-- hover-min css -->
        <link rel="stylesheet" href="css\hover-min.css">
          <!-- magnific-popup css -->
        <link rel="stylesheet" href="css\magnific-popup.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="css\owl.carousel.css">
        <!-- Slick css -->
        <link rel="stylesheet" href="css\slick.css">
        <!-- style css -->
        <link rel="stylesheet" href="style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css\responsive.css">
        <!-- modernizr js -->
        <script src="js\modernizr-2.8.3.min.js"></script>
    </head>
    <body class="home-two">
        <!--Preloader start here-->
        <div id="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <!--Preloader area end here-->
        
        <!--Header area start here-->
        <header class="fullwidth-headers3">
            <div class="header-top-area">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-24">
                            <div class="social-media-area">
                                <nav>
                                    <?php
                                      if (isset($_SESSION['userId'])) {
                                        echo '<form action="includes/logout.inc.php" method="post">
                                          
                                             <div class="col-lg-16 col-md-12 col-sm-12 col-xs-24">
                                              <ul>
                                               <li class="log"> <button type="submit" name="logout">Logout</button> </li>
                                              </ul>
                                              </form>
                                              </div>';
                                        }
                                    else{
                                        echo '                                   
                                        <div class="col-lg-16 col-md-12 col-sm-12 col-xs-24">
                                        <ul> 
                                          <li class="log"><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>                                    
                                          <li class="sign"><a href="signup.php"><span>/</span> Sign Up</a></li>
                                        </ul>
                                        </div>';    
                                        }
                                    ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle-area menu-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="logo text-center">
                                <a href="index.php"><img src="images\logo1.png" alt="logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row margin">
                                <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                                <nav class="rs-menu">
                                    <ul class="nav-menu">
                                        <!-- Home -->
                                        <li >
                                            <a href="#">Home</a>
                                            </li>
                                         <!-- End Home -->
                                        <!--End Icons -->
                                        <li><a href="point-table.php">Point Table</a></li>
                                        <li >
                                            <a href="result.php">Result</a>
                                            
                                        </li>
                                        <li><a href="fixtures.php">Fixtures</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                               </nav>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </header>
        <!--Header area end here-->

        <div class="full-section-banner">
            <!-- Banner Section Start Here -->
            <div class="banner-sections">
                <img src="images\full-slider\big1.jpg" alt="Slider image">
                <div class="banner-text-area">
                    <div class="container">
                        <div class="banner-innner">
                            <h1>FIFA World Cup 2018 On <span>Giroud Scores 100 Trisal Goals</span></h1>
                             
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Section end Here -->

            <!-- Our history Section start Here -->
            <div class="our-history-sections">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="history-innner">
                                <div class="tab-content">
                                    <div id="history" class="history-details text-center tab-pane fade in active">
                                        <h3>HISTORY
                                        </h3>
                                        <p>Football clubs have existed since the 15th century, but unorganized and without official status. It is therefore hard to decide which the first football club was. Some historians suggest that it was the Foot-Ball Club formed 1824 in Edinburgh. Earlier clubs were often formed by former school students and the first of this kind was formed in Sheffield in 1855. The oldest among professional football clubs is the English club Notts County that was formed in 1862 and still exists today. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>    
            </div>                                                                          
        </div>                                                                          
        <!-- Our history Section end Here -->

        <!-- Upcoming Match Section Start Here-->
        <div class="upcoming-section2">
            <div class="container">
                <div class="row">
                    <h2>Upcoming Match</h2>
                    <div id="upcoming" class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="30" data-autoplay="true" data-autoplay-timeout="5200" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="false" data-md-device-dots="false">
                        <div class="item">
                            <div class="col-md-4 col-sm-4 col-xs-12 first">
                                <img src="images\upcoming\3.png" alt="">
                                <h4>Trasil Club</h4>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <span class="date">JUNE 16, 17:00</span>
                                <span class="vs">VS</span>
                                <span>Central Olympic Stadium</span>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 last">
                                <img src="images\upcoming\6.png" alt="">
                                <h4>Dhoar Club</h4>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-md-4 col-sm-4 col-xs-12 first">
                                <img src="images\upcoming\4.png" alt="">
                                <h4>Mirpur Club</h4>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <span class="date">JUNE 16, 17:00</span>
                                <span class="vs">VS</span>
                                <span>Central Olympic Stadium</span>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 last">
                                <img src="images\upcoming\7.png" alt="">
                                <h4>Kapa Club</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Upcoming Match Section end Here-->
        
        <!-- All news area Start Here-->
        <div class="all-news-area sec-spacer">
            <div class="container">
            
                <div class="row">
                                    <div class="separator-100"></div>
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="title-bg">Point table</h3>
                        <div class="point-list mmb-45 text-center">
                            <table class="point-table">
                                <tbody>
                                    <tr>
                                         <td></td>
                                         <td class="country-name">Team</td>
                                         <td>W</td>
                                         <td>L</td>
                                         <td>P</td>
                                    </tr>
                                    <tr>
                                         <td>01</td>
                                         <td>Badda FC</td>
                                         <td>16</td>
                                         <td>6</td>
                                         <td>32</td>
                                    </tr>
                                    <tr>
                                         <td>02</td>
                                         <td class="country-name">Banani FC</td>
                                         <td>14</td>
                                         <td>7</td>
                                         <td>28</td>
                                    </tr>
                                    <tr>
                                         <td>03</td>
                                         <td class="country-name">Trishal FC</td>
                                         <td>18</td>
                                         <td>8</td>
                                         <td>26</td>
                                    </tr>
                                    <tr>
                                         <td>04</td>
                                         <td>Dhoar FC</td>
                                         <td>15</td>
                                         <td>6</td>
                                         <td>32</td>
                                    </tr>
                                    <tr>
                                         <td>05</td>
                                         <td class="country-name">Kapa FC</td>
                                         <td>22</td>
                                         <td>4</td>
                                         <td>25</td>
                                    </tr>
                                    <tr>
                                         <td>06</td>
                                         <td class="country-name">Mirpur FC</td>
                                         <td>18</td>
                                         <td>6</td>
                                         <td>27</td>
                                    </tr>
                                    <tr>
                                         <td>07</td>
                                         <td class="country-name">Joypur FC</td>
                                         <td>14</td>
                                         <td>7</td>
                                         <td>29</td>
                                    </tr>
                                    <tr>
                                         <td>08</td>
                                         <td class="country-name">Bogro FC</td>
                                         <td>17</td>
                                         <td>6</td>
                                         <td>30</td>
                                    </tr>
                                    <tr>
                                         <td>09</td>
                                         <td class="country-name">Bramma FC</td>
                                         <td>16</td>
                                         <td>8</td>
                                         <td>29</td>
                                    </tr>
                                    <tr>
                                         <td>10</td>
                                         <td class="country-name">Nattrok FC</td>
                                         <td>18</td>
                                         <td>6</td>
                                         <td>24</td>
                                    </tr>
                                </tbody>
                            </table>
                           <a class="view-more text-left" href="point-table.php">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> 
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-sm-8 col-xs-8 match-view-tite">
                                <h3 class="title-bg">Match fixture</h3>
                            </div>
                            <div class="col-sm-4 col-xs-4 text-right match-view-more">
                                <a class="view-more" href="fixtures.php">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="match-list">
                                    <div class="overly-bg"></div>
                                    <table class="match-table">
                                        <tbody>
                                            <tr>
                                                 <td class="medium-font">Nettrok FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Bramma FC</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Netro Stadium</td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Bogro FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Joypur FC</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Bramma Stadium</td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Mirpur FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">men utd</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Golshan Stadium</td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Kapa FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Dhoar FC</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Mirpur Stadium</td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Trishal FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Banani FC</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Badda Stadium</td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Badda FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Nattrok Fc</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Mirpur Stadium</td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Bramma FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Bogro FC</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Netro Stadium</td>
                                            </tr>
                                            <tr>
                                                 <td class="medium-font">Joypur FC</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">Mirpur FC</td>
                                                 <td>June 16, 17:00</td>
                                                 <td>Bramma Stadium</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- All news area end Here-->
        
        
        <!-- Our Team Start Here-->
        <div class="our-team-section pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8">
                        <h3 class="title-bg">Top players</h3>
                        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="7000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                            <div class="our-team">
                                <img src="images\team\2.jpg" alt="">
                                <div class="person-details">
                                    <div class="overly-bg"></div>
                                    <a href="team-single.html"><h5 class="person-name">Eyamin Hossain</h5></a>
                                    <table class="person-info">
                                        <tbody>
                                            <tr>
                                                 <td>Born</td>
                                                 <td>sep 31, 1988</td>
                                            </tr>
                                            <tr>
                                                 <td>Position</td>
                                                 <td>Forward</td>
                                            </tr>
                                            <tr>
                                                 <td>Squad number</td>
                                                 <td>11</td>
                                            </tr>
                                            <tr>
                                                 <td>Previous Club</td>
                                                 <td>Badda</td>
                                            </tr>
                                            <tr>
                                                <td>Follow us on</td>
                                                <td>
                                                    <ul class="person-social-icons">
                                                        <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="our-team">
                                <img src="images\team\3.jpg" alt="">
                                <div class="person-details">
                                    <div class="overly-bg"></div>
                                    <a href="team-single.html"><h5 class="person-name">Istiak Ahmed</h5></a>
                                    <table class="person-info">
                                        <tbody>
                                            <tr>
                                                 <td>Born</td>
                                                 <td>sep 31, 1988</td>
                                            </tr>
                                            <tr>
                                                 <td>Position</td>
                                                 <td>Goalkeeper</td>
                                            </tr>
                                            <tr>
                                                 <td>Squad number</td>
                                                 <td>11</td>
                                            </tr>
                                            <tr>
                                                 <td>Previous Club</td>
                                                 <td>Badda</td>
                                            </tr>
                                            <tr>
                                                <td>Follow us on</td>
                                                <td>
                                                    <ul class="person-social-icons">
                                                        <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="our-team">
                                <img src="images\team\1.jpg" alt="">
                                <div class="person-details">
                                    <div class="overly-bg"></div>
                                    <a href="team-single.html"><h5 class="person-name">Masud Rana</h5></a>
                                    <table class="person-info">
                                        <tbody>
                                            <tr>
                                                 <td>Born</td>
                                                 <td>July 21, 1994</td>
                                            </tr>
                                            <tr>
                                                 <td>Position</td>
                                                 <td>striker</td>
                                            </tr>
                                            <tr>
                                                 <td>Squad number</td>
                                                 <td>10</td>
                                            </tr>
                                            <tr>
                                                 <td>Previous Club</td>
                                                 <td>Badda</td>
                                            </tr>
                                            <tr>
                                                <td>Follow us on</td>
                                                <td>
                                                    <ul class="person-social-icons">
                                                        <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="our-team">
                                <img src="images\team\4.jpg" alt="">
                                <div class="person-details">
                                    <div class="overly-bg"></div>
                                    <a href="team-single.html"><h5 class="person-name">Forhad Ali</h5></a>
                                    <table class="person-info">
                                        <tbody>
                                            <tr>
                                                 <td>Born</td>
                                                 <td>sep 31, 1985</td>
                                            </tr>
                                            <tr>
                                                 <td>Position</td>
                                                 <td>Defender</td>
                                            </tr>
                                            <tr>
                                                 <td>Squad number</td>
                                                 <td>11</td>
                                            </tr>
                                            <tr>
                                                 <td>Previous Club</td>
                                                 <td>Badda</td>
                                            </tr>
                                            <tr>
                                                <td>Follow us on</td>
                                                <td>
                                                    <ul class="person-social-icons">
                                                        <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="our-team">
                                <img src="images\team\5.jpg" alt="">
                                <div class="person-details">
                                    <div class="overly-bg"></div>
                                    <a href="team-single.html"><h5 class="person-name">Mahabub Alam</h5></a>
                                    <table class="person-info">
                                        <tbody>
                                            <tr>
                                                 <td>Born</td>
                                                 <td>sep 31, 1980</td>
                                            </tr>
                                            <tr>
                                                 <td>Position</td>
                                                 <td>Defender</td>
                                            </tr>
                                            <tr>
                                                 <td>Squad number</td>
                                                 <td>11</td>
                                            </tr>
                                            <tr>
                                                 <td>Previous Club</td>
                                                 <td>Badda</td>
                                            </tr>
                                            <tr>
                                                <td>Follow us on</td>
                                                <td>
                                                    <ul class="person-social-icons">
                                                        <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="our-team">
                                <img src="images\team\6.jpg" alt="">
                                <div class="person-details">
                                    <div class="overly-bg"></div>
                                    <a href="team-single.html"><h5 class="person-name">Abdur Rashid</h5></a>
                                    <table class="person-info">
                                        <tbody>
                                            <tr>
                                                 <td>Born</td>
                                                 <td>sep 31, 1988</td>
                                            </tr>
                                            <tr>
                                                 <td>Position</td>
                                                 <td>striker</td>
                                            </tr>
                                            <tr>
                                                 <td>Squad number</td>
                                                 <td>11</td>
                                            </tr>
                                            <tr>
                                                 <td>Previous Club</td>
                                                 <td>Badda</td>
                                            </tr>
                                            <tr>
                                                <td>Follow us on</td>
                                                <td>
                                                    <ul class="person-social-icons">
                                                        <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Team end Here-->
        
        <!-- Gallery Section2 Start Here-->
        <div class="gallery-section2 sec-spacer">
            <div class="overly-bg"></div>
            <div class="gallery-section-area">
                <div class="container">
                    <h3 class="title-bg">match gallery</h3>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="single-gallery">
                                <img src="images\gallery2\1.jpg" alt="">
                                <div class="heading-conent">
                                    <ul class="media-icons">
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="image-popup" href="images\gallery2\1.jpg"><i class="fa fa-power-off"></i></a></li>
                                    </ul>
                                    <h4></h4>
                                    <div class="bottom-icons">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="single-gallery">
                                <img src="images\gallery2\2.jpg" alt="">
                                <div class="heading-conent">
                                    <ul class="media-icons">
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="image-popup" href="images\gallery2\2.jpg"><i class="fa fa-power-off"></i></a></li>
                                    </ul>
                                    <h4></h4>
                                    <div class="bottom-icons">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="single-gallery">
                                <img src="images\gallery2\3.jpg" alt="">
                                <div class="heading-conent">
                                    <ul class="media-icons">
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="image-popup" href="images\gallery2\3.jpg"><i class="fa fa-power-off"></i></a></li>
                                    </ul>
                                    <h4></h4>
                                    <div class="bottom-icons">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="single-gallery">
                                <img src="images\gallery2\4.jpg" alt="">
                                <div class="heading-conent">
                                    <ul class="media-icons">
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="image-popup" href="images\gallery2\4.jpg"><i class="fa fa-power-off"></i></a></li>
                                    </ul>
                                    <h4></h4>
                                    <div class="bottom-icons">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="single-gallery">
                                <img src="images\gallery2\5.jpg" alt="">
                                <div class="heading-conent">
                                    <ul class="media-icons">
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="image-popup" href="images\gallery2\5.jpg"><i class="fa fa-power-off"></i></a></li>
                                    </ul>
                                    <h4> </h4>
                                    <div class="bottom-icons">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="single-gallery">
                                <img src="images\gallery2\6.jpg" alt="">
                                <div class="heading-conent">
                                    <ul class="media-icons">
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="image-popup" href="images\gallery2\6.jpg"><i class="fa fa-power-off"></i></a></li>
                                    </ul>
                                    <h4> </h4>
                                    <div class="bottom-icons">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="single-gallery">
                                <img src="images\gallery2\7.jpg" alt="">
                                <div class="heading-conent">
                                    <ul class="media-icons">
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="image-popup" href="images\gallery2\7.jpg"><i class="fa fa-power-off"></i></a></li>
                                    </ul>
                                    <h4> </h4>
                                    <div class="bottom-icons">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="single-gallery">
                                <img src="images\gallery2\8.jpg" alt="">
                                <div class="heading-conent">
                                    <ul class="media-icons">
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="image-popup" href="images\gallery2\8.jpg"><i class="fa fa-power-off"></i></a></li>
                                    </ul>
                                    <h4> </h4>
                                    <div class="bottom-icons">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>  
        <!-- Gallery Section2 Awards end Here-->
        
        <!-- Footer Start -->
        <?php 
          require "footer.php";
        ?>
        <!-- Footer End -->
        
        
        <!-- Start scrollUp  -->
        <div id="return-to-top">
            <span>Top</span>
        </div>
        <!-- End scrollUp  -->

        <!-- all js here -->
        <!-- jquery latest version -->
        <script src="js\jquery.min.js"></script>
        <!-- Menu js -->
        <script src="js\rsmenu-main.js"></script> 
         <!-- jquery-ui js -->
        <script src="js\jquery-ui.min.js"></script>
        <!-- bootstrap js -->
        <script src="js\bootstrap.min.js"></script>
        <!-- meanmenu js -->
        <script src="js\jquery.meanmenu.js"></script>
        <!-- wow js -->
        <script src="js\wow.min.js"></script>
        <!-- Slick js -->
        <script src="js\slick.min.js"></script>
        <!-- masonry js -->
        <script src="js\masonry.js"></script>
        <!-- magnific-popup js -->
        <!-- owl.carousel js -->
        <script src="js\owl.carousel.min.js"></script>
        <!-- magnific-popup js -->
        <script src="js\jquery.magnific-popup.js"></script>
        <!-- jquery.counterup js -->
        <script src="js\jquery.counterup.min.js"></script>
        <script src="js\waypoints.min.js"></script>
        <!-- main js -->
        <script src="js\main.js"></script>
    </body>
        
</html> 