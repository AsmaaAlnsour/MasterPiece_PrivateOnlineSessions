<?php
// include("includes/db.php");

if(!isset($_SESSION['teacher_email'])){

  echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {

    $email=$_SESSION['teacher_email'];
    $get_teacher = "SELECT * FROM teachers WHERE email ='$email'";
    $run_teacher = mysqli_query($con,$get_teacher);
    $row_teacher = mysqli_fetch_array($run_teacher);
  $teacher_id =  $row_teacher["id"];
?>
 <!-- Form Start -->
 <div class="container-fluid pt-4 px-4">
                <div class="row g-4">

<div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Add Your Available Time</h6>
                            <form method="post">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Avilable Date</label>
                                    <div class="col-sm-9">
                                        <input type="Date" class="form-control" id="inputEmail3" name="date">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label">Avilable Time</label>
                                    <div class="col-sm-9">
                                    <select class="form-select mb-8" aria-label="Default select example" name="time">
                                <option selected>Open this select menu</option>
                                <option value="1">1:00 To 2:00</option>
                                <option value="2">2:00 To 3:00</option>
                                <option value="3">3:00 To 4:00</option>
                                <option value="4">4:00 To 5:00</option>
                                <option value="5">5:00 To 6:00</option>
                                <option value="6">6:00 To 7:00</option>
                                <option value="7">7:00 To 8:00</option>
                                <option value="8">8:00 To 9:00</option>
                                <option value="9">9:00 To 10:00</option>
                                <option value="10">10:00 To 11:00</option>
                                <option value="11">11:00 To 12:00</option>
                                <option value="12">12:00 To 1:00</option>
                            </select>
                                    </div>
                                </div>
                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-3 pt-0">Your start Time</legend>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="am_pm"
                                                id="gridRadios1" value="am" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                AM
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="am_pm"
                                                id="gridRadios2" value="pm">
                                            <label class="form-check-label" for="gridRadios2">
                                                PM
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0 "  >Checkbox</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck1" checked>
                                            <label class="form-check-label" for="gridCheck1">
                                                Check me out
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit"  name="submit" class="btn btn-primary">Add Available Time</button>
                            </form>
                        </div>
                    </div>


                 
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4"> All your Times</h6>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Date </th>
                                        <th scope="col">Time</th>
                                        <th scope="col">am/pm</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
   $get_available = "SELECT * FROM available_time WHERE teacher_id ='$teacher_id' && delete_unavailable='1'";
   $run_available = mysqli_query($con,$get_available);
   $i=0;
   while($row_available = mysqli_fetch_array($run_available)){

    $a_date = $row_available['date'];
    
    $a_time = $row_available['time'];
    
    $a_am_pm = $row_available['am_pm'];
    
    $i++;
?>
                                    <tr>
                                        <th scope="row"><?php echo $i ?></th>
                                        <td><?php echo $a_date ?></td>
                                        <td><?php echo $a_time.":00  To ".$a_time+1 . ":00"  ?></td>
                                        <td><?php echo $a_am_pm ?></td>
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
} 
?>