<!DOCTYPE html>
<html>

<body>
<header class="header-inner-page">
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
						<div class="col-md-2 col-sm-12 col-xs-12 logo">
							<a href="index.php"><img src="images\logo1.png" alt="logo"></a>
						</div>
						<div class="col-md-10 col-sm-12 col-xs-12 mobile-menu">
				            <div class="main-menu">
								<a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                                <nav class="rs-menu">
                                    <ul class="nav-menu">
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
</body>
</html>
		