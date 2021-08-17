<?php
session_start(); 
include'controllers/UserController.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<script >
	var hasError=false;
		function get(id){
			return document.getElementById(id);
		}
	function validate(){
			refresh();
			if(get("uname").value==""){
				hasError = true;
				get("err_uname").innerHTML = "*Username Req";
			}
			if(get("pass").value==""){
				hasError = true;
				get("err_pass").innerHTML = "*Password Req";
			}
			return !hasError;
		}
	function refresh(){
		hasError = false;
			
			get("err_uname").innerHTML ="";
			get("err_pass").innerHTML ="";
	}
</script>
<style >
	.img{
		display: flex;
		justify-content: center;
	}
</style>
<body style="background: #f5f5ef; margin: 50px;">
	<div class="img">
	<img src="storage/SystemPictures/logo.png">
	</div>
<h1 style="text-align: center;">Login</h1>
<h5><?php echo $err_db; ?></h5>
<form action="" onsubmit="return validate()" method="post" style="text-align: center;">
	<h4>UserName:</h4>
	 <input type="text" name="uname" id="uname" value="<?php echo $username; ?>" >
	 <br>
     <span id="err_uname"><?php echo $err_username;?></span>
     <h4>Password:</h4>
	<input type="Password" name="password" id="pass"value="<?php echo $password; ?>">
	<br>
	<span id="err_pass"><?php echo $err_password; ?></span>
	<br>
	<br>
	<input type="submit" name="btn_login" value="Login">
	<br> 
	<a href="Signup.php">Not registered yet!Sign Up</a>
	
</form>
</body>
</html>