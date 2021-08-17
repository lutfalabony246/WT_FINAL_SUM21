<?php
	include 'controllers/CategoryController.php';
	$name = $_GET["name"];
	$cat = checkUsername($name);
	if($cat){
		echo "Invalid";
	}
	else echo "valid";
?>