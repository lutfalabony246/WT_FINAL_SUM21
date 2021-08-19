<?php
session_start(); 
require_once'controllers/UserController.php';
if(!isset($_SESSION["loggeduser"]))
{
   header("Location:login.php");
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<script>
	function get(id){
		return document.getElementById(id);
	}
	function loadDoc(){
		var xhr = new XMLHttpRequest();
		xhr.open("GET","Communicate.php",true);
		xhr.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200){
				get("demo").innerHTML = this.responseText;
			}
		};
		xhr.send();
	}
</script>
<style >
	.img{
		display: flex;
		justify-content: center;
	}
</style>
<body style="background: #f5f5f0; ">
	<div class="img"  >
	<img src="storage/SystemPictures/logo.png" height="100px" width="100px">
	</div>

<h1 style="text-align: center; background: red;">Welcome <?php echo $_SESSION["loggeduser"];?></h1>

<div id="demo">
	<button style="padding: 10px; background:#f0b3ff; border-radius: 10px; "><a  style="  font-size: 15px; text-decoration: none; font-weight: 50px;" href="Add_Employee.php">ADD EMPLOYEE</a></button>
	<button style="padding: 10px; background:#f0b3ff; border-radius: 10px; "><a  style="  font-size: 15px; text-decoration: none; font-weight: 50px;" href="All_Employee.php">All EMPLOYEE</a></button>
	<button style="padding: 10px; background:#f0b3ff; border-radius: 10px; "><a  style="  font-size: 15px; text-decoration: none; font-weight: 50px;" href="Add_product.php">ADD PRODUCT</a></button>
	<button style="padding: 10px; background:#f0b3ff; border-radius: 10px; "><a  style="  font-size: 15px; text-decoration: none; font-weight: 50px;" href="All_Products.php">All PRODUCTS</a></button>
	<button style="padding: 10px; background:#f0b3ff; border-radius: 10px; "><a  style="  font-size: 15px; text-decoration: none; font-weight: 50px;" href="Add_category.php">ADD CATEGORY</a></button>
	<button style="padding: 10px; background:#f0b3ff; border-radius: 10px; "><a  style="  font-size: 15px; text-decoration: none; font-weight: 50px;" href="All_categories.php">All CATEGORIES</a></button>
	<button style="padding: 10px; background:#f0b3ff; border-radius: 10px; "><a  style="  font-size: 15px; text-decoration: none; font-weight: 50px;" href="Add_brand.php">ADD BRAND</a></button>
		<button style="padding: 10px; background:#f0b3ff; border-radius: 10px; "><a  style="  font-size: 15px; text-decoration: none; font-weight: 50px;" href="All_brand.php">ALL BRAND</a></button>
	
	<br><br><br><br>
<button onclick="loadDoc()" style="padding: 10px; background:#f0b3ff; border-radius: 10px;  ">
	Communicate
</button>
<div id="demo">
</div>


</body>
</html>