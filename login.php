<?php 
include 'config.php';
session_start();
?> 

<!DOCTYPE Tutorial - work> 
<html>  
<head > 
  <link rel="stylesheet" href="web.css">
<title> Log-in </title>  
<a href="admin.php"><input name="reg" style="float: right; height: 35px; width: 150px; color: white;cursor: pointer;" type="button" id="button" value="Admin Log-in"> </input></a>

<h1 style="background-image: url('login.png');
           background-repeat: no-repeat;
           background-size: 300px 130px;" class="h" align="center">Welcome to Log-in  

       </h1>
           
</head> 

<body id="b"> 

<div   id="d">  


<form action="login.php" method="POST" align="center"> 
<center>
<img src="boeing.png" class="img">  </img>
</center> <br>
<b>

<label style="font-size: large;" > User-Email </label>  <br>
<input name="email" type="email" id="form" placeholder="Enter your Email:" required> </input>
<br><b>
<label style="font-size: large;" > User-Password </label><br>
<input name="pass" type="password" id="form" placeholder="Enter your Password:" required> </input>

<br> <br>
 <input style="font-weight: bold;"  name="login" type="submit" id="button"  value= "Log-in" > </input>
<br>
<br>
<a href="reg.php"><input style="font-weight: bold;" name="reg" type="button" id="button" value="Registration"> </input>


<br>

</form> 

<?php
      if(isset($_POST['login'])){
		  $email = $_POST['email'];
		  $pass = $_POST['pass']; 
		  
		 $_SESSION['mail'] = $email; 

		 $query = "select*from user
		           where email='$email' AND password='$pass'"; 
		  
		 $check = mysqli_query($con,$query);
		 
		 if($check){ 
			   if( mysqli_num_rows($check)>0){
				echo"<script>
				    alert('You are successfully Logged-In');     
					window.location.href = 'home.php';   
				</script>";
			}    else{
				    echo"<script>
				    alert('Email or Password not Correct !!!.');     
					window.location.href = 'login.php';   
				     </script>";
				           }
			 
		 }else{
			 echo"<script>
				    alert('Database Error !!!');     
					window.location.href = 'login.php';   
				</script>";
				}
		  





// for history 




				 $sub = substr($_SESSION['mail'], 0, 5);
     //echo $sub;
   $table_query = "SELECT TABLE_NAME
                   FROM INFORMATION_SCHEMA.TABLES 
                   WHERE TABLE_NAME = '$sub' ";
                  

                    $query_inject = mysqli_query($con, $table_query); 

                    if($row = mysqli_num_rows($query_inject)>0){
                    	echo "Table  Found"; 
                    } 
                     
                    else {
                    	echo "Table not found"; 
                        
                       $table_creation = " CREATE  TABLE $sub  ( 
                                 
                             Flight_ID varchar(25),
                             Seat_Number text(250)
                               )  "; 



                        $table_creation_check = mysqli_query($con, $table_creation);

                       
                    }








	  }else{}

 ?>

</div>
</body>
</html>