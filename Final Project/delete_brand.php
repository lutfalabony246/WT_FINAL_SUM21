<?php  
require_once'controllers/BranController.php';
require_once'All_brand.php';
$idnum=$_GET['id'];
$query="delete from brands where id=$idnum";

?>