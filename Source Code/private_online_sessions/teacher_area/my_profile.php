<?php

$get_user = "SELECT * FROM `teachers` WHERE id=$id ";
  $run_user = mysqli_query($con,$get_user);
  $row_user=mysqli_fetch_array($run_user);

?>

<div class="row portfolio-container mt-5 ml-5">
<div class="col-lg-10 col-md-10 mb-10 portfolio-item"></div>
<div class="col-lg-2 col-md-2 mb-2 portfolio-item">
<a  href="index.php?edit_profile"  ><button type="button" class="btn btn-primary rounded-pill m-2">Edit Profile</button></a>
</div></div>
        <div class="row portfolio-container mt-5 ml-5">
          <div class="col-lg-4 col-md-6 mb-4 portfolio-item">
            <div class="position-relative overflow-hidden mb-2">
              <img style="width: 200px; height: 350px;" class="img-fluid w-100 rounded-circle" src="../admin_area/user_image/<?php echo $row_user['image']; ?>" alt="" />
            </div>
          </div>
          <div class="col-lg-8 col-md-6 mb-4 portfolio-item">
            <br>
            <div class="row">
            <h1 class="col-lg-4 col-md-6 mb-4 "> Name    : </h1>
            <h1 class="col-lg-8 col-md-6 mb-4 "><?php echo $row_user['full_name']; ?></h1>
            <h1 class="col-lg-4 col-md-6 mb-4 ">Email    : </h1>
            <h1 class="col-lg-8 col-md-6 mb-4 "><?php echo $row_user['email']; ?></h1>
            <h1 class="col-lg-4 col-md-6 mb-4 ">Age     : </h1>
            <h1 class="col-lg-8 col-md-6 mb-4 "><?php echo $row_user['age']; ?></h1>
            <h1 class="col-lg-4 col-md-6 mb-4 ">Phone   : </h1>
            <h1 class="col-lg-8 col-md-6 mb-4 "><?php echo $row_user['phone']; ?></h1>
            <h1 class="col-lg-4 col-md-6 mb-4 ">Address : </h1>
            <h1 class="col-lg-8 col-md-6 mb-4 "><?php echo $row_user['address']; ?></h1>
            </div>
          
          </div>

          </div>
         
         