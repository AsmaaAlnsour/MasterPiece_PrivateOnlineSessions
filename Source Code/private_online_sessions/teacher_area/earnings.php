<?php



$get_b = "SELECT * FROM `booking` JOIN `available_time` 
WHERE booking.teacher_id=$id AND booking.delete_session=1 AND booking.time_id=available_time.id AND CURDATE()>available_time.date 
ORDER BY `available_time`.`date` ASC ";
$run_b = mysqli_query($con,$get_b);
$row_b=mysqli_fetch_array($run_b);

?>
<br>
<br>
<div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Your Earnings</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Session Date</th>
                                            <th scope="col">Session Time</th>
                                            <th scope="col">Earning</th>
                                            <th scope="col"> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                      $y=0;
                      $x=1;
                      if ($result = $con->query($get_b) ) {
        
                          while($row = $result->fetch_assoc() ){
                            $Earnings= $row['earnings']*0.75
?>

                                        <tr>
                                            <th scope="row"><?php echo $x ?></th>
                                            <td><?php echo $row['date'] ?></td>
                                            <td><?php echo $row['time'].':00 To' .$row['time']+1 .':00 '.$row['am_pm']?></td>
                                            <td><?php echo  $Earnings .' JOD' ?></td>

                                            <td>Done</td>
                                        </tr>
                                        <?php
                                        $y=$y+ $Earnings;
                                            $x=$x+1;
                                        }}
                                        ?>
                                      
                                    </tbody>
                                </table>

                             <h3>   Total Earnings = <?php echo $y .' JOD' ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
