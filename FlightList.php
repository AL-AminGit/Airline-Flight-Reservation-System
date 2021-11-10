<?php 
  include 'config.php'; 
  session_start();
  

?>

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>



.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 12px;
  font-size: 15px;
  cursor: pointer;
  float: right;
  border-radius: 50%;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}





	
table, th, td { 
   color: white;	
  border: 4px solid black;
  
  
}
  h1{
  	color:#4d0026;
  } 
  h3{ color: white;
      font-family: Palatino Linotype; }

th, td {
  padding: 5px;
} 



*{
  box-sizing: border-box;
}


  

form.example input[type=text] {
  padding: 10px;
  font-size: 15px;
  border: 1px solid grey;

  float: left;
  width: 80%;
  background: #f1f1f1;
}
  





 input[type=submit]{
	height: 40px; 
	width: 80px;
	 background:#2196F3; 
	 color: white; 
	 border: 1px solid grey;
	 float: left;
}
  input[type="submit"]:hover {
  background: darkred;
}


form.example button {
  float: left;
  
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: darkred;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

span {
  font-size: 18px;
}


</style>
</head>
<body style="background: lightblue;">

<center>

 <div style=" width: 900px; padding: 40px; background: deeppink; border: 2px solid red;  "> 
   <a href="home.php">  <button class="btn"><i class="fa fa-home"></i> Home</button> </a> 
<form class="example" action="FlightList.php" method="POST" style=" margin:auto;max-width:400px;">
	      
	        <label style="color: darkred ;"> Search Your Flight </label>  <br> 
            <input type="text" style="width: 150px;border-right: 5px solid red;" placeholder="From" name="search2" required>
            <input type="text" style="width: 150px;border-left: 5px solid red;" placeholder="To"    name="search3" required>
            <button name="flight" type="submit" <i class="fa fa-search"></i><span> &#128540;</span></button><br>  <br> <br> 
</form>
  






  <form class="example" action="FlightList.php" method="POST" style=" margin:auto;max-width:400px;">

          <br>  <center><label style="color: darkred ;">Enter Flight ID</label> </center>
           <input name="ID" type="text" style="width: 300px;" placeholder="Flight ID: "  required> </input>
            <input name="sub"  type="submit"  value="Submit &#128077;"> </input>  
            	
          
</form>
    <br> <br>

    

 <?php 

   

  if(isset($_POST['flight'])) {

     	 $search  = mysqli_real_escape_string($con,$_POST['search2']);
         $search3 = mysqli_real_escape_string($con,$_POST['search3']);


        $query = "SELECT * FROM DomesticFS 
                  WHERE Departure LIKE '%$search%' 
                  AND 
                  Destination LIKE '%$search3%' 
                  ";

                  $result = mysqli_query($con, $query); 

                  $queryResult = mysqli_num_rows($result);
                   
                   if($queryResult==0){
                   	
                   	echo "<h3> No result for "."$search". "to " ."$search3".".</h3>";
                    
                   }
                   else  echo "<h3> About ".$queryResult. " result for ".$search. "to " .$search3.".</h3>" ;
                  
                  



                  if($queryResult>0){ 


echo '<table style="background: green;">
	
  <tr>
    <th>Flight ID</th>
    <th>Date</th>
    <th>Start Time</th>
    <th>Arrival Time</th>
    <th>Departure</th>
    <th>Destination</th>
  </tr>'    ;

                         while ($res = mysqli_fetch_assoc($result)) {
                         
  
                        echo 
        "<tr> 
             <td> {$res['Flight_ID']}</td> 
             <td> {$res['Date']}</td>
             <td> {$res['Start_Time']}</td>
             <td> {$res['Arrival_Time']}</td>
             <td> {$res['Departure']}</td>
             <td> {$res['Destination']}</td>
        </tr>";
                         }
                  } 
                
                  
echo '</table>';
     
}

      




   





   else if(isset($_POST['sub'])){
         $id = $_POST['ID'];   
         
         $_SESSION['f_id'] = $id;

         $q = "SELECT Flight_ID FROM SeatNum
                   WHERE Flight_ID = '$id' "; 

               $inject_query = mysqli_query($con, $q);

               if($inject_query){
               	    if(mysqli_num_rows($inject_query)>0){
					 echo "<script>
					   
					 window.location.href = 'Seat_DF.php';
					 </script> ";


               	    } 


               	    else {
               	 echo "Flight ID ". $id . " is not yet registered by admin...";
               }
               } 
               


     
    } 

 ?>

</div>



</center>

<center>
<table style="background: green;">
	<caption><h1>Domestic Flight Schedule</h1></caption>
  <tr>
    <th>Flight ID</th>
    <th>Date</th>
    <th>Start Time</th>
    <th>Arrival Time</th>
    <th>Departure</th>
    <th>Destination</th>
  </tr>                                                                                  
       
   <?php  
         $query = "SELECT * FROM DomesticFS";

  $data =  mysqli_query($con, $query);

  $total = mysqli_num_rows($data); 

           while ($result = mysqli_fetch_assoc($data)) {
  

  echo  "<tr> 
             <td> {$result['Flight_ID']}</td> 
             <td> {$result['Date']}</td>
             <td> {$result['Start_Time']}</td>
             <td> {$result['Arrival_Time']}</td>
             <td> {$result['Departure']}</td>
             <td> {$result['Destination']}</td>
        </tr>";
}
   ?>



</table>
</center>

</body>
</html>


