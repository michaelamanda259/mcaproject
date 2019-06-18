<?php
    $dbhost = "localhost";
	$dbuser ="root";
 	$dbpass = "";
 	$db     = "loginsystem";

 	 	$conn =  mysqli_connect($dbhost,$dbuser,$dbpass,$db);



    if($conn->connect_error) {
 		echo "connection was failed";
 	}
 	else
 		echo "successful connection";
 	 /*	if(!$conn){
 	 		die("Connection failed:".mysqli_connect_error());
 	 	}
     */