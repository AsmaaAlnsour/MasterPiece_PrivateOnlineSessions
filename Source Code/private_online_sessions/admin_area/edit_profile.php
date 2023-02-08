<?php



if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['edit_profile'])){

    $edit_profile = $_GET['edit_profile'];
    
    $get_admin = "select * from users where id='$edit_profile'";
    
    $run_admin = mysqli_query($con,$get_admin);
    
    $row_admin = mysqli_fetch_array($run_admin);
    
    $admin_id = $row_admin['id'];
    
    $admin_name = $row_admin['full_name'];
    
    $admin_email = $row_admin['email'];
    
    $admin_pass = $row_admin['password'];
    
    $admin_image = $row_admin['profile_pic'];
    
    $new_admin_image = $row_admin['profile_pic'];
    
    
    $admin_address = $row_admin['address'];
    $admin_age = $row_admin['age'];
    
    $admin_contact = $row_admin['phone'];
    
    
    
    
    
    }
    
    
    
    ?>
<br><br>
 <div class="col-sm-12 col-xl-12  mt-2">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Edit Profile</h6>
                            <form method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $admin_name; ?>"  name="admin_name" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" value="<?php echo $admin_email; ?>"  name="admin_email" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">UPassword</label>
                                    <div class="col-sm-10">
                                        <input type="password" value="<?php echo $admin_pass; ?>"  name="admin_pass" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Age</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $admin_age; ?>"  name="admin_age" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>                       
                                        <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $admin_contact; ?>"  name="admin_contact" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $admin_address; ?>"  name="admin_address" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>
          

                                <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">User Image</label>
                                    <div class="col-sm-10">
                                    <input class="form-control bg-dark" name="profile_pic" type="file" id="formFile">
                                    <img src="user_image/<?Php echo $admin_image; ?>" width="70" height="70" >
    
                                </div>
                                </div>
                                
                               
                                <input type="submit" name="update" value="update "  class="btn btn-primary">
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

move_uploaded_file($temp_admin_image,"user_image/$admin_image");

if(empty($admin_image)){

$admin_image = $new_admin_image;

}

$update_admin = "update users set full_name='$admin_name', email='$admin_email',password='$admin_pass',profile_pic='$admin_image', phone='$admin_contact', age='$admin_age' , address='$admin_address' where id='$admin_id'";

$run_admin = mysqli_query($con,$update_admin);

if($run_admin){

echo "<script>alert('User Has Been Updated successfully and login again')</script>";

echo "<script>window.open('index.php?user_profile','_self')</script>";

session_destroy();














}

}


?>



<?php }  ?>