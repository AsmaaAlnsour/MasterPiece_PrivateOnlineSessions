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
            $sql = "SELECT * FROM users WHERE email ='$umail' AND password='$pass'";
                $result = mysqli_query($this->connect(), $sql);
                $row = mysqli_fetch_assoc($result);
                // SELECT user_type FROM users WHERE email ='asmaa@gmail.com' AND password='Asmaa@135792468';

                $check = "SELECT user_type FROM users WHERE email ='$umail' AND password='$pass'";
                $check1 = mysqli_query($this->connect(), $check);
                $check2 = mysqli_fetch_assoc($check1);
               
               
                if (mysqli_num_rows($result) === 1 &&  $check2['user_type'] === 'admin') {

$admin_email = mysqli_real_escape_string($this->connect(),$_POST['email']);

$admin_pass = mysqli_real_escape_string($this->connect(),$_POST['pass']);

$get_admin = "select * from users where email='$admin_email' AND password='$admin_pass'";


$run_admin = mysqli_query($this->connect(),$get_admin);

$count = mysqli_num_rows($run_admin);

if($count==1){
    // $_SESSION['admin_name']=$count['full_name'];
$_SESSION['admin_email']=$admin_email;

echo "<script>alert('You are Logged in into admin panel')</script>";

echo "<script>window.open('../admin_area/index.php?dashboard','_self')</script>";

}
else {

echo "<script>alert('Email or Password is Wrong')</script>";

}
               }
               elseif (mysqli_num_rows($result) === 1 ) {
                $_SESSION['user_email']=$row['email'];
                $_SESSION['user_name']=$row['full_name'];
                $_SESSION['user_id']=$row['id'];
    
                header("location:../private_online_sessions/../index.php");
                
           }
    
            else{$this->emailErr2= "wrong pass or email";
             
                }}}
        }
}
    









?>