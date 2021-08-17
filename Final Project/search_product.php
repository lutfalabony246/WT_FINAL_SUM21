<?php
	include 'controllers/ProductController.php';

	$key = $_GET["key"];
	//setcookie("searchproduct",$query,time()+60);
	$products = searchProduct($key);
	if(count($products) > 0){
		foreach($products as $p){
			echo "<a href='Edit_Product.php?id=".$p["id"]."'>".$p["name"]."</a><br>";
		}
	}
?>