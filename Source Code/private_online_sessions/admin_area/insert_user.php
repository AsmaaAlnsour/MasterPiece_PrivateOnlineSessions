<?php



if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {

?>

<br><br>
 <div class="col-sm-12 col-xl-12  mt-2">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Add New User</h6>
                            <form method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="full_name" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">User Email</label>
                                    <div class="col-sm-10">
                                        <input type="email"  name="email" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">User Password</label>
                                    <div class="col-sm-10">
                                        <input type="password"  name="password" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">User Age</label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="age" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>                       
                                        <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">User phone</label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="phone" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">User address</label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="address" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>
          


                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">User Type</label>
                                    <div class="col-sm-10">
                                    <select  name="user_type" class="form-select mb-1" aria-label="Default select example">
                                    <option> user </option>
<option> admin </option>
               </select>
                                    </div></div>
                                <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">User Image:</label>
                                    <div class="col-sm-10">
                                    <input class="form-control bg-dark" name="profile_pic" type="file" id="formFile">
                                    </div>
                                </div>
                                
                               
                                <input type="submit" name="submit" value="Add User"  class="btn btn-primary">
                        </div>
                    </div>



                    <?php

if(isset($_POST['submit'])){

$full_name = $_POST['full_name'];

$email = $_POST['email'];

$password = $_POST['password'];

$age = $_POST['age'];

$phone = $_POST['phone'];

$user_type = $_POST['user_type'];

$address = $_POST['address'];


$profile_pic = $_FILES['profile_pic']['name'];

$temp_profile_pic = $_FILES['profile_pic']['tmp_name'];

move_uploaded_file($temp_profile_pic,"user_image/$profile_pic");

$insert_user = "insert into users (full_name,email,password,age,phone,user_type,address,profile_pic) values ('$full_name','$email',
'$password','$age','$phone','$user_type','$address','$profile_pic')";

$run_user = mysqli_query($con,$insert_user);


if($run_user){

echo "<script>alert('One User Has Been Inserted successfully')</script>";

echo "<script>window.open('index.php?view_users','_self')</script>";

}


}


?>







<?php

} 
?>