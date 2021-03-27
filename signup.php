<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up | Signoreg</title>

    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/mdb.min.css" />

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="main">
        <h3 class="text-center p-2">SignoReg</h3>
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title text-muted text-center">Sign up</h2>

                        <?php
                    if(count($_GET)>0){
                        echo "<span style='color:green;text-align:center;'>Mobile Number or Email Id already exsit</span>";
                    }
                    ?>

                        <form method="POST" class="register-form text-center border border-light p-1" id="register-form" action="process.php"
                        action="#!">

                            <div class="form-row mb-4">
                                <div class="col">
                                    <input type="text" name="name" id="fullName" placeholder="Full Name" required minlength="6" maxlength="30" class="form-control">
                                    <span id="fullNameError"  class="form-text text-primary mb-4"></span>
                                </div>
                            </div>


                            <div class="form-row mb-4">
                                <div class="col">
                                    <input type="email" name="email_id" id="email_id" placeholder="Email Address" required class="form-control" placeholder="E-mail" minlength="6" maxlength="30">
                                    <span id="emailError" class="form-text text-primary"></span>
                                </div>
                            </div>
                            <div class="form-row mb-4">
                                <div class="col">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password"  minlength="6" maxlength="30" required class="form-control">
                                        <span id="passwordError" class="form-text text-primary"></span>
                                </div>
                            </div>
                            <div class="form-row mb-4">
                                <div class="col">
                                    <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" placeholder="Confirm Password"  required />

                                        <span id="passwordConfirmError" class="form-text text-primary"></span>
                                </div>
                            </div>

                            <div class="form-row mb-4">
                                <div class="col">
                                    <input name="phone" type="tel" minlength="10" maxlength="10" id="phone" placeholder="Phone"  required class="form-control" placeholder="Phone number">
                                    <span id="phoneError" class="form-text text-primary"></span>
                                </div>
                            </div>

                            <input type="submit" name="save" id="signup" class="form-submit" value="Register"class="btn btn-info my-4 btn-block"/>

                            <p class="mt-3">Already a member?
                                <a a href="index.php" class="signup-image-link">Sign In</a>
                            </p>

                        </form>

                    </div>
                    <div class="signup-image">
                        <figure><img src="images/register-image-1.png" alt="sign up image"></figure>
                        
                    </div>
                </div>
            </div>
        </section>
        </div>

    <script src="js/signupvalidation.js"></script>
	
</body>
</html>