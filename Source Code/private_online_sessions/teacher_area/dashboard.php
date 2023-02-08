<?php

if(!isset($_SESSION['teacher_email'])){

  echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {

?>


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                            <?php



$get_b = "SELECT * FROM `booking` JOIN `available_time` 
WHERE booking.teacher_id=$id AND booking.delete_session=1 AND booking.time_id=available_time.id AND CURDATE()>available_time.date 
ORDER BY `available_time`.`date` ASC ";
$run_b = mysqli_query($con,$get_b);
$row_b=mysqli_fetch_array($run_b);
$y=0;
$x=1;
if ($result = $con->query($get_b) ) {

    while($row = $result->fetch_assoc() ){
      $Earnings= $row['earnings']*0.75;
      $y=$y+ $Earnings;
      $x=$x+1;
    }}
?>


                                <p class="mb-2">Total Earnings</p>
                                <h6 class="mb-0"><?php echo $y ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <?php
                                $get_b = "SELECT * FROM `booking` JOIN `available_time` 
                                WHERE booking.teacher_id=$id AND booking.delete_session=1 AND booking.time_id=available_time.id
                                ORDER BY `available_time`.`date` ASC ";
                                $run_b = mysqli_query($con,$get_b);
                                $row_b=mysqli_fetch_array($run_b);
                                $count_session = mysqli_num_rows($run_b);
                                ?>
                                <p class="mb-2">Total Session</p>
                                <h6 class="mb-0"><?php echo  $count_session ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                            <?php



$get_c = "SELECT * FROM `comments`
WHERE teacher_id=$id AND delete_comment=1 ";
$run_c = mysqli_query($con,$get_c);
$row_c=mysqli_fetch_array($run_c);
$count_c = mysqli_num_rows($run_c);

?>
                                <p class="mb-2">Total Comments</p>
                                <h6 class="mb-0"><?php echo $count_c  ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <?php
                                $get_br = "SELECT * FROM `booking` JOIN `available_time` 
                                WHERE booking.teacher_id=$id AND booking.delete_session=1 AND booking.time_id=available_time.id AND CURDATE()<=available_time.date 
                                ORDER BY `available_time`.`date` ASC ";
                                $run_br = mysqli_query($con,$get_br);
                                $row_br=mysqli_fetch_array($run_br);
                                $count_r = mysqli_num_rows($run_br);
                                ?>
                                <p class="mb-2">Reserved sessions</p>
                                <h6 class="mb-0"> <?php echo $count_r  ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->

     <!-- Widget Start -->
     <div class="container-fluid pt-4 px-4">
                <div class="row g-4">

<div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                    <!-- </div>
                    </div>
                    <div class="container-fluid pt-4 px-4"> -->
                <!-- <div class="row g-4"> -->
                    <div class="col-sm-12 col-md-6 col-xl-8">
                    <?php



$get_b = "SELECT * FROM `booking` JOIN `available_time` 
WHERE booking.teacher_id=$id AND booking.delete_session=1 AND booking.time_id=available_time.id AND CURDATE()<=available_time.date 
ORDER BY `available_time`.`date` ASC ";
$run_b = mysqli_query($con,$get_b);
$row_b=mysqli_fetch_array($run_b);

?>
<div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Your Schedule</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Student Name</th>
                                            <th scope="col">Student Email</th>
                                            <th scope="col">Student Pic</th>
                                        
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
                          ?>
                         
                                        <tr>
                                            <th scope="row"><?php echo $x ?></th>
                                            <td><?php echo $row['date'] ?></td>
                                            <td><?php echo $row['time'].':00 To' .$row['time']+1 .':00 '.$row['am_pm']?></td>
                                            <td><?php echo $row_student['full_name']?></td>
                                            <td><?php echo $row_student['email']?></td>
                                            <td>  <img
                class="rounded-circle"
                src="<?php if ($row_student['profile_pic']==null){echo './img/about-2.jpg';}else{echo '../admin_area/user_image/'.$row_student['profile_pic'];}  ?>"
                style="width: 70px; height: 70px"
                alt="Image"
              /></td>
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
<?php

} 
?>