<?php

if(!isset($_SESSION['admin_email'])){

  echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['edit_user'])){

$edit_id = $_GET['edit_user'];

$get_u = "select * from users where id='$edit_id'";

$run_edit = mysqli_query($con,$get_u);

$row_edit = mysqli_fetch_array($run_edit);

$u_id = $row_edit['id'];
$full_name = $row_edit['full_name'];


$email = $row_edit['email'];



$password = $row_edit['password'];


$age = $row_edit['age'];

$phone = $row_edit['phone'];
$address=$row_edit['address'];


$user_type = $row_edit['user_type'];



$profile_pic = $row_edit['profile_pic'];


$new_u_image = $row_edit['profile_pic'];




}



?>


<!DOCTYPE html>

<html>

<head>

<title> Edit User </title>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#product_desc,#product_features' });</script>

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / Edit Users

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Edit User

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Full Name </label>

<div class="col-md-6" >

<input type="text" name="full_name" class="form-control" required value="<?php echo $full_name; ?>">

</div>

</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Email </label>

<div class="col-md-6" >

<input type="text" name="email" class="form-control" required value="<?php echo $email; ?>">

</div>

</div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Password </label>

<div class="col-md-6" >

<input type="text" name="password" class="form-control" required value="<?php echo $password; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >  Age </label>

<div class="col-md-6" >

<input type="text" name="age" class="form-control" required value="<?php echo $age; ?>" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Phone </label>

<div class="col-md-6" >

<input type="text" name="phone" class="form-control" required value="<?php echo $phone; ?>" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Address </label>

<div class="col-md-6" >

<input type="text" name="address" class="form-control" required value="<?php echo $address; ?>" >

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >  Image </label>

<div class="col-md-6" >

<input type="file" name="profile_pic" class="form-control" >
<br><img src="user_image/<?php echo $profile_pic; ?>" width="70" height="70" >

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > User Type </label>

<div class="col-md-6" >

<select name="user_type" class="form-control"   >
<option value="<?php echo $user_type; ?>" > <?php echo $user_type; ?> </option>
<option value="user" > user </option>
<option value="admin"> admin </option>

</select>
</input>
</div>

</div><!-- form-group Ends -->











<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="update" value="Update user" class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends --> 




</body>

</html>

<?php

if(isset($_POST['update'])){

$user = $_POST['user'];
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$user_type = $_POST['user_type'];





$status = "user";

$profile_pic = $_FILES['profile_pic']['name'];

$temp_name = $_FILES['profile_pic']['tmp_name'];

if(empty($profile_pic)){

$profile_pic = $new_u_image;

}



move_uploaded_file($temp_name,"user_image/$profile_pic");


$update_user = "update users set full_name='$full_name',email='$email',password='$password',age='$age',phone='$phone',address='$address',user_type='$user_type',profile_pic='$profile_pic' where id='$u_id'";

$run_user = mysqli_query($con,$update_user);

if($run_user){

echo "<script> alert('User has been updated successfully') </script>";

echo "<script>window.open('index.php?view_users','_self')</script>";

}

}

?>

<?php } ?>
