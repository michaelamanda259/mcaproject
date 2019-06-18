<?php
 session_start();

?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	 <meta name="description">
	 <meta name=viewport content="width=device-width, initial-scale=1">
	 <title></title>
	 <!--		--><link rel="stylesheet" type="text/css" href="style.css">


</head>
<body bgcolor="#1affff">
	<div class="intro">
     <br>
     <h1><u> F Square  </u></h1>
     <h5 > find football </h5>
     <br>
    </div>
	<header>
		<nav>				
			</a>
			<ul>
				<li><a class="active" href="index.php">Home</a></li>
	     		<li style="float:left"><a href="#">About</a></li> 
	
			</ul>

			<?php
			    if (isset($_SESSION['userId'])) {
    	           echo '<form action="includes/logout.inc.php" method="post">
					     <button type="submit" name="logout">Logout</button>
				         </form>';
                 }
                 else{
    	           echo '<form action="includes/login.inc.php" method="post">
				         <input type="text" name="mailuid" placeholder="E-mail/Username">
					     <input type="password" name="pwd" placeholder="password">
					     <button type="submit" name="login">Login</button>
				         </form>

				         <a href="signup.php">Signup</a>';	
                 }
			?>

			
		</nav>
	</header>
