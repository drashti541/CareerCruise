<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../images/logo.png" rel="icon" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="../css/b-investment.css">
    <link rel="stylesheet" href="../modal/modal5.css">
    <link rel="stylesheet" href="../modal/w-invest-1.css">
    <link rel="stylesheet" href="../head-foot/header1.css">
    <link rel="stylesheet" href="../head-foot/footer.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->
    <script src="https://kit.fontawesome.com/a42162768d.js" crossorigin="anonymous"></script> 
    <title>CAREER CRUISE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
        include '../head-foot/header.php'
    ?>
    <section>
        <div class="banner"></div>
    </section>
    <section id="investors">
        <h1 class="heading-text"> OUR TOP INVESTOR </h1>
        <div class="container-fluid">
            <div class="row ins">
                <div class="investment sec  col-md-3 col-sm-12 m-auto p-3">
                        <img src="../images/angel.png" alt="" >
                        <h3 class="mt-2">Sanjay Mehta</h3>
                        <h5>venture capitalist and investor in technology</h5>
                        <hr>
                        <h6 class="d-inline m-5"><i class="fa-solid fa-comment-dots"></i> Chat</h6>
                        <h6 class="d-inline m-5"><i class="fa-solid fa-phone"></i> Call</h6>  
                        <hr>
                </div>
                <div class="investment sec  col-md-3 col-sm-12 m-auto p-3">
                        <img src="../images/man2.png" alt="" >
                        <h3 class="mt-2">Anand Chandrasekaran</h3>
                        <h5>one of India’s most active angel investors</h5>
                        <hr>
                        <h6 class="d-inline m-5"><i class="fa-solid fa-comment-dots"></i> Chat</h6>
                        <h6 class="d-inline m-5"><i class="fa-solid fa-phone"></i> Call</h6>  
                        <hr>
                </div>
                <div class="investment sec  col-md-3 col-sm-12 m-auto p-3">
                        <img src="../images/angel.png" alt="" >
                        <h3 class="mt-2">Vijay Shekhar Sharma</h3>
                        <h5>Paytm’s founder and CEO,top-level advisor and investor</h5>
                        <hr>
                        <h6 class="d-inline m-5"><i class="fa-solid fa-comment-dots"></i> Chat</h6>
                        <h6 class="d-inline m-5"><i class="fa-solid fa-phone"></i> Call</h6>  
                        <hr>
                </div>
            </div>
        </div>
    </section>
    <?php
        include '../modal/w-invest-1.php'
    ?>
    <section id="card">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center m-auto">
                    <p class="promo-title "><b>Small Investment,</b></p>
                    <p class="promo-title "><b>Big Returns!!</b></p>
                    <button class="button" data-toggle="modal" data-target="#myModal">Get Started</button>
                </div>
                <div class="col-md-6 text-center m-auto">
                    <img src="../images/b-invest.png" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <div class="contactus">
    <h1 class="text-center ">GET IN TOUCH</h1>
    <?php 
        include '../modal/modal5.php'
    ?>
    <button class="btns d-block m-auto" data-toggle="modal" data-target="#myModal4">Contact Us</button>
    </div>
    <?php 
        include '../head-foot/footer.php'
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../head-foot/header.js"></script>
    <script src="../modal/w-invest-1.js"></script>
    </body>
</html>