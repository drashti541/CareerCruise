<?php
session_start();
include('inc/config.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/userlogin.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="head-foot/header.css">
    <link rel="stylesheet" href="head-foot/footer.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/a42162768d.js" crossorigin="anonymous"></script> 

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Career Cruise</title>

    <style>
        @import url('fonts/Source_Sans_Pro/SourceSansPro-Light.ttf'); 
        @import url('https://fonts.googleapis.com/css2?family=Signika+Negative:wght@500&display=swap');
    </style>
</head>
<body>
    <?php include 'head-foot/header.php'?></br></br></br>
<header>
  <div class="containermain p-5 m-5">
    <?php
        if (isset($_SESSION['user'])) {
            $email=$_SESSION['user'];
            $sql ="SELECT * FROM user_login WHERE email=:email ";
            $query= $dbh -> prepare($sql);
            $query-> bindParam(':email', $email, PDO::PARAM_STR);
            $query-> execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);
            if($query->rowCount() > 0)
            { foreach($results as $result)
                ?>
        <div class="row">
          <div class="col-md-3 forms">
            
            <img src="images/homep-counter-3client.png">

          </div>

          <div class="col-lg forms">
            <div class="form signup text-center">              
              <h1>Hello <?php echo htmlentities($result->name); ?>!</h1>
              <h6><?php echo htmlentities($result->email); ?></h6>
            </div>
            
            <a href="logout.php"><button type="submit" class="btns m-4" href="logout.php">Log Out</button></a> 
          </div>
        </div>
    <?php } } else { ?>
        <span class="contact100-form-title">You have Not Logged in please Login <br> <a href="userlogin.php">Login</a></span>
    <?php } ?>
  </div>
</header>
<?php include 'head-foot/footer.php'?>
<script src="js/userlogin-reg.js"></script>
</body>
</html>