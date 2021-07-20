<?php  
require_once'Controllers/StudentControllers.php';
$std=getallStudents();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>ALL STUDENTS</h1>
	<table border="1" style="text-align: center;">
		<thead style="text-align: center;">
			<th  >Id</th>
			<th>Name</th>
			<th>DOB</th>
			<th>CREDIT</th>
			<th>CGPA</th>
			<th>DEPT_NAME</th>
			<th colspan="2">Operation</th>
			<th></th>
			<th></th>
		</thead>
		<tbody>
			<?php 
			$i=1;
			foreach ($std as $st) {
				$id=$st["id"];
				echo "<tr>";
					echo "<td>$i</td>";
					echo "<td>$st[name]</td>";
					echo "<td>$st[dob]</td>";
					echo "<td>$st[credit]</td>";
					echo "<td>$st[cgpa]</td>";
					echo "<td>$st[d_name]</td>";

					echo '<td><a href="Editstudent.php ?id='.$id.'">Edit</a></td>';
			        echo '<td><a href="Delete_student.php">Delete</a></td>';
				echo "</tr>";
				$i++;
				}
			 ?>
			
		</tbody>
	</table>

</body>
</html>

