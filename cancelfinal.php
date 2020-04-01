
<?php

$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="airways";


$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if ($conn->connect_error)
{
die("Connection Failed:".$conn->connect_error);
}




if (isset($_POST['cancel']))
{
  
$cancelflight=$_POST['cancelflight'];
$sql = "delete from tickets where t_no='$cancelflight';";
	if(mysqli_query($conn, $sql))
{  
			$message = "Ticket cancelled successfully";
			echo "<script type='text/javascript'>alert('$message');</script>";

}
	else {
		$message="Transaction failed";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	
}
include("index.php");
?>