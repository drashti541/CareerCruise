<?php
   include('inc/config.php');
   $jobpost=intval($_GET['jobpost']);
   if(isset($_POST['jobapp']))
   {  $jcname = $_POST['jcname'];
      $janame = $_POST['janame'];
      $jaemail = $_POST['jaemail'];
      $rfile = $_FILES["rfile"]["name"];
      $jpid = $_POST['jpid'];
      move_uploaded_file($_FILES["rfile"]["tmp_name"],"admin/uploads/job/".$_FILES["rfile"]["name"]);
      $sql = "INSERT INTO jobapply (janame,jaemail,jaresume,jacompany,jpid) VALUES(:janame, :jaemail, :rfile, :jcname,:jpid)";
      $query = $dbh->prepare($sql);
      $query->bindParam(':jcname',$jcname,PDO::PARAM_STR);
      $query->bindParam(':janame',$janame,PDO::PARAM_STR);
      $query->bindParam(':jaemail',$jaemail,PDO::PARAM_STR);
      $query->bindParam(':rfile',$rfile,PDO::PARAM_STR);
      $query->bindParam(':jpid',$jpid,PDO::PARAM_STR);
      $query->execute();
      $lastInsertId = $dbh->lastInsertId();
      if($lastInsertId) { $msg = " Job Application Submitted Successfully"; } else { $error = " Something went wrong. Please try again"; } header( "refresh:3;url=jobsearch.php" );
   } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mentorreg.css">
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
    <div class="containermain p-5 m-5">
        <div class="row">
            <h4 class="heading-text">JOB APPLICATION</h4>
        </div>
        <center><?php if($error){?><div class="errorWrap"><a class="btn btn-warning btn-icon-split"><i class="fas fa-exclamation-triangle"></i></span><span class="text">  <?php echo htmlentities($error); ?></span></a></div><?php }
		else if($msg){?><div class="succWrap text-white"><a class="btn btn-success btn-icon-split"><i class="fas fa-check"></i></span><span class="text">  <?php echo htmlentities($msg); ?></span></a></div><?php }?><br></center>
        <form method="post" enctype="multipart/form-data">
        <?php $sql = "SELECT * FROM jobpost WHERE jpid='$jobpost'";
	            $query = $dbh -> prepare($sql);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                $cnt=1;
                if($query->rowCount() > 0) {
  	                foreach($results as $result) { ?>
                <div class="row mb-3">
                  <h5 class="col-md-12 text-center p-3">Basic Details</h5>
                  <div class="col-sm column">
                    <input type="text" name="jcname" class="form-control-sm input" aria-label="Job Title" value="<?php echo htmlentities($result->companyname); ?>"  readonly>
                    </div>
                    <div class="col-sm column">
                    <input type="text" name="janame" class="form-control-sm input" aria-label="Applier Name" placeholder="Applier Name" required>
                  </div>
                </div>
                
                <div class="row mb-3">
                  <div class="col-sm column">
                    <input type="email" name="jaemail" class="form-control-sm input" placeholder="Applier Email" required>
                  </div>

                  <div class="col-sm column">
                    <input class="form-control-sm input" name="rfile" id="formFileSm" type="file" accept="application/pdf" required>
                  </div>                  
                </div>

                <div class="row mb-3">
                  <div class="col-sm column">
                    <input type="hidden" name="jpid" value="<?php echo htmlentities($result->jpid); ?>" class="form-control-sm input" required>
                  </div>
                </div>

                  <div class="col-sm column">
                  </div>

                <div class="col-sm d-flex justify-content-center">
                <button type="submit" name="jobapp" class="btns">SUBMIT</button>
                </div>
                
            <?php } } ?>
        </form>
</div>
<?php include 'head-foot/footer.php'?>

    <script src="head-foot/header.js"></script>
</body>
</html>
