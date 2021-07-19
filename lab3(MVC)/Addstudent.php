<?php 
include 'Controllers/StudentControllers.php';
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
<input type="text" name="name">
<br>
<h4>Id</h4>
<input type="text" name="id">
<br>
<h4>DOB</h4>
<input type="text" name="dob">
<br>
<h4>Credit</h4>
<input type="numbers" name="id">
<br>
<h4>Cgpa</h4>
<input type="text" name="id">
<br>
<h4>Department Id</h4>
<select>
	<option>Csc1001</option>
	<option>Csc1002</option>
	<option>Csc1003</option>
</select>
<br><br>
<input type="submit" name="add_student" value="Add Category">
 </form>
 </body>
 </html>