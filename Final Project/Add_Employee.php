<?php 
require_once 'controllers/Employee_Controller.php';
require_once 'Controllers/DepartmentControllers.php';
$dept=getAlldepartment();
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
            if(get("uname").value == "")
            {
                hasError = true;
                get("err_uname").innerHTML = "*User Name Req";
            }
            if(get("dob").value == "")
            {
                hasError = true;
                get("err_dob").innerHTML = "*Joing Date Req";
            }

             if(get("deptid").selectedIndex == 0){
                hasError = true;
                get("err_deptid").innerHTML = "*Deptid Req";
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
            get("err_uname").innerHTML ="";
            get("err_dob").innerHTML ="";
            get("err_deptid").innerHTML ="";
            get("err_img").innerHTML ="";

        }

 </script>
 <body style="background: #f5f5ef; ">
 <h5><?php echo $err_db; ?></h5>
 <h1 style="text-align: center;">ADD EMPLOYEE</h1>
 <form action="" onsubmit="return validate()" method="post"  enctype="multipart/form-data" style="text-align: center;">
 	<h4>Name</h4>
<input type="text" name="name" id="name" value="<?php echo $name ?>">
<span id="err_name"> <?php echo $err_name;?> </span>
<br>
<!-- <h4>Id</h4>
<input type="text" name="id">
<br> -->
<h4>UserName</h4>
<input type="text" name="uname" id="uname" onfocusout="checkEmpusername(this)" value="<?php echo $username ?>">
<br>
<span id="err_uname"> <?php echo $err_username;?> </span>
<br>
<h4>DOB</h4>
<input type="text"  id="dob" name="dob" value="<?php echo $dob ?>">
<span id="err_dob"> <?php echo $err_dob;?> </span>
<br>

<h4>Department Id</h4>
<select id="deptid" name="dept_id">
<option disabled selected >Choose</option>
<?php 
    foreach ($dept as $d) {
    echo "<option value='".$d["id"]."'>".$d["name"]."</option>";
    }
 ?>
 </select>
<span id="err_deptid"> <?php echo $err_deptid;?> </span><br>
<br>
<h4>Image</h4>
<input  id="img" type="file" name="p_img" value="<?php $img ?>" style="padding-left: 100px;">
<br>
<span id="err_img"> <?php echo $err_img;?> </span>
<br><br>
<input type="submit" name="add_student" value="Add Employee">
 </form>
 <a href="dashboard.php">Back</a>
 </body>
 </html>
<script src="Js/employee.js"></script>