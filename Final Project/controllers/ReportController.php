<?php 
	require_once"models/db_config.php";
	$err_c_id="";
	$err_db="";
	if(isset($_POST["add_report"])){

      $rs = insertReport($c_id,$p_id);
		if($rs === true){
			//setcookie("products",$_POST["name"],time()+360);
			echo "submitted";
			header("Location: All_Report.php");
		}
		$err_db = $rs;
	}
	function insertReport($c_id,$p_id){
		$query="insert into report values (NULL,$c_id,p_id)";
		return execute($query);
	}
 ?>
