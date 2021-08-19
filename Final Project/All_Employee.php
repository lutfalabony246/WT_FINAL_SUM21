<?php  
require_once 'controllers/Employee_Controller.php';
$std=getallStudents();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body style="background: #f5f5ef; ">
	<h1>ALL Employee</h1>
	<input type="text" class="form-control" onkeyup="searchEmployee(this)" placeholder="Search...">
	<div id="suggesstion"></div>
	<table border="1" style="text-align: center;">
		<thead style="text-align: center;">
			<th  >Id</th>
			<th></th>
			<th>Name</th>
			<th>UserName</th>
			<th>DOB</th>
			
			<th>DEPT_NAME</th>
			
			<th colspan="2">Edit</th>
			
		</thead>
		<tbody>
			<?php 
			$i=1;
			foreach ($std as $st) {
				$id=$st["id"];
				echo "<tr>";
					echo "<td>$i</td>";
					echo "<td><img width='80px' height='100px' src='".$st["img"]."'></td>";
					echo "<td>$st[name]</td>";
					echo "<td>$st[uname]</td>";
					echo "<td>$st[dob]</td>";
					
					echo "<td>$st[d_name]</td>";

					echo '<td><a href="Edit_Employee.php ?id='.$id.'">Edit</a></td>';
			       // echo '<td><a href="Delete_student.php">Delete</a></td>';
				echo "</tr>";

				$i++;
				}
			 ?>
			
		</tbody>
	</table>
	<a href="dashboard.php">Back</a>

</body>
</html>
<script src="js/employee.js"></script>

