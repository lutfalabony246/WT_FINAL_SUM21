<?php 
require_once 'models/db_config.php';
$err_db="";
$name="";
$err_name="";
$status="";
$err_status="";
$hasError=false;
if (isset($_POST["add_category"]))
{
	
	$rs=insertCategory($_POST["name"]);
	if ($rs === true) {
			setcookie("category",$_POST["name"],time()+600);
		header("Location:All_categories.php");
	}
	$err_db=$rs;

}
elseif (isset($_POST["edit_category"])) {
	$rs=updateCategory($_POST["name"],$_POST["id"]);
	if ($rs === true) {


		header("Location:All_categories.php");
	}
	$err_db=$rs;
	
}

function insertCategory($name)
{
$query="insert into categories values(NULL,'$name')";
return execute($query);
}
function getAllcategories()
{
$query = "select * from categories";
$rs=get($query);
return $rs;
}
function getCategory($id)
{
$query="select * from categories where id=$id";
$rs=get($query);
return $rs[0];
}
function updateCategory($name,$id)
{
    $query="update categories set name='$name' where id='$id'";
    return execute($query);
}
function deleteCategory($id)
{
	$query= "delete from categories where id='$id'";
	 return execute($query);
}
function checkCategory($uname){
		$query = "select name from categories where name='$name'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
		
	}
?>


