<?php
include './includes/db.php';
session_start();
include './includes/header.php';


if(isset($_GET['teacher_id'])){
    $teacher_id=$_GET['teacher_id'];
$get_a = "select * from teachers WHERE id=$teacher_id AND delete_teacher='1'";
$run_a = mysqli_query($con,$get_a);
    $row_a=mysqli_fetch_array($run_a);


    $get_b = "select * from available_time WHERE teacher_id=$teacher_id AND available_time.delete_unavailable='1' AND available_time.available='1' ";
    $run_b = mysqli_query($con,$get_b);
    $row_b=mysqli_fetch_array($run_b);


    if (mysqli_num_rows( $run_b ) >= 1  ) {


    $get_teach = "select available_time.id,full_name,phone,email,password,subject_id,address,age,image,degree,degree_file,
    experience,experience_file,available_time.teacher_id,available_time.date,available_time.time,available_time.am_pm,available_time.delete_unavailable
    from `teachers`INNER JOIN `available_time`
    WHERE teachers.id=$teacher_id AND available_time.teacher_id=$teacher_id AND delete_teacher='1' AND available_time.delete_unavailable='1'  AND available_time.available=1";
    $run_teach = mysqli_query($con,$get_teach);
    $row_teach=mysqli_fetch_array($run_teach);
    $subject_id=$row_teach['subject_id'] ;


    $get_sub = "select * from `subjects`
    WHERE id=$subject_id AND delete_subject='1'";
    $run_sub = mysqli_query($con,$get_sub);
    $row_sub=mysqli_fetch_array($run_sub);
    $grade_id=$row_sub['grades_id'] ;

    $get_gra = "select * from `grades`
    WHERE id=$grade_id AND delete_grade='1'";
    $run_gra = mysqli_query($con,$get_gra);
    $row_gra=mysqli_fetch_array($run_gra);


    $get_book = "select * from `booking` WHERE teacher_id=$teacher_id";
    $run_book = mysqli_query($con,$get_book);
    $row_book=mysqli_fetch_array($run_book);

?>


<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
    <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 400px"
    >
        <h3 class="display-3 font-weight-bold text-white">Teacher Profile</h3>
        <div class="d-inline-flex text-white">
        <p class="m-0"><a class="text-white" href="">Home</a></p>
        <p class="m-0 px-2">/</p>
        <p class="m-0">Teacher Details</p>
        </div>
    </div>
    </div>
    <!-- Header End -->


    
    <!-- About Start -->
    <div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-lg-5">
            <img
            style="width: 555px; height: 663px;" 
            class="img-fluid rounded mb-5 mb-lg-0"
            src="./admin_area/user_image/<?php echo $row_teach['image'] ?>"
            alt=""
            />
        </div>
        <div class="col-lg-7">
            <p class="section-title pr-5">
            <span class="pr-2">Learn About Us</span>
            </p>
            <h1 class="mb-4"><?php echo $row_teach['full_name'] ?> </h1>
            <p>
            The  <?php echo $row_teach['full_name'] ?> Teacher Has a 
        
        <ul class="list-inline m-0">
                <li class="py-2 border-top border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Degree :<?php echo $row_teach['degree'] ?> 
                </li>
                <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Experience :<?php echo $row_teach['experience'] ?> 
                </li>
                <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Grade :<?php echo $row_gra['grade'] ?>
                </li>
                <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Subject :<?php echo $row_sub['subject'] ?>
                </li>
                </ul>
            </p>
            <div class="row pt-2 pb-4">
            <div class="col-6 col-md-4">
                <img   style="width: 200px; height: 150px;"  class="img-fluid rounded" src="./admin_area/subject_images/<?php echo $row_sub['subject_img'] ?>" alt="" />
            </div>
            <div class="col-6 col-md-8">
                <ul class="list-inline m-0">
                <li class="py-2 border-top border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Email :<?php echo $row_teach['email'] ?> 
                </li>
                <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Phone :<?php echo $row_teach['phone'] ?>
                </li>
                <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Address :<?php echo $row_teach['address'] ?>
                </li>
                </ul>
            </div>
            </div>
            <!-- <a href="" class="btn btn-primary mt-2 py-2 px-4">Learn More</a> -->
        </div>
        </div>
    </div>
    </div>
    <!-- About End -->

<!-- Gallery Start -->
    <div class="container-fluid pt-5 pb-3">
    <div class="container">
        <div class="text-center pb-2">
        <p class="section-title px-5">
            <span class="px-2">Our Gallery</span>
        </p>
    <div class="row portfolio-container">
        <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
            <div class="position-relative overflow-hidden mb-2">
            <img style="width: 200px; height: 300px;" class="img-fluid w-100" src="./admin_area/user_image/<?php echo $row_teach['image'] ?>" alt="" />
            <div
                class="portfolio-btn bg-primary d-flex align-items-center justify-content-center"
            >
                <a href="./admin_area/user_image/<?php echo $row_teach['image'] ?>" data-lightbox="portfolio">
                <i class="fa fa-eye text-white" style="font-size: 60px">image</i>
                </a>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
            <div class="position-relative overflow-hidden mb-2">
            <img style="width: 200px; height: 300px;"  class="img-fluid w-100" src="./admin_area/user_image/<?php echo $row_teach['degree_file'] ?>" alt="" />
            <div
                class="portfolio-btn bg-primary d-flex align-items-center justify-content-center"
            >
                <a  href="./admin_area/user_image/<?php echo $row_teach['degree_file'] ?>" data-lightbox="portfolio">
                <i class="fa fa-eye text-white" style="font-size: 60px">Degree</i>
                </a>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
            <div class="position-relative overflow-hidden mb-2">
            <img style="width: 200px; height: 300px;"  class="img-fluid w-100" src="./admin_area/user_image/<?php echo $row_teach['experience_file'] ?>" alt="" />
            <div
                class="portfolio-btn bg-primary d-flex align-items-center justify-content-center"
            >
                <a href="./admin_area/user_image/<?php echo $row_teach['experience_file'] ?>" data-lightbox="portfolio">
                <i class="fa fa-eye text-white" style="font-size: 60px">Experience</i>
                </a>
            </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>


<!-- Registration Start -->
<div class="container-fluid py-5">
        <div class="container">
        <div class="row align-items-center">
        <div class="col-lg-7 mb-5 mb-lg-0">
            <p class="section-title pr-5">
            <span class="pr-2">Book A Seat</span>
            </p>
            <h1 class="mb-4">Available Time For Teacher <?php echo  $row_teach['full_name'] ?> </h1>
            <!-- <p>
            Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo
            dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.
            Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
            dolor
            </p> -->
            <ul class="list-inline m-0">
            <?php



							if ($result = $con->query($get_teach) ) {
							while($row = $result->fetch_assoc() ){
             
          
                                ?>
            <li class="py-2">
           
                <i class="fa fa-check text-success mr-3"></i>  <?php echo  $row['date']. " at "  . $row['time'].":00 " . $row['am_pm']?> 
            </li>
            <?php
                    
            }}
          
            ?>
            <li class="py-2">
            </ul>
            <!-- <a href="" class="btn btn-primary mt-4 py-2 px-4">Book Now</a> -->
        </div>
        <div class="col-lg-5">
            <div class="card border-0">
            <div class="card-header bg-secondary text-center p-4">
                <h1 class="text-white m-0">Book A Seat</h1>
            </div>
            <div class="card-body rounded-bottom bg-primary p-5">
            
                <div class="form-group">
                <h4 class="text-danger "> 
                  <?php
                // if you not user or admin
if (!isset($_SESSION['user_id'])){
  echo  "You must be login before booking !";
  }
?>
<h4>
        
                <div>
            <a  href="book.php?teacher_id=<?php echo $teacher_id;?>">
                    <button
                    class="btn btn-secondary btn-block border-0 py-3"
                    >
                    Book Now
                    </button>
                            </a>
                </div>
                </div>
            </div>
            
        </div>
        
        </div>
        
    </div>
       <!-- Comment List -->

       <br><br><br>
       <?php

$get_comment = "SELECT * FROM `comments` JOIN users WHERE teacher_id=$teacher_id and comments.user_id=users.id";
$run_comment = mysqli_query($con,$get_comment);
$row_comment=mysqli_fetch_array($run_comment);



if ($result1 = $con->query($get_comment) ) {
  if( $result1->fetch_assoc()>0){
       ?>
          <div class="mb-5">
            <h2 class="mb-4"> Comments</h2>
           
            <?php
  
              while($row1 = $result1->fetch_assoc() ){
            
            ?>
                <div class="media mt-4">
                  <img
                    src="./admin_area/user_image/<?php echo $row1['profile_pic']
                    ?>"
                    alt="Image"
                    class="img-fluid rounded-circle mr-3 mt-1"
                    style="width: 45px"
                  />
                  <div class="media-body">
                    <h6>
                    <?php
                    echo $row1['full_name']
                    ?> <small><i>
                      <?php
                    echo $row1['date_insert']
                    ?></i></small>
                    </h6>
                    <p>
                      <?php
                    echo $row1['comment']
                    ?>
                    </p>
                    </div>
                </div>
                    <?php
              }}}
                ?>
                
              
           


                <?php

$get_com= "SELECT * FROM `booking` ";
                
if ($result5 = $con->query($get_com) ) {
  if (isset($_SESSION['user_id'])){
              while($row5 = $result5->fetch_assoc() ){
if($row5['teacher_id']=$teacher_id and $row5['user_id']=$_SESSION['user_id']){
                ?>
          <!-- Comment Form -->
          <div class="bg-light p-5">
            <h2 class="mb-4">Leave a comment</h2>
            <form method="post">
              <!-- <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" class="form-control" id="name" />
              </div>
              <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" class="form-control" id="email" />
              </div>
              <div class="form-group">
                <label for="website">Website</label>
                <input type="url" class="form-control" id="website" />
              </div> -->

              <div class="form-group">
                <label for="message">Comment *</label>
                <textarea
                name="comment"
                  id="message"
                  cols="30"
                  rows="5"
                  class="form-control"
                ></textarea>
              </div>
              <div class="form-group mb-0">
                <input
                name="submit"
                  type="submit"
                  value="Leave Comment"
                  class="btn btn-primary px-3"
                />
              </div>
            </form>
          </div>
          <?php
            break;  }}} }?>
        </div>
    </div>
    <?php
    if(isset($_POST['submit'])){
$comment=$_POST['comment'];
$user_id=$_SESSION['user_id'];

$insert_comment="INSERT INTO `comments`(`id`, `comment`, `user_id`, `teacher_id`)
 VALUES ('','$comment','$user_id','$teacher_id')";



$run_comment = mysqli_query($con,$insert_comment);

// if($run_comment){

// echo "<script>alert('comment has been inserted successfully')</script>";

// echo "<script>window.open('index.php?view_subjects','_self')</script>";


//     }
    }
    ?>
    
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- Registration End -->






           
    <?php
       include './includes/footer.php';
     } else{ 
        $subject_id=$row_a['subject_id'] ;
        
    $get_sub = "select * from `subjects`
    WHERE id=$subject_id AND delete_subject='1'";
    $run_sub = mysqli_query($con,$get_sub);
    $row_sub=mysqli_fetch_array($run_sub);

    $grade_id=$row_sub['grades_id'] ;

    $get_gra = "select * from `grades`
    WHERE id=$grade_id AND delete_grade='1'";
    $run_gra = mysqli_query($con,$get_gra);
    $row_gra=mysqli_fetch_array($run_gra);
    ?>
        <!-- Header Start -->
        <div class="container-fluid bg-primary mb-5">
              <div
                class="d-flex flex-column align-items-center justify-content-center"
                style="min-height: 400px"
              >
                <h3 class="display-3 font-weight-bold text-white">Teacher Profile</h3>
                <div class="d-inline-flex text-white">
                  <p class="m-0"><a class="text-white" href="">Home</a></p>
                  <p class="m-0 px-2">/</p>
                  <p class="m-0">Teacher Details</p>
                </div>
              </div>
            </div>
            <!-- Header End -->
        
         
    <!-- About Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <img
            style="width: 555px; height: 663px;" 
              class="img-fluid rounded mb-5 mb-lg-0"
              src="./admin_area/user_image/<?php echo $row_a['image'] ?>"
              alt=""
            />
          </div>
          <div class="col-lg-7">
            <p class="section-title pr-5">
              <span class="pr-2">Learn About Us</span>
            </p>
            <h1 class="mb-4"><?php echo $row_a['full_name'] ?> </h1>
            <p>
            The  <?php echo $row_a['full_name'] ?> Teacher Has a 
        
        <ul class="list-inline m-0">
                  <li class="py-2 border-top border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Degree :<?php echo $row_a['degree'] ?> 
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Experience :<?php echo $row_a['experience'] ?> 
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Grade :<?php echo $row_gra['grade'] ?>
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Subject :<?php echo $row_sub['subject'] ?>
                  </li>
                </ul>
            </p>
            <div class="row pt-2 pb-4">
              <div class="col-6 col-md-4">
                <img   style="width: 200px; height: 150px;"  class="img-fluid rounded" src="./admin_area/subject_images/<?php echo $row_sub['subject_img'] ?>" alt="" />
              </div>
              <div class="col-6 col-md-8">
                <ul class="list-inline m-0">
                  <li class="py-2 border-top border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Email :<?php echo $row_a['email'] ?> 
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Phone :<?php echo $row_a['phone'] ?>
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Address :<?php echo $row_a['address'] ?>
                  </li>
                </ul>
              </div>
            </div>
            <!-- <a href="" class="btn btn-primary mt-2 py-2 px-4">Learn More</a> -->
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

  <!-- Gallery Start -->
  <div class="container-fluid pt-5 pb-3">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Our Gallery</span>
          </p>
    <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
            <div class="position-relative overflow-hidden mb-2">
              <img style="width: 200px; height: 300px;" class="img-fluid w-100" src="./admin_area/user_image/<?php echo $row_a['image'] ?>" alt="" />
              <div
                class="portfolio-btn bg-primary d-flex align-items-center justify-content-center"
              >
                <a href="./admin_area/user_image/<?php echo $row_a['image'] ?>" data-lightbox="portfolio">
                  <i class="fa fa-eye text-white" style="font-size: 60px">image</i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
            <div class="position-relative overflow-hidden mb-2">
              <img style="width: 200px; height: 300px;"  class="img-fluid w-100" src="./admin_area/user_image/<?php echo $row_a['degree_file'] ?>" alt="" />
              <div
                class="portfolio-btn bg-primary d-flex align-items-center justify-content-center"
              >
                <a  href="./admin_area/user_image/<?php echo $row_a['degree_file'] ?>" data-lightbox="portfolio">
                  <i class="fa fa-eye text-white" style="font-size: 60px">Degree</i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
            <div class="position-relative overflow-hidden mb-2">
              <img style="width: 200px; height: 300px;"  class="img-fluid w-100" src="./admin_area/user_image/<?php echo $row_a['experience_file'] ?>" alt="" />
              <div
                class="portfolio-btn bg-primary d-flex align-items-center justify-content-center"
              >
                <a href="./admin_area/user_image/<?php echo $row_a['experience_file'] ?>" data-lightbox="portfolio">
                  <i class="fa fa-eye text-white" style="font-size: 60px">Experience</i>
                </a>
              </div>
            </div>
          </div>
        </div>
        </div>
          </div>
        </div>


<!-- Registration Start -->
<div class="container-fluid py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 mb-5 mb-lg-0">
            <p class="section-title pr-5">
              <span class="pr-2">Book A Seat</span>
            </p>
            <h1 class="mb-4"> No Available Time For Teacher <?php echo  $row_a['full_name'] ?> </h1>
     </div>
        </div>




      <!-- Comment List -->

      <br><br><br>
       <?php

$get_comment = "SELECT * FROM `comments` JOIN users WHERE teacher_id=$teacher_id and comments.user_id=users.id";
$run_comment = mysqli_query($con,$get_comment);
$row_comment=mysqli_fetch_array($run_comment);



if ($result1 = $con->query($get_comment) ) {
  if( $result1->fetch_assoc()>0){
       ?>
          <div class="mb-5">
            <h2 class="mb-4"> Comments</h2>
           
            <?php
  
              while($row1=$result1->fetch_assoc()){
            
            ?>
                <div class="media mt-4">
                  <img
                    src="./admin_area/user_image/<?php echo $row1['profile_pic']
                    ?>"
                    alt="Image"
                    class="img-fluid rounded-circle mr-3 mt-1"
                    style="width: 45px"
                  />
                  <div class="media-body">
                    <h6>
                    <?php
                    echo $row1['full_name']
                    ?> <small><i>
                      <?php
                    echo $row1['date_insert']
                    ?></i></small>
                    </h6>
                    <p>
                      <?php
                    echo $row1['comment']
                    ?>
                    </p>
                  </div>
                </div>
                    <?php
              }}}
                ?>
          

                <?php

$get_com= "SELECT * FROM `booking` ";
                
if ($result5 = $con->query($get_com) ) {
  if (isset($_SESSION['user_id'])){
              while($row5 = $result5->fetch_assoc() ){
if($row5['teacher_id']==$teacher_id && $row5['user_id']==$_SESSION['user_id']){
                ?>
          <!-- Comment Form -->
          <div class="bg-light p-5">
            <h2 class="mb-4">Leave a comment</h2>
            <form method="post">
              <!-- <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" class="form-control" id="name" />
              </div>
              <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" class="form-control" id="email" />
              </div>
              <div class="form-group">
                <label for="website">Website</label>
                <input type="url" class="form-control" id="website" />
              </div> -->

              <div class="form-group">
                <label for="message">Comment *</label>
                <textarea
                name="comment"
                  id="message"
                  cols="30"
                  rows="5"
                  class="form-control"
                ></textarea>
              </div>
              <div class="form-group mb-0">
                <input
                name="submit"
                  type="submit"
                  value="Leave Comment"
                  class="btn btn-primary px-3"
                />
              </div>
            </form>
          </div>
          <?php
            break;  }} }}?>
        </div>
    </div>
    <?php
    if(isset($_POST['submit'])){
$comment=$_POST['comment'];
$user_id=$_SESSION['user_id'];

$insert_comment="INSERT INTO `comments`(`id`, `comment`, `user_id`, `teacher_id`)
 VALUES ('','$comment','$user_id','$teacher_id')";



$run_comment = mysqli_query($con,$insert_comment);

// if($run_comment){

// echo "<script>alert('comment has been inserted successfully')</script>";

// echo "<script>window.open('index.php?view_subjects','_self')</script>";


//     }
    }
    ?>
    
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- Registration End -->
    </div>
     </div>
     </div>

            <?php
             include './includes/footer.php';
        }
            
      
 
}else{
    echo "<script>window.open('./teacher.php','_self')</script>";
}
?>
    

