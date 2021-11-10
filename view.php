<?php 
include 'config.php';
?> 

<!DOCTYPE html>
 <html> 

 <head>
 	
 	<style >

button.user {

  height: 30px; width: 400px;
  cursor: pointer;
  color: white;
  background: green;
}

 .user : hover {
  background-color: black;
 }
 		
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
 <body style="background: #D3463A;" class="user"> 


 	 <div style="background: #D3463A;  padding: 30px 50px; ">  
   	
   
    	
        <a href="admin.php"> <button  class="btn">&laquo; Previous </button> </a> 
        
         
        <a href="login.php"> <button style="float: right;" name = "logout" type="button" class="btn"> Log-out </button> </a>
        
   <center> 
         
   
    </center>
  </div>
  
 <br> <br> 
<div align="center" class="user" >  

<a href="home.php"> <button type="button" class="user" >User View</button> </a> <br> <br>
<a href="http://localhost/phpmyadmin/index.php?route=/database/structure&server=1&db=test">  <button  type="button" class="user" >Admin View</button> </a>

</div>
</body>
 </html>