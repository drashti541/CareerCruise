<?php
session_start();
error_reporting(0);
include('inc/config.php'); ?>
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
    <link rel="stylesheet" href="head-foot/header.css">
    <link rel="stylesheet" href="head-foot/footer.css">
    <link rel="stylesheet" href="css/w-invest-1_4.css">
    <script src="https://kit.fontawesome.com/a42162768d.js" crossorigin="anonymous"></script> 
    <title>CAREER CRUISE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
        include 'head-foot/header.php'
    ?>

    <section id="investment">
        <div class="container invest">
        <h1 class="heading-text">Venture capital firms</h1>

        <form action="w-invest-1_4.php" method="post">
                <?php $sql = "SELECT * FROM investorreg WHERE iinvestortype='Venture capital firms'";
                $query = $dbh->prepare($sql);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                $cnt = 1;
                if ($query->rowCount() > 0) {
                    foreach ($results as $result) { ?>
                        <div class="investment">
                            <div class="row investor-update text-justify">
                                <div class="col-md-5 sec1">
                                    <img src="admin/uploads/img/<?php echo htmlentities($result->ipp); ?>" alt="" width="400px" class="img text-justify">
                                </div>
                                <div class="col-md-4 sec2">
                                    <h3><b><?php echo htmlentities($result->iname); ?></b></h3>
                                    <p><?php echo htmlentities($result->iabout); ?> </p><br>
                                    <h5>Type of Intvestor : </h4>
                                    <p><?php echo htmlentities($result->iinvestortype); ?> </p><br>
                                </div>
                                <div class="col-md-3 sec3">
                                    <h3><b>Connect with</b></h3>
                                  
                                    <p><i class="fa-brands fa-linkedin"></i> <a href="<?php echo htmlentities($result->ildprofile); ?>">LinkedIn Profile</a></p>
                                   
                                    <p><i class="fa-solid fa-hand-holding-dollar"></i> <?php echo htmlentities($result->ihopetoallocate); ?></p>

                                    <p><i class="fa-solid fa-envelope"></i> <a href="mailto:<?php echo htmlentities($result->iemail); ?>"><?php echo htmlentities($result->iemail); ?></a></p>
                                    
                                    <p><i class="fa-solid fa-circle-info"></i> <?php echo htmlentities($result->ietechstartups); ?></p>
                                </div>
                            </div>
                            <div class="apply-btn">
                                <button class="btn d-block m-auto"><a href="mailto:<?php echo htmlentities($result->iemail); ?>">Contact Now</a></button>
                            </div>
                        </div>
                        <?php } } ?>
            </form>
        </div>
    </section>

    <?php 
        include 'head-foot/footer.php'
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="head-foot/header.js"></script>
    </body>
</html>