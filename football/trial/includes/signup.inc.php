<?php
if(isset($_POST['submit'])){
	require 'dbh.inc.php';
   
    $uname =$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $cpassword=$_POST['cpass'];


    if(empty($uname)||empty($email)||empty($password)||empty($cpassword)) {
       header("Location: ../signup.php?error=emptyfields&username=".$uname."&email=".$email);
       exit();
    }

    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/", $uname)) {
    	header("Location: ../signup.php?error=invalidemailuid");
       exit(); 
    }
    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    	header("Location: ../signup.php?error=invalidemail&username=".$uname);
       exit(); 
    }
    elseif (!preg_match("/^[a-zA-Z0-9]*$/", $uname)) {
    	header("Location: ../signup.php?error=invalidusername&email=".$email);
       exit(); 
    }
    elseif ($password!==$cpassword) {
    	header("Location: ../signup.php?error=passwordcheck&username=".$uname."&email=".$email);
       exit(); 
    }
    else 
    {
    	$sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
    	$stmt = mysqli_stmt_init($conn);
    	if (!mysqli_stmt_prepare($stmt,$sql)) {
    	     header("Location: ../signup.php?error=sqlerror");
             exit(); 	
    	}
    	else {

    		mysqli_stmt_bind_param($stmt,"s",$uname);
    		mysqli_stmt_execute($stmt);
    		mysqli_stmt_store_result($stmt);
    		$resultCheck = mysqli_stmt_num_rows($stmt);

    		if ($resultCheck > 0) {
    		header("Location: ../signup.php?error=usertaken&email=".$email);
             exit(); 	
    		}
    		else{

    			$sql = "INSERT INTO users(uidUsers, uemail, upassword) VALUES(?, ?, ?)";
    			$stmt = mysqli_stmt_init($conn);
                 if (!mysqli_stmt_prepare($stmt,$sql)) {
    	         header("Location: ../signup.php?error=sqlerror");
                 exit(); 	
    	        }
    	        else{
                   $hashedPwd=password_hash($password, PASSWORD_DEFAULT);

    	        	mysqli_stmt_bind_param($stmt,"sss", $uname, $email, $hashedPwd);
    		        mysqli_stmt_execute($stmt);
    		        header("Location: ../signup.php?signup=success");
                    exit();
    	        }



    		}
    	}
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
   
}
else{
	header("Location: ../signup.php");
    exit();
    
}




