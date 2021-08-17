<?php
if (isset($_COOKIE["category"])) {
	header("Location:login.php");
}
require_once 'controllers/CategoryController.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<script>
		var hasError=false;
		function get(id)
		{
				return document.getElementById(id);
		}
		function validate()
		{
			refresh();
			if(get("name").value == "")
			{
				hasError = true;
				get("err_name").innerHTML = "*Name Req";
			}
			else if(get("name").value.length <=2)
			{
				hasError = true;
				get("err_name").innerHTML = "*Name must be > 2 characters";
			}
			
			
			return !hasError;
		}
		function refresh()
		{
			hasError = false;
			get("err_name").innerHTML ="";
			
		}
			
	</script>
	<html>
	<body style="background: #f5f5ef; ">
		<h1 align ="center">Welcome Manager
		<form action="" onsubmit="return validate()" method="post">
			<p>ADD Category:</p>
			<input id="name" name="name"   onfocusout="checkCategory(this)" value="<?php echo $name;?>" type="text"><br>
			<span id="err_name"><?php echo $err_name;?></span>
			<br>
			<p><input type="submit" name ="add_category" value="Add"  > </p>
			
			
		</body>
	</html>
	<script src="js/Category.js"></script>