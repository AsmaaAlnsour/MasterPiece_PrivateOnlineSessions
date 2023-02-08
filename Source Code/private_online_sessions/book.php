<?php
include './includes/db.php';
session_start();
include './includes/header.php';

// if you not user or admin
if (!isset($_SESSION['user_id'])){
    header("location: ./dashboard/login.php");
  }

if(isset($_GET['teacher_id'])){
    $teacher_id=$_GET['teacher_id'];
$get_a = "select * from teachers WHERE id=$teacher_id AND delete_teacher='1'";
$run_a = mysqli_query($con,$get_a);
    $row_a=mysqli_fetch_array($run_a);


    $get_b = "select * from available_time WHERE teacher_id=$teacher_id AND available_time.delete_unavailable='1'";
    $run_b = mysqli_query($con,$get_b);
    $row_b=mysqli_fetch_array($run_b);


    if (mysqli_num_rows( $run_b ) >= 1  ) {


    $get_teach = "select available_time.id,full_name,phone,email,password,subject_id,address,age,image,degree,degree_file,
    experience,experience_file,available_time.teacher_id,available_time.date,available_time.time,available_time.am_pm,available_time.delete_unavailable
    from `teachers`INNER JOIN `available_time`
    WHERE teachers.id=$teacher_id AND available_time.teacher_id=$teacher_id AND delete_teacher='1' AND available_time.delete_unavailable='1' AND available_time.available=1";
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
    <h3 class="display-3 font-weight-bold text-white">Book A Seat</h3>
    <div class="d-inline-flex text-white">
    <p class="m-0"><a class="text-white" href="">Home</a></p>
    <p class="m-0 px-2">/</p>
    <p class="m-0">Book A Seat</p>
    </div>
</div>
</div>
<!-- Header End -->



<!-- Registration Start -->
    <div class="container-fluid py-5">
        <div class="container">
        <div class="row align-items-center">
        <div class="col-lg-7 mb-5 mb-lg-0">
            <p class="section-title pr-5">
            <span class="pr-2">Book A Seat</span>
            </p>
            <h1 class="mb-4">Book A Privet Online Session  </h1>
            <!-- <p>
            Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo
            dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.
            Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
            dolor
            </p> -->
            <ul class="list-inline m-0">
            
            <li class="py-2">
            <img
                class="rounded-circle mb-2"
                src="./admin_area/user_image/<?php  echo $row_a['image'];?>"
                style="width: 150px; height: 200px"
                alt="Image"
            /> <br> <br> 
                <i class="fa fa-check text-success mr-3"></i>   Teacher Name :   <?php echo $row_teach['full_name']?>
            </li>
            <li class="py-2">
                <i class="fa fa-check text-success mr-3"></i>   Grade  :     
            <?php echo $row_gra['grade']?>
            </li>
            <li class="py-2">
                <i class="fa fa-check text-success mr-3"></i>   Subject :
                <?php echo $row_sub['subject']?>
            </li>
            <li class="py-2">
                <i class="fa fa-check text-success mr-3"></i>   Price :
                <?php echo  $row_gra['tuition_fee'] .'  JOD'?>
            </li>

            
            <li class="py-2">
                <i class="fa fa-check text-success mr-3"></i>   Payment Methode :
               Credit Card
            </li>
<img 
src=" https://as1.ftcdn.net/v2/jpg/04/34/55/36/1000_F_434553675_2KSgr0rwmWFe4XQaf4AG4Gbvgn31M4OE.jpg"

style="width: 400px; height: 200px"
/>

           
            </ul>
            <!-- <a href="" class="btn btn-primary mt-4 py-2 px-4">Book Now</a> -->
            </div>
                <div class="col-lg-5">
                <div class="card border-0">
                <div class="card-header bg-secondary text-center p-4">
                <h1 class="text-white m-0">Book A Seat</h1>
                </div>
                <div class="card-body rounded-bottom bg-primary p-5">
                <form action="" method="post" >
                <div class="form-group">
                    <input
                    name='name'
                    type="text"
                    class="form-control border-0 p-4"
                    value="<?php echo $row_user['full_name'] ?>"
                    required="required"
                    readonly
                    />
                </div>
                <div class="form-group">
                    <input
                    name='email'
                    type="email"
                    class="form-control border-0 p-4"
                    value="<?php echo $row_user['email'] ?>"
                    required="required"
                    readonly
                    />
                </div>
                <div class="form-group">
                    <select
                    class="custom-select border-0 px-4"
                    style="height: 47px"
                    name='time'
                    >
                    <option >Select A Session Time</option>
                    <?php
							if ($result = $con->query($get_teach) ) {
							while($row = $result->fetch_assoc() ){
                                ?>
                    <option value= <?php echo $row['id'] ?>> <?php echo  $row['date']. " at "  . $row['time'].":00 " . $row['am_pm']?></option>
                    
                    <?php
                    }}
                    ?>
                    </select>
                </div>
                <h5 class="text-white m-0"><i class="fa fa-credit-card" aria-hidden="true"></i>  Payment Details :</h5>
                
                <div class="form-group">
                    <label>Session Price :</label>
                    <input
                    name='tuition_fee'
                    type="text"
                    class="form-control border-0 p-4"
                    value="<?php echo  $row_gra['tuition_fee'] .'  JOD'?>"
                    required="required"
                    readonly
                    />
                </div>
                <div class="form-group">
                    <label>Credit Card Number :</label>
                    <input
                    name='card_number'
                    type="text"
                    class="form-control border-0 p-4"
                    placeholder='**** **** **** ****'
                    required="required"
                    />
                </div>
                <div class="form-group">
                    <label>Security Code :</label>
                    <input
                    name='card_number_Security'
                    type="text"
                    class="form-control border-0 p-4"
                    placeholder='CVC'
                    required="required"
                    />
                </div>
                    <div class="form-group">
                    <label>Expiration Date :</label>
                    <input
                    name='expiration_date'
                    type="date_format"
                    class="form-control border-0 p-4"
                    placeholder='MM/YY'
                    required="required"
                    />
                </div>
                <div>
            <a  href="book.php?teacher_id=<?php echo $teacher_id;?>">
                    <button
                    type="submit" name="submit"
                    class="btn btn-secondary btn-block border-0 py-3"
                    >
                    Book Now
                    </button>
                            </a>
                </div>
                </form>
                
                
<?php

if(isset($_POST['submit'])){
// echo $_POST['time'];
    $id_user=$_SESSION['user_id'];
    $id_time =$_POST['time'];
$card_number = $_POST['card_number'];
 $earnings= $row_gra['tuition_fee'];


$insert_book = "insert into booking (id,user_id,teacher_id,time_id,card_number,earnings) values ('','$id_user','$teacher_id','$id_time','$card_number','$earnings')";
$run_book = mysqli_query($con,$insert_book);

$update_available = "update available_time set available='0' where id=$id_time";

$run_available = mysqli_query($con,$update_available);

if($run_book){

echo "<script> alert('Booking confirmed success ')</script>";

echo "<script> window.open('./teacher.php','_self') </script>";

}

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
        }}else {
        echo "<script>window.open('./teacher.php','_self')</script>";
        
        }
            include './includes/footer.php';
            ?>