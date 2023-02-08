<?php
include './includes/db.php';
session_start();
include './includes/header.php';
$id=$_SESSION['user_id'];


$get_user = "SELECT * FROM `users` WHERE id=$id ";
  $run_user = mysqli_query($con,$get_user);
  $row_user=mysqli_fetch_array($run_user);

?>

 <!-- Header Start -->
 <div class="container-fluid bg-primary mb-5">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 400px"
      >
        <h3 class="display-3 font-weight-bold text-white">My Account</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">My Profile</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

 <!-- Gallery Start -->
 <div class="container-fluid pt-5 pb-3">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">My Account</span>
          </p>
          <!-- <h1 class="mb-4">Our Kids School Gallery</h1> -->
        </div>
        <div class="row">
          <div class="col-12 text-center mb-2">
            <ul class="list-inline mb-4" id="portfolio-flters">
              <li class="btn btn-outline-primary m-1 active" data-filter=".all">
                Information
              </li>
              <li class="btn btn-outline-primary m-1" data-filter=".first">
            Edit
              </li>
              <li class="btn btn-outline-primary m-1" data-filter=".second">
              My Schedule 
              </li>
              <li class="btn btn-outline-primary m-1" data-filter=".third">
                History
              </li>
            </ul>
          </div>
        </div>
        <div class="row portfolio-container">
          <div class="all">
          <div class="col-lg-4 col-md-6 mb-4 portfolio-item  all">
            <div class="position-relative overflow-hidden mb-2">
              <img style="width: 200px; height: 350px;" class="img-fluid w-100" src="./admin_area/user_image/<?php echo $row_user['profile_pic']; ?>" alt="" />
              <div
                class="portfolio-btn bg-primary d-flex align-items-center justify-content-center"
              >
                <a href="./admin_area/user_image/<?php echo $row_user['profile_pic'];?>" data-lightbox="portfolio">
                  <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 mb-4 portfolio-item all">
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
         
          <?php

$new_admin_image = $row_user['profile_pic'];
?>


<div class="col-lg-4 col-md-6 mb-4 portfolio-item  first">
            <div class="position-relative overflow-hidden mb-2">
              <img style="width: 200px; height: 350px;" class="img-fluid w-100" src="./admin_area/user_image/<?php echo $row_user['profile_pic']; ?>" alt="" />
              <div
                class="portfolio-btn bg-primary d-flex align-items-center justify-content-center"
              >
                <a href="./admin_area/user_image/<?php echo $row_user['profile_pic'];?>" data-lightbox="portfolio">
                  <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6  col-md-6 mb-4 portfolio-item first">
<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label > Name: </label>

<input type="text" name="admin_name" class="form-control" required value="<?php echo $row_user['full_name'];?>">

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label >Email: </label>

<input type="text" name="admin_email" class="form-control" required value="<?php echo $row_user['email'] ?>">


</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label >Password: </label>


<input type="password" name="admin_pass" class="form-control" required value="<?php echo $row_user['password']; ?>">


</div><!-- form-group Ends -->



<div class="form-group"><!-- form-group Starts -->

<label > Phone: </label>


<input type="text" name="admin_contact" class="form-control" required value="<?php echo $row_user['phone']; ?>">


</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label > Age: </label>


<input type="text" name="admin_age" class="form-control" required value="<?php echo $row_user['age']; ?>">


</div><!-- form-group Ends -->
<div class="form-group"><!-- form-group Starts -->

<label > Address: </label>


<input type="text" name="admin_address" class="form-control" required value="<?php echo $row_user['address']; ?>">


</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label >User Image: </label>


<input type="file" name="admin_image" class="form-control" >

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-6 control-label"></label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="submit" name="update" value="Update " class="btn btn-primary form-control">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->


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

move_uploaded_file($temp_admin_image,"/admin_area/user_image/$admin_image");

if(empty($admin_image)){

$admin_image = $new_admin_image;

}

$update_admin = "update users set full_name='$admin_name', email='$admin_email',password='$admin_pass',profile_pic='$admin_image', phone='$admin_contact', age='$admin_age' , address='$admin_address' where id='$id'";

$run_admin = mysqli_query($con,$update_admin);

if($run_admin){

echo "<script>alert('User Has Been Updated successfully and login again')</script>";

echo "<script>window.open('./dashboard/login.php','_self')</script>";

session_destroy();

}

}


?>


<div class="col-lg-12 col-md-12 mb-4 portfolio-item second">
            <div class="position-relative overflow-hidden mb-2 second">
             
            <?php



$get_b = "SELECT * FROM `booking` JOIN `available_time` 
WHERE booking.user_id=$id AND booking.delete_session=1 AND booking.time_id=available_time.id AND CURDATE()<=available_time.date 
ORDER BY `available_time`.`date` ASC ";
$run_b = mysqli_query($con,$get_b);
$row_b=mysqli_fetch_array($run_b);

?>
<br>
<br>
            <div class="second">
<div class="col-12 second">
                        <div class=" rounded h-100 p-4 second">
                            <h6 class="mb-4">Your Schedule</h6>
                            <div class="table-responsive second">
                                <table class="table second">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Teacher Name</th>
                                            <th scope="col">Teacher Email</th>
                                            <th scope="col">Teacher Pic</th>
                                            <th scope="col">Session Link </th>
                                            <th scope="col">reservation confirmation </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                      
                      $x=1;
                      if ($result = $con->query($get_b) ) {
        
                          while($row = $result->fetch_assoc() ){

                            $teacher_id =$row['teacher_id'];
                            $get_student = "SELECT * FROM `teachers` WHERE id=$teacher_id ";
                            $run_student = mysqli_query($con,$get_student);
$row_student=mysqli_fetch_array($run_student);
                          ?>
                         
                                        <tr>
                                            <th scope="row"><?php echo $x ?></th>
                                            <td><?php echo $row['date'] ?></td>
                                            <td><?php echo $row['time'].':00 To' .$row['time']+1 .':00 '.$row['am_pm']?></td>
                                            <td><?php echo $row_student['full_name']?></td>
                                            <td><?php echo $row_student['email']?></td>
                                            <td>  <img
                class="rounded-circle"
                src="<?php if ($row_student['image']==null){echo './img/about-2.jpg';}else{echo './admin_area/user_image/'.$row_student['image'];}  ?>"
                style="width: 70px; height: 70px"
                alt="Image"
              /></td>
              <td><?php if ($row['link']==0){ echo 'Waiting To Add Link';}else{echo $row['link'];} ?></td>
                                            <td>Confirmed</td>
                                        </tr>
                                        <?php
                                            $x=$x+1;
                                        }}
                                        ?>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            </div>

         
           <!--  <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
            <div class="position-relative overflow-hidden mb-2">
              <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="" />
              <div
                class="portfolio-btn bg-primary d-flex align-items-center justify-content-center"
              >
                <a href="img/portfolio-3.jpg" data-lightbox="portfolio">
                  <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
            <div class="position-relative overflow-hidden mb-2">
              <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="" />
              <div
                class="portfolio-btn bg-primary d-flex align-items-center justify-content-center"
              >
                <a href="img/portfolio-4.jpg" data-lightbox="portfolio">
                  <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                </a>
              </div>
            </div>
          </div>-->
         
          <div class="col-lg-12 col-md-12 mb-4 portfolio-item third">
            <div class="position-relative overflow-hidden mb-2">
            

             
            <?php



$get_b = "SELECT * FROM `booking` JOIN `available_time` 
WHERE booking.user_id=$id AND booking.delete_session=1 AND booking.time_id=available_time.id AND CURDATE()>available_time.date 
ORDER BY `available_time`.`date` ASC ";
$run_b = mysqli_query($con,$get_b);
$row_b=mysqli_fetch_array($run_b);

?>
<br>
<br>
<div class="col-12">
                        <div class=" rounded h-100 p-4">
                            <h6 class="mb-4">History</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Teacher Name</th>
                                            <th scope="col">Teacher Email</th>
                                            <th scope="col">Teacher Pic</th>
                                            <th scope="col">Session Link </th>
                                            <th scope="col">reservation confirmation </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                      
                      $x=1;
                      if ($result = $con->query($get_b) ) {
        
                          while($row = $result->fetch_assoc() ){

                            $teacher_id =$row['teacher_id'];
                            $get_student = "SELECT * FROM `teachers` WHERE id=$teacher_id ";
                            $run_student = mysqli_query($con,$get_student);
$row_student=mysqli_fetch_array($run_student);
                          ?>
                         
                                        <tr>
                                            <th scope="row"><?php echo $x ?></th>
                                            <td><?php echo $row['date'] ?></td>
                                            <td><?php echo $row['time'].':00 To' .$row['time']+1 .':00 '.$row['am_pm']?></td>
                                            <td><?php echo $row_student['full_name']?></td>
                                            <td><?php echo $row_student['email']?></td>
                                            <td>  <img
                class="rounded-circle"
                src="<?php if ($row_student['image']==null){echo './img/about-2.jpg';}else{echo './admin_area/user_image/'.$row_student['image'];}  ?>"
                style="width: 70px; height: 70px"
                alt="Image"
              /></td>
              <td><?php if ($row['link']==0){ echo 'Waiting To Add Link';}else{echo $row['link'];} ?></td>
                                            <td>Confirmed</td>
                                        </tr>
                                        <?php
                                            $x=$x+1;
                                        }}
                                        ?>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            

            </div>
          </div> 
        </div>
      </div>
    </div></div>
    <!-- Gallery End -->

    <?php
    include './includes/footer.php';
    ?>