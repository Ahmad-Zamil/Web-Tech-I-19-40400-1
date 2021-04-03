
<?php
session_start();

$s=$_SESSION['username'];


?>
<!DOCTYPE html>
<html> 
	 <head>
	 <title> DASHBOARD </title>
	 </head>  
	 <body>
	      
		     <p> <h1 align="left">  LEARNING CS </sub> </h1> </p>
		       <h3 align= "right">
			    <hr>
				
		        Logged in as <?php echo $s; ?>|
		       <a href="logout_view.php">Logout</a>   
		   </h3>  
		<fieldset>
			             <?php
	include('A-link.php');
	?>
		
		   <span style="color: rgb(255, 255, 255);"> ***********</span> <h1 align="center" > Welcome <?php echo $s; ?>  <h1/>
       
		
	    <div align="center">
		    
		   </fieldset>
		 </div>  
		         <?php
	include('footer.php');
	?>
	 </body>
	 
</html>	 