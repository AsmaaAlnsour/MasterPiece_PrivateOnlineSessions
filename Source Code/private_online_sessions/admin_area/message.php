<?php



$get_b = "SELECT * FROM `messages`
WHERE delete_message=1 ";
$run_b = mysqli_query($con,$get_b);
$row_b=mysqli_fetch_array($run_b);

?>
<br>
<br>
<div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Your messages</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Subject</th>
                                            <th scope="col">Message</th>
                                               <th scope="col">Active </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                      
                      $x=1;
                      if ($result = $con->query($get_b) ) {
        
                          while($row = $result->fetch_assoc() ){

                          ?>
                         
                                        <tr>
                                            <th scope="row"><?php echo $x ?></th>
                                            <td><?php echo $row['name'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['subject'] ?></td>
                                            <td><?php echo $row['message'] ?></td>
                                            <td><a class="btn btn-sm btn-primary" href="index.php?delete_message=<?php echo $row['id']; ?>">Delete</a></td>

                                        </tr>
                                        <?php
                                            $x=$x+1;
                                        }}
                                        ?>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
