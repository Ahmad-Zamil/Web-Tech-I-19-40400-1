<!DOCTYPE html>
<html>
<head>
	<title>ADD PRODUCT</title>
</head>
<body>

 <form action="controller/createProduct.php" method="POST" enctype="multipart/form-data">
 <fieldset align = "center">
 <legend><b>ADD PRODUCT</b></legend>
 
  <meta for="name">Name:</meta><br>
  <input type="text" id="name" name="name">
  <br>
  <meta for="buyingPrice">Buying Price:</meta>
  <br>
  <input type="text" id="buyingPrice" name="buyingPrice">
  <br>
  <meta for="sellingPrice">Selling Price:</meta>
  <br>
  <hr>
  <input type="text" id="sellingPrice" name="sellingPrice">
  <br>
  
  <input type="checkbox" name="display"  value="Yes" > Display 
  <br>
  <hr>
 
  <input type="submit" name = "createProduct" value="Save">
 </fieldset>
</form> 

</body>
</html>

