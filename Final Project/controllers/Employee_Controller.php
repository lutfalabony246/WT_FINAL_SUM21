<?php 
require_once 'models/db_config.php';
$name="";
$err_name="";
$username="";
$err_username="";
$id="";
$err_id="";
$dob="";
$err_dob="";
$deptid="";
$err_deptid="";
$img="";
$err_img="";
 $hasError=false;
$err_db="";
if (isset($_POST["add_student"]))
{
	    $fileType = strtolower(pathinfo(basename($_FILES["p_img"]["name"]),PATHINFO_EXTENSION));
		$target = "storage/employee_images/".uniqid().".$fileType";
		move_uploaded_file($_FILES["p_img"]["tmp_name"],$target);

	if(empty($_POST["name"])) {
	    $hasError=true;
	    $err_name="name required";
	}
	else
	{
		$name=$_POST["name"];
	}
	if(empty($_POST["uname"])) {
	    $hasError=true;
	    $err_username="name required";
	}
	else
	{
		$username=$_POST["uname"];
	}
	
	if(empty($_POST["dob"])) {
	    $hasError=true;
	    $err_dob="Date of birth required";
	}
	else
	{
		$dob=$_POST["dob"];
	}
	
	if(empty($_POST["deptid"])) {
	    $hasError=true;
	    $err_deptid="department required";
	}
	else
	{
		$deptid=$_POST["deptid"];
	}
	if(empty($_POST["img"])){
	    $hasError=true;
	    $err_img="image required";
	}
	else
	{
		$img=$_POST["img"];
	}

	$rs=insertStudent($_POST["name"],$_POST["uname"],$_POST["dob"],$_POST["dept_id"],$target);
	if ($rs === true) {
		header("Location:All_Employee.php");
	}
	$err_db=$rs;
}
elseif (isset($_POST["edit_student"])){
	if(empty($_POST["name"])) {
	    $hasError=true;
	    $err_name="name required";
	}
	else
	{
		$name=$_POST["name"];
	}
	if(empty($_POST["uname"])) {
	    $hasError=true;
	    $err_username="name required";
	}
	else
	{
		$username=$_POST["uname"];
	}
	
	if(empty($_POST["dob"])) {
	    $hasError=true;
	    $err_dob="Date of birth required";
	}
	else
	{
		$dob=$_POST["dob"];
	}
	
	if(empty($_POST["dept_id"])) {
	    $hasError=true;
	    $err_deptid="department required";
	}
	else
	{
		$deptid=$_POST["dept_id"];
	}
	if(!$hasError)
		{
			$rs = updateStudents($name,$uname,$dob,$deptid,$_POST["id"]);
			if($rs === true)
			{
				header("Location: All_Employee.php");
			}
			$err_db = $rs;
		}

	
}
function insertStudent($name,$uname,$dob,$deptid,$img)
{
$query="insert into employee values(NULL,'$name','$uname','$dob',$deptid,'$img')";
return execute($query);
}
function getallStudents()
{
$query = "select s.* ,d.name as 'd_name' from employee s LEFT JOIN departments d on s.dept_id=d.id";
$rs=get($query);
return $rs;
}
function getStudentsid($id)
{
$query="select * from employee where id=$id";
$rs=get($query);
return $rs[0];
}
function updateStudents($name,$uname,$dob,$deptid,$id)
{
$query="update employee set name='$name',uname='$uname',dob='$dob',dept_id=$deptid where id = $id";
return execute($query);
}
function searchEmployee($key){
	$query = "select e.id,e.name from employee e left join departments d on e.dept_id=d.id where e.name like '%$key%' or d.name like '%$key%' or e.uname like '%$key%'";
		$rs = get($query);
		return $rs;
}
function checkEmpUsername($uname){
		$query = "select name from employee where uname='$uname'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
		
	}

