<?php

if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['edit_grades'])){

$edit_id = $_GET['edit_grades'];

$edit_grades = "select * from grades where id='$edit_id'";

$run_edit = mysqli_query($con,$edit_grades);

$row_edit = mysqli_fetch_array($run_edit);

$c_id = $row_edit['id'];

$c_title = $row_edit['grade'];





}

?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li>

<i class="fa fa-dashboard"></i> Dashboard / Edit Grades

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"></i> Edit Grades

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Grades Title</label>

<div class="col-md-6">

<input type="text" name="grades_title" class="form-control" value="<?php echo $c_title; ?>">

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6">

<input type="submit" name="update" value="Update Grade" class="btn btn-primary form-control">

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['update'])){

$grades_title = $_POST['grades_title'];




$update_grades = "update grades set grade='$grades_title' where id='$c_id'";

$run_grades = mysqli_query($con,$update_grades);

if($run_grades){

echo "<script>alert('One grades Has Been Updated')</script>";

echo "<script>window.open('index.php?view_grades','_self')</script>";

}

}



?>

<?php } ?>