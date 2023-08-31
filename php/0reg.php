<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a42162768d.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="../css/0login-reg.css">
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
            <span class="title">Registration</span>
            <form action="1signup.php" method="post">

                
                    <?php if(isset($_GET['error'])){ ?>
                        <p class="error-msg">
                        <?php echo $_GET['error']; ?>
                    </p>
                    <?php } ?>

                    <?php if(isset($_GET['success'])){ ?>
                        <p class="success-msg">
                        <?php echo $_GET['success']; ?>
                        </p>
                    <?php } ?>
              
                <div class="input-field">
                    <input type="text" name="name" placeholder="Enter your name"

                    value="<?php echo (isset($_GET['name']))?$_GET['name']:""; ?>">

                    <i class="uil uil-user"></i>
                </div>
                <div class="input-field">
                    <input type="text" name="email" placeholder="Enter your email" 
                    
                    value="<?php echo (isset($_GET['email']))?$_GET['email']:""; ?>">

                    <i class="uil uil-envelope icon"></i>
                </div>
                <div class="input-field">
                    <input type="password" name="password" class="password" placeholder="Create a password" 
                    value="<?php echo (isset($_GET['password']))?$_GET['password']:""; ?>">

                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>
                <div class="input-field">
                    <input type="password" name="cpassword" class="password" placeholder="Confirm a password" 
                    value="<?php echo (isset($_GET['cpassword']))?$_GET['cpassword']:""; ?>">

                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>

                <div class="checkbox-text">
                    <div class="checkbox-content1">
                        <input type="checkbox" id="termCon">
                        <label for="termCon" class="text">I accepted all terms and conditions</label>
                    </div>
                </div>

                <div class="input-field button">
                    <a href="../php/1signup.php">
                        <input type="submit" name="submit" value="SignUp">
                    </a> 
                </div>
            </form>

                <div class="login-signup">
                <span class="p">Already a member?
                    <a href="0login.php" class="text login-link">Login Now</a>
                </span>
                </div>

            </div>
        </div>
            
    </header>
    <script src="../js/1signin.js"></script>

</body>

</html>