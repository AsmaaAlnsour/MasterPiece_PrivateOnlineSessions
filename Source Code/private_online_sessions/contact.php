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
        <h3 class="display-3 font-weight-bold text-white">Contact Us</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Contact Us</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid pt-5">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Get In Touch</span>
          </p>
          <h1 class="mb-4">Contact Us For Any Query</h1>
        </div>
        <div class="row">
          <div class="col-lg-7 mb-5">
            <div class="contact-form">
              <div id="success"></div>
              <form method="POST" action="">
              <form name="sentMessage" id="contactForm" novalidate="novalidate" >
                <div class="control-group">
                  <input
                    type="text"
                    name='name'
                    class="form-control"
                    id="name"
                    placeholder="Your Name"
                    required="required"
                    data-validation-required-message="Please enter your name"
                  >
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name='email'
                    placeholder="Your Email"
                    required="required"
                    data-validation-required-message="Please enter your email"
                  >
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <input
                    type="text"
                    class="form-control"
                    id="subject"
                    name='subject'
                    placeholder="Subject"
                    required="required"
                    data-validation-required-message="Please enter a subject"
                  >
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <textarea
                    class="form-control"
                    rows="6"
                    name='message'
                    id="message"
                    placeholder="Message"
                    required="required"
                    data-validation-required-message="Please enter your message"
                  ></textarea>
                  <p class="help-block text-danger"></p>
                </div>
                <div>
                  <input
                    class="btn btn-primary py-2 px-4"
                    type="submit"
                    name='submit'
                    id="sendMessageButton"
                    value='Send Message'
                  >
                </div>
              </form></form>
            </div>
          </div>
          <div class="col-lg-5 mb-5">
            <p>
            Your TeachMe learning experience is grounded
in cutting edge cognitive science. With more
than two dozen distinct learning features to
help you achieve your goals.
            </p>
            <div class="d-flex">
              <i
                class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Address</h5>
                <p>Q. Rania St., Amman, Jordan</p>
              </div>
            </div>
            <div class="d-flex">
              <i
                class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Email</h5>
                <p>info@teachme.com</p>
              </div>
            </div>
            <div class="d-flex">
              <i
                class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Phone</h5>
                <p>+962 77 712 3456</p>
              </div>
            </div>
            <div class="d-flex">
              <i
                class="far fa-clock d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Opening Hours</h5>
                <strong>Sunday - Friday:</strong>
                <p class="m-0">08:00 AM - 05:00 PM</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- Contact End -->
<?php
if(isset($_POST['submit'])){

$name = $_POST['name'];

$email = $_POST['email'];

$subject = $_POST['subject'];
$message = $_POST['message'];

$insert_message = "insert into messages (name,email,subject,message) values ('$name','$email','$subject','$message')";

$run_message = mysqli_query($con,$insert_message);

if($run_message){

echo "<script>alert('message has been sent successfully')</script>";

echo "<script>window.open('index.php','_self')</script>";

}

}




include './includes/footer.php';




?>