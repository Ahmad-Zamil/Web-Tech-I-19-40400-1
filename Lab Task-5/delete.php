<?php if(!empty($_GET['id'])){ ?>

<?php 

require_once 'controller/display.php';
$product = fetchProduct($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>DELETE PRODUCT</title>
</head>
<body>
	<fieldset align = "center">
<legend><b>Delete Product</b></legend> <br>
<form action="controller/deleteProduct.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
 <meta>Name:</meta>
 <?php echo $product['Name']; ?> 
 <hr>
 <meta>Buying Price:</meta>
 <?php echo $product['BuyingPrice']; ?> 
 <hr>
 <meta>Selling Price:</meta>
 <?php echo $product['SellingPrice']; ?> 
 <hr>
 <meta>Displayable:</meta>
 
<?php echo $product['Display']; ?>
<hr>
  <input type="submit" name="submit" value="delete">
</form>
</fieldset>
</body>
</html>
<?php }
else{
	echo "You are not allowed to proceed";
} ?>