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

<i class="fa fa-dashboard" ></i> Dashboard / View Grades

</li>

</ol><!-- breadcrumb Ends -->


</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" >

<i class="fa fa-money fa-fw"></i> View Grades

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>#</th>
<th>Grade Name</th>
<th>Delete</th>
<th>Edit</th>



</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php 

$i=0;

$get_grade = "select * from Grades WHERE delete_grade='1'";

$run_grade = mysqli_query($con,$get_grade);

while($row_grade = mysqli_fetch_array($run_grade)){

$grade_id = $row_grade['id'];

$grade_title = $row_grade['grade'];


$i++;



?>

<tr>

<td><?php echo $i; ?></td>

<td><?php echo $grade_title; ?></td>


<td>

<a href="index.php?delete_grades=<?php echo $grade_id; ?>" >

<i class="fa fa-trash-o" ></i> Delete

</a>

</td>

<td>

<a href="index.php?edit_grades=<?php echo $grade_id; ?>" >

<i class="fa fa-pencil" ></i> Edit

</a>

</td>

</tr>


<?php } ?>

</tbody><!-- tbody Ends -->

</table><!-- table-bordered table-hover table-striped Ends -->


</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->


<?php } ?>