<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/logo.png" rel="icon" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="css/w-investment.css">
    <link rel="stylesheet" href="modal/modal5.css">
    <link rel="stylesheet" href="head-foot/header.css">
    <link rel="stylesheet" href="head-foot/footer.css">
    <script src="https://kit.fontawesome.com/a42162768d.js" crossorigin="anonymous"></script> 
    <title>CAREER CRUISE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
</head>
<body>
    <?php include 'head-foot/header.php'?>
    
    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center m-auto">
                    <p class="promo-title ">Find <b>INVESTORS</b> & <br> Get Funding for your <b>STARTUP</b>.</p>
                    <p class="promo-content ">Research investors and competitors in one place with <b>CAREER CRUISE</b>.</p>
                   
                </div>
                <div class="col-md-6 text-center m-auto">
                    <img src="images/b-investment.png" class="img-fluid">
                </div>
            </div>
        </div>
        <img src="images/design3.png" class="bottom-img">
    </section>

    <section id="investment">
        <div class="container">
            <div class="investor-details">
                <form action="w-invest-1.php" method="post" >
                    <div class="row cont text-center">
                        <div class="col-md-5">
                            <img src="images/right_investor.png" class="img-fluid">
                        </div>
                        <div class="col-md-7 text-center m-auto">
                            <p class="title "><b>FIND THE RIGHT INVESTOR</b></p>
                            <p class="content ">Entrepreneurs use <b>CAREER CRUISE</b> to expand beyond their network. Custom searches help you find active investors in your space that match your ideal criteria, whether that be industry, exit count, or location.</p>
                            <button class="btns" type="submit" name="investor">SEARCH</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="container-fluid counter ">
            <h1 class="heading-text ">Build Your Entrepreneur With Personalized Lists</h1>
            <h4 class="text-center p-2 content">Here are some examples of searches entrepreneurs have created to find investors and raise startup capital.</h4>
            <div class="container-fluid">
                <div class="row investor m-auto">
                    <div class="col-md-5 d-inline-block m-auto  search text-center">
                    <img src="images/early.png" alt="" >
                        <p class="detail">Angel Investors Who Invest in Seed-Stage Rounds</p>
                        <hr>
                        <p class="content">Filters: investor stage + industry</p>
                    </div>
                    <div class="col-md-5 d-inline-block m-auto search text-center">
                    <img src="images/angel.png" alt="" >
                        <p class="detail">Angel Investors Who Invest in Late-Stage Rounds</p>
                        <hr>
                        <p class="content">Filters: location + investor type + investor stage</p>   
                    </div>
                </div>
            </div>
</div>
            <?php 
                include 'modal/modal5.php'
            ?>
            

        </div> 
    </section>
    
    <?php include 'head-foot/footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="head-foot/header.js"></script>
    </body>
</html>