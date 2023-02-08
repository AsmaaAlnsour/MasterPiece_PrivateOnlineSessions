<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {
    $email=$_SESSION['admin_email'];
    $get_user = "select * from users WHERE delete_user='1' && email = '$email'&& user_type ='admin' ";

    $run_user = mysqli_query($con,$get_user);
    $row_user = mysqli_fetch_array($run_user);
    $admin_id = $row_user['id'];
    $admin_name = $row_user['full_name'];



?>

<nav class="navbar navbar-inverse navbar-fixed-top" ><!-- navbar navbar-inverse navbar-fixed-top Starts -->

<div class="navbar-header" ><!-- navbar-header Starts -->

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" ><!-- navbar-ex1-collapse Starts -->


<span class="sr-only" >Toggle Navigation</span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>


</button><!-- navbar-ex1-collapse Ends -->

<a class="navbar-brand" href="index.php?dashboard" >Admin Panel</a>


</div><!-- navbar-header Ends -->

<ul class="nav navbar-right top-nav" ><!-- nav navbar-right top-nav Starts -->

<li class="dropdown" ><!-- dropdown Starts -->

<a href="#" class="dropdown-toggle" data-toggle="dropdown" ><!-- dropdown-toggle Starts -->

<i class="fa fa-user" ></i>

<?php echo $admin_name; ?>
 <b class="caret" ></b>


</a><!-- dropdown-toggle Ends -->

<ul class="dropdown-menu" ><!-- dropdown-menu Starts -->

<li><!-- li Starts -->

<a href="index.php?user_profile=<?php echo $admin_id; ?>" >

<i class="fa fa-fw fa-user" ></i> Profile


</a>

</li><!-- li Ends -->




<li class="divider"></li>

<li><!-- li Starts -->

<a href="logout.php">

<i class="fa fa-fw fa-power-off"> </i> Log Out

</a>

</li><!-- li Ends -->

</ul><!-- dropdown-menu Ends -->




</li><!-- dropdown Ends -->


</ul><!-- nav navbar-right top-nav Ends -->

<div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse Starts -->

<ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Starts -->

<li><!-- li Starts -->

<a href="index.php?dashboard">

<i class="fa fa-fw fa-dashboard"></i> Dashboard

</a>

</li><!-- li Ends -->

<li><!-- Subjects li Starts -->

<a href="#" data-toggle="" data-target="#Subjects">

<i class="fa fa-fw fa-table"></i> Subjects

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="Subjects" class="">

<li>
<a href="index.php?insert_subject"> Insert Subjects </a>
</li>

<li>
<a href="index.php?view_subjects"> View Subjects </a>
</li>


</ul>

</li><!-- Subjects li Ends -->

<li><!-- li Starts -->

<a href="index.php?view_grades" data-toggle="" data-target="#Grades">

<i class="fa fa-fw fa-arrows-v"></i> Grades

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="Grades" class="">

<li>
<a href="index.php?insert_grades"> Insert Grades </a>
</li>

<li>
<a href="index.php?view_grades"> View Grades </a>
</li>


</ul>

</li><!-- li Ends -->


<!--<li>--><!-- Coupons Section li Starts -->

<!--<a href="#" data-toggle="collapse" data-target="#coupons">--><!-- anchor Starts -->

<!--<i class="fa fa-fw fa-arrows-v"></i> Coupons

<i class="fa fa-fw fa-caret-down"></i>

</a>--><!-- anchor Ends -->

<!--<ul id="coupons" class="">--><!-- ul collapse Starts -->
<!--
<li>
<a href="index.php?insert_coupon"> Insert Coupon </a>
</li>

<li>
<a href="index.php?view_coupons"> View Coupons </a>
</li>

</ul>--><!-- ul collapse Ends -->

<!--</li>--><!--Coupons Section li Ends -->



<!-- <li>

<a href="index.php?view_customers">

<i class="fa fa-fw fa-edit"></i> View Customers

</a>

</li>

<li>

<a href="index.php?view_orders">

<i class="fa fa-fw fa-list"></i> View Orders

</a>

</li>


<li>

<a href="index.php?view_massege">

<i class="fa fa-fw fa-list"></i> View Message

</a>

</li> -->

<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#teachers">

<i class="fa fa-fw fa-gear"></i> Teachers

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="teachers" class="">

<li>
<a href="index.php?insert_teacher"> Insert Teacher </a>
</li>

<li>
<a href="index.php?view_teachers"> View Teachers </a>
</li>

<li>
<a href="index.php?view_teachers_waiting"> Waiting Teachers </a>
</li>

<li>
<a href="index.php?view_teachers_suspended"> Suspended Teachers </a>
</li>
</ul>

</li><!-- li Ends -->


<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#users">

<i class="fa fa-fw fa-gear"></i> Users

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="users" class="">

<li>
<a href="index.php?insert_user"> Insert User </a>
</li>

<li>
<a href="index.php?view_users"> View Users </a>
</li>



</ul>

<li>
<a href="index.php?user_profile=<?php echo $admin_id; ?>">
<i class="fa fa-user" ></i>
 Profile </a>
</li>
</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="logout.php">

<i class="fa fa-fw fa-power-off"></i> Log Out

</a>

</li><!-- li Ends -->

</ul><!-- nav navbar-nav side-nav Ends -->

</div><!-- collapse navbar-collapse navbar-ex1-collapse Ends -->

</nav><!-- navbar navbar-inverse navbar-fixed-top Ends -->

<?php } ?>