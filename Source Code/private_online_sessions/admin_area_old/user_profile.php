<?php



if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['user_profile'])){

$edit_id = $_GET['user_profile'];

$get_admin = "select * from users where id='$edit_id'";

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

<i class="fa fa-dashboard" ></i> Dashboard / Profile

</li>



</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1  row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" >

<i class="fa fa-money fa-fw" ></i> Profile

</h3>


</div><!-- panel-heading Ends -->


<div style="display:flex;flex-direction:row;justify-content:space-around;"  class="panel-body"><!-- panel-body Starts -->
<img style=" border-radius: 50%" src="user_image/<?Php echo $admin_image; ?>" width="300" height="300" >
<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->
<div class="form-group"><!-- form-group Starts -->
<label class=" control-label"></label>

</div><br>

<div class="form-group"><!-- form-group Starts -->

<label class=" control-label">Full Name: <?php echo $admin_name; ?></label>
</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class=" control-label"> Email: <?php echo $admin_email; ?> </label>
</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class=" control-label"> Age: <?php echo $admin_age; ?> </label>
</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class=" control-label"> Phone:   <?php echo $admin_contact; ?></label>
</div><!-- form-group Ends -->





<div class="form-group"><!-- form-group Starts -->

<label class=" control-label"> Address: <?php echo $admin_address; ?> </label>

</div><!-- form-group Ends -->

<br>



<div class="form-group"><!-- form-group Starts -->

<label class=" control-label"></label>




</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends -->
<div>

<a href="index.php?edit_profile=<?php echo $edit_id; ?>" >

<i class="fa fa-pencil"> </i> Edit Profile information

</a>
</div>
</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->


</div><!-- 2 row Ends -->

<?php


}


?>



