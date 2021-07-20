<?php 
require_once 'Controllers/StudentControllers.php';
require_once 'Controllers/DepartmentControllers.php';
$dept=getAlldepartment();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title></title>
 </head>
 <body>
 <h5><?php echo $err_db; ?></h5>
 <h1 style="text-align: center;">ADD STUDENT</h1>
 <form action="" method="post" style="text-align: center;">
 	<h4>Name</h4>
<input type="text" name="name" value="<?php echo $name ?>">
<span> <?php echo $err_name;?> </span>
<br>
<!-- <h4>Id</h4>
<input type="text" name="id">
<br> -->
<h4>DOB</h4>
<input type="text" name="dob" value="<?php echo $dob ?>">
<span> <?php echo $err_dob;?> </span>
<br>
<h4>Credit</h4>
<input type="numbers" name="credit" value="<?php echo $credit ?>">
<span> <?php echo $err_credit;?> </span>
<br>
<h4>Cgpa</h4>
<input type="text" name="cgpa" value="<?php echo $cgpa ?>">
<span> <?php echo $err_cgpa;?> </span>
<br>
<h4>Department Id</h4>
<select name="dept_id">
<option disabled selected >Choose</option>
<?php 
    foreach ($dept as $d) {
    echo "<option value='".$d["id"]."'>".$d["name"]."</option>";
    }
 ?>
 </select>
<span> <?php echo $err_deptid;?> </span><br>
<br><br>
<input type="submit" name="add_student" value="Add Student">
 </form>
 </body>
 </html>