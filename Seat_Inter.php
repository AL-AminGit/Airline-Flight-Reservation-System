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




.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 60%;
}

.button1 {
  background-color: green; 
  color: white; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: crimson;
  color: white;
}



div{
   padding : 10px;
   background : rgb(107, 59, 129);
   width: 60%;
   margin: 0 auto;
}
 
.myDiv {
  
  background-color: violet;    
  text-align: center;
  margin: 0 auto;
  padding: 20px;
  width: 1000px;
  border-radius: 10px 50px;

}   

script {
	color : blue ;
	background: red;
}



.checked-0{color:blue;}
.checked-1{color: black;}



</style> 
 
 <div class="myDiv"> 

 <center> 
  <a href="home.php">  <button class="btn"><i class="fa fa-home"></i> Home</button> </a> 
  <a href="Inter_FlightList.php"> <button style=" float: left;" class="btn">&laquo; Previous </button> </a>



  <h1 style="color: blue; "> Choose Your Seat <h1> 
  	<h5 style="color: darkred;"> Note: We provide seat according to Business Class, Economy Class, Premium Economy Class and First Class respectively. Reserve Class is for Patience and disables.  </h5> </center> </div>
</head> 


<body style="background-color: rgb(51, 153, 255)  ;">





<center> 
	
 <form action="Seat_Inter.php" method="POST"> 

<div > 
<p>



 <button type="submit" name="one" class="button button1">B-1</button>
<button type = "submit" name="two" class="button button1">B-2</button> 
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<button   type = "submit" name="three" class="button button1">B-3</button>
<button type = "submit" name="four" class="button button1">B-4</button>










</p><hr> 
</div>


<div> 
	<p > 
<button type = "submit" name="five" class="button button1">E-1</button>
<button type = "submit" name="six" class="button button1">E-2</button> 
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<button type = "submit" name="seven" class="button button1">E-3</button>
<button type = "submit" name="eight" class="button button1">E-4</button>
   </p> <hr>
</div>






<div>
	<p >
<button type = "submit" name="nine" class="button button1">P-1</button>
<button type = "submit" name="ten" class="button button1">P-2</button> 
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<button type = "submit" name="eleven" class="button button1">P-3</button>
<button type = "submit" name="twelve" class="button button1">P-4</button>
   </p> <hr>
</div>

<div>
	<p>
<button type = "submit" name="thirteen" class="button button1">F-1</button>
<button type = "submit" name="fourteen" class="button button1">F-2</button> 
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<button type = "submit" name="fifteen" class="button button1">F-3</button>
<button type = "submit" name="sixteen" class="button button1">F-4</button>
   </p> <hr>
</div>


<div>
	<p>

<button type = "submit" name="seventeen" class="button button1">R-1</button>
<button type = "submit" name="eighteen" class="button button1">R-2</button> 
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<button type = "submit" name="nineteen" class="button button1">R-3</button>
<button type = "submit" name="twenty" class="button button1">R-4</button>
   <p> 
</div>



</form>

<?php 

    if(isset($_POST['one'])){
        
   // echo " disabled='disabled'";

      

        $q = " SELECT * FROM InterSeatNum 
              WHERE Flight_ID = '". $_SESSION["i_id"]."' ";


    	     $inject = mysqli_query($con, $q); 
             

             $fetch = mysqli_fetch_array($inject);
                                // echo "<hr> {$fetch['Flight_ID']} <hr>  ";

    	     if($fetch['one']=='0'){
                     //  echo "<script> alert('Are You sure to Confirm booking Business Class ???') </script>";                
                                 $query = " UPDATE InterSeatNum
                                            SET one = '1'
                                            WHERE Flight_ID = '". $_SESSION["i_id"]."'  ";

                                            $check = mysqli_query($con, $query);
                   
                                             if($check){ 
                   	                            echo "<script> alert('Booking is successfull.') 
                                                 </script>"  ;
                                                     

                                                 $sub = substr($_SESSION['mail'], 0, 5);
                                                $f_num = $_SESSION['i_id'];
                                                $insertion = "INSERT INTO $sub
                                                             VALUES ('$f_num','one')";
                                                $insertion_inject = mysqli_query($con, $insertion);



                                             } 
                                             else {
                   	                             echo "Seat is already booked. Try another...";
                                             }

                                     	 
    	     }  
    	     else {
                echo "<script>  alert(' Seat is already booked. Try another. ');  </script>";
                    } 
    }
 
    


     
   else if(isset($_POST['two'])){
      
        $q = " SELECT * FROM InterSeatNum 
              WHERE Flight_ID = '". $_SESSION["i_id"]."' ";


    	     $inject = mysqli_query($con, $q); 
             

             $fetch = mysqli_fetch_array($inject);
                                // echo "<hr> {$fetch['Flight_ID']} <hr>  ";

    	     if($fetch['two']=='0'){
                                       
                                 $query = " UPDATE InterSeatNum
                                            SET two = '1'
                                            WHERE Flight_ID = '". $_SESSION["i_id"]."'  ";

                                            $check = mysqli_query($con, $query);
                   
                                             if($check){
                   	                            echo "<script> alert('Booking is successfull.')  </script>";

                                                $sub = substr($_SESSION['mail'], 0, 5);
                                                $f_num = $_SESSION['i_id'];
                                                $insertion = "INSERT INTO $sub
                                                             VALUES ('$f_num','two')";
                                                $insertion_inject = mysqli_query($con, $insertion);

                                             } 
                                             else {
                   	                             echo "Seat is already booked. Try another...";
                                             }

                                     	 
    	     }  
    	     else {
                echo "<script> alert('Seat is already booked. Try another.'); </script>";
                    } 
    }

    


    else if(isset($_POST['three'])){
      
        $q = " SELECT * FROM InterSeatNum 
              WHERE Flight_ID = '". $_SESSION["i_id"]."' ";


    	     $inject = mysqli_query($con, $q); 
             

             $fetch = mysqli_fetch_array($inject);
                                // echo "<hr> {$fetch['Flight_ID']} <hr>  ";

    	     if($fetch['three']=='0'){
                                       
                                 $query = " UPDATE InterSeatNum
                                            SET three = '1'
                                            WHERE Flight_ID = '". $_SESSION["i_id"]."'  ";

                                            $check = mysqli_query($con, $query);
                   
                                             if($check){
                   	                            echo "<script> alert('Booking is successfull.')  </script>";

                                                $sub = substr($_SESSION['mail'], 0, 5);
                                                $f_num = $_SESSION['i_id'];
                                                $insertion = "INSERT INTO $sub
                                                             VALUES ('$f_num','three')";
                                                $insertion_inject = mysqli_query($con, $insertion);
                                             } 
                                             else {
                   	                             echo "Seat is already booked. Try another...";
                                             }

                                     	 
    	     }  
    	     else {
                echo "<script> alert('Seat is already booked. Try another.'); </script>";
                    } 
    }

   
    else if(isset($_POST['four'])){
      
        $q = " SELECT * FROM InterSeatNum 
              WHERE Flight_ID = '". $_SESSION["i_id"]."' ";


    	     $inject = mysqli_query($con, $q); 
             

             $fetch = mysqli_fetch_array($inject);
                                // echo "<hr> {$fetch['Flight_ID']} <hr>  ";

    	     if($fetch['four']=='0'){
                                       
                                 $query = " UPDATE InterSeatNum
                                            SET four = '1'
                                            WHERE Flight_ID = '". $_SESSION["i_id"]."'  ";

                                            $check = mysqli_query($con, $query);
                   
                                             if($check){
                   	                            echo "<script> alert('Booking is successfull.')  </script>";

                                                $sub = substr($_SESSION['mail'], 0, 5);
                                                $f_num = $_SESSION['i_id'];
                                                $insertion = "INSERT INTO $sub
                                                             VALUES ('$f_num','four')";
                                                $insertion_inject = mysqli_query($con, $insertion);
                                             } 
                                             else {
                   	                             echo "Seat is already booked. Try another...";
                                             }

                                     	 
    	     }  
    	     else {
                echo "<script> alert('Seat is already booked. Try another.'); </script>";
                    } 
    }





else if(isset($_POST['five'])){
      
        $q = " SELECT * FROM InterSeatNum 
              WHERE Flight_ID = '". $_SESSION["i_id"]."' ";


    	     $inject = mysqli_query($con, $q); 
             

             $fetch = mysqli_fetch_array($inject);
                                // echo "<hr> {$fetch['Flight_ID']} <hr>  ";

    	     if($fetch['five']=='0'){
                                       
                                 $query = " UPDATE InterSeatNum
                                            SET five = '1'
                                            WHERE Flight_ID = '". $_SESSION["i_id"]."'  ";

                                            $check = mysqli_query($con, $query);
                   
                                             if($check){
                   	                            echo "<script> alert('Booking is successfull.')  </script>";

                                                $sub = substr($_SESSION['mail'], 0, 5);
                                                $f_num = $_SESSION['i_id'];
                                                $insertion = "INSERT INTO $sub
                                                             VALUES ('$f_num','five')";
                                                $insertion_inject = mysqli_query($con, $insertion);


                                             } 
                                             else {
                   	                             echo "Seat is already booked. Try another...";
                                             }

                                     	 
    	     }  
    	     else {
                echo "<script> alert('Seat is already booked. Try another.'); </script>";
                    } 
    }


   

   else if(isset($_POST['six'])){
      
        $q = " SELECT * FROM InterSeatNum 
              WHERE Flight_ID = '". $_SESSION["i_id"]."' ";


    	     $inject = mysqli_query($con, $q); 
             

             $fetch = mysqli_fetch_array($inject);
                                // echo "<hr> {$fetch['Flight_ID']} <hr>  ";

    	     if($fetch['six']=='0'){
                                       
                                 $query = " UPDATE InterSeatNum
                                            SET six = '1'
                                            WHERE Flight_ID = '". $_SESSION["i_id"]."'  ";

                                            $check = mysqli_query($con, $query);
                   
                                             if($check){
                   	                            echo "<script> alert('Booking is successfull.')  </script>";


                                                $sub = substr($_SESSION['mail'], 0, 5);
                                                $f_num = $_SESSION['i_id'];
                                                $insertion = "INSERT INTO $sub
                                                             VALUES ('$f_num','six')";
                                                $insertion_inject = mysqli_query($con, $insertion);
                                             } 
                                             else {
                   	                             echo "Seat is already booked. Try another...";
                                             }

                                     	 
    	     }  
    	     else {
                echo "<script> alert('Seat is already booked. Try another.'); </script>";
                    } 
    }


   else if(isset($_POST['seven'])){
      
        $q = " SELECT * FROM InterSeatNum 
              WHERE Flight_ID = '". $_SESSION["i_id"]."' ";


    	     $inject = mysqli_query($con, $q); 
             

             $fetch = mysqli_fetch_array($inject);
                                // echo "<hr> {$fetch['Flight_ID']} <hr>  ";

    	     if($fetch['seven']=='0'){
                                       
                                 $query = " UPDATE InterSeatNum
                                            SET seven = '1'
                                            WHERE Flight_ID = '". $_SESSION["i_id"]."'  ";

                                            $check = mysqli_query($con, $query);
                   
                                             if($check){
                   	                            echo "<script> alert('Booking is successfull.')  </script>";
                                                $sub = substr($_SESSION['mail'], 0, 5);
                                                $f_num = $_SESSION['i_id'];
                                                $insertion = "INSERT INTO $sub
                                                             VALUES ('$f_num','seven')";
                                                $insertion_inject = mysqli_query($con, $insertion);
                                             } 
                                             else {
                   	                             echo "Seat is already booked. Try another...";
                                             }

                                     	 
    	     }  
    	     else {
                echo "<script> alert('Seat is already booked. Try another.'); </script>";
                    } 
    }


   else if(isset($_POST['eight'])){
      
        $q = " SELECT * FROM InterSeatNum 
              WHERE Flight_ID = '". $_SESSION["i_id"]."' ";


    	     $inject = mysqli_query($con, $q); 
             

             $fetch = mysqli_fetch_array($inject);
                                // echo "<hr> {$fetch['Flight_ID']} <hr>  ";

    	     if($fetch['eight']=='0'){
                                       
                                 $query = " UPDATE InterSeatNum
                                            SET eight = '1'
                                            WHERE Flight_ID = '". $_SESSION["i_id"]."'  ";

                                            $check = mysqli_query($con, $query);
                   
                                             if($check){
                   	                            echo "<script> alert('Booking is successfull.')  </script>";

                                                $sub = substr($_SESSION['mail'], 0, 5);
                                                $f_num = $_SESSION['i_id'];
                                                $insertion = "INSERT INTO $sub
                                                             VALUES ('$f_num','eight')";
                                                $insertion_inject = mysqli_query($con, $insertion);
                                             } 
                                             else {
                   	                             echo "Seat is already booked. Try another...";
                                             }

                                     	 
    	     }  
    	     else {
                echo "<script> alert('Seat is already booked. Try another.'); </script>";
                    } 
    }


   else if(isset($_POST['nine'])){
      
        $q = " SELECT * FROM InterSeatNum 
              WHERE Flight_ID = '". $_SESSION["i_id"]."' ";


    	     $inject = mysqli_query($con, $q); 
             

             $fetch = mysqli_fetch_array($inject);
                                // echo "<hr> {$fetch['Flight_ID']} <hr>  ";

    	     if($fetch['nine']=='0'){
                                       
                                 $query = " UPDATE InterSeatNum
                                            SET nine = '1'
                                            WHERE Flight_ID = '". $_SESSION["i_id"]."'  ";

                                            $check = mysqli_query($con, $query);
                   
                                             if($check){
                   	                            echo "<script> alert('Booking is successfull.')  </script>";

                                                $sub = substr($_SESSION['mail'], 0, 5);
                                                $f_num = $_SESSION['i_id'];
                                                $insertion = "INSERT INTO $sub
                                                             VALUES ('$f_num','nine')";
                                                $insertion_inject = mysqli_query($con, $insertion);
                                             } 
                                             else {
                   	                             echo "Seat is already booked. Try another...";
                                             }

                                     	 
    	     }  
    	     else {
                echo "<script> alert('Seat is already booked. Try another.'); </script>";
                    } 
    }



   else if(isset($_POST['ten'])){
      
        $q = " SELECT * FROM InterSeatNum 
              WHERE Flight_ID = '". $_SESSION["i_id"]."' ";


    	     $inject = mysqli_query($con, $q); 
             

             $fetch = mysqli_fetch_array($inject);
                                // echo "<hr> {$fetch['Flight_ID']} <hr>  ";

    	     if($fetch['ten']=='0'){
                                       
                                 $query = " UPDATE InterSeatNum
                                            SET ten = '1'
                                            WHERE Flight_ID = '". $_SESSION["i_id"]."'  ";

                                            $check = mysqli_query($con, $query);
                   
                                             if($check){
                   	                            echo "<script> alert('Booking is successfull.')  </script>";

                                                $sub = substr($_SESSION['mail'], 0, 5);
                                                $f_num = $_SESSION['i_id'];
                                                $insertion = "INSERT INTO $sub
                                                             VALUES ('$f_num','ten')";
                                                $insertion_inject = mysqli_query($con, $insertion);
                                             } 
                                             else {
                   	                             echo "Seat is already booked. Try another...";
                                             }

                                     	 
    	     }  
    	     else {
                echo "<script> alert('Seat is already booked. Try another.'); </script>";
                    } 
    }




else if(isset($_POST['eleven'])){
      
        $q = " SELECT * FROM InterSeatNum 
              WHERE Flight_ID = '". $_SESSION["i_id"]."' ";


    	     $inject = mysqli_query($con, $q); 
             

             $fetch = mysqli_fetch_array($inject);
                                // echo "<hr> {$fetch['Flight_ID']} <hr>  ";

    	     if($fetch['eleven']=='0'){
                                       
                                 $query = " UPDATE InterSeatNum
                                            SET eleven = '1'
                                            WHERE Flight_ID = '". $_SESSION["i_id"]."'  ";

                                            $check = mysqli_query($con, $query);
                   
                                             if($check){
                   	                            echo "<script> alert('Booking is successfull.')  </script>";

                                                $sub = substr($_SESSION['mail'], 0, 5);
                                                $f_num = $_SESSION['i_id'];
                                                $insertion = "INSERT INTO $sub
                                                             VALUES ('$f_num','eleven')";
                                                $insertion_inject = mysqli_query($con, $insertion);
                                             } 
                                             else {
                   	                             echo "Seat is already booked. Try another...";
                                             }

                                     	 
    	     }  
    	     else {
                echo "<script> alert('Seat is already booked. Try another.'); </script>";
                    } 
    }



  else if(isset($_POST['twelve'])){
      
        $q = " SELECT * FROM InterSeatNum 
              WHERE Flight_ID = '". $_SESSION["i_id"]."' ";


    	     $inject = mysqli_query($con, $q); 
             

             $fetch = mysqli_fetch_array($inject);
                                // echo "<hr> {$fetch['Flight_ID']} <hr>  ";

    	     if($fetch['twelve']=='0'){
                                       
                                 $query = " UPDATE InterSeatNum
                                            SET twelve = '1'
                                            WHERE Flight_ID = '". $_SESSION["i_id"]."'  ";

                                            $check = mysqli_query($con, $query);
                   
                                             if($check){
                   	                            echo "<script> alert('Booking is successfull.')  </script>";

                                                $sub = substr($_SESSION['mail'], 0, 5);
                                                $f_num = $_SESSION['i_id'];
                                                $insertion = "INSERT INTO $sub
                                                             VALUES ('$f_num','twelve')";
                                                $insertion_inject = mysqli_query($con, $insertion);
                                             } 
                                             else {
                   	                             echo "Seat is already booked. Try another...";
                                             }

                                     	 
    	     }  
    	     else {
                echo "<script> alert('Seat is already booked. Try another.'); </script>";
                    } 
    }


   


    else if(isset($_POST['thirteen'])){
      
        $q = " SELECT * FROM InterSeatNum 
              WHERE Flight_ID = '". $_SESSION["i_id"]."' ";


    	     $inject = mysqli_query($con, $q); 
             

             $fetch = mysqli_fetch_array($inject);
                                // echo "<hr> {$fetch['Flight_ID']} <hr>  ";

    	     if($fetch['thirteen']=='0'){
                                       
                                 $query = " UPDATE InterSeatNum
                                            SET thirteen = '1'
                                            WHERE Flight_ID = '". $_SESSION["i_id"]."'  ";

                                            $check = mysqli_query($con, $query);
                   
                                             if($check){
                   	                            echo "<script> alert('Booking is successfull.')  </script>";

                                                $sub = substr($_SESSION['mail'], 0, 5);
                                                $f_num = $_SESSION['i_id'];
                                                $insertion = "INSERT INTO $sub
                                                             VALUES ('$f_num','thirteen')";
                                                $insertion_inject = mysqli_query($con, $insertion);
                                             } 
                                             else {
                   	                             echo "Seat is already booked. Try another...";
                                             }

                                     	 
    	     }  
    	     else {
                echo "<script> alert('Seat is already booked. Try another.'); </script>";
                    } 
    }



else if(isset($_POST['fourteen'])){
      
        $q = " SELECT * FROM InterSeatNum 
              WHERE Flight_ID = '". $_SESSION["i_id"]."' ";


    	     $inject = mysqli_query($con, $q); 
             

             $fetch = mysqli_fetch_array($inject);
                                // echo "<hr> {$fetch['Flight_ID']} <hr>  ";

    	     if($fetch['fourteen']=='0'){
                                       
                                 $query = " UPDATE InterSeatNum
                                            SET fourteen = '1'
                                            WHERE Flight_ID = '". $_SESSION["i_id"]."'  ";

                                            $check = mysqli_query($con, $query);
                   
                                             if($check){
                   	                            echo "<script> alert('Booking is successfull.')  </script>";

                                                $sub = substr($_SESSION['mail'], 0, 5);
                                                $f_num = $_SESSION['i_id'];
                                                $insertion = "INSERT INTO $sub
                                                             VALUES ('$f_num','fourteen')";
                                                $insertion_inject = mysqli_query($con, $insertion);
                                             } 
                                             else {
                   	                             echo "Seat is already booked. Try another...";
                                             }

                                     	 
    	     }  
    	     else {
                echo "<script> alert('Seat is already booked. Try another.'); </script>";
                    } 
    }




   else if(isset($_POST['fifteen'])){
      
        $q = " SELECT * FROM InterSeatNum 
              WHERE Flight_ID = '". $_SESSION["i_id"]."' ";


    	     $inject = mysqli_query($con, $q); 
             

             $fetch = mysqli_fetch_array($inject);
                                // echo "<hr> {$fetch['Flight_ID']} <hr>  ";

    	     if($fetch['fifteen']=='0'){
                                       
                                 $query = " UPDATE InterSeatNum
                                            SET fifteen = '1'
                                            WHERE Flight_ID = '". $_SESSION["i_id"]."'  ";

                                            $check = mysqli_query($con, $query);
                   
                                             if($check){
                   	                            echo "<script> alert('Booking is successfull.')  </script>";

                                                $sub = substr($_SESSION['mail'], 0, 5);
                                                $f_num = $_SESSION['i_id'];
                                                $insertion = "INSERT INTO $sub
                                                             VALUES ('$f_num','fifteen')";
                                                $insertion_inject = mysqli_query($con, $insertion);
                                             } 
                                             else {
                   	                             echo "Seat is already booked. Try another...";
                                             }

                                     	 
    	     }  
    	     else {
                echo "<script> alert('Seat is already booked. Try another.'); </script>";
                    } 
    }


  else if(isset($_POST['sixteen'])){
      
        $q = " SELECT * FROM InterSeatNum 
              WHERE Flight_ID = '". $_SESSION["i_id"]."' ";


    	     $inject = mysqli_query($con, $q); 
             

             $fetch = mysqli_fetch_array($inject);
                                // echo "<hr> {$fetch['Flight_ID']} <hr>  ";

    	     if($fetch['sixteen']=='0'){
                                       
                                 $query = " UPDATE InterSeatNum
                                            SET sixteen = '1'
                                            WHERE Flight_ID = '". $_SESSION["i_id"]."'  ";

                                            $check = mysqli_query($con, $query);
                   
                                             if($check){
                   	                            echo "<script> alert('Booking is successfull.')  </script>";

                                                $sub = substr($_SESSION['mail'], 0, 5);
                                                $f_num = $_SESSION['i_id'];
                                                $insertion = "INSERT INTO $sub
                                                             VALUES ('$f_num','sixteen')";
                                                $insertion_inject = mysqli_query($con, $insertion);
                                             } 
                                             else {
                   	                             echo "Seat is already booked. Try another...";
                                             }

                                     	 
    	     }  
    	     else {
                echo "<script> alert('Seat is already booked. Try another.'); </script>";
                    } 
    }



   else if(isset($_POST['seventeen'])){
      
        $q = " SELECT * FROM InterSeatNum 
              WHERE Flight_ID = '". $_SESSION["i_id"]."' ";


    	     $inject = mysqli_query($con, $q); 
             

             $fetch = mysqli_fetch_array($inject);
                                // echo "<hr> {$fetch['Flight_ID']} <hr>  ";

    	     if($fetch['seventeen']=='0'){
                                       
                                 $query = " UPDATE InterSeatNum
                                            SET seventeen = '1'
                                            WHERE Flight_ID = '". $_SESSION["i_id"]."'  ";

                                            $check = mysqli_query($con, $query);
                   
                                             if($check){
                   	                            echo "<script> alert('Booking is successfull.')  </script>";

                                                $sub = substr($_SESSION['mail'], 0, 5);
                                                $f_num = $_SESSION['i_id'];
                                                $insertion = "INSERT INTO $sub
                                                             VALUES ('$f_num','seventeen')";
                                                $insertion_inject = mysqli_query($con, $insertion);
                                             } 
                                             else {
                   	                             echo "Seat is already booked. Try another...";
                                             }

                                     	 
    	     }  
    	     else {
                echo "<script> alert('Seat is already booked. Try another.'); </script>";
                    } 
    }



 else if(isset($_POST['eighteen'])){
      
        $q = " SELECT * FROM InterSeatNum 
              WHERE Flight_ID = '". $_SESSION["i_id"]."' ";


    	     $inject = mysqli_query($con, $q); 
             

             $fetch = mysqli_fetch_array($inject);
                                // echo "<hr> {$fetch['Flight_ID']} <hr>  ";

    	     if($fetch['eighteen']=='0'){
                                       
                                 $query = " UPDATE InterSeatNum
                                            SET eighteen = '1'
                                            WHERE Flight_ID = '". $_SESSION["i_id"]."'  ";

                                            $check = mysqli_query($con, $query);
                   
                                             if($check){
                   	                            echo "<script> alert('Booking is successfull.')  </script>";

                                                $sub = substr($_SESSION['mail'], 0, 5);
                                                $f_num = $_SESSION['i_id'];
                                                $insertion = "INSERT INTO $sub
                                                             VALUES ('$f_num','eighteen')";
                                                $insertion_inject = mysqli_query($con, $insertion);
                                             } 
                                             else {
                   	                             echo "Seat is already booked. Try another...";
                                             }

                                     	 
    	     }  
    	     else {
                echo "<script> alert('Seat is already booked. Try another.'); </script>";
                    } 
    }


  
  else if(isset($_POST['nineteen'])){
      
        $q = " SELECT * FROM InterSeatNum 
              WHERE Flight_ID = '". $_SESSION["i_id"]."' ";


    	     $inject = mysqli_query($con, $q); 
             

             $fetch = mysqli_fetch_array($inject);
                                // echo "<hr> {$fetch['Flight_ID']} <hr>  ";

    	     if($fetch['nineteen']=='0'){
                                       
                                 $query = " UPDATE InterSeatNum
                                            SET nineteen = '1'
                                            WHERE Flight_ID = '". $_SESSION["i_id"]."'  ";

                                            $check = mysqli_query($con, $query);
                   
                                             if($check){
                   	                            echo "<script> alert('Booking is successfull.')  </script>";

                                                $sub = substr($_SESSION['mail'], 0, 5);
                                                $f_num = $_SESSION['i_id'];
                                                $insertion = "INSERT INTO $sub
                                                             VALUES ('$f_num','nineteen')";
                                                $insertion_inject = mysqli_query($con, $insertion);
                                             } 
                                             else {
                   	                             echo "Seat is already booked. Try another...";
                                             }

                                     	 
    	     }  
    	     else {
                echo "<script> alert('Seat is already booked. Try another.'); </script>";
                    } 
    }


  
   else if(isset($_POST['twenty'])){
      
        $q = " SELECT * FROM InterSeatNum 
              WHERE Flight_ID = '". $_SESSION["i_id"]."' ";


    	     $inject = mysqli_query($con, $q); 
             

             $fetch = mysqli_fetch_array($inject);
                                // echo "<hr> {$fetch['Flight_ID']} <hr>  ";

    	     if($fetch['twenty']=='0'){
                                       
                                 $query = " UPDATE InterSeatNum
                                            SET twenty = '1'
                                            WHERE Flight_ID = '". $_SESSION["i_id"]."'  ";

                                            $check = mysqli_query($con, $query);
                   
                                             if($check){
                   	                            echo "<script> alert('Booking is successfull.')  </script>";

                                                $sub = substr($_SESSION['mail'], 0, 5);
                                                $f_num = $_SESSION['i_id'];
                                                $insertion = "INSERT INTO $sub
                                                             VALUES ('$f_num','twenty')";
                                                $insertion_inject = mysqli_query($con, $insertion);
                                             } 
                                             else {
                   	                             echo "Seat is already booked. Try another...";
                                             }

                                     	 
    	     }  
    	     else {
                echo "<script> alert('Seat is already booked. Try another.'); </script>";
                    } 
    }







//echo "Favorite color is " . $_SESSION["f_id"] . ".<br>";



?>








</center>








</body>
</html>
