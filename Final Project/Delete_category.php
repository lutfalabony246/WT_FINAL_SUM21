<?php 
require_once'controllers/CategoryController.php';
$id=$_GET["id"];
//$c=getCategory($id);
//header("Location:All_categories.php");

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title></title>
 </head>
 <body>
 <h5><?php echo $err_db; ?></h5>
 <h5>Delete category</h5>
 
 </body>
 </html>