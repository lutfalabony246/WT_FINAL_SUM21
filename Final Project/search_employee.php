<?php
	include 'controllers/Employee_Controller.php';
	$key = $_GET["key"];
	$products = searchEmployee($key);
	if(count($products) > 0){
		foreach($products as $p){
			echo "<a href='Edit_Employee.php?id=".$p["id"]."'>".$p["name"]."</a><br>";
		}
	}
?>