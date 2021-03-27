<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome | Signoreg</title>

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
                        <figure><img src="images/welcome-image.png" alt="sing up image"></figure>
                    </div>
                    
                    <div class="signin-form">
                        <h3 class="text-muted">Hello, <?php echo $_SESSION['name'];?>!</h3>
                        <a class="h4" href="logout.php">Logout</a>
                        
                       
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script src="js/main.js"></script>
</body>
</html>