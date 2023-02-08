<?php



$get_b = "SELECT * FROM `comments`
WHERE delete_comment=1 ";
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
                                            <th scope="col">Teacher Pic</th>
                                            <th scope="col">Teacher Name</th>
                                            <th scope="col">Teacher Email</th>
                                            <th scope="col">Student Pic</th>
                                            <th scope="col">Student Name</th>
                                            <th scope="col">Student Email</th>
                                          
                                            <th scope="col">Comment </th>

                                               <th scope="col">Active </th>
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
                                            <td><?php echo $row['date_insert'] ?></td>
                                            <td>  <img
                class="rounded-circle"
                src="<?php if ($row_teacher['image']==null){echo './img/about-2.jpg';}else{echo '../admin_area/user_image/'.$row_teacher['image'];}  ?>"
                style="width: 70px; height: 70px"
                alt="Image"
              /></td>
                                            <td><?php echo $row_teacher['full_name']?></td>
                                            <td><?php echo $row_teacher['email']?></td>
                                            <td>  <img
                class="rounded-circle"
                src="<?php if ($row_student['profile_pic']==null){echo './img/about-2.jpg';}else{echo '../admin_area/user_image/'.$row_student['profile_pic'];}  ?>"
                style="width: 70px; height: 70px"
                alt="Image"
              /></td>
                                            <td><?php echo $row_student['full_name']?></td>
                                            <td><?php echo $row_student['email']?></td>
                              
                                            <td><?php echo $row['comment'] ?></td>
                                            <td><a class="btn btn-sm btn-primary" href="index.php?delete_comment=<?php echo $row['id']; ?>">Delete</a></td>

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
