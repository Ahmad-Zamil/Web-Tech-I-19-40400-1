<!DOCTYPE html>
<?php
session_start();
require_once 'controller/viewProfile_Controller.php';
$instructor = fetchProfile($_SESSION['username']);

?>
<html> 
	 <head>
	 <title> DASHBOARD </title>
	 </head>  
	 <body>
	      
		     <p> <h1 align="left">  LEARNING CS </h1> </p>
		       <h3 align= "right">
			    <hr>
				
		        Logged in as <?php echo  $_SESSION['username']?>|
		       <a href="logout_view.php">Logout</a>     
		   </h3>  
		<fieldset>
		   
         
           
              <?php
	include('A-link.php');
	?>
               
      
                 
		 
		    <h1 align="center"> PROFILE </h1>
			
			<h3 align="center">
		    
			
			
			
		      
		      Id: <span style="color: rgb(255, 255, 255);"> ** </span> <?php echo $instructor['id']; ?> <br><br>
	          Email: <span style="color: rgb(255, 255, 255);">** </span>  <?php echo $instructor['Email']; ?> <br><br>
		      Username: <span style="color: rgb(255, 255, 255);"> ** </span> <?php echo $instructor['Username']; ?> <br><br>

			
			</h3>
		  
		   <div align="center">
		   
		    <hr>
		   
		   
		   
		   </div>
		           <?php
	include('footer.php');
	?>
		   
	 </body>
	 
</html>	 