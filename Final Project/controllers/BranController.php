<?php  
require_once'models/db_config.php';

$err_db="";
$name="";
$err_name="";
$hasError=false;
if (isset($_POST["add_brand"])) {
	$rs=insertBrand($_POST["name"],$status);
	if ($rs === true){
		setcookie("category",$_POST["name"],time()+600);
		header("Location:All_brand.php");

	}
	$err_db=$rs;
}
elseif (isset($_POST["edit_brand"])) {
	$rs=updateBrand($_POST["name"],$_POST["id"]);
	if ($rs === true) {


		header("Location:All_brand.php");
	}
	$err_db=$rs;
	
}

function insertBrand($name,$status)
{
$query="insert into brands values(NULL,'$name','$status')";
return execute($query);
}
////SWDED
function getAllBrands()
{
$query = "select * from brands";
$rs=get($query);
return $rs;
}
function getBrand($id)
{
$query="select * from brands where id=$id";
$rs=get($query);
return $rs[0];
}
function updateBrand($name,$id)
{
    $query="update brands set name='$name' where id='$id'";
    return execute($query);
}
/*function deleteBrand($id)
{
	$query= "delete from categories where id='$idnum'";
	 return execute($query);
}*/








?>