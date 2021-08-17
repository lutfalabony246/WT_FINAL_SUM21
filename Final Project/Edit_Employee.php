<?php
require_once 'controllers/Employee_Controller.php';
require_once 'Controllers/DepartmentControllers.php';
$dept=getAlldepartment();
$id=$_GET["id"];
$c=getStudentsid($id);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<h5><?php echo $err_db; ?></h5>
		<h1 style="text-align: center;">EDIT Employee</h1>
		
		
		<form  action="" method="post" style="text-align: center;" >
			<img  src="<?php echo $c["img"];?>" height="50px" width="50px"></img>
			<h4>Name</h4>
			<input type="hidden" name="id" value="<?php echo $c["id"]; ?>" >
			<input type="text" name="name" value="<?php echo $c["name"]; ?>" >
			<span> <?php echo $err_name;?> </span>
			<h4>User Name</h4>
			<input type="text" name="uname" value="<?php echo $c["uname"] ?>">
			<span> <?php echo $err_username;?> </span>
			<br>
			<h4>Date of Birth:</h4>
			<input type="text" name="dob" value="<?php echo $c["dob"] ?>" >
			<span> <?php echo $err_dob;?> </span>
			<h4>Deparment:</h4>
			<select name="dept_id" value="<?php echo $c["dept_id"]; ?>">
				<option selected disabled>Choose</option>
				<?php
				foreach($dept as $d){
				echo "<option value='".$d["id"]."'>".$d["name"]."</option>";
				}
				?>
			</select>
			<span> <?php echo $err_deptid;?> </span><br>
			<h4>Image</h4>
			<input type="file" name="p_img" value="<?php echo $c["p_img"];?>">
			<br><br>
			<input type="submit" name="edit_student" value="Edit Student">
		</form>
	</body>
</html>