<?php 
require_once'controllers/ProductController.php' ;
require_once'controllers/CategoryController.php';
$cat=getAllcategories();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
    <script>
        var hasError=false;
        function get(id)
        {
                return document.getElementById(id);
        }
        function validate()
        {
            refresh();
            if(get("name").value == "")
            {
                hasError = true;
                get("err_name").innerHTML = "*Name Req";
            }
            else if(get("name").value.length <=2)
            {
                hasError = true;
                get("err_name").innerHTML = "*Name must be > 2 characters";
            }
            if(get("cat").selectedIndex == 0){
                hasError = true;
                get("err_cat").innerHTML = "*Category Req";
            }
            if(get("price").value == "")
            {
                hasError = true;
                get("err_price").innerHTML = "*Price Req";
            }
            if(get("qty").value == "")
            {
                hasError = true;
                get("err_qty").innerHTML = "*Quantity Req";
            }
            if(get("desc").value == "")
            {
                hasError = true;
                get("err_desc").innerHTML = "*Description Req";
            }
            if(get("img").value == "")
            {
                hasError = true;
                get("err_img").innerHTML = "*Image Req";
            }
            
            return !hasError;
        }
        function refresh()
        {
            hasError = false;
            get("err_name").innerHTML ="";
            get("err_cat").innerHTML ="";
            get("err_price").innerHTML ="";
            get("err_qty").innerHTML ="";
            get("err_desc").innerHTML ="";
            get("err_img").innerHTML ="";
        }
            
    </script>
<body style="background: #f5f5ef; ">
<h1 style="text-align: center;" >ADD PRODUCT</h1>
<h5><?php echo $err_db; ?></h5>
 <form action="" onsubmit="return validate()" method="post" enctype="multipart/form-data" style="text-align: center;">
    <h4>Name</h4>
<input id="name" name="name" value="<?php echo $name;?>" type="text"><br>
            <span id="err_name"><?php echo $err_name;?></span>
<h4>Category</h4>
<select id="cat" name="c_id" >
<option disabled selected >Choose</option>
<?php 
    foreach ($cat as $c) {
    echo "<option value='".$c["id"]."'>".$c["name"]."</option>";
    }
 ?>
 </select>
 <br>
 <span id="err_cat"> <?php echo $err_c_id;?> </span>

<h4 >Price</h4>
<input id = "price" type="text" name="price" value="<?php $price ?>">
<br>
<span id="err_price"><?php echo $err_price;?></span>
<br>
<h4>Quantity</h4>
<input id="qty"  type="text" name="qty" value="<?php $quantity ?>">
<br>
<span id="err_qty"> <?php echo $err_quantity;?> </span>
<br>
<h4>Description</h4>
<input id="desc" type="text" name="desc" value="<?php $description ?>">
<br>
<span id="err_desc"> <?php echo $err_description;?> </span>
<h4>Image</h4>
<input  id="img" type="file" name="p_img" value="<?php $img ?>" style="padding-left: 100px;">
<br>
<span id="err_img"> <?php echo $err_img;?> </span>
<br><br>
<input type="submit" name="add_product" value="Add Product">
</body>
</html>