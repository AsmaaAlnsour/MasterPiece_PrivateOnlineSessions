<?php



if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {

?>


<div class="row" ><!-- 1  row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class="fa fa-dashboard" ></i> Dashboard / Insert Teacher

</li>



</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1  row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" >

<i class="fa fa-money fa-fw" ></i> Insert Teacher

</h3>


</div><!-- panel-heading Ends -->


<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Full Name: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="full_name" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Teacher Email: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="email" name="email" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Teacher Password: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="password" name="password" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Teacher Age: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="age" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Teacher phone: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="phone" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Teacher address: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="address" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Subject : </label>

<div class="col-md-6"><!-- col-md-6 Starts -->
<select name="subject_id" class="form-control" >

<option> Select a Subject </option>

<?php

$get_subject = "select subjects.id , subject , grade from subjects , grades WHERE delete_subject = '1' && subjects.grades_id = grades.id && delete_grade = '1'";

$run_subject = mysqli_query($con,$get_subject);

while ($row_subject=mysqli_fetch_array($run_subject)) {

$grade = $row_subject['grade']; 
$subject_id = $row_subject['id'];

$subject = $row_subject['subject'];

echo "<option value='$subject_id'>$subject / $grade</option>";

}

?>


</select>
<!-- <textarea name="user_type" class="form-control" rows="3"> </textarea> -->

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Profile Picture: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="file" name="image" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Degree: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="degree" class="form-control" required>

</div><!-- col-md-6 Ends -->
</div><!-- form-group Ends -->
<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Degree file: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="file" name="degree_file" class="form-control" required>

</div><!-- col-md-6 Ends -->
</div><!-- form-group Ends -->
<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Experience: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="experience" class="form-control" required>

</div><!-- col-md-6 Ends -->
</div><!-- form-group Ends -->
<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Experience file: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="file" name="experience_file" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="submit" name="submit" value="Insert Teacher" class="btn btn-primary form-control">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->


</div><!-- 2 row Ends -->

<?php

if(isset($_POST['submit'])){

$full_name = $_POST['full_name'];

$email = $_POST['email'];

$password = $_POST['password'];

$age = $_POST['age'];

$phone = $_POST['phone'];

$sub = $_POST['subject_id'];

$address = $_POST['address'];
$degree = $_POST['degree'];
$experience = $_POST['experience'];

$image = $_FILES['image']['name'];
$degree_file = $_FILES['degree_file']['name'];
$experience_file = $_FILES['experience_file']['name'];


$temp_image = $_FILES['image']['tmp_name'];
$temp_image2 = $_FILES['degree_file']['tmp_name'];
$temp_image3 = $_FILES['experience_file']['tmp_name'];

move_uploaded_file($temp_image,"user_image/$image");
move_uploaded_file($temp_image2,"user_image/$degree_file");
move_uploaded_file($temp_image3,"user_image/$experience_file");

$insert_teacher = "insert into teachers (full_name,email,password,age,phone,subject_id,address,image,degree,experience,degree_file,experience_file) values (
    '$full_name','$email',
'$password','$age','$phone','$sub','$address','$image','$degree','$experience','$degree_file','$experience_file')";

$run_teacher = mysqli_query($con,$insert_teacher);


if($run_teacher){

echo "<script>alert('One teacher Has Been Inserted successfully')</script>";

echo "<script>window.open('index.php?view_teachers','_self')</script>";

}


}


?>



<?php }  ?>