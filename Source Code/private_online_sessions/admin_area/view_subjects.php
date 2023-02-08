<?php



if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {

?>
<br><br>
 <div class="col-sm-12 col-xl-12  mt-2">
    <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">View Subjects</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th>Subject</th>
<th>Grade</th>
<th>Image</th>
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




 
$get_grade = "SELECT subjects.id , subject , grade , subject_img  , subject_keywords
FROM subjects, grades
WHERE  subjects.grades_id =grades.id && subjects.delete_subject='1'";

$run_grade = mysqli_query($con,$get_grade);

while($row_grade=mysqli_fetch_array($run_grade)){

    $sub_id = $row_grade['id'];
$sub_title = $row_grade['subject'];
$grade_title = $row_grade['grade'];
$sub_image = $row_grade['subject_img'];

$sub_keywords = $row_grade['subject_keywords'];

$i++;

?>
<tr>

<td><?php echo $i; ?></td>

<td><?php echo $sub_title; ?></td>
<td><?php echo $grade_title; ?></td>
<td>  
<img src="subject_images/<?php echo $sub_image; ?>" width="60" height="60"></td>
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
                            </table>
                        </div></div>

                        

<?php } ?>
