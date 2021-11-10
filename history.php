<?php 
include 'config.php';
 session_start();
?>  

 

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



	<style>
          table, th, td { 
   color:  white;	       
  border: 3px solid white ; 
  border-collapse: collapse;
   
  
}
  h2{
  	color: darkred;
  } 
  h3{ color: white;
      font-family: Palatino Linotype; }

th, td {
  padding: 5px;
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
  
  

<body style="background: darkcyan;">
   
   <div style="background: darkcyan;  padding: 30px 50px; ">  
   	
   
    	
        <a href="home.php"> <button  class="btn">&laquo; Previous </button> </a> 
   <center> 
         
   
    </center>
  </div>
	
	
  <center> 
   
     
   


   <?php  

    $sub = substr($_SESSION['mail'], 0, 5); 
    $query = " SELECT Seat_Number, $sub.Flight_ID, Date, Destination, Departure 
               FROM $sub, domesticfs
               WHERE $sub.Flight_ID = domesticfs.Flight_ID ";

               $query_inject = mysqli_query($con, $query);


               $total = mysqli_num_rows($query_inject);
               //echo $total; 


               if($total>0){
               echo ' 
               <table style=" background: green;">   
   	           <caption><h2 style="background: lightblue; color: blue;">Your Domestic Flight Record</h2></caption>

               <tr> 
       <th> Your Seat Number  </th>
       <th> Flight ID  </th>
       <th> Date  </th>
       <th> Departure  </th>
       <th> Destination </th>
   </tr>  ';
 
             while ($row = mysqli_fetch_assoc($query_inject)) {
               	echo "<tr> 
                             <td> {$row['Seat_Number']}</td> 
                             <td> {$row['Flight_ID']}</td> 
                             <td> {$row['Date']}</td> 
                             <td> {$row['Departure']}</td> 
                             <td> {$row['Destination']}</td> 

               	     </tr>";
               }

               }


         else {
         	echo '<h1 style="color: white; background: darkred;"> You have not booked yet Domestic flight. </h1>';
         }    



   ?>



   </table> 
     

 





<?php  

    $sub = substr($_SESSION['mail'], 0, 5); 

    $query = " SELECT Seat_Number, $sub.Flight_ID, Date, Destination, Departure 
               FROM $sub, Inter_FS
               WHERE $sub.Flight_ID = Inter_FS.Flight_ID ";

               $query_inject = mysqli_query($con, $query);


               $total = mysqli_num_rows($query_inject);
               //echo $total;
  


               if($total>0){
               echo ' 
               <table style=" background: green;">   
   	           <caption><h2 style="background: lightblue; color: blue;">Your Interntional Flight Record</h2></caption>

               <tr> 
       <th> Your Seat Number  </th>
       <th> Flight ID  </th>
       <th> Date  </th>
       <th> Departure  </th>
       <th> Destination </th>
   </tr>  ';


                   while ($row = mysqli_fetch_assoc($query_inject)) {
               	echo "<tr> 
                             <td> {$row['Seat_Number']}</td> 
                             <td> {$row['Flight_ID']}</td> 
                             <td> {$row['Date']}</td> 
                             <td> {$row['Departure']}</td> 
                             <td> {$row['Destination']}</td> 

               	     </tr>";
               }


}

        else {
         	echo '<h1 style="color: white; background: darkred;"> You have not booked yet Interntional Flight. </h1>';
         }    

               

   ?>

   
   


 </table>

 
</center> 


</body>
</html>

