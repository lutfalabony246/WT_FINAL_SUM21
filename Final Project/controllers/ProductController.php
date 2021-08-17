<?php
	require_once"models/db_config.php";
	//validations variables
	$name="";
		$err_name="";
		$cat="";
		$err_c_id="";
		$price="";
		$err_price="";
		$quantity="";
		$err_quantity="";
		$description="";
		$err_description="";
		$img="";
		$err_img="";
		$hasError=false;
		$err_db="";
	$err_db="";
	if(isset($_POST["add_product"])){
		
		$fileType = strtolower(pathinfo(basename($_FILES["p_img"]["name"]),PATHINFO_EXTENSION));
		$target = "storage/product_images/".uniqid().".$fileType";
		move_uploaded_file($_FILES["p_img"]["tmp_name"],$target);
		
		if(empty($_POST["name"]))
	{
	$hasError=true;
	$err_name="Category name required";
	}
	else
	{
		$name=$_POST["name"];
	}
	if(empty($_POST["c_id"]))
	{
	$hasError=true;
	$err_c_id="Category name required";
	}
	else
	{
		$cat=$_POST["c_id"];
	}
	if(empty($_POST["price"])){
	$hasError=true;
	$err_price="price required";
	}
	else
	{
		$price=$_POST["price"];
	}
	
	if(empty($_POST["quantity"])){
	$hasError=true;
	$err_quantity="Quantity required";
	}
	else
	{
		$quantity=$_POST["quantity"];
	}
	if(empty($_POST["description"])){
	$hasError=true;
	$err_description="description required";
	}
	else
	{
		$description=$_POST["description"];
	}
	if(empty($_POST["img"])){
	$hasError=true;
	$err_img="image required";
	}
	else
	{
		$img=$_POST["img"];
	}
			
		
		$rs = insertProduct($_POST["name"],$_POST["c_id"],$_POST["price"],$_POST["qty"],$_POST["desc"],$target);
		if($rs === true){
			setcookie("products",$_POST["name"],time()+360);
			header("Location: All_products.php");
		}
		$err_db = $rs;
	
	}
	elseif (isset($_POST["edit_product"])){
		if(empty($_POST["name"]))
	{
	$hasError=true;
	$err_name="Category name required";
	}
	else
	{
		$name=$_POST["name"];
	}
	if(empty($_POST["c_id"]))
	{
	$hasError=true;
	$err_c_id="Category name required";
	}
	else
	{
		$cat=$_POST["c_id"];
	}
	if(empty($_POST["price"])){
	$hasError=true;
	$err_price="price required";
	}
	else
	{
		$price=$_POST["price"];
	}
	
	if(empty($_POST["quantity"])){
	$hasError=true;
	$err_quantity="Quantity required";
	}
	else
	{
		$quantity=$_POST["quantity"];
	}
	if(empty($_POST["description"])){
	$hasError=true;
	$err_description="description required";
	}
	else
	{
		$description=$_POST["description"];
	}
	if(empty($_POST["img"])){
	$hasError=true;
	$err_img="image required";
	}
	else
	{
		$img=$_POST["img"];
	}
			
		if(!$hasError)
		{
			$rs = updateProduct($name,$c_id,$price,$qty,$desc,$_POST["id"]);
			if($rs === true)
			{

				header("Location: All_Products.php");
			}
			$err_db = $rs;
		}
	}
	function insertProduct($name,$c_id,$price,$qty,$desc,$img){
		$query="insert into products values (NULL,'$name',$c_id,$price,$qty,'$desc','$img')";
		return execute($query);
	}
	function getProducts(){
		$query= "select p.*,c.name as 'c_name' from products p left join categories c on p.c_id = c.id";
		$rs = get($query);
		//setcookie("searchproduct",$rs,time()+60);
		return $rs;
	}
	function getProduct($id){
		$query="select * from products where id=$id";
		$rs = get($query);
		return $rs[0];
	}
function updateProduct($name,$c_id,$price,$qty,$desc,$img,$id){
		$query="update products set name='$name',c_id=$c_id,price=$price,qty=$qty,description='$desc',img='$img', where id=$id";
		return execute($query);
		
	}
	function searchProduct($key){
				$query = "select p.id,p.name from products p left join categories c on p.c_id=c.id where p.name like '%$key%' or c.name like '%$key%' or p.description like '%$key%'";

		$rs = get($query);
		return $rs;
	}
?>