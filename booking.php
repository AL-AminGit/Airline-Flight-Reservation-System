<?php 
include 'config.php';
?> 

<!DOCTYPE Tutorial - work> 
<html>  
<head> 
<link rel="stylesheet" href="booking.css"> 

<title> Log-in </title>  
<center>  
<h2  style="background:#76D7C4;
	 padding : 40px;
	 border : 2px solid red;
	 font-size : 40px;
     height: 50px;
	 color: red;"  align="center" >Welcome to Flight Booking </h2>
	  </center>
</head> 

<body  id="b"> 
<div id="dd" align="center">  

<form action="booking.php" method="POST" align="center"> 

<b>

<a href="FlightList.php">  <input name ="booking" type="button"  id ="bookbutt" value="Domestic Flight">  </input> </a> <br> <br>
  
 <a href="Inter_FlightList.php"> <input name="history" type="button" id="bookbutt" value="International Flight" > </input></a> <br> <br>
 <a href="home.php">  <input name ="booking" type="button"  id ="bookbutt" value="Home">  </input> </a> <br> <br>

 <input  name="logout" type="submit" id="logout" value="Log-Out" > </input> <br><br>
 
<?php 
     if(isset($_POST['logout'])){
		 echo "
           <script> 
                   alert('You are successfully Log-Out. ');
				   window.location.href = 'login.php';
		   </script>
 

		 ";
		 
	 } else{}

?>

</form>
</div>
</body>
</html>