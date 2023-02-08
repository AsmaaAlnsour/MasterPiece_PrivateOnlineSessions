<!-- Connection -->
<?php 
  require_once './classes/dbh.classes.php';
    include './classes/class_login.php';?>

<?php


$login=new login();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $login->log($_POST['email'],$_POST['pass']);

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .cascading-right {
          margin-right: -50px;
        }
    
        @media (max-width: 991.98px) {
          .cascading-right {
            margin-right: 0;

          }
       .w-400{
        width: 100%;
       }
     
      }
        
        .container{
          margin-right: 10px;
          margin-left: auto;
        }
        .error{
    color:red;
}
.btn{

  margin-left: 40% ;
  padding-right: 25px;
  padding-left: 25px;
  padding-top: 10px;
  padding-bottom: 10px;
  background-color: #00394F;
  color: white;
}
.btn:hover{
  background-color: #00394F; 
  color: white;
}

body{
  /* background: linear-gradient(90deg, rgba(249,249,249,1) 0%, rgba(188,249,255,1) 8%, rgba(249,249,249,1) 100%); */
  background-color: #17A2B8;
}
      </style>
</head>
<body>
    
</body>
</html>


<section class="text-center text-lg-start">

  
    <!-- Jumbotron -->
    <div class="container py-4">
      <div class="row g-0 align-items-center">
        <div class="col-6 mb-5 mb-lg-0">
          <div class="card cascading-right" style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              ">
            <div class="card-body p-5 shadow-5">
              <h2 class="fw-bold mb-5">Login</h2>
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
                
                <!-- Email input -->
                <div class="form-outline">
                    
                    <label class="form-label" for="form3Example3">Email address </label>
                    <input type="email" id="email" name="email" class="form-control" >
                    <div id="email-error" class="error"></div>
            <span class="error">
                <?php
                if (isset($login->emailErr)) {
                    echo  $login->emailErr;
                }
           
                ?>
            </span>
                </div>
                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">Password</label>
                    <input type="password" id="pass" name="pass" class="form-control">
                    <div id="password-error" class="error"></div>
            <span class="error">
                <?php
                if (isset($login->passwordErr)) {
                    echo $login->passwordErr;
                }
                if (isset($login->emailErr2)) {
                  echo $login->emailErr2;
              }
                ?>
            </span>
                </div>


                
                <!-- Submit button -->
                <button type="submit" class="btn  btn-primary btn-block  mb-4">
                  Login
                </button>
                <br>
                <br>
                <p>Don't have an account? <a href="registration.php" style="text-decoration: none;" class="fw-bold">Sign up</a></p>
                <p>Are you Teacher? <a href="loginAsTeacher.php" style="text-decoration: none;" class="fw-bold">Login As a Teacher</a></p>
  

              </form>
            </div>
          </div>
        </div>
  
        <div class="col-6 mb-5 mb-lg-0">
          <img src="image.jpg"  style="height: 500px; wigth: 100%"  class="w-400 rounded-4 shadow-4" alt="" >
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>

  </body>
  </html>