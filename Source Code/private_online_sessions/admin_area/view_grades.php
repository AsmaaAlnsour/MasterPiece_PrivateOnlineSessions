<?php



if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {

    ?>

<br><br>
 <div class="col-sm-12 col-xl-12  mt-2">
    <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">View Grades</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th>Grade Image</th>
                                        <th>Grade Name</th>
                                        <th>Description</th>

<th> Minimum Age</th>
<th>Maximum Age</th>
<th>Price/Hour</th>
<th>Delete</th>
<th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>


                                <?php 

$i=0;

$get_grade = "select * from Grades WHERE delete_grade='1'";

$run_grade = mysqli_query($con,$get_grade);

while($row_grade = mysqli_fetch_array($run_grade)){

$grade_id = $row_grade['id'];

$grade_title = $row_grade['grade'];
$img=$row_grade['img'];
$description=$row_grade['description'];
$min_age=$row_grade['min_age'];
$max_age=$row_grade['max_age'];
$tuition_fee=$row_grade['tuition_fee'];

$i++;



?>

<tr>

<td><?php echo $i; ?></td>

<td>                        <img class="rounded-circle" src="../img/<?php echo $img; ?>" alt="" style="width: 40px; height: 40px;">
</td>
<td><?php echo $grade_title; ?></td>
<td><?php echo $description; ?></td>
<td><?php echo $min_age; ?></td>
<td><?php echo $max_age; ?></td>
<td><?php echo $tuition_fee; ?></td>
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








<?php 
}?>