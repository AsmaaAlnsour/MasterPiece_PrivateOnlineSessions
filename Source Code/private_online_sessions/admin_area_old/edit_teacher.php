<?php

if(!isset($_SESSION['admin_email'])){

  echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['edit_teacher'])){

$edit_id = $_GET['edit_teacher'];

$get_t = "select * from teachers where id='$edit_id'";

$run_edit = mysqli_query($con,$get_t);

$row_edit = mysqli_fetch_array($run_edit);

$teacher_id = $row_edit['id'];
$full_name = $row_edit['full_name'];


$email = $row_edit['email'];



$password = $row_edit['password'];


$age = $row_edit['age'];

$phone = $row_edit['phone'];
$address=$row_edit['address'];
$degree=$row_edit['degree'];
$experience=$row_edit['experience'];
$subject_id = $row_edit['subject_id'];



$image = $row_edit['image'];
$degree_file = $row_edit['degree_file'];
$experience_file = $row_edit['experience_file'];

$new_t_image = $row_edit['image'];
$new_t_degree_file = $row_edit['degree_file'];
$new_t_experience_file = $row_edit['experience_file'];





$get_grade = "select * from grades , subjects WHERE subjects.id='$subject_id' && subjects.grades_id=grades.id&&
  subjects.delete_subject='1'
&& grades.delete_grade='1'";

$run_grade = mysqli_query($con,$get_grade);

$row_grade = mysqli_fetch_array($run_grade);

$grade_title = $row_grade['grade'];
$subject_title = $row_grade['subject'];


}



?>


<!DOCTYPE html>

<html>

<head>

<title> Edit Teacher </title>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#product_desc,#product_features' });</script>

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / Edit Teachers

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Edit Teacher

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

<label class="col-md-3 control-label" >  Profile Picture </label>

<div class="col-md-6" >

<input type="file" name="image" class="form-control" >
<br><img src="user_image/<?php echo $image; ?>" width="70" height="70" >

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Subject </label>

<div class="col-md-6" >

<select name="subject_id" class="form-control"   >
<option value="<?php echo $subject_id; ?>" > <?php echo $subject_title ,"/",$grade_title; ?> </option>

<?php

$get_sub = "select subjects.id , subject , grade from grades , subjects where subjects.grades_id=grades.id && subjects.delete_subject='1'
&& grades.delete_grade='1'";


$run_sub = mysqli_query($con,$get_sub);

while ($row_sub=mysqli_fetch_array($run_sub)) {

$sub_id = $row_sub['id'];
$subject_title_1 = $row_sub['subject'];
$grade_title_1 = $row_sub['grade'];

echo "<option value='$sub_id'> $subject_title_1 / $grade_title_1 </option>";}



?>

</select>
</input>
</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Degree </label>

<div class="col-md-6" >

<input type="text" name="degree" class="form-control" required value="<?php echo $degree; ?>" >

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >  Degree File </label>

<div class="col-md-6" >

<input type="file" name="degree_file" class="form-control" >
<br><img src="user_image/<?php echo $degree_file; ?>" width="70" height="70" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Experience </label>

<div class="col-md-6" >

<input type="text" name="experience" class="form-control" required value="<?php echo $experience; ?>" >

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >  Experience File </label>

<div class="col-md-6" >

<input type="file" name="experience_file" class="form-control" >
<br><img src="user_image/<?php echo $experience_file; ?>" width="70" height="70" >

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


    $full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$subject_id_n = $_POST['subject_id'];
$degree = $_POST['degree'];
$experience = $_POST['experience'];




$status = "teacher";

$image = $_FILES['image']['name'];
$degree_file = $_FILES['degree_file']['name'];
$experience_file = $_FILES['experience_file']['name'];

$temp_name = $_FILES['image']['tmp_name'];
$temp_name2 = $_FILES['degree_file']['tmp_name'];
$temp_name3 = $_FILES['experience_file']['tmp_name'];

if(empty($image)){

$image = $new_t_image;

}
if(empty($degree_file)){

    $degree_file = $new_t_degree_file;
    
    }
    if(empty($experience_file)){

        $experience_file = $new_t_experience_file;
        
        }


move_uploaded_file($temp_name,"user_image/$image");
move_uploaded_file($temp_name2,"user_image/$degree_file");
move_uploaded_file($temp_name3,"user_image/$experience_file");

$update_teacher = "update teachers set full_name='$full_name',email='$email',password='$password',age='$age',phone='$phone',address='$address',
subject_id='$subject_id_n',degree='$degree',experience='$experience',
image='$image' , degree_file='$degree_file' , experience_file='$experience_file' 
where id='$teacher_id'";

$run_teacher = mysqli_query($con,$update_teacher);

if($run_teacher){

echo "<script> alert('Teacher has been updated successfully') </script>";

echo "<script>window.open('index.php?view_teachers','_self')</script>";

}

}

?>

<?php } ?>
