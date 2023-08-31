<?php
include('inc/config.php');
error_reporting(0); 
?>
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
    <link rel="stylesheet" href="css/job.css">
    <link rel="stylesheet" href="head-foot/header.css">
    <link rel="stylesheet" href="head-foot/footer.css">
    <script src="https://kit.fontawesome.com/a42162768d.js" crossorigin="anonymous"></script> 
    <title>CAREER CRUISE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
</head>
<body>
  <?php include 'head-foot/header.php'?>
    
    <section>
        <div class="banner text-center">
            <h1>FIND JOB!!</h1>
            <h3>WE ARE HIRING!!</h3>

            <div class="search-job">
            <button class="btn d-block m-auto" type="submit" name="searchcompany"><a href="jobsearch.php"> View Jobs</a></button>
            </div>
        </div>
    </section>


    <section id="recruiter">
        <div class="container text-center">
            <h3>TOP RECRUITER</h3>
            <div>
                <img src="images/dell.png" alt="">
                <img src="images/oracle.png" alt="">
                <img src="images/cisco.png" alt="">
                <img src="images/netflix.png" alt="">
                <img src="images/amazon.png" alt="">
                <img src="images/flipkart.png" alt="">
            </div>
            <div>
                <img src="images/infosys.png" alt="">
                <img src="images/wipro.png" alt="">
                <img src="images/linde.png" alt="">
                <img src="images/l&t.png" alt="">
                <img src="images/google.png" alt="">
                <img src="images/microsoft.png" alt="">
            </div>
        </div>
    </section>

    <section id="jobs">
        <div class="container">
            <h5>RECENT UPDATES</h5>            
            <?php $sql = "SELECT * FROM jobpost ORDER BY jobpost.postedtime DESC LIMIT 3";
                $query = $dbh->prepare($sql);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                $cnt = 1;
                if ($query->rowCount() > 0) {
                  foreach ($results as $result) {?>
            <div class="company-details">
                <div class="job-update">
                    <h4><b><?php echo htmlentities($result->jobtitle);?></b></h4>
                    <p><?php echo htmlentities($result->companyname);?></p>
                    <i class="fa fa-briefcase"></i><span> <?php echo htmlentities($result->experience);?> Year</span><br>
                    <i class="fa fa-inr"></i><span> <?php echo htmlentities($result->ctc);?> Lacs p.a. </span><br>
                    <i class="fa fa-map-marker"></i><span> <?php echo htmlentities($result->location);?> </span> 
                </div>
                <div class="apply-btn">
                    <a href="jobdetails.php?jobpost=<?php echo htmlentities($result->jpid);?>" class="btn">View Details</a>
                </div>
            </div><?php } } ?>
        </div>
    </section>
    <div class="container counter ">
        <h1 class="heading-text">JOBCLUES SITE STATS</h1>
            <div class="counter-row">
                <div class="counter-row-col">
                <img src="images/job-seeking.png" alt="" >
                    <div class="counter-row-inner" data-number="2000">
                        <h1>0</h1>
                    </div>
                    <h2 class="paragraph-text">JOB SEEKERS</h2>
                </div>
                <div class="counter-row-col">
                <img src="images/employee.png" alt="">
                    <div class="counter-row-inner" data-number="3000">
                        <h1>0</h1>
                    </div>
                    <h2 class="paragraph-text">EMPLOYERS</h2>
                </div>
                <div class="counter-row-col">
                <img src="images/active jobs.png" alt="">
                    <div class="counter-row-inner" data-number="4000">
                        <h1>0</h1>
                    </div>
                    <h2>ACTIVE JOBS</h2>
                </div>
                <div class="counter-row-col">
                <img src="images/company.png" alt="">
                    <div class="counter-row-inner" data-number="5000">
                        <h1>0</h1>
                    </div>
                    <h2 class="paragraph-text">COMPANIES</h2>
                </div>
            </div>
    </div>
    <?php 
        include 'head-foot/footer.php'
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/job.js"></script>
    <script src="head-foot/header.js"></script>
    <script src="js/homepage.js"></script>
    </body>
</html>