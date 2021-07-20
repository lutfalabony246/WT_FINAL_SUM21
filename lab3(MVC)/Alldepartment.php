<?php 
require_once 'Controllers/DepartmentControllers.php';
$department=getAlldepartment();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<table>
		<thead>
			<th>DeptId</th>
			<th>DeptName</th>
			
			<th></th>
			<th></th>
		</thead>
		<tbody>
			<?php 
			$i=1;
			foreach ($department as $d) {
				$id=$d["id"];
				echo "<tr>";
					echo "<td>$i</td>";
					echo "<td>.$d[name].</td>";
					echo '<td><a href="#">Edit</a></td>';
			        echo '<td><a href="#">Delete</a></td>';
				echo "</tr>";
				$i++;


			}
			 ?>
			
		</tbody>
	</table>

</body>
</html>