<?php

if(!isset($_SESSION['admin_email'])){

  echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {

?>
<!DOCTYPE html>

<html>

<head>

<title> Insert Subject </title>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <!-- <script>tinymce.init({ selector:'#product_desc,#product_features' });</script> -->

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / Insert Subject

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Insert Subject

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Subject Title </label>

<div class="col-md-6" >

<input type="text" name="subject_title" class="form-control" required >

</div>

</div><!-- form-group Ends -->





<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Grade </label>

<div class="col-md-6" >


<select name="grade" class="form-control" >

<option> Select a Grade </option>

<?php

$get_grade = "select * from grades WHERE delete_grade = '1' ";

$run_grade = mysqli_query($con,$get_grade);

while ($row_grade=mysqli_fetch_array($run_grade)) {

$grade_id = $row_grade['id'];

$grade_title = $row_grade['grade'];

echo "<option value='$grade_id'>$grade_title</option>";

}

?>


</select>

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Subject Image</label>

<div class="col-md-6" >

<input type="file" name="subject_img" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >  Price </label>

<div class="col-md-6" >

<input type="text" name="subject_price" class="form-control" required >

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Past Price </label>

<div class="col-md-6" >

<input type="text" name="past_price" class="form-control" required  >

</div>

</div><!-- form-group Ends -->



<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Subject Keywords </label>

<div class="col-md-6" >

<input type="text" name="subject_keywords" class="form-control" required >

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="submit" value="Insert Grade" class="btn btn-primary form-control" >

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

if(isset($_POST['submit'])){

$subject_title = $_POST['subject_title'];

$grade = $_POST['grade'];

$subject_price = $_POST['subject_price'];
$past_price = $_POST['past_price'];
// $product_desc = $_POST['product_desc'];
$subject_keywords = $_POST['subject_keywords'];


$status = "subject";

// $product_img1 = $_FILES['product_img1']['name'];
// $product_img2 = $_FILES['product_img2']['name'];
$subject_img = $_FILES['subject_img']['name'];

// $temp_name1 = $_FILES['product_img1']['tmp_name'];
// $temp_name2 = $_FILES['product_img2']['tmp_name'];
$temp_name = $_FILES['subject_img']['tmp_name'];

// move_uploaded_file($temp_name1,"product_images/$product_img1");
// move_uploaded_file($temp_name2,"product_images/$product_img2");
move_uploaded_file($temp_name,"subject_images/$subject_img");

$insert_subject = "insert into subjects (subject,grades_id,subject_img,subject_price,past_price,subject_keywords) values ('$subject_title','$grade_id','$subject_img','$subject_price','$past_price','$subject_keywords')";

$run_subject = mysqli_query($con,$insert_subject);

if($run_subject){

echo "<script>alert('Subject has been inserted successfully')</script>";

echo "<script>window.open('index.php?view_subjects','_self')</script>";

}

}

?>

<?php } ?>
