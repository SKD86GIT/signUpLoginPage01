<?php 

// Instantiate SignupContr class

include '/php/classes/dbh.classes.php';
include '/php/classes/signup.classes.php';
include '/php/classes/signup-contr.classes.php';

// To check whether the user actually clicking on submit button

if (isset($_POST["submit"])){

    $uid = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];
    // $captcha = $_POST["captcha"];
}


 // reCAPTCHA validation
            if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

                // Google secret API
                $secretAPIkey = '6LfZ4AAVAAAAAF722GPGWyJ_lf1F2hMSWzPHmuYc';

                // reCAPTCHA response verification
                $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretAPIkey.'&response='.$_POST['g-recaptcha-response']);

                // Decode JSON data
                $response = json_decode($verifyResponse);
                    if($response->success){

                        $response = array(
                            "status" => "alert-success",
                            "message" => ""
                        );
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Robot verification failed, please try again."
                        );
                        echo json_encode($response);
                    }
            }else{ 
                $response = array(
                    "status" => "alert-danger",
                    "message" => "Plese check on the reCAPTCHA box."
                );
                echo json_encode($response);
            } 



$signup = new SignupContr($uid, $email, $pwd, $pwdRepeat);

// Running ErrorHandler and user signup

$signup -> signupUsers();

// Going back to front page

header ("location: ../signup.php?error=none");