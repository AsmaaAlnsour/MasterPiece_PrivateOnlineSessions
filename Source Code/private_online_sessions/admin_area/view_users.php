<?php



if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('../dashboard/login.php','_self')</script>";

}

else {

?>
<br><br>
 <div class="col-sm-12 col-xl-12  mt-2">
    <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">View Subjects</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>Image</th>
<th>User Name</th>
<th>Email</th>
<th>Password</th>
<th>Age</th>
<th>Phone</th>
<th>Address</th>
<th>User Type</th>
<th>Edit</th>
<th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                              
<?php

$get_user = "select * from users WHERE delete_user='1'";

$run_user = mysqli_query($con,$get_user);

while($row_user = mysqli_fetch_array($run_user)){

$user_id = $row_user['id'];

$full_name = $row_user['full_name'];

$email = $row_user['email'];

$profile_pic = $row_user['profile_pic'];

$password= $row_user['password'];
$age= $row_user['age'];
$phone= $row_user['phone'];
$address= $row_user['address'];
$user_type= $row_user['user_type'];




?>

<tr>

<td><img src="user_image/<?php echo $profile_pic; ?>" width="60" height="60" ></td>

<td><?php echo $full_name; ?></td>

<td><?php echo $email; ?></td>
<td><?php echo $password; ?></td>
<td><?php echo $age; ?></td>
<td><?php echo $phone; ?></td>
<td><?php echo $address; ?></td>
<td><?php echo $user_type; ?></td>
<td>

<a href="index.php?edit_user=<?php echo $user_id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>
<td>

<a href="index.php?delete_user=<?php echo $user_id; ?>" >

<i class="fa fa-trash-o" ></i> Delete

</a>

</td>


</tr>


<?php } ?>

                                    
                                </tbody>
                            </table>
                        </div></div>

                        









<?php }?>