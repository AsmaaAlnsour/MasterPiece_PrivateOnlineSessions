<?php
class Register extends db{
   public $emailErr ;
   public $nameErr ;
   public $phoneErr ;
   public  $passwordErr ;
   public $passwordConfirmErr;
   public $ageErr ;
   public $addressErr;
   public $name ;
   public $email  ;
   public $phone;
   public $password;
   public $passwordConfirm; 
   public $age ;
   public $address ;
   public $errorNum = 0;
    public function reg($Remail,$Rname,$Rpass,$Rpasscon,$Rage,$Radderss,$Rphone){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
            if (empty($Remail)) {
                $this->emailErr = "Email is required";
              } else {
                $email = $Remail;
                // check if e-mail address is well-formed
                if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                  $this->emailErr = "Invalid email format";
                }
              }
            
              if (empty($Rname)) {
                $this->nameErr = "Name is required";
                $this->errorNum++;
              } else {
                $name = $Rname;
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $this->nameErr = "Only letters and space are allowed in First Name filed"; 
                $this->errorNum++;
                }
              }
            
              if (empty($Rpass)) {
                $this->passwordErr = "Password is required";
                    $this->errorNum++;
                  } else {
                    $password = $Rpass;
              if( !preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})/",$password)  || strlen($password) < 10 || strlen($password) > 15 ) {
                $this->passwordErr = 'Password should be (10-15) characters in length and should include at least one upper case letter, one number, and one special character.';
                $this->errorNum++;
               
            }if($password!= $Rpasscon){
                $this->passwordConfirmErr =  "Passwords dosent match";
            }
            }
            if (empty($Rage)) {
                $this->ageErr = "Age is required";
                $this->errorNum++;
              } else {
                $age = $Rage;
              }
            
            
              if (empty($Radderss)) {
                $this->addressErr = "address is required";
                $this->errorNum++;
              } else {
                $address = $Radderss;
              }
            
            
              if (empty($Rphone)) {
                $this->phoneErr = "phone is required";
                $this->errorNum++;
            } else {
              $phone = $Rphone;
            }
            if ($this->errorNum == 0 ) {
            
            
                try {
                    // $phone=$_POST["phone"];
                    $addData="INSERT INTO users(id,full_name,email,password,address ,age,phone) 
                    VALUES('','$name','$email','$password ',' $address','$age','$phone')";
                    $this->connect()->query($addData);
                    header("Location:login.php");
                 
                
                } catch (\Throwable $th) {
                
                    // $emailErr3= "Please tray anouther First name or Email";
                }
            }

           
            
              
        }
    }
}
