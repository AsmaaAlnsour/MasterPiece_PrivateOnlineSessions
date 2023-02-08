<?php

if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {


?>



<br><br>
 <div class="col-sm-12 col-xl-12  mt-2">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Add New Grades</h6>
                            <form method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Grade Title</label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="grade_title" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="description" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">minimum Age</label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="min_age" class="form-control" id="inputEmail3" required>
                                    </div>
</div>
<div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">maximum Age</label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="max_age" class="form-control" id="inputEmail3" required>
                                    </div>
</div>
<div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Price / Hour</label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="tuition_fee" class="form-control" id="inputEmail3" required>
                                    </div>
</div>



                                <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Grade Image</label>
                                    <div class="col-sm-10">
                                    <input class="form-control bg-dark" name="img" type="file" id="formFile">
                                    </div>
                                </div>
                                
                                <input type="submit" name="submit" value="Insert Grade"  class="btn btn-primary">
                        </div>
                    </div>
<?php


                    if(isset($_POST['submit'])){

$grade_title = $_POST['grade_title'];
$description= $_POST['description'];
$min_age= $_POST['min_age'];
$max_age= $_POST['max_age'];
$tuition_fee=$_POST['tuition_fee'];

$img = $_FILES['img']['name'];

$temp_name = $_FILES['img']['tmp_name'];

move_uploaded_file($temp_name,"../img/$img");






$insert_grade = "INSERT INTO `grades`( `grade`, `description`, `img`, `min_age`, `max_age`, `tuition_fee`) VALUES ('$grade_title','$description','$img','$min_age','$max_age','$tuition_fee')";

$run_grade = mysqli_query($con,$insert_grade);

if($run_grade){

echo "<script> alert('New Grade Has Been Inserted')</script>";

echo "<script> window.open('index.php?view_grades','_self') </script>";

}

}



?>

<?php } ?>