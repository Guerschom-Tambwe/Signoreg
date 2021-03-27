<?php
session_start();
include("config/config.php");
    
    extract($_POST);

    if(isset($signin))
    {
    	$pass=md5($password);

    	$findDuplicateData= $conn->query("select * from user where email_id='$email_id' and password='$pass'");

    	$row = mysqli_fetch_array($findDuplicateData);

    	if(mysqli_num_rows($findDuplicateData)>0)
    	{
    		$_SESSION["email_id"]=$email_id;
    		$_SESSION["user_id"]=$row['user_id'];
    		$_SESSION["name"]=$row['name'];
    	}
    	else
    	{
    		$message="Invalid Credentials !";
    		
    	}
    }
if (isset($_SESSION["user_id"]))
{
	header("Location: welcome.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signoreg</title>

    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/mdb.min.css" />

 
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
     <h3 class="text-center p-2">SignoReg</h3>
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/login-image-1.png" alt="sing up image"></figure>
                       <!--  <a href="signup.php" class="signup-image-link">Create an account</a>
						<a href="forget.php" class="signup-image-link">Forget Password</a> -->
                    </div>
                    
                    <div class="signin-form">
						<?php
					if(count($_GET)>0){
						echo "<span class='text-success text-center'>Signup Success ! Please Login to Continue.</span>";
					}
					?>
					<?php
					if(isset($message)){
						echo "<span style='color:red;text-align:center;'>$message</span>";
					}
					?>
                       <!--  <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email_id" id="email_id" placeholder="Email ID" autocomplete="on" required />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" required/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form> -->
                       <!-- Default form login -->
                       <h2 class="text-center p-2 text-muted">Sign In</h2>
                        <form method="POST" class="text-center border border-light  register-form" id="login-form">

<!--                             <input type="email" id="email_id" name="email_id" class="form-control" placeholder="E-mail" autocomplete="on" required> -->            <div class="form-row mb-4">
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

                            <input type="submit" name="signin" id="signin" class="form-submit btn btn-info btn-block my-4" value="Log in"/>

                            <p>Not a member?
                                <a href="signup.php" class="signup-image-link">Sign Up</a>
                            </p>

                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <script src="js/signinvalidation.js"></script>
</body>
</html>