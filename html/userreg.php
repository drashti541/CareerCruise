<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/userlogin.css">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/a42162768d.js" crossorigin="anonymous"></script> 

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Career Cruise</title>

    <style>
        @import url('../fonts/Source_Sans_Pro/SourceSansPro-Light.ttf'); 
        @import url('https://fonts.googleapis.com/css2?family=Signika+Negative:wght@500&display=swap');
    </style>

</head>
<body>

<header>
  <div class="container">

    <div class="row">

      <div class="col-lg forms">
        <h1>CAREER CRUISE</h1>
        <h3>Welcome to our Community!!!</h3>
        <img src="../images/5070812-removebg-preview.png" alt="">
      </div>

      <div class="col-lg forms">
      <div class="form signup">
                <span class="title">Registration</span>


                <form action="usersignup.php" method="post">

                <?php if(isset($_GET['error'])){ ?>
                    <div class="error-msg">
                        <?php echo $_GET['error'];?>
                    </div>
                <?php } ?>

                <?php if(isset($_GET['success'])){ ?>
                    <div class="success-msg">
                        <?php echo $_GET['success'];?>
                    </div>
                <?php } ?>

                    <div class="field name-field">
                        <div class="input-field">
                            <input type="text" name="name" class="name" placeholder="Enter your name" 
                            value="<?php echo (isset($_GET['name']))?$_GET['name']:"" ?>">
                            <i class="uil uil-user"></i>                       
                        </div>

                        <!--<span class="error name-error">
                            <i class="bx bx-error-circle error-icon"></i>
                            <p class="error-text">Please enter name</p>
                        </span>-->
                    </div>

                    <div class="field email-field">
                        <div class="input-field">
                            <input type="text" placeholder="Enter your email" class="email" name="email" 
                            value="<?php echo (isset($_GET['email']))?$_GET['email']:"" ?>">
                            <i class="uil uil-envelope icon"></i>
                        </div>

                        <!-- <span class="error email-error">
                            <i class="bx bx-error-circle error-icon"></i>
                           <p class="error-text">Please enter valid email</p>
                        </span>-->
                    </div>

                    <div class="field create-password">
                    <div class="input-field">
                        <input type="password" class="password" name="pass" placeholder="Create a password" 
                        value="<?php echo (isset($_GET['pass']))?$_GET['pass']:"" ?>">
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash show-hide"></i>
                    </div>

                    <span class="error">
                        <p class="error-text">Minimum 8 characters with atleast one Capital letter, Small letter, Number and Special Symbol.</p>
                    </span>
                </div>


                    <div class="field confirm-password">
                    <div class="input-field">
                        <input type="password" class="cpassword" name="cpass" placeholder="Confirm a password" 
                        value="<?php echo (isset($_GET['cpass']))?$_GET['cpass']:"" ?>">
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash show-hide"></i>
                    </div>

                    <span class="error">
                        <p class="error-text">Same as Password</p>
                    </span>
                </div>
                    
                    
                    <div class="input-field button">
                    <a href="usersignup.php">
                        <input type="submit" name="submit" value="Signup"> 
                    </a> 
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already a member?
                        <a href="userlogin.php" class="text login-link">Login Now</a>
                    </span>
                </div>
            </div>
        
      </div>

    </div>
  </div>
</header>
<script src="../js/userlogin-reg.js"></script>
</body>
</html>