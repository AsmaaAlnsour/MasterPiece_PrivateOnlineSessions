<?php
session_start();

class login extends db{
   public $emailErr;
   public $passwordErr;
   public $emailErr2;
    
    public function log($umail,$pass){
    if (isset($umail) && isset($pass)) {

        if (empty($umail)) {
            $this->emailErr= "Please enter your email";
        }if(empty($pass)){
            $this->passwordErr= "Please enter your passwored";
        }
       
        
        if(!empty($pass) && !empty($umail)){
            $sql = "SELECT * FROM teachers WHERE email ='$umail' AND password='$pass'";
                $result = mysqli_query($this->connect(), $sql);
                $row = mysqli_fetch_assoc($result);

                $check = "SELECT user_type FROM users WHERE email ='$umail' AND password='$pass'";
                $check1 = mysqli_query($this->connect(), $check);
                $check2 = mysqli_fetch_assoc($check1);
                
                if (mysqli_num_rows($result) === 1 ) {

$teacher_email = mysqli_real_escape_string($this->connect(),$_POST['email']);

$teacher_pass = mysqli_real_escape_string($this->connect(),$_POST['pass']);

$get_teacher = "select * from teachers where email='$teacher_email' AND password='$teacher_pass'";
$run_teacher = mysqli_query($this->connect(),$get_teacher);
$row_teacher = mysqli_fetch_array($run_teacher);
$count = mysqli_num_rows($run_teacher);

if($count==1){
$_SESSION['teacher_name']=$row_teacher['full_name'];
$_SESSION['teacher_email']=$teacher_email;

echo "<script>alert('You are Logged in into Teacher panel')</script>";

echo "<script>window.open('../teacher_area/index.php?dashboard','_self')</script>";

}
}else{
                $this->emailErr2= "wrong Password or Email";
                }}}
        }
    }
    









?>