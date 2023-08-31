<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/0login-reg.css">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a42162768d.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Career Cruise</title>

    <style>
      @import url('../fonts/Source_Sans_Pro/SourceSansPro-Light.ttf'); 
      @import url('https://fonts.googleapis.com/css2?family=Signika+Negative:wght@500&display=swap');
      </style>

</head>
<body>
    <header>
        <div class="head">
            <h1>CAREER CRUISE</h1>
            <h3>Welcome to our Community!!!</h3>
            <img src="../images/5070812-removebg-preview.png" alt="">
        </div>


        <div class="head1">
            <div class="form">
            <span class="title">Login</span>
            <form action="../php/1login.php" method="post">

                
                <?php if(isset($_GET['error'])){ ?>
                <p class="error-msg">
                <?php echo $_GET['error']; ?>
                </p>
                <?php } ?>

                <div class="input-field">
                    <input type="text" name="email" placeholder="Enter your email" 
                    value="<?php echo (isset($_GET['name']))?$_GET['name']:""; ?>">
                    <i class="uil uil-envelope icon"></i>
                </div>
                <div class="input-field">
                    <input type="password" class="password" name="password" placeholder="Enter your password"
                    value="<?php echo (isset($_GET['password']))?$_GET['password']:""; ?>">
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>

                <div class="checkbox-text">
                    <div class="checkbox-content">
                        <input type="checkbox" id="logCheck">
                        <label for="logCheck" class="label">Remember me</label>
                    </div>
                    
                    <div class="checkbox-content">
                    <a href="#" class="text">Forgot password?</a>
                    </div>
                </div>

                <div class="input-field button">
                    <a href="../html/2homepage.php">
                        <input type="submit" name="submit" value="Login">
                    </a>    
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="0reg.php" class="text signup-link">Signup Now</a>
                    </span>
                </div>


        </div>
        </div>
    </header>
    <script src="../js/1signin.js"></script>
    
</body>
</html>