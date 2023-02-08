<?php



if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {

?>

<div class="row" ><!-- 1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class="fa fa-dashboard" ></i> Dashboard / View Users

</li>

</ol><!-- breadcrumb Ends -->


</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> View Users

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>
<th>Image</th>
<th>User Name</th>
<th>Email</th>
<th>Password</th>
<th>Age</th>
<th>Phone</th>
<th>Address</th>
<th>User Type</th>
<th>Edit</th>
<th>Delete</th>


</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php

$get_user = "select * from users WHERE delete_user='1'";

$run_user = mysqli_query($con,$get_user);

while($row_user = mysqli_fetch_array($run_user)){

$user_id = $row_user['id'];

$full_name = $row_user['full_name'];

$email = $row_user['email'];

$profile_pic = $row_user['profile_pic'];

$password= $row_user['password'];
$age= $row_user['age'];
$phone= $row_user['phone'];
$address= $row_user['address'];
$user_type= $row_user['user_type'];




?>

<tr>

<td><img src="user_image/<?php echo $profile_pic; ?>" width="60" height="60" ></td>

<td><?php echo $full_name; ?></td>

<td><?php echo $email; ?></td>
<td><?php echo $password; ?></td>
<td><?php echo $age; ?></td>
<td><?php echo $phone; ?></td>
<td><?php echo $address; ?></td>
<td><?php echo $user_type; ?></td>
<td>

<a href="index.php?edit_user=<?php echo $user_id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>
<td>

<a href="index.php?delete_user=<?php echo $user_id; ?>" >

<i class="fa fa-trash-o" ></i> Delete

</a>

</td>


</tr>


<?php } ?>

</tbody><!-- tbody Ends -->



</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->


</div><!-- panel-body Ends -->


</div><!-- panel panel-default Ends -->


</div><!-- col-lg-12 Ends -->



</div><!-- 2 row Ends -->





<?php }  ?>