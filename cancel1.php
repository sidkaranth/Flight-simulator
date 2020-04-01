

<html>


<head> <title> Travel Yaari </title> 
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="style.css" rel="stylesheet" type="text/css">

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">


<script type="text/javascript">
		function validate()	{
			var source=document.getElementById("f_src");
			if(source.selectedIndex==0)
			{
				alert("Please select your source");
				source.focus();
				return false;		
			}
			var destination=document.getElementById("f_dest");
			if(destination.selectedIndex==0)
			{
				alert("Please select your destination");
				destination.focus();
				return false;		
			}
		}
</script>
</head>
<body background="fly.jpg">
    
    
 	  <div class="container"> 
	  <img src="fly.jpg" width="1350px" height="700px" class="image" style="width-100%"/> 
    <div class="top-left"><img src="fly2.jpg" width="50px"/>
      <form action="book.php" onsubmit="return validate()" method="post">

      <div class="booking-form-box">
      <div class="radio-btn">
       <input type="radio"  name="check"> <span>Round Trip</span>
        <input type="radio"  name="check"> <span>One Way</span>
       
      </div>
  <div class="booking-form">
    
   <label>Flying From</label> 
   <input type="text" class="form-control" name="f_src" id="f_src" placeholder="City or Airport">

    <label>Flying To</label> 
   <input type="text" class="form-control" name="f_dest" id="f_dest" placeholder="City or Airport">
  </div> 
  <div class="input-grp"> 
   <label>Departing</label>
   <input type="date" class="form-control-select-date">
  </div>
  <div class="input-grp"> 
   <label>Returning</label>
   <input type="date" class="form-control-select-date">
  </div>
  <div class="input-grp"> 
   <label>Adults</label>
   <input type="number" class="form-control" value="1">
  </div>
  <div class="input-grp"> 
   <label>Children</label>
   <input type="number" class="form-control" value="0">
  </div>
  <div class="input-grp"> 
   <label>Travel Class</label>
   <select class="custom-select">
     <option value="1">Economy Class</option>
     <option value="2">Business Class</option>
   </select>
  </div>
  <div class="input-grp"> 
   <div class="input-grp">
  <button type="button" class="btn btn-primary-flight" name="done" > Book </button> </form>
  </div> 
   
  
   



  </div>

</form>      
  </div>

    </div>
	</form>


    <div class="top-right">
    <a href="index.php"><input type="button" id="btn1" value="HOME"></a>
   <a href="signup.php"> <input type="button" id="btn1" value="REGISTER"></a>
   <a href="mylogin.php"> <input type="button" id="btn2" value="LOGIN"></a>
   <a href="cancel.php"> <input type="button" id="btn1" value="CANCEL">
   </div>
 

    
	<!--   <div class="middle">
	  </div> -->
	 
 <footer>&copy Air Inc. 2019.All Rights Reserved</footer>
	
 </body>
 
 
 
 </html>