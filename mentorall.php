<?php
include('inc/config.php');
error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mentor1.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="head-foot/header.css">
    <link rel="stylesheet" href="head-foot/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a42162768d.js" crossorigin="anonymous"></script> 
  
    
    <title>Career Cruise</title>

    <style>
        @import url('fonts/Source_Sans_Pro/SourceSansPro-Light.ttf'); 
        @import url('https://fonts.googleapis.com/css2?family=Signika+Negative:wght@500&display=swap');
    </style>

</head>
<body>
    <?php include 'head-foot/header.php'?>
        
        <header>
            <h1 class="heading-text">OUR MENTORS</h1>
            <?php $sql = "SELECT * FROM mentorreg WHERE astatus = 'approved'";
	            $query = $dbh -> prepare($sql);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                $cnt=1;
                if($query->rowCount() > 0) {
  	                foreach($results as $result) { ?>
            <div class="container card">

                <div class="row">
                    <div class="col-lg-3 d-flex-row justify-content-center text-center">
                        <img src="admin/uploads/img/<?php echo htmlentities($result->mpp); ?>" alt="" class="img">
                            <div class="mentor-tag">
                                <p><?php echo htmlentities($result->mjobr); ?></p>
                            </div>
                    </div>

                    <div class="col-lg-6 mentor-about">
                        <h2><?php echo htmlentities($result->mfname); ?> <?php echo htmlentities($result->mlname); ?></h2>
                        <h3><?php echo htmlentities($result->mjobr); ?></h3>
                        <p><?php echo htmlentities($result->mabout); ?></p>
                    </div>
                    
                    <div class="col-lg-3 mentor-contact">
                        <h3>Connect with</h3>
                        
                        <p><i class="fa-regular fa-calendar"></i> <?php echo htmlentities($result->mavai); ?></p>

                        <p><i class="fa-solid fa-comment-dots"></i> <?php echo htmlentities($result->mcallm); ?></p>

                        <p><i class="fa-solid fa-envelope"></i> <a href="mailto:<?php echo htmlentities($result->memail); ?>"><?php echo htmlentities($result->memail); ?></a></p>

                        <p><i class="fa-solid fa-laptop"></i> One-on-One, online mentoring via meet.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="mentor-connect">
                        <button onclick="window.open('mailto:<?php echo htmlentities($result->memail); ?>')">Contact Now</button>
                    </div>
                </div>  
            </div>
            <?php } } ?>

        </header>

        <?php include 'head-foot/footer.php'?>
                  
          <script src="head-foot/header.js"></script>