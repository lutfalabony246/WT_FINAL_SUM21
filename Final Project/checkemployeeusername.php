<?php
	include 'controllers/Employee_Controller.php';
	$uname = $_GET["uname"];
	setcookie("searchproduct",$query,time()+60);
	$user = checkEmpUsername($uname);
	if($user){
		echo "invalid";
	}
	else echo "valid";
?>