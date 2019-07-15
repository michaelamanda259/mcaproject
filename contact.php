<?php
 session_start();
 
 	if (isset($_GET['error'])) {
 		if ($_GET['error'] == 'emptyfields') {
 			alert("Fill in all fields.");
 		}
 		elseif ($_GET['error'] == 'invalidemail') {
 			alert ("Enter valid email .");
 		}
 		elseif ($_GET['error'] == 'invalidusername') {
 			alert ("Enter valid Username. ");
 		}
 	}
 	
     
   function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
    }	

?>



<html class="no-js" lang="zxx">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Soccer | Contact</title>
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
		<?php 
           require "header.php";
        ?>
	 <!-- Breadcrumbs Section Start -->
		<div class="rs-breadcrumbs sec-color">
            <img src="images\breadcrumbs\point-table.jpg" alt="Breadcrubs">
            <div class="breadcrumbs-inner">
    			<div class="container">
    				<div class="row">
    					<div class="col-md-12 text-center">
    						<h1 class="page-title">Contact</h1>
    						<ul>
    							<li>
    								<a class="active" href="index.php">Home</a>
    							</li>
    							<li>Contact</li>
    						</ul>
    					</div>
    				</div>
    			</div>
            </div>
		</div>
		<!-- Breadcrumbs Section End -->

		<!-- Contact Section Start -->
		<div class="contact-page-section sec-spacer">
        	<div class="container">
        		
        		<div class="row contact-address-section">
    				<div class="col-md-4 contact-pd">
    					<div class="contact-address">
    						<i class="fa fa-map-marker"></i>
    						<h4>Address</h4>
    						<p>MIT WORLD PEACE UNIVERSITY</p>
    						<p>PUNE, INDIA.</p>
    					</div>
    				</div>
    				<div class="col-md-4 contact-pd">
    					<div class="contact-phone">
    						<i class="fa fa-phone"></i>
    						<h4>Phone Number</h4>
    						<a href="tel:020-30273400">020-30273400</a>
    						<a href="tel:020-30273459">020-30273459</a>
    					</div>
    				</div>
    				<div class="col-md-4 contact-pd">
    					<div class="contact-email">
    						<i class="fa fa-envelope"></i>
    						<h4>Email Address</h4>
    						<a href="mailto:infoMIT@gmail.com"><p>infoMIT@gmail.com</p></a>
    						<a href="#"><p>www.MIT-WPU.com</p></a>
        				</div>
        			</div>
        		</div>

        		<div class="contact-comment-section">
        			<h3>Contact Form</h3>
                    
					<form action="includes/contact.inc.php" method="post">
						
							<div class="row">                                      
								<div class="col-md-6 col-sm-6 col-xs-12">
									    <label>First Name*</label>
										<input name="fname1" class="form-control" type="text">
									
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									
										<label>Last Name*</label>
										<input name="lname1" class="form-control" type="text">
									
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-12">
								
										<label>Email*</label>
										<input name="email1" class="form-control" type="email">
									
								</div>
								
							</div>
							<div class="row"> 
								<div class="col-md-12 col-sm-12 col-xs-12">    
									
										<label>Message *</label>
										<textarea cols="40" rows="10" name="message1" class="textarea form-control"></textarea>
									
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">         
									
										<button type="submit" name="submit1">Submit Feedback</button>
										
									
								</div>
							</div>    
						
					</form>						
        		</div>
        	</div>
        </div>
        <!-- Contact Section End -->

		
		<!-- Footer Start -->
        <?php 
          require "footer.php";
        ?>
        <!-- Footer End -->

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
        <!-- moogle map js -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgC6ZapXdUzFdeQOFhdm_wucwlDMMQ8CQ"></script>
        <!-- contact popup form js -->
        <script src="js\contact.form.js"></script>
		<!-- main js -->
		<script src="js\main.js"></script>
	</body>
</html>