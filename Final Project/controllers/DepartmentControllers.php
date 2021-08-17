<?php 
require_once 'models/db_config.php';

function getAlldepartment()
{
$query = "select * from departments";
$rs=get($query);
return $rs;
}
 ?>