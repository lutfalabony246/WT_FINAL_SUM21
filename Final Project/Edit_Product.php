<?php 
require_once 'controllers/ProductController.php';
require_once 'controllers/CategoryController.php';
$cat=getAllcategories();
$id = $_GET["id"];
$pr= getProduct($id);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h5><?php echo $err_db; ?></h5>
	<img  src="<?php echo $pr["img"];?>" height="50px" width="50px"></img>
<form action="" method="post">

 <form action="" method="post" style="text-align: center;">
 	<h4>Name</h4>
<input type="text" name="name"  value ="<?php echo $pr["name"];?>">
<br>
<h4>Category</h4>
<select name="c_id">
<option disabled selected >Choose</option>
<?php 
    foreach ($cat as $c) {
    echo "<option value='".$c["id"]."'>".$c["name"]."</option>";
    }
 ?>

 </select>

<h4>Price</h4>
<input type="text" name="price" value="<?php echo $pr["price"];?>">

<br>
<h4>Quantity</h4>
<input type="text" name="qty" value="<?php echo $pr["qty"];?>">

<br>
<h4>Description</h4>
<input type="text" name="desc" value="<?php echo $pr["description"];?>">

<h4>Image</h4>
<input type="file" name="p_img" value="<?php echo $pr["p_img"];?>">

<br><br>

<input type="submit" name="edit_product" value="Edit Category">
	</form>
</body>
</html>