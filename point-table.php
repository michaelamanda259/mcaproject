<?php
 session_start();

?>

<html class="no-js" lang="zxx">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>F Square | Point-Table</title>
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
    						<h1 class="page-title">Point Table</h1>
    						<ul>
    							<li>
    								<a class="active" href="index.php">Home</a>
    							</li>
    							<li>Point Table</li>
    						</ul>
    					</div>
    				</div>
    			</div>
            </div>
		</div>
		<!-- Breadcrumbs Section End -->


        <!-- Point Table Section Start -->
        <div class="rs-point-table sec-spacer">
	        <div class="container">
	        	<ul class="point-menu">
					<li class="active"><a data-toggle="tab" href="#sfl">SFL</a></li>
				  	<li><a data-toggle="tab" href="#efl">EFL</a></li>
				  	<li><a data-toggle="tab" href="#nfl">NFL</a></li>
				  	<li><a data-toggle="tab" href="#ufa">UFA</a></li>
				  	<li><a data-toggle="tab" href="#world-cup">WORLD CUP</a></li>
				</ul>

				<div class="tab-content">
				  	<div id="sfl" class="tab-pane fade in active">
				    	<table>
				    		<tr>
				    			<td></td>
				    			<td class="team-name">TEAM</td>
				    			<td>P</td>
				    			<td>W</td>
				    			<td>D</td>
				    			<td>L</td>
				    			<td>F</td>
				    			<td>A</td>
				    			<td>GD</td>
				    			<td>PTS</td>
				    		</tr>
				    		<tr>
				    			<td>01</td>
				    			<td class="team-name">Banani FC</td>
				    			<td>60</td>
				    			<td>35</td>
				    			<td>08</td>
				    			<td>16</td>
				    			<td>02</td>
				    			<td>04</td>
				    			<td>11</td>
				    			<td>95</td>
				    		</tr>
				    		<tr>
				    			<td>02</td>	
				    			<td class="team-name">Badda FC</td>
				    			<td>57</td>
				    			<td>33</td>
				    			<td>07</td>
				    			<td>17</td>
				    			<td>02</td>
				    			<td>04</td>
				    			<td>10</td>
				    			<td>93</td>
				    		</tr>
				    		<tr>
				    			<td>03</td>	
				    			<td class="team-name">Joypur FC</td>
				    			<td>60</td>
				    			<td>32</td>
				    			<td>12</td>
				    			<td>18</td>
				    			<td>02</td>
				    			<td>04</td>
				    			<td>8</td>
				    			<td>92</td>
				    		</tr>
				    		<tr>
				    			<td>04</td>	
				    			<td class="team-name">Bramma FC</td>
				    			<td>58</td>
				    			<td>35</td>
				    			<td>08</td>
				    			<td>14</td>
				    			<td>02</td>
				    			<td>05</td>
				    			<td>7</td>
				    			<td>90</td>
				    		</tr>
				    		<tr>
				    			<td>05</td>	
				    			<td class="team-name">Trishal FC</td>
				    			<td>57</td>
				    			<td>32</td>
				    			<td>10</td>
				    			<td>16</td>
				    			<td>04</td>
				    			<td>06</td>
				    			<td>7</td>
				    			<td>88</td>
				    		</tr>
				    		<tr>
				    			<td>06</td>
				    			<td class="team-name">Mirpur FC</td>
				    			<td>59</td>
				    			<td>30</td>
				    			<td>09</td>
				    			<td>18</td>
				    			<td>02</td>
				    			<td>05</td>
				    			<td>3</td>
				    			<td>87</td>
				    		</tr>
				    		<tr>
				    			<td>07</td>
				    			<td class="team-name">Kapa FC</td>
				    			<td>60</td>
				    			<td>28</td>
				    			<td>14</td>
				    			<td>16</td>
				    			<td>02</td>
				    			<td>03</td>
				    			<td>1</td>
				    			<td>85</td>
				    		</tr>
				    		<tr>
				    			<td>08</td>
				    			<td class="team-name">Bogro FC</td>
				    			<td>60</td>
				    			<td>27</td>
				    			<td>18</td>
				    			<td>16</td>
				    			<td>02</td>
				    			<td>07</td>
				    			<td>-1</td>
				    			<td>84</td>
				    		</tr>
				    		<tr>
				    			<td>09</td>
				    			<td class="team-name">Natrok FC</td>
				    			<td>60</td>
				    			<td>16</td>
				    			<td>14</td>
				    			<td>17</td>
				    			<td>02</td>
				    			<td>09</td>
				    			<td>-3</td>
				    			<td>82</td>
				    		</tr>
				    		<tr>
				    			<td>10</td>	
				    			<td class="team-name">Dohar FC</td>
				    			<td>60</td>
				    			<td>25</td>
				    			<td>14</td>
				    			<td>20</td>
				    			<td>02</td>
				    			<td>09</td>
				    			<td>-5</td>
				    			<td>80</td>
				    		</tr>	    			
				    	</table>
				  	</div>
				  	<div id="efl" class="tab-pane fade">
				    	<table>
				    		<tr>
				    			<td></td>
				    			<td class="team-name">TEAM</td>
				    			<td>P</td>
				    			<td>W</td>
				    			<td>D</td>
				    			<td>L</td>
				    			<td>F</td>
				    			<td>A</td>
				    			<td>GD</td>
				    			<td>PTS</td>
				    		</tr>
				    		<tr>
				    			<td>04</td>	
				    			<td class="team-name">Banani FC</td>
				    			<td>58</td>
				    			<td>35</td>
				    			<td>08</td>
				    			<td>14</td>
				    			<td>02</td>
				    			<td>05</td>
				    			<td>7</td>
				    			<td>90</td>
				    		</tr>
				    		<tr>
				    			<td>05</td>	
				    			<td class="team-name">Badda FC</td>
				    			<td>57</td>
				    			<td>32</td>
				    			<td>10</td>
				    			<td>16</td>
				    			<td>04</td>
				    			<td>06</td>
				    			<td>7</td>
				    			<td>88</td>
				    		</tr>
				    		<tr>
				    			<td>06</td>
				    			<td class="team-name">Joypur FC</td>
				    			<td>59</td>
				    			<td>30</td>
				    			<td>09</td>
				    			<td>18</td>
				    			<td>02</td>
				    			<td>05</td>
				    			<td>3</td>
				    			<td>87</td>
				    		</tr>
				    		<tr>
				    			<td>07</td>
				    			<td class="team-name">Bramma FC</td>
				    			<td>60</td>
				    			<td>28</td>
				    			<td>14</td>
				    			<td>16</td>
				    			<td>02</td>
				    			<td>03</td>
				    			<td>1</td>
				    			<td>85</td>
				    		</tr>
				    		<tr>
				    			<td>08</td>
				    			<td class="team-name">Mirpur FC</td>
				    			<td>60</td>
				    			<td>27</td>
				    			<td>18</td>
				    			<td>16</td>
				    			<td>02</td>
				    			<td>07</td>
				    			<td>-1</td>
				    			<td>84</td>
				    		</tr>
				    		<tr>
				    			<td>09</td>
				    			<td class="team-name">Kapa FC</td>
				    			<td>60</td>
				    			<td>16</td>
				    			<td>14</td>
				    			<td>17</td>
				    			<td>02</td>
				    			<td>09</td>
				    			<td>-3</td>
				    			<td>82</td>
				    		</tr>
				    		<tr>
				    			<td>10</td>	
				    			<td class="team-name">Dohar FC</td>
				    			<td>60</td>
				    			<td>25</td>
				    			<td>14</td>
				    			<td>20</td>
				    			<td>02</td>
				    			<td>09</td>
				    			<td>-5</td>
				    			<td>80</td>
				    		</tr>
                            <tr>
				    			<td>01</td>
				    			<td class="team-name">Bogro FC</td>
				    			<td>60</td>
				    			<td>35</td>
				    			<td>08</td>
				    			<td>16</td>
				    			<td>02</td>
				    			<td>04</td>
				    			<td>11</td>
				    			<td>95</td>
				    		</tr>
				    		<tr>
				    			<td>02</td>	
				    			<td class="team-name">Trishal FC</td>
				    			<td>57</td>
				    			<td>33</td>
				    			<td>07</td>
				    			<td>17</td>
				    			<td>02</td>
				    			<td>04</td>
				    			<td>10</td>
				    			<td>93</td>
				    		</tr>
				    		<tr>
				    			<td>03</td>	
				    			<td class="team-name">Badda FC</td>
				    			<td>60</td>
				    			<td>32</td>
				    			<td>12</td>
				    			<td>18</td>
				    			<td>02</td>
				    			<td>04</td>
				    			<td>8</td>
				    			<td>92</td>
				    		</tr>
				    	</table>
				  	</div>
				  	<div id="nfl" class="tab-pane fade">
				    	<table>
				    		<tr>
				    			<td></td>
				    			<td class="team-name">TEAM</td>
				    			<td>P</td>
				    			<td>W</td>
				    			<td>D</td>
				    			<td>L</td>
				    			<td>F</td>
				    			<td>A</td>
				    			<td>GD</td>
				    			<td>PTS</td>
				    		</tr>
				    		<tr>
				    			<td>01</td>
				    			<td class="team-name">Natrok FC</td>
				    			<td>60</td>
				    			<td>35</td>
				    			<td>08</td>
				    			<td>16</td>
				    			<td>02</td>
				    			<td>04</td>
				    			<td>11</td>
				    			<td>95</td>
				    		</tr>
				    		<tr>
				    			<td>02</td>	
				    			<td class="team-name">Bogro FC</td>
				    			<td>57</td>
				    			<td>33</td>
				    			<td>07</td>
				    			<td>17</td>
				    			<td>02</td>
				    			<td>04</td>
				    			<td>10</td>
				    			<td>93</td>
				    		</tr>
				    		<tr>
				    			<td>03</td>	
				    			<td class="team-name">Trishal FC</td>
				    			<td>60</td>
				    			<td>32</td>
				    			<td>12</td>
				    			<td>18</td>
				    			<td>02</td>
				    			<td>04</td>
				    			<td>8</td>
				    			<td>92</td>
				    		</tr>
				    		<tr>
				    			<td>04</td>	
				    			<td class="team-name">Badda FC</td>
				    			<td>58</td>
				    			<td>35</td>
				    			<td>08</td>
				    			<td>14</td>
				    			<td>02</td>
				    			<td>05</td>
				    			<td>7</td>
				    			<td>90</td>
				    		</tr>
				    		<tr>
				    			<td>05</td>	
				    			<td class="team-name">Mirpur FC</td>
				    			<td>57</td>
				    			<td>32</td>
				    			<td>10</td>
				    			<td>16</td>
				    			<td>04</td>
				    			<td>06</td>
				    			<td>7</td>
				    			<td>88</td>
				    		</tr>
				    		<tr>
				    			<td>06</td>
				    			<td class="team-name">Joypur FC</td>
				    			<td>59</td>
				    			<td>30</td>
				    			<td>09</td>
				    			<td>18</td>
				    			<td>02</td>
				    			<td>05</td>
				    			<td>3</td>
				    			<td>87</td>
				    		</tr>
				    		<tr>
				    			<td>07</td>
				    			<td class="team-name">Dohar FC</td>
				    			<td>60</td>
				    			<td>28</td>
				    			<td>14</td>
				    			<td>16</td>
				    			<td>02</td>
				    			<td>03</td>
				    			<td>1</td>
				    			<td>85</td>
				    		</tr>
				    		<tr>
				    			<td>08</td>
				    			<td class="team-name">Banani FC</td>
				    			<td>60</td>
				    			<td>27</td>
				    			<td>18</td>
				    			<td>16</td>
				    			<td>02</td>
				    			<td>07</td>
				    			<td>-1</td>
				    			<td>84</td>
				    		</tr>
				    		<tr>
				    			<td>09</td>
				    			<td class="team-name">Bramma FC</td>
				    			<td>60</td>
				    			<td>16</td>
				    			<td>14</td>
				    			<td>17</td>
				    			<td>02</td>
				    			<td>09</td>
				    			<td>-3</td>
				    			<td>82</td>
				    		</tr>
				    		<tr>
				    			<td>10</td>	
				    			<td class="team-name">Kapa FC</td>
				    			<td>60</td>
				    			<td>25</td>
				    			<td>14</td>
				    			<td>20</td>
				    			<td>02</td>
				    			<td>09</td>
				    			<td>-5</td>
				    			<td>80</td>
				    		</tr>	    			
				    	</table>
				  	</div>
				  	<div id="ufa" class="tab-pane fade">
				    	<table>
				    		<tr>
				    			<td></td>
				    			<td class="team-name">TEAM</td>
				    			<td>P</td>
				    			<td>W</td>
				    			<td>D</td>
				    			<td>L</td>
				    			<td>F</td>
				    			<td>A</td>
				    			<td>GD</td>
				    			<td>PTS</td>
				    		</tr>
				    		<tr>
				    			<td>04</td>	
				    			<td class="team-name">Badda FC</td>
				    			<td>58</td>
				    			<td>35</td>
				    			<td>08</td>
				    			<td>14</td>
				    			<td>02</td>
				    			<td>05</td>
				    			<td>7</td>
				    			<td>90</td>
				    		</tr>
				    		<tr>
				    			<td>05</td>	
				    			<td class="team-name">Banani FC</td>
				    			<td>57</td>
				    			<td>32</td>
				    			<td>10</td>
				    			<td>16</td>
				    			<td>04</td>
				    			<td>06</td>
				    			<td>7</td>
				    			<td>88</td>
				    		</tr>
				    		<tr>
				    			<td>06</td>
				    			<td class="team-name">Trishal FC</td>
				    			<td>59</td>
				    			<td>30</td>
				    			<td>09</td>
				    			<td>18</td>
				    			<td>02</td>
				    			<td>05</td>
				    			<td>3</td>
				    			<td>87</td>
				    		</tr>
				    		<tr>
				    			<td>07</td>
				    			<td class="team-name">Dohar FC</td>
				    			<td>60</td>
				    			<td>28</td>
				    			<td>14</td>
				    			<td>16</td>
				    			<td>02</td>
				    			<td>03</td>
				    			<td>1</td>
				    			<td>85</td>
				    		</tr>
				    		<tr>
				    			<td>08</td>
				    			<td class="team-name">Bogro FC</td>
				    			<td>60</td>
				    			<td>27</td>
				    			<td>18</td>
				    			<td>16</td>
				    			<td>02</td>
				    			<td>07</td>
				    			<td>-1</td>
				    			<td>84</td>
				    		</tr>
				    		<tr>
				    			<td>09</td>
				    			<td class="team-name">Joypur FC</td>
				    			<td>60</td>
				    			<td>16</td>
				    			<td>14</td>
				    			<td>17</td>
				    			<td>02</td>
				    			<td>09</td>
				    			<td>-3</td>
				    			<td>82</td>
				    		</tr>
				    		<tr>
				    			<td>10</td>	
				    			<td class="team-name">Natrok FC</td>
				    			<td>60</td>
				    			<td>25</td>
				    			<td>14</td>
				    			<td>20</td>
				    			<td>02</td>
				    			<td>09</td>
				    			<td>-5</td>
				    			<td>80</td>
				    		</tr><tr>
				    			<td>01</td>
				    			<td class="team-name">Badda FC</td>
				    			<td>60</td>
				    			<td>35</td>
				    			<td>08</td>
				    			<td>16</td>
				    			<td>02</td>
				    			<td>04</td>
				    			<td>11</td>
				    			<td>95</td>
				    		</tr>
				    		<tr>
				    			<td>02</td>	
				    			<td class="team-name">Banani FC</td>
				    			<td>57</td>
				    			<td>33</td>
				    			<td>07</td>
				    			<td>17</td>
				    			<td>02</td>
				    			<td>04</td>
				    			<td>10</td>
				    			<td>93</td>
				    		</tr>
				    		<tr>
				    			<td>03</td>	
				    			<td class="team-name">Bogro FC</td>
				    			<td>60</td>
				    			<td>32</td>
				    			<td>12</td>
				    			<td>18</td>
				    			<td>02</td>
				    			<td>04</td>
				    			<td>8</td>
				    			<td>92</td>
				    		</tr>   			
				    	</table>
				  	</div>
				  	<div id="world-cup" class="tab-pane fade">
				    	<table>
				    		<tr>
				    			<td></td>
				    			<td class="team-name">TEAM</td>
				    			<td>P</td>
				    			<td>W</td>
				    			<td>D</td>
				    			<td>L</td>
				    			<td>F</td>
				    			<td>A</td>
				    			<td>GD</td>
				    			<td>PTS</td>
				    		</tr>
				    		<tr>
				    			<td>01</td>
				    			<td class="team-name">Trishal FC</td>
				    			<td>60</td>
				    			<td>35</td>
				    			<td>08</td>
				    			<td>16</td>
				    			<td>02</td>
				    			<td>04</td>
				    			<td>11</td>
				    			<td>95</td>
				    		</tr>
				    		<tr>
				    			<td>02</td>	
				    			<td class="team-name">Badda FC</td>
				    			<td>57</td>
				    			<td>33</td>
				    			<td>07</td>
				    			<td>17</td>
				    			<td>02</td>
				    			<td>04</td>
				    			<td>10</td>
				    			<td>93</td>
				    		</tr>
				    		<tr>
				    			<td>03</td>	
				    			<td class="team-name">Badda FC</td>
				    			<td>60</td>
				    			<td>32</td>
				    			<td>12</td>
				    			<td>18</td>
				    			<td>02</td>
				    			<td>04</td>
				    			<td>8</td>
				    			<td>92</td>
				    		</tr>
				    		<tr>
				    			<td>04</td>	
				    			<td class="team-name">Barmma FC</td>
				    			<td>58</td>
				    			<td>35</td>
				    			<td>08</td>
				    			<td>14</td>
				    			<td>02</td>
				    			<td>05</td>
				    			<td>7</td>
				    			<td>90</td>
				    		</tr>
				    		<tr>
				    			<td>05</td>	
				    			<td class="team-name">Trishal FC</td>
				    			<td>57</td>
				    			<td>32</td>
				    			<td>10</td>
				    			<td>16</td>
				    			<td>04</td>
				    			<td>06</td>
				    			<td>7</td>
				    			<td>88</td>
				    		</tr>
				    		<tr>
				    			<td>06</td>
				    			<td class="team-name">Natrok FC</td>
				    			<td>59</td>
				    			<td>30</td>
				    			<td>09</td>
				    			<td>18</td>
				    			<td>02</td>
				    			<td>05</td>
				    			<td>3</td>
				    			<td>87</td>
				    		</tr>
				    		<tr>
				    			<td>07</td>
				    			<td class="team-name">Joypur FC</td>
				    			<td>60</td>
				    			<td>28</td>
				    			<td>14</td>
				    			<td>16</td>
				    			<td>02</td>
				    			<td>03</td>
				    			<td>1</td>
				    			<td>85</td>
				    		</tr>
				    		<tr>
				    			<td>08</td>
				    			<td class="team-name">Banani FC</td>
				    			<td>60</td>
				    			<td>27</td>
				    			<td>18</td>
				    			<td>16</td>
				    			<td>02</td>
				    			<td>07</td>
				    			<td>-1</td>
				    			<td>84</td>
				    		</tr>
				    		<tr>
				    			<td>09</td>
				    			<td class="team-name">Barmma FC</td>
				    			<td>60</td>
				    			<td>16</td>
				    			<td>14</td>
				    			<td>17</td>
				    			<td>02</td>
				    			<td>09</td>
				    			<td>-3</td>
				    			<td>82</td>
				    		</tr>
				    		<tr>
				    			<td>10</td>	
				    			<td class="team-name">Dohar</td>
				    			<td>60</td>
				    			<td>25</td>
				    			<td>14</td>
				    			<td>20</td>
				    			<td>02</td>
				    			<td>09</td>
				    			<td>-5</td>
				    			<td>80</td>
				    		</tr>	    			
				    	</table>
				  	</div>
				</div>
			</div>
        </div>
        <!-- Point Table Section End -->
	

		<!-- Footer Start -->
        <?php 
          require "footer.php";
        ?>
        <!-- Footer End -->
        
        <!-- Search Modal Start Here -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true" class="fa fa-close"></span>
	        </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="eg: Soccer News" type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End Here -->
        
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