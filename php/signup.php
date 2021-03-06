
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../css3/style1.css">
    <title>Registration Form</title>
</head>

<body>
    <!-- header section starts ==============================-->
    <header id="header" class="header">

    </header>
    <!-- header section ends ================================-->


    <!-- main section starts ================================-->
    <main id="main" class="main">

        <!-- form section starts  ===============================-->
        <form method="post" id="form" class="form" action="/php/includes/signup.inc.php">
            <h1>Register With Us</h1>
            <span id="message"></span> <!-- error message-->


            <!-- home section starts ================================-->
            <section style="margin: 0px; padding: 0px;" id="home">
                <div style="margin: 0px; padding: 0px;" class="form-control">
                    <label for="fullName">Full Name</label>
                    <input style="width: 304px; height: 54px;" type="text" class="form_data" id="fullName" name="uid" placeholder="Enter your Full Name" />
                    <small id="name_error" class= "text-danger"></small> <!-- error message-->
                </div>
                <div class="form-control">
                    <label for="email">Email</label>
                    <input style="width: 304px; height: 54px;" type="email" class="form_data" id="email" name="email"
                        placeholder="Enter your Email Address" />
                    <small id="email_error" class= "text-danger"></small> <!-- error message-->
                </div>
                <div class="form-control">
                    <label for="password">Password</label>
                    <input style="width: 304px; height: 54px;" type="password" class="form_data" id="password1" name="pwd" placeholder="Enter Password" />
                    <i id="eyeBtn" class="material-icons">
                        <span id="icon" class="material-icons-outlined">visibility_off</span>
                    </i>
                    <small id="pwd_error" class= "text-danger"></small> <!-- error message-->
                </div>
                <div class="form-control">
                    <label for="repeatPassword">Confirm Password</label>
                    <input style="width: 304px; height: 54px;" type="password" class="form_data" id="repeatPassword" name="pwdRepeat"
                        placeholder="Enter Password Again" />
                    <i id="eyeBtn1" class="material-icons">
                        <span id="icon1" class="material-icons-outlined">visibility_off</span>
                    </i>
                    <small id="pwdRepeat_error" class= "text-danger"></small> <!-- error message-->
                </div>
            </section>
            <!-- home section ends ==================================-->


            <!-- captcha section starts =============================-->
            <section id="captcha">
                <div class="form-row">
                    <div class="g-recaptcha" data-sitekey="6LecxVwdAAAAAG4crDsUWtDDLrXWtge3b0tqsqWM"></div>
                </div>
                <!--<div class="form-row-wrapper">-->
                    <!-- <div id="captcha1" class="captcha1"> -->
                    <!-- <input type="text" class="form_data" id="input-captcha1" name="captcha"
                        placeholder="Enter Captcha" />
                    <small id="captcha_error"></small> <!-- error message-->
                    <!-- </div> -->
                    <!-- <div id="captcha2" class="captcha2"> -->
                    <!-- <input type="text" class="" id="input-captcha2" name="captcha2" readonly />
                    <span id="icon2" class="material-icons">refresh</span>
                    <span id="icon3" class="material-icons"><img src="../php/classes/captcha.classes.php" alt="Captcha_image"></span> -->
                <!--</div>-->
            </section>
            <!-- captcha section ends ===============================-->


            <!-- button section starts ==============================-->
            <section id="btn">
                <button type="button" name="submit" class="btn-submit btn-primary" id="submit"><a href="#">Register</a></button>
            </section>
            <!-- button section ends ================================-->


            <!-- footer section starts ==============================-->
            <section id="footer">
                <footer>
                    <p class="member">
                        Already a member? <a href="../root/login.html"><span>Sign in</span></a>
                    </p>
                </footer>
            </section>
            <!-- footer section ends ================================-->


        </form>
        <!-- form section ends ==================================-->

        <!-- Password Validation section starts -->
        <div id="pwd-info">
            <div class="pwd-info-chield">
                <h4 class="text-info">Password must contain:</h4>
                <ul>
                    <li id="length" class="invalid">
                        <i class="times-icon fa fa-times" aria-hidden="true"></i> At least <strong>8 characters</strong>
                    </li>

                    <li id="letter" class="invalid">
                        <i class="times-icon fa fa-times" aria-hidden="true"></i> At least <strong>one letter</strong>
                    </li>

                    <li id="capital" class="invalid">
                        <i class="times-icon fa fa-times" aria-hidden="true"></i> At least <strong>one capital
                            letter</strong>
                    </li>

                    <li id="number" class="invalid">
                        <i class="times-icon fa fa-times" aria-hidden="true"></i> At least <strong>one number</strong>
                    </li>

                    <li id="special" class="invalid">
                        <i class="times-icon fa fa-times" aria-hidden="true"></i> At least <strong>one special
                            character</strong>
                        <span>examples ! @ # $ % ^ & *</span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Password Validation section ends -->


    </main>
    <!-- main section ends ==================================-->

    <!-- JavaScript Code -->
    <script src="../js/main1.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <!-- JavaScript Code Ends-->

</body>

</html>