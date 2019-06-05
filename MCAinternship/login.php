<?php 
  include('connection.php');

   if (isset($_POST['submit'])) 
  {
    $uemail = $_POST['uemail'];
    $psw = $_POST['psw'];

    
    $sql = "SELECT * FROM register WHERE email='$uemail' and pass='$psw'";
   $results = mysqli_query($conn, $sql);
    if (mysqli_num_rows($results) == 1)
    {
      //echo " login successful";
      header("location:home.php");
    }
    else {
      echo " login failed";
    }
  }
?>

<!DOCTYPE html>
<html>
    <head>
	      <link rel="stylesheet" type="text/css" href="style.css">
        <title>LOGIN</title>
    </head>

<body class="formstyle">
<form action="login.php"  method="POST">
  <div >
	  <h2 align="center">Login</h2>

  </div>
<form>
<div>
        <input type="text" placeholder="Enter Email " name="uemail" required>
        <br><br>
        <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
        <br><br>
		<span><a href="forgot.html">Forgot Password</a></span>
        <button type="submit">LOGIN</button>
</div>

</form>

</body>
</html>
