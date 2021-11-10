<?php 
include 'config.php';
?> 

<!DOCTYPE html>
 <html> 

 <head>
 	
 	<style >
 		
   input{
   	  padding: 15px 50px;
   	  color: black;
   }
   
   label{
     color: pink;

   } 

   input.but[type=submit]{

background: violet; 
     padding: 5px; 
 	cursor: pointer;
    color: darkred;
 	border-radius: 40px; border-color: red;

   } 


  input.but[type="submit"]: hover{
   	background-color: black;
    color: black;
   } 




   .btn {
  background-color: darkgreen;
  border: none;
  color: white;
  padding: 12px 12px;
  font-size: 15px;
  cursor: pointer;
  float: middle;
  border-radius: 50%;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: darkred;
}



 	</style>


   

 </head>
 <body style="background: green;"> 


 	 <div style="background: green;  padding: 30px 50px; ">  
   	
   
    	
        <a href="login.php"> <button  class="btn">&laquo; Previous </button> </a> 
        
         
        <a href="login.php"> <button style="float: right;" name = "logout" type="button" class="btn"> Log-out </button> </a>
        
   <center> 
         
   
    </center>
  </div>
  
 <br> <br> 
<div >  

<form action="admin.php" method="POST" align="center"> 


<b>
<label> Admin Mail </label><br>
<input name="mail" type="email"  placeholder="Admin Mail" required> </input>
<br> <br> <b> 
<label>Password </label> <br>
<input name="pass" type="password" placeholder="Password" required> </input>
<br> <br>  <b>

<input  class="but" name="sub" type="submit" value="Submit" ></input><br>

<br>

 </form>

<?php 
 if(isset($_POST['sub'])){
      $email =  $_POST['mail'];
      $password  = $_POST['pass'];


      $q = "SELECT * FROM Admin
            WHERE Email = '$email' AND Password = '$password' ";


            $q_inject = mysqli_query($con, $q);
            $row = mysqli_num_rows ($q_inject);
        
            if($row > 0){
                echo "<script>
                             alert('Admin Log-in Successful.');
                             window.location.href = 'view.php';
                 </script>";
            }
            else{
            	echo "Email or Password doesn't match.";
            }
 }


?>


</body>
 </html>