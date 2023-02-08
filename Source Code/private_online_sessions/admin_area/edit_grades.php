<?php

if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['edit_grades'])){

$edit_id = $_GET['edit_grades'];

$edit_grades = "select * from grades where id='$edit_id'";

$run_edit = mysqli_query($con,$edit_grades);

$row_edit = mysqli_fetch_array($run_edit);

$c_id = $row_edit['id'];

$c_title = $row_edit['grade'];





}

?>


<br><br>
 <div class="col-sm-12 col-xl-12  mt-2">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Edit Grade</h6>
                            <form method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Grade Title</label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="grade_title" class="form-control" value="<?php echo $row_edit['grade'];?>" id="inputEmail3" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="description" value="<?php echo $row_edit['description'];?>" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">minimum Age</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $row_edit['min_age'];?>" name="min_age" class="form-control" id="inputEmail3" required>
                                    </div>
</div>
<div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">maximum Age</label>
                                    <div class="col-sm-10">
                                        <input type="text"  value="<?php echo $row_edit['max_age'];?>" name="max_age" class="form-control" id="inputEmail3" required>
                                    </div>
</div>
<div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Price / Hour</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $row_edit['tuition_fee'];?>" name="tuition_fee" class="form-control" id="inputEmail3" required>
                                    </div>
</div>



                                <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Grade Image</label>
                                    <div class="col-sm-10">
                                    <input class="form-control bg-dark" name="img" type="file" id="formFile">
                                    <br><img src="../img/<?php echo $row_edit['img'];?>" width="70" height="70" >
    
                                </div>
                                </div>
                                
                                <input type="submit" name="update" value="Edit Grade"  class="btn btn-primary">
                        </div>
                    </div>







<?php

if(isset($_POST['update'])){

$grades_title = $_POST['grade_title'];

$description= $_POST['description'];
$min_age= $_POST['min_age'];
$max_age= $_POST['max_age'];
$tuition_fee=$_POST['tuition_fee'];


$img = $_FILES['img']['name'];

$temp_name = $_FILES['img']['tmp_name'];

if(empty($img)){

$img = $row_edit['img'];;

}



move_uploaded_file($temp_name,"subject_images/$img");




$update_grades = "update grades set grade='$grades_title',description='$description',min_age='$min_age',max_age='$max_age',tuition_fee='$tuition_fee',img='$img' where id='$c_id'";

$run_grades = mysqli_query($con,$update_grades);

if($run_grades){

echo "<script>alert('One grades Has Been Updated')</script>";

echo "<script>window.open('index.php?view_grades','_self')</script>";

}

}



?>

<?php
}
?>