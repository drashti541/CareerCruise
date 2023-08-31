<?php
include('inc/config.php');
$jobpost=intval($_GET['jobpost']);
error_reporting(0); ?>
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
    <link rel="stylesheet" href="css/jobdetails.css">
    <link rel="stylesheet" href="modal/modal2.css">
    <link rel="stylesheet" href="head-foot/header.css">
    <link rel="stylesheet" href="head-foot/footer.css">
    <script src="https://kit.fontawesome.com/a42162768d.js" crossorigin="anonymous"></script> 
    <title>CAREER CRUISE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    
</head>
<body>
    <?php 
        include 'head-foot/header.php'
    ?>
    <?php 
        include 'modal/modal2.php'
    ?>
    <section>
        <div class="banner">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center h-100">                    
                <?php  if(!$_SESSION['user']) { } else { 
                    $sql = "SELECT * FROM jobpost WHERE jpid='$jobpost'";
	                $query = $dbh -> prepare($sql);
                    $query->execute();
                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                    $cnt=1;
                    if($query->rowCount() > 0) {
  	                    foreach($results as $result) { ?>
                <button class="button" onclick="window.open('jobpapply.php?jobpost=<?php echo htmlentities($result->jpid);?>','_self')" id="btn">Register Now</button> <?php } } }?>
                </div>
            </div>
        </div>
    </section>
    <div class="container search-box">
        <div class="row search-job"> <?php  if(!$_SESSION['user']) {?>
            <div class="container col-md-10  my-4 search">
                <form>
                    <h3 class="text-center">You have Not Logged in please <a href="userlogin.php">Login</a> and then Apply for Job</h3>
                </form>
            </div><?php } else { $sql = "SELECT * FROM jobpost WHERE jpid='$jobpost'";
	            $query = $dbh -> prepare($sql);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                $cnt=1;
                if($query->rowCount() > 0) {
  	                foreach($results as $result) { ?>
            <div class="container  col-md-10  my-4 search">
                <form action="" method="post" >
                    <div class="row cont text-center">
                        <div class= "d-inline-block m-auto">
                            <h1> <b><?php echo htmlentities($result->jobtitle); ?></b> </h1>
                            <h4><?php echo htmlentities($result->companyname); ?></h4>
                        </div>
                    </div>
                    <div class="row cont text-center">
                        <div class="col-md-3 d-inline-block m-auto">
                            <h4><b>Experience:</b></h4>
                            <p><small> <i class="fa fa-briefcase"></i> <?php echo htmlentities($result->experience); ?> Year</small></p>
                        </div>
                        <div class="col-md-3 d-inline-block m-auto">
                            <h4><b>Job Type:</b></h4>
                            <p><small><i class="fa-solid fa-user-tie"></i> <?php echo htmlentities($result->jobtype); ?></small></p>
                        </div>
                        <div class="col-md-3 d-inline-block m-auto">
                            <h4><b>Location:</b></h4>
                            <p><small><i class="fa fa-map-marker"></i> <?php echo htmlentities($result->location); ?></small></p>
                        </div>
                        <div class="col-md-3 d-inline-block m-auto">
                            <h4><b>CTC:</b></h4>
                            <p><small><i class="fa fa-inr"></i> <?php echo htmlentities($result->ctc); ?>Lacs p.a.</small></p>
                        </div>
                    </div>
                    <div class="row detail text-left">
                        <div class="d-inline-block m-auto">
                            <h4><u> Description:</u></h4>
                            <p> <b>CTC: </b> <?php echo htmlentities($result->ctc); ?></p>
                            <p><b> Job Location: </b>  <?php echo htmlentities($result->location); ?></p>
                            <p><b> Stipend for Training Bootcamp: </b> <?php echo htmlentities($result->stipend); ?> per month</p>
                            <p><b> Eligibility Criteria: </b>  <?php echo htmlentities($result->eligibilitycriteria); ?></p>
                        </div>
                    </div>
                </form>
            </div>
            <h4 class="detail">Eligible Courses:</h4>
            <div class="container col-md-10  detail my-4 search">
                <form action="" method="post" >
                <div class="row">
                    <div class=" d-inline-block m-auto">
                        <p> <?php echo htmlentities($result->eligibilitycourses); ?></p>
                    </div>
                </div>
                </form>
            </div>
            <h4 class="detail">Eligiblity Criteria:</h4>
            <div class="container  col-md-10 detail my-4 search">
                <form action="" method="post" >
                <div class="row">
                    <div class="d-inline-block m-auto">
                        <p> <b> Eligibility Criteria:</b> <?php echo htmlentities($result->eligibilitycriteria); ?></p>
                    </div>
                </div>
                </form>
            </div>
            <h4 class="detail">Selection Process Details:</h4>
            <div class="container col-md-10 detail my-4 search">
                <form action="" method="post" >
                <div class="row">
                    <div class="d-inline-block m-auto">  
                        <p> <?php echo htmlentities($result->selectionprocess); ?></p>
                    </div>
                </div>    
                </form>
            </div>
            <h4 class="detail">Other Details:</h4>
            <div class="container col-md-10 detail my-4 search">
                <form action="" method="post" >
                <div class="row">
                    <div class="d-inline-block m-auto">
                        <p> <?php echo htmlentities($result->odetails); ?></p>
                    </div>
                </div>
                </form>
            </div>
            <div class="container-fluid">
                <form action="" class="row p-3 ">
                    <div class="col-md-5 d-inline-block m-auto detail my-4 search text-center">
                    <h4 class="detail">About the organization:</h4>
                        <p><?php echo htmlentities($result->aboutorganization); ?></p>
                    </div>
                    <div class="col-md-5 d-inline-block m-auto detail my-4 search text-center">
                    <h4 class="detail">Contact Person:</h4>
                    <p><?php echo htmlentities($result->contactpname); ?></p>
                    <p><a href="mailto:<?php echo htmlentities($result->contactpemail);?>"><?php echo htmlentities($result->contactpemail);?></a></p>    
                    </div>
                </form>
            </div>
            <?php } } } ?>
        </div>
    </div>
    <?php include 'head-foot/footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/job.js"></script>
    <script src="head-foot/header.js"></script>
    <script src="modal/modal2.js"></script>
</body>
</html>