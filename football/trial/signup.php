<?php 
require "header.php";
 ?>

 <main>
 	<h1>Signup</h1>
 	<?php
 	if (isset($_GET['error'])) {
 		if ($_GET['error'] == 'emptyfields') {
 			echo '<p>Fill in all fields</p>';
 		}
 		elseif ($_GET['error'] == 'invalidemail') {
 			echo '<p>Enter valid email </p>';
 		}
 	}
 	elseif ($_GET['signup'] == 'success') {
 		echo '<p>Signup successful </p>';
 	}
 	?>
 	<form action="includes/signup.inc.php" method="post">
 		<input type="text" name="username" placeholder="User name">
		<br>
		<br>
		<input type="text" name="email" placeholder="E-mail">
		<br>
		<br>
		<input type="password" name="pass" placeholder="password">
		<br>
		<br>
		<input type="password" name="cpass" placeholder="confirm password">
		<br>
		<br>
		<button type="submit" name="submit">Signup</button>
 	</form>
 </main>

<?php
   require "footer.php";
 ?>