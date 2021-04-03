<?php
session_start();


?>
<!DOCTYPE html>
<html> <title> Upload File </title>
<body>
      
		     <p> <h1 align="center">  LEARNING CS  </h1> </p>
		       <h3 align= "right">
			    <hr>
				
		        Logged in as<?php echo $_SESSION['username']?> | </a>
		       <a href="logout_view.php">Logout</a>   
		   </h3>  
		    
	          <?php
	include('A-link.php');
	?>

<fieldset>
    
      <h2 align="center"><b>CHANGE PASSWORD</b></h2>
      <form  action="controller/changePassword_controller.php?id=<?php echo $_SESSION['username'] ?>" method="post" enctype="multipart/form-data">
	    <h3 align="center"> </p>
			
          <lebel>Username:</lebel> 
		  <input type="text" name="username">        
          <br>			
		  <lebel>Current Password:</lebel> 
		  <input type="text" name="cpassword">        
          <br>
          <lebel style="color:green">New Password:</lebel>
          <input type="text" name="npassword" >         
          <br>
          <lebel style="color:Red">Retype New Password:</lebel>
          <input type="text" name="rnpassword" >        
          <br><hr>
          <input type="submit" name="submit" value="Submit">
          <br>
		  
		  </h3>
      </form>
      <div align="center">
		  
	
		   
		   </fieldset>
		       <?php
	include('footer.php');
	?>
		        
	  
  </body>
</html>
