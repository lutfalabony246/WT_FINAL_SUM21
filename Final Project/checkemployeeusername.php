<?php
	include 'controllers/Employee_Controller.php';
	$uname = $_GET["uname"];

	$user = checkEmpUsername($uname);
	if($user){
		echo "invalid";
	}
	else echo "valid";
?>