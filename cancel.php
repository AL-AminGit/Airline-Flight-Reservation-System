<?php 

include 'config.php'; 

session_start();

?>
 

 <!DOCTYPE html>
 <html> 

 <head>
 	
 	<style >
 		
   input{
   	  padding: 10px;
   	  color: black;
   }
   
   label{
     color: darkred;

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
 <body style="background: cyan;"> 


 	 <div style="background: cyan;  padding: 30px 50px; ">  
   	
   
    	
        <a href="home.php"> <button  class="btn">&laquo; Previous </button> </a> 
        
         
        <a href="login.php"> <button style="float: right;" name = "logout" type="button" class="btn"> Log-out </button> </a>
        
   <center> 
         
   
    </center>
  </div>
  
 <br> <br> 
<div >  

<form action="cancel.php" method="POST" align="center"> 


<b>
<label> Flight ID </label><br>
<input name="fl_id" type="text"  placeholder="Enter Your Flight ID:" required> </input>
<br> <br> <b> 
<label>Seat Number </label> <br>
<input name="seat" type="text" placeholder="Enter Your Seat Number:" required> </input>
<br> <br>  <b>

<input  class="but" name="sub" type="submit" value="Submit" ></input><br>

<br>

 </form>

<?php
    if(isset($_POST['sub'])){
       $flight = $_POST['fl_id'];
       $seat   = $_POST['seat']; 

        $sub = substr($_SESSION['mail'], 0, 5);

       $query = "SELECT * FROM $sub 
                 WHERE Flight_ID = '$flight' AND Seat_Number = '$seat' ";

      
       $query_inject = mysqli_query($con, $query);

                 if($result = mysqli_num_rows($query_inject)>0){
                 	//echo " Flight And  Seat number found ";

                 	 if($flight[0]=='1'){

                             $cancel = "UPDATE  interseatnum
                 	           SET $seat = '0'
                 	           WHERE Flight_ID = '$flight' "; 

                 	           $cancel_inject = mysqli_query($con, $cancel);

                               if($cancel_inject){
                               	echo "Your Cancellation is Successfull.";

                                $delet_record = "DELETE FROM $sub
                                                 WHERE Flight_ID = '$flight' AND Seat_Number = '$seat' ";


                                                 $delet_record_injcet = mysqli_query($con,$delet_record);


                               } 
                               else{
                               	echo "Cancellation Not Successfull";
                               }


                 	 }

                 	else{

                                 $cancel = "UPDATE  seatnum
                 	                        SET $seat = '0'
                 	                        WHERE Flight_ID = '$flight' "; 

                 	           $cancel_inject = mysqli_query($con, $cancel);

                               if($cancel_inject){
                               	echo "Your Cancellation is Successfull.";

                                $delet_record = "DELETE FROM $sub
                                                 WHERE Flight_ID = '$flight' AND Seat_Number = '$seat' ";


                                                 $delet_record_injcet = mysqli_query($con,$delet_record);


                               } 
                               else{
                               	echo "Cancellation Not Successfull";
                               }


                 	}






                 }
                else {
                	echo ' <h1 style="color: darkred; background: darkcyan ; "> Warning: Flight and Seat Number Not Found in Record. </h1>';
                }
    }


 else if(isset($_POST['logout'])){
		 echo "
           <script> 
                   alert('You are successfully Log-Out. ');
				   window.location.href = 'login.php';
		   </script>
 

		 ";
}


 ?>



 </body>
 </html>


