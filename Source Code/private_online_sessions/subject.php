<?php
include './includes/db.php';
session_start();
include './includes/header.php';
if(isset($_GET['grade_id'])){
$grade_id=$_GET['grade_id'];

$get_sub = "select grades_id,subject,subjects.id,subject_img,subject_keywords,
delete_subject,grades.grade,grades.description,grades.img,grades.min_age,
grades.max_age,grades.tuition_fee,grades.delete_grade from `subjects` INNER JOIN `grades`
 WHERE grades.id=$grade_id AND grades_id=$grade_id AND delete_subject='1'
 AND delete_grade='1' 
    ";
$run_sub = mysqli_query($con,$get_sub);

$row_sub=mysqli_fetch_array($run_sub);

}else{
    $get_sub = "select grades_id,subject,subjects.id,subject_img,subject_keywords,
    delete_subject,grades.grade,grades.description,grades.img,grades.min_age,
    grades.max_age,grades.tuition_fee,grades.delete_grade from `subjects` INNER JOIN `grades`
 WHERE delete_subject='1' AND  grades.id=grades_id AND delete_grade='1' ";

    $run_sub = mysqli_query($con,$get_sub);
    
    $row_sub=mysqli_fetch_array($run_sub);
}

?>
<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
  <div
    class="d-flex flex-column align-items-center justify-content-center"
    style="min-height: 400px"
  >
    <h3 class="display-3 font-weight-bold text-white">Subjects</h3>
    <div class="d-inline-flex text-white">
      <p class="m-0"><a class="text-white" href="">Home</a></p>
      <p class="m-0 px-2">/</p>
      <p class="m-0">Our Classes / Subjects</p>
    </div>
  </div>
</div>
<!-- Header End -->
 <!-- Class Start -->
 <div class="container-fluid pt-5">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Subjects</span>
          </p>
          <?php
          if ($row_sub >= '1' ) {?>
          <h1 class="mb-4">Classes for <?php echo $row_sub['grade'];?></h1>
          <?php
          }else{ ?>
           <h1 class="mb-4">We Will Add Subjects To this Grade As Soon</h1>
         <?php }?>
        </div>

        <div class="row">
          <?php
							if ($result = $con->query($get_sub) ) {
							  while($row = $result->fetch_assoc() ){
                               
                                ?>
							
          <div class="col-lg-4 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
              <img style="height: 250px;" class="card-img-top mb-2" src="<?php if ($row['subject_img']!=null){ echo './admin_area/subject_images/'.$row['subject_img'];}else{echo './admin_area/subject_images/bb.jpg';}  ?>" alt="" />
              <div class="card-body text-center">
                <h4 class="card-title"><?php echo $row['subject']; ?></h4>
                <p class="card-text">
                <?php echo $row['description']; ?>
                </p>
              </div>
              <div class="card-footer bg-transparent py-4 px-5">
                <div class="row border-bottom">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Age of student</strong>
                  </div>
                  <div class="col-6 py-1"> <?php echo $row['min_age']; ?> - <?php echo $row['max_age']; ?> Years</div>
                              </div>
                <div class="row">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Tution Fee</strong>
                  </div>
                  <div class="col-6 py-1"><?php echo $row['tuition_fee']; ?> JOD / Hour</div>
                </div>
              </div>
              <a href="teacher.php?subject_id=<?php echo $row['id']; ?>" class="btn btn-primary px-4 mx-auto mb-4">Teachers</a>
            </div>
          </div>
          <?php
                }}
          ?>
          </div></div></div>
<?php
    include './includes/footer.php';
    ?>