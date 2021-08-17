<?php 
include 'controllers/UserController.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign UP</title>
</head>
<script >
	var hasError=false;
		function get(id){
			return document.getElementById(id);
		}
	function validate(){
			refresh();
			if(get("name").value == ""){
				hasError = true;
				get("err_name").innerHTML = "Name required";
			}
			if(get("uname").value==""){
				hasError = true;
				get("err_uname").innerHTML = "*Username Required";
			}
			if(get("email").value==""){
				hasError = true;
				get("err_email").innerHTML = "*User Email Required";
			}
			if(get("pass").value==""){
				hasError = true;
				get("err_pass").innerHTML = "*Password Required";
			}
			return !hasError;
		}
	function refresh(){
		hasError = false;
			get("err_name").innerHTML ="";
			get("err_uname").innerHTML ="";
			get("err_email").innerHTML ="";
			get("err_pass").innerHTML ="";
	}
</script>
<body>
<h1 style="text-align: center;">Sign Up</h1>
<h5><?php echo $err_db; ?></h5>

<form   style="text-align: center;" action="" onsubmit="return validate()"  method="post">
	
	 <h4>Name:</h4>
	
	 <input type="text" name="name" id="name" value="<?php echo $name; ?>">
	 <br>
	
	  <span id="err_name"><?php echo $err_name; ?></span>
	    <h4>UserName:</h4>
	 
     <input type="text" name="uname" onfocusout="checkUsername(this)"  value="<?php echo $username; ?>" >
     <br>
     <span id="err_uname"><?php echo $err_username; ?></span>
	
      <h4>Email Address:</h4>

	<input type="text" name="email" id="email" value="<?php echo $email; ?>">
	<br>
	<span id="err_email"><?php echo $err_email; ?></span>
	<h4>Password:</h4>
	<input type="Password" name="password" id="pass" value="<?php echo $password; ?>">
	<br>
	<span id="err_pass"><?php echo $err_password; ?></span>
	<br><br>
	<input type="submit" name="sign_up" value="Sign Up">
</form>
</body>
</html>
<script src="js/user.js"></script>