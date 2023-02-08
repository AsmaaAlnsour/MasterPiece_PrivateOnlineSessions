<?php



if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {

?>

<br><br>
 <div class="col-sm-12 col-xl-12  mt-2">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Add New Teacher</h6>
                            <form method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="full_name" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Teacher Email</label>
                                    <div class="col-sm-10">
                                        <input type="email"  name="email" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Teacher Password</label>
                                    <div class="col-sm-10">
                                        <input type="password"  name="password" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Teacher Age</label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="age" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Teacher phone</label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="phone" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Teacher Address</label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="address" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Subject</label>
                                    <div class="col-sm-10">
                                    <select  name="subject_id" class="form-select mb-1" aria-label="Default select example">
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
                                    </div></div>
                                <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Profile Picture</label>
                                    <div class="col-sm-10">
                                    <input class="form-control bg-dark" name="image" type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Teacher Degree</label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="degree" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Degree file</label>
                                    <div class="col-sm-10">
                                    <input class="form-control bg-dark" name="degree_file" type="file" id="formFile">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Teacher Experience</label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="experience" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Experience file</label>
                                    <div class="col-sm-10">
                                    <input class="form-control bg-dark" name="experience_file" type="file" id="formFile">
                                    </div>
                                </div>

                            
                                <input type="submit" name="submit" value="Add Teacher"  class="btn btn-primary">
                        </div>
                    </div>






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

<?php

}
?>