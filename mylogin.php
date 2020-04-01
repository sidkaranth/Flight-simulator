
<html>


<head> <title> Travel Yaari </title> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="indexstyle.css" rel="stylesheet" type="text/css">

<link href="loginstyle.css" rel="stylesheet" type="text/css">


</head>
<script type="text/javascript">
	function validate()	{
		var EmailId=document.getElementById("emailid");
		var atpos = EmailId.value.indexOf("@");
    	var dotpos = EmailId.value.lastIndexOf(".");
		var pw=document.getElementById("password");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=EmailId.value.length) 
		{
        	alert("Enter valid email-ID");
			EmailId.focus();
        	return false;
   		}
   		if(pw.value.length< 8)
		{
			alert("Password consists of atleast 8 characters");
			pw.focus();
			return false;
		}
		return true;
	}
</script>
<body background="fly.jpg">
    
    
 	  <div class="container"> 
	  
	  <img src="fly.jpg" width="1350px" height="700px" class="image" style="width-100%"/> 
	  <div class="top-left"><img src="fly2.jpg" width="50px"/> </div>
	  <form action="login.php" onsubmit="return validate()" method="post" name="login">
	  	<div class="login-box">
	  		<h1>Login</h1>
	  		<div class="textbox">
	  			<i class="fa fa-user" aria-hidden="true"></i>
	  			<input type="text" name="email" placeholder="Email Id" value="">
	  		</div>
	  		<div class="textbox">
	  			<i class="fa fa-lock" aria-hidden="true"></i>
	  			<input type="password" name="pass" placeholder="Password" value="">
	  		</div>
	  		<input class="btn" type="submit" name="submit" value="Sign In">
	  	</div>

	 
	</form>
    
	 <div class="top-right">
	<a href="index.php"><input type="button" id="btn1" value="HOME"></a>
   <a href="index.php"> <input type="button" id="btn1" value="REGISTER"></a>
   <a href="booking.php"> <input type="button" id="btn2" value="BOOK"></a> </div>

     <footer>&copy Air Inc. 2019.All Rights Reserved</footer>

</body>

 </html>