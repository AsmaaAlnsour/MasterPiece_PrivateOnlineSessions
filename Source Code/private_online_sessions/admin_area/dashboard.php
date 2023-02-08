


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Teachers</p>
                                <h6 class="mb-0"><?php echo $count_teachers; ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Users</p>
                                <h6 class="mb-0"><?php echo $all_users;?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2"> Subjects </p>
                                <h6 class="mb-0"><?php echo $count_subjects; ?> </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Sessions</p>
                                <h6 class="mb-0"><?php echo $count_book ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->





            <!-- Recent Sales Start -->
            <?php



if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {

    

$get_b = "SELECT * FROM `booking` JOIN `available_time` 
WHERE  booking.delete_session=1 AND booking.time_id=available_time.id AND link='0'
ORDER BY `available_time`.`date` ASC ";
$run_b = mysqli_query($con,$get_b);
$row_b=mysqli_fetch_array($run_b);
?>





            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Session Waiting To Add Links</h6>
                        <a href="index.php?insert_link">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                <th scope="col">#</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Teacher Pic</th>
                                            <th scope="col">Teacher Name</th>
                                            <th scope="col">Teacher Email</th>
                                            
                                            <th scope="col">Student Name</th>
                                            <th scope="col">Student Email</th>
                                            <th scope="col">Student Pic</th>
                                            <th scope="col">Action</th>
                                        
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                      
                      $x=1;
                      if ($result = $con->query($get_b) ) {
        
                          while($row = $result->fetch_assoc() ){

                            $student_id =$row['user_id'];
                            $get_student = "SELECT * FROM `users` WHERE id=$student_id ";
                            $run_student = mysqli_query($con,$get_student);
$row_student=mysqli_fetch_array($run_student);

$teacher_id =$row['teacher_id'];
$get_teacher = "SELECT * FROM `teachers` WHERE id=$teacher_id ";
$run_teacher = mysqli_query($con,$get_teacher);
$row_teacher=mysqli_fetch_array($run_teacher);
                          ?>
                         
                                        <tr>
                                            <th scope="row"><?php echo $x ?></th>
                                            <td><?php echo $row['date'] ?></td>
                                            <td><?php echo $row['time'].':00 To' .$row['time']+1 .':00 '.$row['am_pm']?></td>
                                            <td>  <img
                class="rounded-circle"
                src="<?php if ($row_teacher['image']==null){echo './img/about-2.jpg';}else{echo '../admin_area/user_image/'.$row_teacher['image'];}  ?>"
                style="width: 70px; height: 70px"
                alt="Image"
              /></td>
                                            <td><?php echo $row_teacher['full_name']?></td>
                                            <td><?php echo $row_teacher['email']?></td>
                      
                                            <td><?php echo $row_student['full_name']?></td>
                                            <td><?php echo $row_student['email']?></td>
                                            <td>  <img
                class="rounded-circle"
                src="<?php if ($row_student['profile_pic']==null){echo './img/about-2.jpg';}else{echo '../admin_area/user_image/'.$row_student['profile_pic'];}  ?>"
                style="width: 70px; height: 70px"
                alt="Image"
              /></td>
           
                                            <td><a class="btn btn-sm btn-primary" href="index.php?edit_link=<?php echo $row['id']; ?>">Add Link</a></td>

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
            <!-- Recent Sales End -->


<?php } ?>

            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-8">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                            <?php



$get_b = "SELECT * FROM `messages`
WHERE delete_message=1 ";
$run_b = mysqli_query($con,$get_b);
$row_b=mysqli_fetch_array($run_b);

?>
                                <h6 class="mb-0">Messages</h6>
                                <a href="index.php?message">Show All</a>
                            </div>
                            <?php
                      
                      $x=1;
                      if ($result = $con->query($get_b) ) {
        
                          while($row = $result->fetch_assoc() ){

                          ?>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0"><?php echo $row['name'] ?></h6>
                                        <!-- <small>15 minutes ago</small> -->
                                    </div>
                                    <span><?php echo $row['message'] ?></span>
                                </div>
                            </div>

                            <?php
                        }}
                        ?>
                          
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
               
                </div>