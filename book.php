<?php
SESSION_start();
$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="airways";


$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if(!$conn){  
  echo "<script type='text/javascript'>alert('Database failed');</script>";
    die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['done']))
{
$source=$_POST['f_src'];
$destination=$_POST['f_dest'];
$sql = "SELECT * FROM flights WHERE f_src= '$source' AND f_dest='$destination';";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
//$email=$_SESSION['user_info'];
//$f_no=$row['f_no'];
//$query="UPDATE passenger SET f_no='$f_no' WHERE email='$email';";


  if(!empty($row)){
      
      $message = "Flight booked successfully";
      echo "<script type='text/javascript'>
      alert('$message');
      </script>";
    }
    else{
      $message="Transaction failed";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
  else {
    $message="Transaction failed";
  }
  
include("index.php");

?> 
