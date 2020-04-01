<?php
   $conn=new mysqli('localhost','root','','airways');
   if($conn->connect_error)
{
	echo "error";
}
     $email=$_POST['email'];
$pw=$_POST['pass'];
$sql = "SELECT * FROM passenger WHERE email = '$email' AND pass = '$pw';";
$sql_result = mysqli_query ($conn, $sql) or die ('request "Could not execute SQL query" '.$sql);
    $user = mysqli_fetch_assoc($sql_result);
    if(!empty($user))
    {
      $_SESSION['user_info'] = $user['email'];
      $message='Logged in successfully';
      echo "<script type='text/javascript'>
        alert('$message');
        </script>" ;
      
    }
    else{
      $message = 'Wrong email or password.';
      
      echo "<script type='text/javascript'>
        alert('$message');
        </script>" ;

   }


   

      
    // If result matched $myusername and $mypassword, table row must be 1 row
	
		
    
?>