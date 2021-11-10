<?php 
include 'config.php';
?> 

<!DOCTYPE Tutorial - work> 
<html>  
<head> 
<link rel="stylesheet" href="home.css">
<title> Log-in </title>  
<h2    class="h" align="center"  >Welcome to Home </h2>
</head> 

<body  id="b"> 
<div style="background-image: url('Airline.png');background-repeat: no-repeat;background-size: 900px 500px;"  id="dd">  

<form action="home.php" method="POST" align="center"> 

<b>
 <br> <br>

<a href="booking.php">   <input style="float: right;" name ="booking" type="button" id="butt" value="Book Ticket Now">  </input> </a> <br> <br>
<a href="history.php">   <input style="float: right;" name="history" type="button"  id="butt" value="History View" > </input>   </a>  <br> <br>
<a href="cancel.php">    <input style="float: right;" name="cancel"  type="button"  id="butt" value="Cancel Ticket" > </input>   </a> <br> <br>
 <input style="float: right;" name="logout" type="submit" id="butt" value="Log-Out" > </input> <br>

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