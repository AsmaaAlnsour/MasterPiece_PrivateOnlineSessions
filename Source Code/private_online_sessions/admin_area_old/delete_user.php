
<?php


if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {


if(isset($_POST['id'])){


if(isset($_GET['delete_user'])){
 
$delete_id = $_GET['delete_user'];
    $update_user = "update users set delete_user='0' where id='$delete_id'";

    $run_user = mysqli_query($con,$update_user);
    
    if($run_user){
    


echo "<script> alert('One User Has Been Deleted') </script>";

echo "<script>window.open('index.php?view_users','_self')</script>";

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
                           <input type="hidden" name="id" value="<?php echo trim($_GET["delete_user"]); ?>"/>
                           <p>Are you sure you want to delete this record?</p>
                           <p>
                               <input type="submit" value="Yes" class="btn btn-danger">
                               <a href="index.php?view_users" class="btn btn-secondary">No</a>
                           </p>
                       </div>
                   </form>
               </div>
           </div>        
       </div>
   </div>

