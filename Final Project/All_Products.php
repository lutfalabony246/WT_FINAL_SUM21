<?php 
include 'controllers/ProductController.php';
$products= getProducts();


/*if (!isset($_COOKIE['products'])) {
	header("Location:dashboard.php");
}*/
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>

<body>
	<input type="text" class="form-control" onkeyup="searchProducts(this)" placeholder="Search...">
	<div id="suggesstion"></div>

	<br>
	<table border="1" cellspacing="0" cellpadding="20" >
		<thead>
			<th>SL#</th>
			<th></th>
			<th>Name</th>
			<th>Category</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Description</th>
			<th colspan="2">Operations</th>
			
			
		</thead>
		<tbody>
			<?php 
			$i=1;
			foreach ($products as $p) {
				$id=$p["id"];
				//setcookie("searchproduct",$p,time()+60);
				echo "<tr>";
					echo "<td>$i</td>";
					echo "<td><img width='80px' height='100px' src='".$p["img"]."'></td>";
					echo "<td>.$p[name].</td>";
					echo "<td>.$p[c_name].</td>";
					echo "<td>.$p[price].</td>";
					echo "<td>.$p[qty].</td>";
					echo "<td>.$p[description].</td>";
					echo '<td><button><a href="Edit_Product.php ?id='.$id.'">Edit</a></button></td>';
					//echo '<td><button name="delete"><a name="delete" href="Delete_category.php ?id='.$id.'">Delete</a> </button></td>';
					
			       // echo '<td><a name="delete" href="Delete_category.php ?id='.$id.'">Delete</a></td>';
				echo "</tr>";
				$i++;
			}
			 ?>
			
		</tbody>
	</table>
	<a href="dashboard.php"> Back</a> 
</body>
</html>
<script src="js/products.js"></script>
