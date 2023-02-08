<?php

session_start();

include("includes/db.php");

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {

    include("includes/header.php");

    $email=$_SESSION['admin_email'];
    $get_admin = "SELECT * FROM users WHERE email ='$email'";
    $run_admin = mysqli_query($con,$get_admin);
    $row_admin = mysqli_fetch_array($run_admin);
    $id=$row_admin['id'];




    $get_teachers = "SELECT * FROM teachers WHERE delete_teacher='1'";
$run_teachers = mysqli_query($con,$get_teachers);
$count_teachers = mysqli_num_rows($run_teachers);


$get_users = "SELECT * FROM users WHERE delete_user='1'";
$run_users = mysqli_query($con,$get_users);
$count_users = mysqli_num_rows($run_users);

$all_users = $count_teachers + $count_users ;



$get_subjects = "SELECT * FROM subjects WHERE delete_subject='1'";
$run_subjects = mysqli_query($con,$get_subjects);
$count_subjects = mysqli_num_rows($run_subjects);



$get_book = "SELECT * FROM booking WHERE delete_session='1'";
$run_book = mysqli_query($con,$get_book);
$count_book = mysqli_num_rows($run_book);
?>





<?php include("sidebar.php");  ?>



<?php

if(isset($_GET['dashboard'])){

    include("dashboard.php");
    
    }

    if(isset($_GET['insert_subject'])){

        include("insert_subject.php");
        
        }

        
        if(isset($_GET['view_subjects'])){

            include("view_subjects.php");
            
            }    

            if(isset($_GET['edit_subject'])){

                include("edit_subject.php");
                
                }
            if(isset($_GET['delete_subject'])){

                include("delete_subject.php");
                
                }    

                //grades
                if(isset($_GET['insert_grade'])){

                    include("insert_grade.php");
                    
                    }
                        
                if(isset($_GET['view_grades'])){

                    include("view_grades.php");
                }
                    
                    if(isset($_GET['delete_grades'])){

                        include("delete_grades.php");
                        
                        }    

                         
                    if(isset($_GET['edit_grades'])){

                        include("edit_grades.php");
                        
                        } 

                        //teacher

                        if(isset($_GET['insert_teacher'])){

                            include("insert_teacher.php");
                            
                            }

                            if(isset($_GET['view_teachers'])){

                                include("view_teachers.php");
                                
                                }

                                if(isset($_GET['view_teachers_waiting'])){

                                    include("view_teachers_waiting.php");
                                    
                                    }

                                    if(isset($_GET['view_teachers_suspended'])){

                                        include("view_teachers_suspended.php");
                                        
                                        }

                                        if(isset($_GET['approve_teacher'])){

                                            include("approve_teacher.php");
                                            
                                            }

                                            if(isset($_GET['suspension_teacher'])){

                                                include("suspension_teacher.php");
                                                
                                                }
                                          
                                                if(isset($_GET['unsuspension_teacher'])){

                                                    include("unsuspension_teacher.php");
                                                    
                                                    }

                                                if(isset($_GET['delete_teacher'])){

                                                    include("delete_teacher.php");
                                                    
                                                    }
                                                    if(isset($_GET['edit_teacher'])){

                                                        include("edit_teacher.php");
                                                        
                                                        }


//users
if(isset($_GET['insert_user'])){

    include("insert_user.php");
    
    }

    if(isset($_GET['view_users'])){

        include("view_users.php");
        
        }
        if(isset($_GET['edit_user'])){

            include("edit_user.php");
            
            }
            if(isset($_GET['delete_user'])){

                include("delete_user.php");
                
                }


                //profile
                if(isset($_GET['user_profile'])){

                    include("user_profile.php");
                    
                    }  
                    if(isset($_GET['edit_profile'])){

                        include("edit_profile.php");
                        
                        } 
                        if(isset($_GET['logout'])){

                            include("logout.php");
                            
                            } 


                            if(isset($_GET['insert_link'])){

                                include("insert_link.php");
                                
                                }     
                                if(isset($_GET['edit_link'])){

                                    include("edit_link.php");
                                    
                                    } 
                                    if(isset($_GET['view_schedule'])){

                                        include("view_schedule.php");
                                        
                                        } 
                                        
                                        if(isset($_GET['history'])){

                                            include("history.php");
                                            
                                            } 
                                            if(isset($_GET['student'])){

                                                include("student.php");
                                                
                                                } 
                                                if(isset($_GET['comment'])){

                                                    include("comment.php");
                                                    
                                                    }
                                                    if(isset($_GET['delete_comment'])){

                                                        include("delete_comment.php");
                                                        
                                                        }
                                                        if(isset($_GET['delete_message'])){

                                                            include("delete_message.php");
                                                            
                                                            }
                                                        
                                                        if(isset($_GET['message'])){

                                                            include("message.php");
                                                            
                                                            }
                                                            if(isset($_GET['budjet'])){

                                                                include("budjet.php");
                                                                
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