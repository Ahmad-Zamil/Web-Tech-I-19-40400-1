<?php 

require_once 'controller/display.php';
$product = fetchProduct( $_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>EDIT PRODUCT </title>
</head>
<body>

<form action="controller/editProduct.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
  <fieldset align = "center">
<legend><b>Edit Product</b></legend> 
<br>
  <meta><b>Name:</b></meta>
  <input type="text" name="name" value="<?php echo $product['Name']; ?> " > 
  <br>
  <meta><b>Buying Price:</b></meta>
  <input type="text" name="buyingPrice" value="<?php echo $product['BuyingPrice']; ?> " > 
  <br>
  <meta><b>Selling Price:</b></meta>
  <input type="text" name="sellingPrice" value="<?php echo $product['SellingPrice']; ?> " > 
  <br>
  
  <input type="checkbox" name="display" value="Yes" <?php if($product['Display']=='Yes'){echo 'checked';} ?>>Display
  <br>
  <hr>
  <input type="submit" name="submit" value="Save">
</form>
</fieldset>
</body>
</html>
<?php 
