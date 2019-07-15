<?php
 session_start();

?>

<html class="no-js" lang="zxx">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>F Square | Match Fixtures</title>
		<meta name="description" content="">
		<meta name="viewport" content="widtd=device-widtd, initial-scale=1">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<!-- Place favicon.ico in tde root directory -->
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
		<?php 
          require "header.php";
        ?>
		<!--Header area end here-->		

        <!-- Breadcrumbs Section Start -->
		<div class="rs-breadcrumbs sec-color">
            <img src="images\breadcrumbs\point-table.jpg" alt="Breadcrubs">
            <div class="breadcrumbs-inner">
    			<div class="container">
    				<div class="row">
    					<div class="col-md-12 text-center">
    						<h1 class="page-title">Match Fixtures</h1>
    						<ul>
    							<li>
    								<a class="active" href="index.php">Home</a>
    							</li>
    							<li>Match Fixtures</li>
    						</ul>
    					</div>
    				</div>
    			</div>
            </div>
		</div>
		<!-- Breadcrumbs Section End -->
		  <!-- match fixtures Section Start -->
        <div class="match-fixtures-page sec-spacer">
	        <div class="container">
                <div class="row">
                    <div class="tab-content team-result">
                        <div class="match-list">
                            
                            <div class="overly-bg"></div>
                            <table class="match-table" align="center">
                            <?php
                                    require '/xampp/htdocs/soccer/includes/dbh.inc.php';

                                   // require $SERVER['DOCUMENT_ROOT'].'/xampp/htdocs/soccer/includes/dbh.inc.php';


                                    $sql = "SELECT id, G1, G2, DT, Place FROM fixtures";
                                    $stmt = mysqli_stmt_init($conn);
                                    if (!mysqli_stmt_prepare($stmt,$sql)) {
    	                                 header("Location: ../index.php?error=sqlerror");
                                         exit(); 	
    	                               }
    	                            else 
    	                           {
    	                           	 mysqli_stmt_execute($stmt);
    	                           	 $result = mysqli_stmt_get_result($stmt);
                                    if(mysqli_num_rows($result)>0)
                                    { 
                                       while ($row = mysqli_fetch_assoc($result)) {
                                       	
                                        echo '<tbody>
                                            <tr>
                                                 <td class="medium-font">'.$row['G1'].'</td>
                                                 <td class="big-font">VS</td>
                                                 <td class="medium-font">'.$row['G2'].'</td>
                                                 <td>'.$row['DT'].'</td>
                                                 <td>'.$row['Place'].'</td>
                                            </tr>
                                            
                                        </tbody>';
                                     }
                                   }
                                }
                                    ?>
                                    </table>
                                </div>
	        </div>
            </div>
            </div>
	    </div>
	    <!-- match fixtures Section End -->
	
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