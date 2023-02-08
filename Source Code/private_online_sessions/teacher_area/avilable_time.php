<br>
<div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">All Available Time for You</h6>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Date </th>
                                        <th scope="col">Time</th>
                                        <th scope="col">am/pm</th>
                                        <th scope="col">Availability</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
   $get_available = "SELECT * FROM available_time WHERE teacher_id ='$id' && delete_unavailable='1'";
   $run_available = mysqli_query($con,$get_available);
   $i=0;
   while($row_available = mysqli_fetch_array($run_available)){

    $a_date = $row_available['date'];
    
    $a_time = $row_available['time'];
    
    $a_am_pm = $row_available['am_pm'];
    
    $available = $row_available['available'];
    
    $i++;
?>
                                    <tr>
                                        <th scope="row"><?php echo $i ?></th>
                                        <td><?php echo $a_date ?></td>
                                        <td><?php echo $a_time.":00  To ".$a_time+1 . ":00"  ?></td>
                                        <td><?php echo $a_am_pm ?></td>
                                        <td><?php if($available==0){echo 'Busy'; }else{echo 'Available';}?></td>
                                    </tr>
                                    <?php
   }
                                    ?>
                                    <!-- <tr>
                                        <th scope="row">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                    </div>
<?php
if(isset($_POST['submit'])){

    $date = $_POST['date'];
    $time = $_POST['time'];
    $am_pm = $_POST['am_pm'];
    
    

    
    $insert_time = "insert into available_time (teacher_id,date,time,am_pm) values ('$teacher_id','$date','$time','$am_pm')";
    
    $run_time = mysqli_query($con,$insert_time);
    
    // if($run_time){
    
    echo "<script> alert('New Available Time Has Been Add')</script>";
    echo "<script> window.open('index.php?insert_time','_self') </script>";
    
    // }
    
    }

?>