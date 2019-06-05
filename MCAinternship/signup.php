
<?php 
	include('connection.php');

	if (isset($_POST['submit']))
	 {
		$fname = $_POST['first'];
		$lname = $_POST['last'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$cpass = $_POST['cpass'];

		
		if($pass != $cpass)
			{

				echo "passwords do not match";
			}
			else
			{
			$sql = "INSERT into register (fname,lname,email,pass,cpass) values ('$fname','$lname','$email','$pass','$cpass') ";


			if (mysqli_query($conn, $sql)) {
				echo "data creation successful";
				header("location:home.php");
			}
			else {
				echo "something went wrong";
			}
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body class="formstyle">
	<div>
		<h2 align="center">SIGN UP </h2>
	</div>
	<form action="signup.php" method="POST">
		<input type="text" name="first" placeholder="first name">
		<br>
		<br>
		<input type="text" name="last" placeholder="last name">
		<br>
		<br>
		<input type="email" name="email" placeholder="email id">
		<br>
		<br>
		<input type="password" name="pass" placeholder="password">
		<br>
		<br>
		<input type="password" name="cpass" placeholder="confirm password">
		<br>
		<br>
		<button type="submit" name="submit">submit</button>
	</form>
				
</body>
</html>