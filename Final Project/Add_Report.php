<?php 

require_once'controllers/ReportController.php';
$catt=getAllcategories();
$pro=getProducts();

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title></title>
 </head>
 <body>
<h4>Category</h4>
<select id="cat" name="c_id" >
<option disabled selected >Choose</option>
<?php 
    foreach ($catt as $c) {
    echo "<option value='".$c["id"]."'>".$c["name"]."</option>";
    }
 ?>
 </select>
 <select id="pro" name="p_id" >
 <option disabled selected >Choose</option>
<?php 
    foreach ($pro as $p) {
    echo "<option value='".$p["id"]."'>".$p["name"]."</option>";
    }
 ?>
 </select>
 Quantity:<input type="text" name="qty">
 <br>
 <span id="err_cat"> <?php echo $err_c_id;?> </span>
 <input type="submit" name="add_report" value="Add Report">


 </body>
 </html>