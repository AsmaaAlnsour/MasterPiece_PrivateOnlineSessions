<?php



if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['edit_profile'])){

$edit_profile = $_GET['edit_profile'];

$get_admin = "select * from users where id='$edit_profile'";

$run_admin = mysqli_query($con,$get_admin);

$row_admin = mysqli_fetch_array($run_admin);

$admin_id = $row_admin['id'];

$admin_name = $row_admin['full_name'];

$admin_email = $row_admin['email'];

$admin_pass = $row_admin['password'];

$admin_image = $row_admin['profile_pic'];

$new_admin_image = $row_admin['profile_pic'];


$admin_address = $row_admin['address'];
$admin_age = $row_admin['age'];

$admin_contact = $row_admin['phone'];





}



?>


<div class="row" ><!-- 1  row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class="fa fa-dashboard" ></i> Dashboard / Edit Profile

</li>



</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1  row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" >

<i class="fa fa-money fa-fw" ></i> Edit Profile

</h3>


</div><!-- panel-heading Ends -->


<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">User Name: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="admin_name" class="form-control" required value="<?php echo $admin_name; ?>">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">User Email: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="admin_email" class="form-control" required value="<?php echo $admin_email; ?>">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">admin Password: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="admin_pass" class="form-control" required value="<?php echo $admin_pass; ?>">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->



<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Phone: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="admin_contact" class="form-control" required value="<?php echo $admin_contact; ?>">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Age: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="admin_age" class="form-control" required value="<?php echo $admin_age; ?>">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->
<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Address: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="admin_address" class="form-control" required value="<?php echo $admin_address; ?>">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">User Image: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="file" name="admin_image" class="form-control" >
<br>
<img src="user_image/<?Php echo $admin_image; ?>" width="70" height="70" >

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="submit" name="update" value="Update User" class="btn btn-primary form-control">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->


</div><!-- 2 row Ends -->

<?php

if(isset($_POST['update'])){

$admin_name = $_POST['admin_name'];

$admin_email = $_POST['admin_email'];

$admin_pass = $_POST['admin_pass'];


$admin_contact = $_POST['admin_contact'];
$admin_address = $_POST['admin_address'];
$admin_age = $_POST['admin_age'];


$admin_image = $_FILES['admin_image']['name'];

$temp_admin_image = $_FILES['admin_image']['tmp_name'];

move_uploaded_file($temp_admin_image,"user_image/$admin_image");

if(empty($admin_image)){

$admin_image = $new_admin_image;

}

$update_admin = "update users set full_name='$admin_name', email='$admin_email',password='$admin_pass',profile_pic='$admin_image', phone='$admin_contact', age='$admin_age' , address='$admin_address' where id='$admin_id'";

$run_admin = mysqli_query($con,$update_admin);

if($run_admin){

echo "<script>alert('User Has Been Updated successfully and login again')</script>";

echo "<script>window.open('index.php?user_profile','_self')</script>";

session_destroy();














}

}


?>



<?php }  ?>