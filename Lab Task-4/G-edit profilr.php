<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
	include('name-1.php');
	?>
	<?php
	include('link.php');
	?>
	<fieldset align = "center">
 <legend><b>EDIT PROFILE</b></legend>
 <b>Name:</b>
 <label for="name"></label>
 <input type="text" id="name" name="name"> <br><hr>
 <b>Email:</b>
 <label for="email"></label>
 <input type="email" id="email" name="email"> <br><hr>
 <legend><b>GENDER</b></legend>
 <input type="radio" id="male" name="gender" value="male">
 <label for="male">Male</label>
 <input type="radio" id="female" name="gender" value="female">
 <label for="female">Female</label>
 <input type="radio" id="other" name="gender" value="other">
 <label for="other">Other</label><hr>
 <legend><b>DATE OF BIRTH</b></legend>
 <label for="birth"></label>
 <input type="date" id="birth" name="birth"><br><hr>
 <input type="submit" name="submit" value="Submit">
</fieldset>
<?php  
	include('footer.php');
	?>

</body>
</html>