<?php

$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="airways";


$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
//check connection
if ($conn->connect_error){
die("Connection Failed:".$conn->connect_error);
}

if(isset($_POST['register'])){


  
  $first=$_POST['Fname'];
  $last=$_POST['Lname'];
  $age=$_POST['age'];
  $email=$_POST['email'];
  $uid=$_POST['uid'];
  $pass=$_POST['pass'];
  $cpass=$_POST['cpass'];
   $phone=$_POST['phone'];


   //error handlers
   //no empty fields
   
   if (empty($first) || empty($last) ||empty($age)||empty($email)||empty($pass) || empty($cpass))
   
   {
     $message = "Could not insert record"; 
	 echo "<script type='text/javascript'>alert('$message');</script>";
	 exit();
	 } else {
	 
	 //check if input characters are valid
	 if(!preg_match("/^[a-zA-Z]*$/",$first) || !preg_match("/^[a-zA-Z]*$/",$last))
	 {
        $message = "INPUTS NOT MATCHING"; 
	 echo "<script type='text/javascript'>alert('$message');</script>";
	 exit();
     }else{
	 
	  //check if email is valid 
	  
	  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	  {
	     $message = "INVALID EMAIL"; 
	 echo "<script type='text/javascript'>alert('$message');</script>";
	 exit();
     }else{
	    
	 
	      //insert user to database
		  $sql="insert into passenger(Fname,Lname,age,email,uid,pass,cpass,phone) VALUES ('$first','$last','$age','$email','$uid','$pass','$cpass','$phone') ;";
		
		 (mysqli_query($conn,$sql));
	 $message = "SIGNUP SUCCESS"; 
	 echo "<script type='text/javascript'>alert('$message');</script>";
	  
	  
	  
	  }

	}

  }	

  
}

else{




}


include("mylogin.php");
?>