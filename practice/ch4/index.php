<?php
	require 'databaseconnect.php';
	
	$product_id = $_GET['product_id'];
	// get all products
	
	
	
	if( !isset( $product_id ) ) {
		$query = "SELECT * FROM products";
		$products = $db->query($query);
		include "products.php";
	}
	
	else {
		$query = "SELECT * FROM products WHERE productID = $product_id";
		$products = $db->query($query);
		include "product_detail.php";
	}

?>

