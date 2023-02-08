
<?php



if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {

?>




<br><br>
 <div class="col-sm-12 col-xl-12  mt-2">
    <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">View Waiting Teachers</h6>
                            <table class="table">
                                <thead>
                                   
<tr>
<th>Image</th>
<th>Teacher Name</th>
<th>Email</th>
<th>Password</th>
<th>Age</th>
<th>Phone</th>
<th>Address</th>
<th>Subject / Grade</th>
<th>Degree</th>
<th>Degree File</th>
<th>Experience</th>
<th>Experience File</th>
<th>Approve</th>
<th>Edit</th>
<th>Delete</th>


</tr>
                                </thead>
                                <tbody>
                            

<?php

$get_teacher = "SELECT teachers.id , teachers.full_name , teachers.phone , teachers.email , teachers.password , teachers.subject_id , teachers.address , teachers.age , teachers.image , teachers.degree , teachers.degree_file , teachers.experience ,teachers.experience_file , subjects.grades_id , grades.grade , subjects.subject
FROM teachers, subjects , grades
WHERE  teachers.subject_id =subjects.id &&  subjects.grades_id =grades.id && teachers.delete_teacher='1'&& teachers.approval='0' ";

$run_teacher = mysqli_query($con,$get_teacher);

while($row_teacher = mysqli_fetch_array($run_teacher)){

$teacher_id = $row_teacher['id'];

$full_name = $row_teacher['full_name'];

$email = $row_teacher['email'];

$image = $row_teacher['image'];

$password= $row_teacher['password'];
$age= $row_teacher['age'];
$phone= $row_teacher['phone'];
$address= $row_teacher['address'];
$subject= $row_teacher['subject'];
$experience= $row_teacher['experience'];
$degree= $row_teacher['degree'];
$experience_file= $row_teacher['experience_file'];
$degree_file= $row_teacher['degree_file'];
$grade = $row_teacher['grade'];


?>

<tr>

<td><img src="user_image/<?php echo $image; ?>" width="60" height="60" ></td>

<td><?php echo $full_name; ?></td>

<td><?php echo $email; ?></td>
<td><?php echo $password; ?></td>
<td><?php echo $age; ?></td>
<td><?php echo $phone; ?></td>
<td><?php echo $address; ?></td>
<td><?php echo $subject ,"/", $grade ; ?></td>
<td><?php echo $degree; ?></td>
<td><img src="user_image/<?php echo $degree_file; ?>" width="60" height="60" ></td>
<td><?php echo $experience; ?></td>
<td><img src="user_image/<?php echo $experience_file; ?>" width="60" height="60" ></td>
<td>

<a href="index.php?approve_teacher=<?php echo $teacher_id; ?>" >

<i class="fa fa-check-circle" ></i>
Approve

</a>

</td>


<td>

<a href="index.php?edit_teacher=<?php echo $teacher_id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>
<td>

<a href="index.php?delete_teacher=<?php echo $teacher_id; ?>" >

<i class="fa fa-trash-o" ></i> Delete

</a>

</td>

</tr>


<?php } ?>            
                                </tbody>
                            </table>
                        </div></div>










<?php


}
?>