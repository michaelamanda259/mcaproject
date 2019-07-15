<?php
if(isset($_POST['submit1'])){
	require 'dbh.inc.php';

	$first = $_POST['fname1'];
	$last  = $_POST['lname1'];
    $email = $_POST['email1'];
    $msg   = $_POST['message1'];


//error handling
//empty fields check
    if(empty($first)||empty($last)||empty($email)||empty($msg)) {
       header("Location: ../contact.php?error=emptyfields");
       exit();
    }
            
    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $first) && !preg_match("/^[a-zA-Z0-9]*$/",$last )) {
    	header("Location: ../contact.php?error=invalidemailuid");
       exit(); 
    }
//email validation
    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    	header("Location: ../contact.php?error=invalidemail&username=");
       exit(); 
    }
// input character checking    
    elseif (!preg_match("/^[a-zA-Z0-9]*$/", $first)) {
    	header("Location: ../contact.php?error=invalidusername&email=");
       exit(); 
    }
     elseif (!preg_match("/^[a-zA-Z0-9]*$/", $last)) {
    	header("Location: ../contact.php?error=invalidusername&email=");
       exit(); 
    }

    else
    //database 
       {   	

    			$sql = "INSERT INTO feedback(fname, lname, email, msg) VALUES(?, ?, ?, ?)";
    			$stmt = mysqli_stmt_init($conn);
                 if (!mysqli_stmt_prepare($stmt,$sql)) {
    	         header("Location: ../contact.php?error=sqlerror");
                 exit(); 	
    	        }
    	        else{
                   
    	        	mysqli_stmt_bind_param($stmt,"ssss", $first, $last, $email, $msg );
    		        mysqli_stmt_execute($stmt);
    		        header("Location: ../index.php?feedback=success");
                    exit();
    	        }    		
    	
        }
         mysqli_stmt_close($stmt);
         mysqli_close($conn);
    }
   
    