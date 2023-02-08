<?php

if(!isset($_SESSION['admin_email'])){

  echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['edit_subject'])){

$edit_id = $_GET['edit_subject'];

$get_s = "select * from subjects where id='$edit_id'";

$run_edit = mysqli_query($con,$get_s);

$row_edit = mysqli_fetch_array($run_edit);

$s_id = $row_edit['id'];

$s_title = $row_edit['subject'];


$grade = $row_edit['grades_id'];



$s_image = $row_edit['subject_img'];


$new_s_image = $row_edit['subject_img'];

// $p_desc = $row_edit['product_desc'];

$s_keywords = $row_edit['subject_keywords'];





}


$get_grade = "select * from grades where id='$grade'";

$run_grade = mysqli_query($con,$get_grade);

$row_grade = mysqli_fetch_array($run_grade);

$grade_title = $row_grade['grade'];

?>



<br><br>
 <div class="col-sm-12 col-xl-12  mt-2">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Edit Subject</h6>
                            <form method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Subject Title</label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="subject" class="form-control"  value="<?php echo $s_title; ?>" id="inputEmail3" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Grade Title</label>
                                    <div class="col-sm-10">
                                    <select  name='grade' class="form-select mb-1" aria-label="Default select example">
                                    <option value="<?php echo $grade; ?>" > <?php echo $grade_title; ?> </option>                                <?php

$get_grade = "select * from grades WHERE delete_grade = '1' ";

$run_grade = mysqli_query($con,$get_grade);

while ($row_grade=mysqli_fetch_array($run_grade)) {

$grade_id = $row_grade['id'];

$grade_title = $row_grade['grade'];

echo '<option value='.  $grade_id.'>' .$grade_title .'</option>'
?>

<?php

}

?>
                            </select>
                                    </div></div>
                                <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Subject Image</label>
                                    <div class="col-sm-10">
                                    <input class="form-control bg-dark" name="subject_img" type="file" id="formFile">
                                    <br><img src="subject_images/<?php echo $s_image; ?>" width="70" height="70" >
    
                                </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Subject Keywords </label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="subject_keywords" class="form-control" id="inputEmail3" value="<?php echo $s_keywords; ?>" required>
                                    </div>
                                </div>
                                <input type="submit" name="update" value="Update Subject"  class="btn btn-primary">
                        </div>
                    </div>


<?php

if(isset($_POST['update'])){

$subject = $_POST['subject'];
// $subject_grade = $_POST['subject_grade'];
$grade = $_POST['grade'];

$subject_keywords = $_POST['subject_keywords'];





$status = "subject";

$subject_img = $_FILES['subject_img']['name'];

$temp_name = $_FILES['subject_img']['tmp_name'];

if(empty($subject_img)){

$subject_img = $new_s_image;

}



move_uploaded_file($temp_name,"subject_images/$subject_img");


$update_subject = "update subjects set grades_id='$grade',subject='$subject',subject_img='$subject_img',subject_keywords='$subject_keywords' where id='$s_id'";

$run_subject = mysqli_query($con,$update_subject);

if($run_subject){

echo "<script> alert('Subject has been updated successfully') </script>";

echo "<script>window.open('index.php?view_subjects','_self')</script>";

}

}

?>

<?php } ?>
