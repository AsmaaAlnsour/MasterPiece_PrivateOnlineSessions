<?php

session_start();

include("includes/db.php");

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {




?>

<?php

// $admin_session = $_SESSION['admin_email'];

// $get_admin = "select * from admin  where admin_email='$admin_session'";

// $run_admin = mysqli_query($con,$get_admin);

// $row_admin = mysqli_fetch_array($run_admin);

// $admin_id = $row_admin['admin_id'];

// $admin_name = $row_admin['admin_name'];

// $admin_email = $row_admin['admin_email'];

// $admin_image = $row_admin['admin_image'];






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


// $get_coupons = "SELECT * FROM coupons";
// $run_coupons = mysqli_query($con,$get_coupons);
// $count_coupons = mysqli_num_rows($run_coupons);


?>


<!DOCTYPE html>
<html>

<head>

<title>Admin Panel</title>

<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >


</head>

<body>

<div id="wrapper"><!-- wrapper Starts -->

<?php include("includes/sidebar.php");  ?>

<div id="page-wrapper"><!-- page-wrapper Starts -->

<div class="container-fluid"><!-- container-fluid Starts -->

<?php

if(isset($_GET['dashboard'])){

include("dashboard.php");

}

if(isset($_GET['insert_product'])){

include("insert_product.php");

}

if(isset($_GET['view_products'])){

include("view_products.php");

}

if(isset($_GET['delete_product'])){

include("delete_product.php");

}

if(isset($_GET['edit_product'])){

include("edit_product.php");

}


// if(isset($_GET['view_p_cats'])){

// include("view_p_cats.php");

// }


if(isset($_GET['insert_subject'])){

    include("insert_subject.php");
    
    }
    
    if(isset($_GET['view_subjects'])){
    
    include("view_subjects.php");
    
    }
    
    if(isset($_GET['delete_subject'])){
    
    include("delete_subject.php");
    
    }
    
    if(isset($_GET['edit_subject'])){
    
    include("edit_subject.php");
    
    }
    


if(isset($_GET['insert_grades'])){

include("insert_grades.php");

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



if(isset($_GET['view_customers'])){

include("view_customers.php");

}

if(isset($_GET['customer_delete'])){

include("customer_delete.php");

}


if(isset($_GET['view_orders'])){

include("view_orders.php");

}

if(isset($_GET['order_delete'])){

include("order_delete.php");

}



if(isset($_GET['view_massege'])){

    include("view_massege.php");
    
    }
    
    if(isset($_GET['delete_message'])){
    
    include("delete_message.php");
    
    }


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



if(isset($_GET['insert_teacher'])){

    include("insert_teacher.php");
    
    }
    
    if(isset($_GET['view_teachers'])){
    
    include("view_teachers.php");

    }
    if(isset($_GET['view_teachers_waiting'])){
    
        include("view_teachers_waiting.php");
    
        }
    if(isset($_GET['edit_teacher'])){
    
        include("edit_teacher.php");
        
        }
    
    if(isset($_GET['delete_teacher'])){
    
    include("delete_teacher.php");
    
    }
    if(isset($_GET['suspension_teacher'])){
    
        include("suspension_teacher.php");
        
        }
        if(isset($_GET['unsuspension_teacher'])){
    
            include("unsuspension_teacher.php");
            
            }
        

        if(isset($_GET['view_teachers_suspended'])){
    
            include("view_teachers_suspended.php");
            
            }

    if(isset($_GET['approve_teacher'])){
    
        include("approve_teacher.php");
        
        }

if(isset($_GET['user_profile'])){

include("user_profile.php");

}
if(isset($_GET['edit_profile'])){

    include("edit_profile.php");
    
    }

if(isset($_GET['insert_box'])){

include("insert_box.php");

}

if(isset($_GET['view_boxes'])){

include("view_boxes.php");

}

if(isset($_GET['delete_box'])){

include("delete_box.php");

}

if(isset($_GET['edit_box'])){

include("edit_box.php");

}



if(isset($_GET['edit_css'])){

include("edit_css.php");

}


if(isset($_GET['insert_coupon'])){

include("insert_coupon.php");

}

if(isset($_GET['view_coupons'])){

include("view_coupons.php");

}

if(isset($_GET['delete_coupon'])){

include("delete_coupon.php");

}


if(isset($_GET['edit_coupon'])){

include("edit_coupon.php");

}


if(isset($_GET['insert_icon'])){

include("insert_icon.php");

}


if(isset($_GET['view_icons'])){

include("view_icons.php");

}

if(isset($_GET['delete_icon'])){

include("delete_icon.php");

}

if(isset($_GET['edit_icon'])){

include("edit_icon.php");

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
 }
  ?>