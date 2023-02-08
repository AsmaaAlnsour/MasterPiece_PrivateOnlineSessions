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

<br><br>
 <div class="col-sm-12 col-xl-12  mt-2">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Edit Teacher</h6>
                            <form method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>
                                    <div class="col-sm-10">
                                        <input type="text"  value="<?php echo $full_name; ?>" name="full_name" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Teacher Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" value="<?php echo $email; ?>" name="email" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Teacher Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" value="<?php echo $password; ?>" name="password" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Teacher Age</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $age; ?>" name="age" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Teacher phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $phone; ?>" name="phone" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Teacher Address</label>
                                    <div class="col-sm-10">
                                        <input type="text"  value="<?php echo $address; ?>" name="address" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Subject</label>
                                    <div class="col-sm-10">
                                    <select  name="subject_id" class="form-select mb-1" aria-label="Default select example">
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
                                    </div></div>
                                <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Profile Picture</label>
                                    <div class="col-sm-10">
                                    <input class="form-control bg-dark" name="image" type="file" id="formFile">
                                    <br><img src="user_image/<?php echo $image; ?>" width="70" height="70" >

                                </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Teacher Degree</label>
                                    <div class="col-sm-10">
                                        <input value="<?php echo $degree; ?>"  type="text"  name="degree" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Degree file</label>
                                    <div class="col-sm-10">
                                    <input class="form-control bg-dark" name="degree_file" type="file" id="formFile">
                                    <br><img src="user_image/<?php echo $degree_file; ?>" width="70" height="70" >    
                                </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Teacher Experience</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $experience; ?>" name="experience" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Experience file</label>
                                    <div class="col-sm-10">
                                    <input class="form-control bg-dark" name="experience_file" type="file" id="formFile">
                                    <br><img src="user_image/<?php echo $experience_file; ?>" width="70" height="70" >
    
                                </div>
                                </div>

                            
                                <input type="submit" name="update" value="Update Teacher information"  class="btn btn-primary">
                            </form>
                            </div>
                    </div>




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



$update_teacher_ifff ="UPDATE `teachers` SET `id`='', `full_name`=$full_name,`phone`=$phone,`email`=$email,`password`=$password,
`subject_id`=$subject_id_n,`address`=$address,`age`=$age,`image`=$image,`degree`=$degree,`degree_file`=$degree_file,`experience`=$experience,
`experience_file`=$experience_file  WHERE `id`=$edit_id";
// // $update_teacher = "update teachers set full_name='$full_name',email='$email',password='$password',age='$age',phone='$phone',address='$address',
// // subject_id='$subject_id_n',degree='$degree',experience='$experience',
// // image='$image' , degree_file='$degree_file' , experience_file='$experience_file' 
// // where id='$teacher_id'";

$run_teacher_ifff = mysqli_query($con,$update_teacher_ifff);

if($run_teacher_ifff){

    echo "<script> alert('Teacher has been updated successfully') </script>";

echo "<script>window.open('index.php?view_teachers','_self')</script>";

}

}

?>

<?php } ?>
