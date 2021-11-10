<?php 
include 'config.php';
session_start();
?> 

<!DOCTYPE Tutorial - work> 
<html>  
<head> 
<link rel="stylesheet" href="reg.css">
<title> Registration </title>  

<h1 style="background-image: url('airbus.png');
     background-repeat: no-repeat;
     background-size: 300px 150px;
     background-position: left;

     " 
     class="h"  
     align="right">Welcome to Bangladesh Airline </h1> 


</head> 

<body id="b"> 

<div id="d">  

<form action="reg.php" method="POST" align="center"> 

<center>
<img src="reglogo.png" class="img">  </img>
</center> <br>
<b>
<label> User-Name </label><br>
<input name="name" type="text" id="form" placeholder="Enter your Name:" required> </input>
<br> <b> 
<label>User-Email </label> <br>
<input name="email" type="email" id="form" placeholder="Enter your Email : (mail must be minimun five letter)" required> </input>
<br><b>
<label> User-Password </label> <br>
<input name="pass" type="password" id="form" placeholder="Enter your Password:" required> </input>
<br> <b>
<label> Confirm-Password </label> <br>
<input name="cpass" type="password" id="form" placeholder="Confirm your Password:" required> </input> <br>
<br>
<input name="reg" type="submit" id="button" value="Sign-Up" > </input><br> <br>
<a href="login.php"><input name="back" type="button" id="button" value="Back to Log-in"> </input>


<br>

</form> 
<?php
     if(isset($_POST['reg'])){
		 $name = $_POST['name'];
		 $email = $_POST['email'];
		 $pass = $_POST['pass'];
		 $cpass = $_POST['cpass'];
		 $_SESSION['mail'] = $email;
		 if($pass == $cpass){
			$query = "select*from user
			         where email = '$email'";
			 
			 $query_check = mysqli_query($con,$query); 
			 
			 if($query_check){
				     if(mysqli_num_rows($query_check)>0){
					 echo "<script>
					 alert('This email is already registerd.');
					 window.location.href = 'login.php';
					 </script> ";
					 
				    }else{
					$insertion = "insert into user 
					              values('$name', '$email', '$pass')"; 
					              
					$run = mysqli_query($con, $insertion);
					
					     if($run){
						echo "<script>
					 alert('You are sucessfully registerd.');
					 window.location.href = 'home.php';
					 </script> ";
						
					     }else{
						  echo "<script>
					      alert('Connection Failed');
					       window.location.href = 'login.php';
					       </script> ";
						
					}
					
				 }
				 
			 }else{
				 echo "<script>
					 alert('Database Error !!!');
					 window.location.href = 'reg.php';
					 </script> ";
					 }
			 
			 
		 } else {
			 echo "<script>
					 alert('Password and Confirm Password does not Match !!!');
					 window.location.href = 'reg.php';
					 </script> ";
		 }
		 
		 
	 } else { 
	 
	 
	 }

//for history 

                
                           

				 $sub = substr($_SESSION['mail'], 0, 5);
     //echo $sub;
   $table_query = "SELECT TABLE_NAME
                   FROM INFORMATION_SCHEMA.TABLES 
                   WHERE TABLE_NAME = '$sub' ";
                  

                    $query_inject = mysqli_query($con, $table_query); 

                    if($row = mysqli_num_rows($query_inject)>0){
                    	//echo "Table  Found"; 
                    } 
                     
                    else {
                    	//echo "Table not found"; 
                        
                       $table_creation = " CREATE  TABLE $sub  ( 
                                 
                             Flight_ID varchar(25),
                             Seat_Number text(250)
                               )  "; 



                        $table_creation_check = mysqli_query($con, $table_creation);

                       
                    }
  

    


?>


</div>
</body>
</html>