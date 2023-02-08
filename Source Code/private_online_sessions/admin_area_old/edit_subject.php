<?php

if(!isset($_SESSION['admin_email'])){

  echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['edit_subject'])){

$edit_id = $_GET['edit_subject'];

$get_s = "select * from subjects where id='$edit_id'";

$run_edit = mysqli_query($con,$get_s);

$row_edit = mysqli_fetch_array($run_edit);

$s_id = $row_edit['id'];

$s_title = $row_edit['subject'];


$grade = $row_edit['grades_id'];



$s_image = $row_edit['subject_img'];


$new_s_image = $row_edit['subject_img'];

$s_price = $row_edit['subject_price'];
$past_price=$row_edit['past_price'];

// $p_desc = $row_edit['product_desc'];

$s_keywords = $row_edit['subject_keywords'];





}


$get_grade = "select * from grades where id='$grade'";

$run_grade = mysqli_query($con,$get_grade);

$row_grade = mysqli_fetch_array($run_grade);

$grade_title = $row_grade['grade'];

?>


<!DOCTYPE html>

<html>

<head>

<title> Edit Subject </title>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#product_desc,#product_features' });</script>

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / Edit Subjects

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Edit Subjects

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Subjects Title </label>

<div class="col-md-6" >

<input type="text" name="subject" class="form-control" required value="<?php echo $s_title; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Grade </label>

<div class="col-md-6" >


<select name="grade" class="form-control" >

<option value="<?php echo $grade; ?>" > <?php echo $grade_title; ?> </option>

<?php

$get_grade = "select * from grades ";

$run_grade = mysqli_query($con,$get_grade);

while ($row_grade=mysqli_fetch_array($run_grade)) {

$grades_id = $row_grade['id'];

$grade_title = $row_grade['grade'];

echo "<option value='$grades_id'>$grade_title</option>";

}

?>


</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >  Image </label>

<div class="col-md-6" >

<input type="file" name="subject_img" class="form-control" >
<br><img src="subject_images/<?php echo $s_image; ?>" width="70" height="70" >

</div>

</div><!-- form-group Ends -->



<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >  Price </label>

<div class="col-md-6" >

<input type="text" name="subject_price" class="form-control" required value="<?php echo $s_price; ?>" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Past Price </label>

<div class="col-md-6" >

<input type="text" name="past_price" class="form-control" required value="<?php echo $past_price; ?>" >

</div>

</div><!-- form-group Ends -->



<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > subject Keywords </label>

<div class="col-md-6" >

<input type="text" name="subject_keywords" class="form-control" required value="<?php echo $s_keywords; ?>" >

</div>

</div><!-- form-group Ends -->





<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="update" value="Update Subject" class="btn btn-primary form-control" >

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

$subject = $_POST['subject'];
$subject_grade = $_POST['subject_grade'];
$grade = $_POST['grade'];

$subject_price = $_POST['subject_price'];
$past_price = $_POST['past_price'];
// $product_desc = $_POST['product_desc'];
$subject_keywords = $_POST['subject_keywords'];





$status = "subject";

$subject_img = $_FILES['subject_img']['name'];

$temp_name = $_FILES['subject_img']['tmp_name'];

if(empty($subject_img)){

$subject_img = $new_s_image;

}



move_uploaded_file($temp_name,"subject_images/$subject_img");


$update_subject = "update subjects set grades_id='$grade',subject='$subject',subject_img='$subject_img',subject_price='$subject_price',past_price='$past_price',subject_keywords='$subject_keywords' where id='$s_id'";

$run_subject = mysqli_query($con,$update_subject);

if($run_subject){

echo "<script> alert('Subject has been updated successfully') </script>";

echo "<script>window.open('index.php?view_subjects','_self')</script>";

}

}

?>

<?php } ?>
