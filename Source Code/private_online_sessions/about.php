<?php
include './includes/db.php';
session_start();
include './includes/header.php';
?>


    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 400px"
      >
        <h3 class="display-3 font-weight-bold text-white">About Us</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">About Us</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <img
              class="img-fluid rounded mb-5 mb-lg-0"
              src="img/about-1.jpg"
              alt=""
            />
          </div>
          <div class="col-lg-7">
            <p class="section-title pr-5">
              <span class="pr-2">Learn About Us</span>
            </p>
            <h1 class="mb-4">Best Website For You And Your Kids</h1>
            <p>
            Your TeachMe learning experience is grounded in cutting edge cognitive science. With more than two dozen distinct learning features to help you achieve your goals, our approach follows three key principles:
<br><br>
Experience
<br>
Learn new knowledge and skills in a variety of ways, from engaging video lectures and dynamic graphics to data visualizations and interactive elements.
<br><br>
Practice
<br>
Demonstrating your knowledge is a critical part of learning. TeachMe
courses and programs provide a space to practice with quizzes, open response assessments, virtual environments, and more.
<br><br>
Apply
<br>
Learning on TeachMe  transforms how you think and what you can do, and translates directly into the real world—immediately apply your new capabilities in the context of your job.
            </p>
            <div class="row pt-2 pb-4">
              <div class="col-6 col-md-4">
                <img class="img-fluid rounded" src="img/about-2.jpg" alt="" />
              </div>
              <div class="col-6 col-md-8">
                <ul class="list-inline m-0">
                  <li class="py-2 border-top border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Experience
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Practice
                  </li>
                  <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Apply
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->



    

<?php
    include './includes/footer.php';
    ?>