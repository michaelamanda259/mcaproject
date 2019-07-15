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
 		elseif ($_GET['error'] == 'passwordcheck') {
 			alert ("Password not matching. ");
 		}
 		elseif ($_GET['error'] == 'usertaken') {
 			alert ("Username already taken. ");
 		}
 	}
 	elseif (isset($_GET['signup'] ))
 	{

 		if($_GET['signup'] == 'success') {
 		alert ("Signup successful. ");
 		header("Location: ../signup.php?signup=success");
        exit();
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
		<title>F Square | Signup</title>
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
		<link rel="stylesheet" href="signup.css">
		<link rel="stylesheet" href="css\responsive.css">
		<!-- modernizr js -->
		<script src="js\modernizr-2.8.3.min.js"></script>
		<script type="text/javascript" src="js\showpswd.js"></script>
		
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
    						<h1 class="page-title">Signup</h1>
    						<ul>
    							<li>
    								<a class="active" href="index.php">Home</a>
    							</li>
    							<li>Signup</li>
    						</ul>
    					</div>
    				</div>
    			</div>
            </div>
		</div>
<br>
<br>
 <section class="container">
	<div class="main-wrapper">
		<form action="includes/signup.inc.php" method="post">
			<div class="tab-con team-res">
				    	<table align="center">
				    		<tr class="single-res"></tr>
				    		<tr class="single-res">
				    			<td class="text-center"><br><input type="text" name="username" placeholder="User name"><br><br></td>
				    		</tr>

				    		<tr class="single-res">
				    			<td class="text-center"><br><input type="text" name="email" placeholder="E-mail"><br><br></td>
				    		</tr>

				    		<tr class="single-res">
				    			<td class="text-center"><br><input type="password" id="pwd1" name="pass" placeholder="password"><br>
				    			<input type="checkbox" onclick="showp()">Show Password<br></td>
				    		</tr><tr class="single-res">
				    			<td class="text-center"><br><input type="password" name="cpass" placeholder="confirm password"><br><br></td>
				    		</tr><tr class="single-res">
				    			<td class="text-center"><br><button type="submit" name="submit">Signup</button><br><br></td>
				    		</tr>
				    	</table>
				    </div>
				</form></div>
</section>



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
 

