<?php 
class SignupContr extends Signup {
    private $uid;
    private $email;
    private $pwd;
    private $pwdRepeat;
    // private $captcha;

    public function __construct($uid, $email, $pwd, $pwdRepeat){

        $this->uid=$uid;
        $this->email=$email;
        $this->pwd=$pwd;
        $this->pwdRepeat=$pwdRepeat;
        // $this->captcha=$captcha;
    }

    public function signupUsers(){
        $success ='';
        $emptyInput_error ='';
        $name_error ='';
        $email_error ='';
        $pwd_error ='';
        $pwdRepeat_error ='';
        // $captcha_error ='';
        $emailTaken_error ='';
        
        if($this->emptyInput()==false){
          echo $emptyInput_error ='One or more input fields are empty!';
        }elseif($this->invalidUid()==false){
            $name_error ='Invalid name format! Numbers or special characters are not allowed.';
        }elseif($this->invalidEmail()==false){
            $email_error ='Invalid email format!';
        }elseif($this->invalidPwd()==false){
            $pwd_error ='Either password is too short or an invalid password format';
        }elseif($this->pwdMatch()==false){
            $pwdRepeat_error ='Passwords do not match!';
        }elseif($this->emailTakenCheck()==false){
            $emailTaken_error ='An user is already exist in database with this email address!';
        }else{
            $this->setUsers($this->uid, $this->email, $this->pwd);
            $success ='<div class="alert alert-success">Congratulations! You have successfully registered with us.</div>';
        }
        $output = array(
            "success" => $success,
            "emptyInput_error" => $emptyInput_error,
            "name_error" => $name_error,
            "email_error" => $email_error,
            "pwd_error" => $pwd_error,
            "pwdRepeat_error" => $pwdRepeat_error,
            // "captcha_error" => $captcha_error,
            "emailTaken_error" => $emailTaken_error
        );

        echo json_encode($output);
    }

    // Error Handler

    private function emptyInput(){
        $result;
        if(empty($this->uid)||empty($this->email)||empty($this->pwd)||empty($this->pwdRepeat)||empty($this->captcha)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function invalidUid(){
        $result;
        if(!preg_match("^(?=.*[A-z-' ])", $this->uid)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function invalidEmail(){
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function invalidPwd(){
        $result;
        if(!preg_match("^(?=.*[A-z])||(?=.*[0-9@!#$%^&*_'-<>?.{8}])", $this->pwd)){
            $result = false;
        }else{
            $result = true; 
        }
        return $result;
    }

    private function pwdMatch(){
        $result;
        if($this->pwd !== $this->pwdRepeat){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    /*private function captchaMatch(){
        $result;
       session_start();
        if($_POST['captcha'] != $_SESSION['digit']) {
            // die("Sorry, the CAPTCHA code entered was incorrect!");
            $result = false;
        }else{
            $result = true;
        }
        session_unset();
        session_destroy();
        return $result;
    }*/

    private function emailTakenCheck(){
        $result;
        if(!$this->checkUsers($this->email)){
            $result = false;
        }else{
            $result = true;
        }
        return result;
    }

    



}