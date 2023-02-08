<?php

if(!isset($_SESSION['admin_email'])){

  echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {

?>


<br><br>
 <div class="col-sm-12 col-xl-12  mt-2">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Add New Subject</h6>
                            <form method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Subject Title</label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="subject_title" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Grade Title</label>
                                    <div class="col-sm-10">
                                    <select  name="grade" class="form-select mb-1" aria-label="Default select example">
                                <!-- <option selected>Select a Grade</option> -->
                                <?php 

                                $get_grade = "select * from grades WHERE delete_grade = '1' ";

$run_grade = mysqli_query($con,$get_grade);

while ($row_grade=mysqli_fetch_array($run_grade)) {

$grade_id = $row_grade['id'];

$grade_title = $row_grade['grade'];

echo '<option value='.  $grade_id.'>' .$grade_title .'</option>'
?>

<?php

}

?>                       </select>
                                    </div></div>
                                <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Subject Image</label>
                                    <div class="col-sm-10">
                                    <input class="form-control bg-dark" name="subject_img" type="file" id="formFile">
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Subject Keywords </label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="subject_keywords" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>
                                <input type="submit" name="submit" value="Insert Subject"  class="btn btn-primary">
                        </div>
                    </div>


                    <?php

if(isset($_POST['submit'])){

$subject_title = $_POST['subject_title'];

$grade = $_POST['grade'];

$subject_keywords = $_POST['subject_keywords'];


$status = "subject";


$subject_img = $_FILES['subject_img']['name'];

$temp_name = $_FILES['subject_img']['tmp_name'];

move_uploaded_file($temp_name,"subject_images/$subject_img");

$insert_subject = "insert into subjects (subject,grades_id,subject_img,subject_keywords) values ('$subject_title','$grade','$subject_img','$subject_keywords')";

$run_subject = mysqli_query($con,$insert_subject);

if($run_subject){

echo "<script>alert('Subject has been inserted successfully')</script>";

echo "<script>window.open('index.php?view_subjects','_self')</script>";

}

}

?>

<?php } ?>
