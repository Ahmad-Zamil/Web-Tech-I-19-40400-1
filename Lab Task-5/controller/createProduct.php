<?php  
require_once '../model/model.php';


if (isset($_POST['createProduct'])) {
	$data['name'] = $_POST['name'];
	$data['buyingPrice'] = $_POST['buyingPrice'];
	$data['sellingPrice'] = $_POST['sellingPrice'];
	
	$x=$_POST['sellingPrice']-$_POST['buyingPrice'];	
	$data['profit']= $x;
	
	if(empty($_POST['display'])){
		$data['display'] = "No";
	}
	else{
		$data['display'] = "Yes";
	}

  if (addProduct($data)) {
  	echo '<p>Product added successfully</p><br>';
  	echo "<a href='../display.php'>Display Product</a>";
  }

	
   
} 

else 
{
	echo 'You are not allowed to access this page.';
}

?>