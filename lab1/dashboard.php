<?php 
session_start();
if(!isset($_COOKIE["loggeduser"]))
{header("Location: index.php");
}
?> 
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h1 align ="center"style="color: red; ">Welcome <?php echo $_SESSION["loggeduser"] ; ?> </h2>
<h1 align ="center" style="color: blue ; ">Welcome <?php echo $_COOKIE["loggeduser"] ; ?> </h1>

</body>
</html>
