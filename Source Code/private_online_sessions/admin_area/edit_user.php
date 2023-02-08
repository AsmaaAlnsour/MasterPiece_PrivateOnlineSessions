<?php



if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['edit_user'])){

$edit_id = $_GET['edit_user'];

$get_u = "select * from users where id='$edit_id'";

$run_edit = mysqli_query($con,$get_u);

$row_edit = mysqli_fetch_array($run_edit);

$u_id = $row_edit['id'];
$full_name = $row_edit['full_name'];


$email = $row_edit['email'];



$password = $row_edit['password'];


$age = $row_edit['age'];

$phone = $row_edit['phone'];
$address=$row_edit['address'];


$user_type = $row_edit['user_type'];



$profile_pic = $row_edit['profile_pic'];


$new_u_image = $row_edit['profile_pic'];




}



?>
<br><br>
 <div class="col-sm-12 col-xl-12  mt-2">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Edit User</h6>
                            <form method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $full_name; ?>"  name="full_name" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">User Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" value="<?php echo $email; ?>"  name="email" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">User Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" value="<?php echo $password; ?>"  name="password" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">User Age</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $age; ?>"  name="age" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>                       
                                        <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">User phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $phone; ?>"  name="phone" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">User address</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $address; ?>"  name="address" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>
          


                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">User Type</label>
                                    <div class="col-sm-10">
                                    <select  name="user_type" class="form-select mb-1" aria-label="Default select example">
                                    <option value="<?php echo $user_type; ?>" > <?php echo $user_type; ?> </option>

                                    <option> user </option>
<option> admin </option>
               </select>
                                    </div></div>
                                <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">User Image:</label>
                                    <div class="col-sm-10">
                                    <input class="form-control bg-dark" name="profile_pic" type="file" id="formFile">
                                    <br><img src="user_image/<?php echo $profile_pic; ?>" width="70" height="70" >
    
                                </div>
                                </div>
                                
                               
                                <input type="submit" name="update" value="update User"  class="btn btn-primary">
                        </div>
                    </div>


                    <?php

if(isset($_POST['update'])){

$user = $_POST['user'];
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$user_type = $_POST['user_type'];





$status = "user";

$profile_pic = $_FILES['profile_pic']['name'];

$temp_name = $_FILES['profile_pic']['tmp_name'];

if(empty($profile_pic)){

$profile_pic = $new_u_image;

}



move_uploaded_file($temp_name,"user_image/$profile_pic");


$update_user = "update users set full_name='$full_name',email='$email',password='$password',age='$age',phone='$phone',address='$address',user_type='$user_type',profile_pic='$profile_pic' where id='$u_id'";

$run_user = mysqli_query($con,$update_user);

if($run_user){

echo "<script> alert('User has been updated successfully') </script>";

echo "<script>window.open('index.php?view_users','_self')</script>";

}

}

?>

<?php } ?>
