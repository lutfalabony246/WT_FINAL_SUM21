<?php 
	require_once 'controllers/Employee_Controller.php';
	deleteemployee($_GET['id']);
	header("Location: All_Employee.php");

?>