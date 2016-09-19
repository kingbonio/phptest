<!doctype html>
<html>
<head>
    <title>Edit Product Details</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  
	<link rel="stylesheet" type="text/css" href="css/styles.min.css">
	
</head>

<body>

<div class="nav-bar">
	<a href="/">Home</a>
</div>


<?php

require_once('model/connection.php');
require_once('controller/productscontroller.php');
include 'model/products.php';

$product = ProductsController::getSingle($_GET['partnumber']);

echo '<form action="confirm.php" method="post">
		<input type="text" value="edit" name="action" style="display:none;"><br />
		<input type="text" value="' . $product->partnumber . '" name="originalpartnumber" style="display:none;"><br />
		Part Number: <input type="text" name="partnumber" value="' . $product->partnumber . '"><br />
		Description: <input type="text" name="description" value="' . $product->description . '"><br />
		Image: <input type="text" name="image" value="' . $product->image . '"><br />
		<img src="img/products/' . $product->image . '" height=100  border=1 /><br />
		Stock: <input type="text" name="stock" value="' . $product->stock . '"><br />
		Cost Price: <input type="text" name="costprice" value="' . $product->costprice . '"><br />
		Sale Price: <input type="text" name="saleprice" value="' . $product->saleprice . '"><br />
		VAT Rate: <input type="text" name="vatrate" value="' . $product->vatrate . '"><br />
		<input type="submit">
		</form>';

?>

</body>
</html>