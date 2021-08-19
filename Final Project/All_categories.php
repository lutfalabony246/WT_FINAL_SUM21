<?php 
include 'controllers/CategoryController.php';
$categories=getAllcategories();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body style="background: #f5f5ef; ">
	<table border="1" cellspacing="0" cellpadding="20" style="align: center;">
		<thead>
			<th>SL#</th>
			<th>Name</th>
		

			<th colspan="2">Edit</th>
			
		</thead>
		<tbody>
			<?php 
			$i=1;
			foreach ($categories as $c) {
				$id=$c["id"];
				echo "<tr>";
					echo "<td>$i</td>";
					echo "<td>.$c[name].</td>";
					//echo "<td>.$c[status].</td>";
					echo '<td><button><a href="Edit_category.php ?id='.$id.'">Edit</a></button></td>';
					//echo '<td><button name="delete"><a name="delete" href="Delete_category.php ?id='.$id.'">Delete</a> </button></td>';
			       // echo '<td><a name="delete" href="Delete_category.php ?id='.$id.'">Delete</a></td>';
				echo "</tr>";
				$i++;
			}
			 ?>
			
		</tbody>
	</table>
<a href="dashboard.php">Back</a>
</body>
</html>