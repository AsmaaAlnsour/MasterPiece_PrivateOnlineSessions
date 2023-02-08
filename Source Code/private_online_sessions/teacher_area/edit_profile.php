<?php

$get_user = "SELECT * FROM `teachers` WHERE id=$id ";
  $run_user = mysqli_query($con,$get_user);
  $row_user=mysqli_fetch_array($run_user);

?>

<div class="row portfolio-container mt-5 ml-5">
<div class="col-lg-4 col-md-6 mb-4 portfolio-item ">
            <div class="position-relative overflow-hidden mb-2">
              <img style="width: 200px; height: 350px;" class="img-fluid rounded-circle w-100" src="../admin_area/user_image/<?php echo $row_user['image'];  ?>" alt="" />
            </div>
          </div>
          <div class="col-lg-6  col-md-6 mb-4 portfolio-item first">
          
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Edit Information</h6>
                            <form method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name='admin_name' required value="<?php echo $row_user['full_name'];?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" name='admin_email' required value="<?php echo $row_user['email'] ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword3" name='admin_pass' required value="<?php echo $row_user['password']; ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name='admin_contact' required value="<?php echo $row_user['phone'] ?>">
                                    </div></div>
                                    <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Age</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name='admin_age' required value="<?php echo $row_user['age'] ?>">
                                    </div></div>
                                    <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name='admin_address' required value="<?php echo $row_user['address'] ?>">
                                    </div></div>

                                    <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Profile Pic</label>
                                    <div class="col-sm-10">
                                    <input class="form-control bg-dark" type="file" id="formFile" name="admin_image" >
                                    </div></div>
                                <input type="submit" class="btn btn-primary" name="update" value="Update">
                            </form>
                        </div>
                   


</div>


<?php

if(isset($_POST['update'])){

$admin_name = $_POST['admin_name'];

$admin_email = $_POST['admin_email'];

$admin_pass = $_POST['admin_pass'];


$admin_contact = $_POST['admin_contact'];
$admin_address = $_POST['admin_address'];
$admin_age = $_POST['admin_age'];


$admin_image = $_FILES['admin_image']['name'];

$temp_admin_image = $_FILES['admin_image']['tmp_name'];

move_uploaded_file($temp_admin_image,"../admin_area/user_image/$admin_image");

if(empty($admin_image)){
    $new_admin_image=  $row_user['image'];
$admin_image = $new_admin_image;

}

$update_admin = "update teachers set full_name='$admin_name', email='$admin_email',password='$admin_pass',image='$admin_image', phone='$admin_contact', age='$admin_age' , address='$admin_address' where id='$id'";

$run_admin = mysqli_query($con,$update_admin);

if($run_admin){

    echo "<script>alert('User Has Been Updated successfully and login again')</script>";

    echo "<script>window.open('index.php?my_profile','_self')</script>";

session_destroy();

}

}


?>
</div>


        </div>
      </div>
    </div>
