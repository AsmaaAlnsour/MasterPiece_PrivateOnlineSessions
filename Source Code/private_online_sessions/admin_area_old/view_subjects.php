<?php



if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {

?>


<div class="row"><!--  1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class="fa fa-dashboard"></i> Dashboard / View Subjects

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> View Subjects

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th>#</th>
<th>Subject</th>
<th>Grade</th>
<th>Image</th>
<th>Price / Houre</th>
<th>Past Price</th>
<th>Keywords</th>
<th>Delete</th>
<th>Edit</th>



</tr>

</thead>

<tbody>

<?php

$i = 0;

// $get_sub = "select * from Subjects";

// $run_sub = mysqli_query($con,$get_sub);

// while($row_sub=mysqli_fetch_array($run_sub)){




 
$get_grade = "SELECT subjects.id , subject , grade , subject_img , subject_price , past_price , subject_keywords
FROM subjects, grades
WHERE  subjects.grades_id =grades.id && subjects.delete_subject='1'";

$run_grade = mysqli_query($con,$get_grade);

while($row_grade=mysqli_fetch_array($run_grade)){

    $sub_id = $row_grade['id'];
$sub_title = $row_grade['subject'];
$grade_title = $row_grade['grade'];
$sub_image = $row_grade['subject_img'];

$sub_price = $row_grade['subject_price'];
$past_price=$row_grade['past_price'];

$sub_keywords = $row_grade['subject_keywords'];

$i++;

?>

<tr>

<td><?php echo $i; ?></td>

<td><?php echo $sub_title; ?></td>
<td><?php echo $grade_title; ?></td>
<td>  
<img src="subject_images/<?php echo $sub_image; ?>" width="60" height="60"></td>
<td><?php echo $sub_price; ?></td>
<td><?php echo $past_price; ?></td>
<td><?php echo $sub_keywords; ?></td>
<td>

<a href="index.php?delete_subject=<?php echo $sub_id; ?>">

<i class="fa fa-trash-o"> </i> Delete

</a>

</td>

<td>

<a href="index.php?edit_subject=<?php echo $sub_id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>

</tr>

<?php } ?>


</tbody>


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->



<?php } ?>
