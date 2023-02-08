<?php



if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {


    $link_id= $_GET['edit_link'];
?>
<br><br>
 <div class="col-sm-12 col-xl-12  mt-2">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Add Link</h6>
                            <form method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Link</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="link" class="form-control" id="inputEmail3" required>
                                    </div>
                                </div>


        
                                <input type="submit" name="update" value="update User"  class="btn btn-primary">
                        </div>
                    </div>

                  
<?php
  if(isset($_POST['update'])){

    $link = $_POST['link'];



    $update_link = "UPDATE `booking` SET`link`=' $link' WHERE id=$link_id";

    $run_link = mysqli_query($con,$update_link);
    
    if($run_link){
    
    echo "<script> alert('User has been Add successfully') </script>";
    
    echo "<script>window.open('index.php?view_users','_self')</script>";
    
    }





  }



}
?>