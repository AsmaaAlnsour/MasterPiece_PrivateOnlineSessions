

<?php


if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {


if(isset($_POST['id'])){


if(isset($_GET['unsuspension_teacher'])){
 
$unsuspension_teacher = $_GET['unsuspension_teacher'];
    $update_teacher = "update teachers set suspend='1' where id='$unsuspension_teacher'";

    $run_teacher = mysqli_query($con,$update_teacher);
    
    if($run_teacher){
    


echo "<script> alert('One Teacher Has Been UnSuspension') </script>";

echo "<script>window.open('index.php?view_teachers','_self')</script>";

}

}
}
}





?>

   <div class="wrapper">
       <div class="container-fluid">
           <div class="row">
               <div class="col-md-12">
                   <h2 class="mt-5 mb-3">Delete Record</h2>
                   <form action="" method="post">
                       <div class="alert alert-danger">
                           <input type="hidden" name="id" value="<?php echo trim($_GET["unsuspension_teacher"]); ?>"/>
                           <p>Are you sure you want to UnSuspension this Teacher?</p>
                           <p>
                               <input type="submit" value="Yes" class="btn btn-danger">
                               <a href="index.php?view_teachers_suspended" class="btn btn-secondary">No</a>
                           </p>
                       </div>
                   </form>
               </div>
           </div>        
       </div>
   </div>

