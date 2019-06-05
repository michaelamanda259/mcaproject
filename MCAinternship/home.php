<?php 
  include('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
<style>

.intro {
    
    text-align: center;
    background: #f1f1f1; /* Grey background */
    font-family: "Lucida Console", Monospace;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #686F83;}

.imgbg{
  background-repeat: no-repeat;
  background-size: 100% 400%;
  background-attachment: scroll;
}


</style>

</head>
<body class="imgbg" background="football.jpg" >

<div class="intro">
<br>
  <h1><u> F Square  </u></h1>
  <h5 > find football </h5>
  <br>
</div>

<div>
<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li style="float:right"><a href="signup.php">Sign Up</a></li>
  <li style="float:right"><a href="login.php">Login</a></li>  
</ul>
</div>
<div  >
</div>

</body>
</html>

