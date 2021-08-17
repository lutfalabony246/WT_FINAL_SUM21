<?php 
include 'controllers/BranController.php';
$id=$_GET["id"];
$c=getBrand($id);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h5><?php echo $err_db; ?></h5>
<form action="" method="post">
		<h4>Name</h4>
		<input type="hidden" name="id" value="<?php echo $c["id"] ;?>">
<input type="text" name="name" value="<?php echo $c["name"]; ?>">
<br>
<input type="submit" name="edit_brand" value="Edit Brand">
	</form>
</body>
</html>