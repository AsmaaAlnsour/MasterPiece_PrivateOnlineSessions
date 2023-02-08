<?php



$get_b = "SELECT * FROM `booking` JOIN `available_time` 
WHERE booking.teacher_id=$id AND booking.delete_session=1 AND booking.time_id=available_time.id AND CURDATE()<=available_time.date 
ORDER BY `available_time`.`date` ASC ";
$run_b = mysqli_query($con,$get_b);
$row_b=mysqli_fetch_array($run_b);

?>
<br>
<br>
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
                                            <th scope="col">Session Link </th>
                                            <th scope="col">reservation confirmation </th>
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
