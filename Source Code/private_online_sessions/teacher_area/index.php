<?php

session_start();

include("includes/db.php");

if(!isset($_SESSION['teacher_email'])){

echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {

    include("includes/header.php");

    $email=$_SESSION['teacher_email'];
    $get_teacher = "SELECT * FROM teachers WHERE email ='$email'";
    $run_teacher = mysqli_query($con,$get_teacher);
    $row_teacher = mysqli_fetch_array($run_teacher);
    $id=$row_teacher['id']
?>





<?php include("sidebar.php");  ?>



<?php

if(isset($_GET['dashboard'])){

    include("dashboard.php");
    
    }

if(isset($_GET['daily_schedule'])){

include("daily_schedule.php");

}


if(isset($_GET['avilable_time'])){

    include("avilable_time.php");
    
    }


    if(isset($_GET['insert_time'])){
        
        include("insert_time.php");
        
        }

        
    if(isset($_GET['history'])){
        
        include("history.php");
        
        }

               
    if(isset($_GET['student'])){
        
        include("student.php");
        
        }
        if(isset($_GET['my_profile'])){
        
            include("my_profile.php");
            
            }
            if(isset($_GET['edit_profile'])){
        
                include("edit_profile.php");
                
                }
                

                if(isset($_GET['earnings'])){
        
                    include("earnings.php");
                    
                    }

                    if(isset($_GET['comments'])){
        
                        include("comment.php");
                        
                        }
                        
                
             
            
?>

</div><!-- container-fluid Ends -->

</div><!-- page-wrapper Ends -->

</div><!-- wrapper Ends -->

<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>


</body>


</html>

<?php
include("includes/footer.php");

}

  ?>