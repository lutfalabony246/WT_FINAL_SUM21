<?php 
include_once 'controllers/BranController.php';
$brands=getAllBrands();
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
			<th>Status</th>
		

			<th colspan="2">Edit</th>
			
		</thead>
		<tbody>
			<?php 
			$i=1;
			foreach ($brands as $b) {
				$id=$b["id"];
				echo "<tr>";
					echo "<td>$i</td>";
					echo "<td>.$b[name].</td>";
					echo "<td>.$b[status].</td>";
					echo '<td><button><a href="Edit_brand.php ?id='.$id.'">Edit</a></button></td>';
					//7echo '<td><a href="delete_brand.php ?id='.$id.'">Edit</a></td>';
			       // echo '<td><a name="delete" href="Delete_category.php ?id='.$id.'">Delete</a></td>';
				echo "</tr>";
				$i++;
			}
			 ?>
			
		</tbody>
	</table>

</body>
</html>