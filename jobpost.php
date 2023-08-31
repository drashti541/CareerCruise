<?php
   include('inc/config.php');
   if(isset($_POST['subjobpost']))
   {  $title = $_POST['title'];
      $cname = $_POST['cname'];
      $jrole = $_POST['jrole'];
      $jtype = $_POST['jtype'];
      $experience = $_POST['experience'];
      $ctc = $_POST['ctc'];
      $stip = $_POST['stip'];
      $location = $_POST['location'];
      $ecrit = $_POST['ecrit'];
      $ecour = $_POST['ecour'];
      $odetails = $_POST['odetails'];
      $selepro = $_POST['selepro'];
      $aboutorg = $_POST['aboutorg'];
      $contpername = $_POST['contpername'];
      $contpernumber = $_POST['contpernumber'];
      $contperemail = $_POST['contperemail'];
      $sql = "INSERT INTO jobpost (jobtitle,companyname,jobrole,jobtype,experience,ctc,stipend,location,eligibilitycriteria,eligibilitycourses,odetails,selectionprocess,aboutorganization,contactpname,contactpcontact,contactpemail) VALUES( :title, :cname, :jrole, :jtype, :experience, :ctc, :stip, :location, :ecrit, :ecour,:odetails, :selepro, :aboutorg, :contpername, :contpernumber, :contperemail)";
      $query = $dbh->prepare($sql);
      $query->bindParam(':title',$title,PDO::PARAM_STR);
      $query->bindParam(':cname',$cname,PDO::PARAM_STR);
      $query->bindParam(':jrole',$jrole,PDO::PARAM_STR);
      $query->bindParam(':jtype',$jtype,PDO::PARAM_STR);
      $query->bindParam(':experience',$experience,PDO::PARAM_STR);
      $query->bindParam(':ctc',$ctc,PDO::PARAM_STR);
      $query->bindParam(':stip',$stip,PDO::PARAM_STR);
      $query->bindParam(':location',$location,PDO::PARAM_STR);
      $query->bindParam(':ecrit',$ecrit,PDO::PARAM_STR);
      $query->bindParam(':ecour',$ecour,PDO::PARAM_STR);
      $query->bindParam(':odetails',$odetails,PDO::PARAM_STR);
      $query->bindParam(':selepro',$selepro,PDO::PARAM_STR);
      $query->bindParam(':aboutorg',$aboutorg,PDO::PARAM_STR);
      $query->bindParam(':contpername',$contpername,PDO::PARAM_STR);
      $query->bindParam(':contpernumber',$contpernumber,PDO::PARAM_STR);
      $query->bindParam(':contperemail',$contperemail,PDO::PARAM_STR);
      $query->execute();
      $lastInsertId = $dbh->lastInsertId();
      if($lastInsertId) { $msg = " Job Posted Successfully"; } else { $error = " Something went wrong. Please try again"; } header( "refresh:3;url=hire.php" );
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
            <h4 class="heading-text">JOB POSTING</h4>
        </div>
        <center><?php if($error){?><div class="errorWrap"><a class="btn btn-warning btn-icon-split"><i class="fas fa-exclamation-triangle"></i></span><span class="text">  <?php echo htmlentities($error); ?></span></a></div><?php }
		else if($msg){?><div class="succWrap text-white"><a class="btn btn-success btn-icon-split"><i class="fas fa-check"></i></span><span class="text">  <?php echo htmlentities($msg); ?></span></a></div><?php }?><br></center>
        <form method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <h5 class="col-md-12 text-center p-3">Basic Details</h5>
                  <div class="col-sm column">
                    <input type="text" name="title" class="form-control-sm input" aria-label="Job Title" placeholder="Job Title" required>
                    </div>
                    <div class="col-sm column">
                    <input type="text" name="cname" class="form-control-sm input" aria-label="Company Name" placeholder="Company Name" required>
                  </div>
                </div>
                
                <div class="row mb-3">
                  <div class="col-sm column">
                    <input type="text" name="jrole" class="form-control-sm input" placeholder="Job Role" required>
                  </div>
                  
                  <div class="col-sm column">
                    <select name="jtype" class="form-control-sm input" aria-label="Select Job Type" required>
                      <option value="" disabled selected>Select Job Type</option>
                      <option value="Full-Time">Full-Time</option>
                      <option value="Part-Time">Part-Time</option>
                      <option value="Remote">Remote</option>
                      <option value="Hybrid">Hybrid</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm column">
                    <input type="number" name="experience" class="form-control-sm input" placeholder="Experienced" required>
                  </div>

                  <div class="col-sm column">
                    <input type="text" name="ctc" class="form-control-sm input" placeholder="CTC" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm column">
                    <input type="number" name="stip" class="form-control-sm input" placeholder="Stipend during internship" required>
                  </div>

                  <div class="col-sm column">
                  <input type="text" name="location" class="form-control-sm input" placeholder="Location" required>
                  </div>
                </div>

                <div class="row mb-3">
                <h5 class="col-md-12 text-center p-3">Candidate Requirement</h5>
                  <div class="col-sm column">
                  <input type="text" name="ecrit" class="form-control-sm input" placeholder="Eligibility Criteria" required>
                  </div>

                  <div class="col-sm column">
                  <input type="text" name="ecour" class="form-control-sm input" placeholder="Eligibility Courses" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm column">
                  <textarea rows="4" cols="50" name="odetails" class="form-control-sm input" placeholder="Other Details" required></textarea>
                  </div>

                  <div class="col-sm column">
                  </div>
                </div>

                <div class="row mb-3">
                  <h5 class="col-md-12 text-center p-3">Interview Information</h5>
                  <div class="col-sm column">
                  <input type="text" name="selepro" class="form-control-sm input" placeholder="Selection Process" required>
                  </div>

                  <div class="col-sm column">
                  <input type="url" name="aboutorg" class="form-control-sm input" placeholder="About Organization URL" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm column">
                  <input type="text" name="contpername" class="form-control-sm input" placeholder="Contact Person Name" required>
                  </div>

                  <div class="col-sm column">
                  <input type="number" name="contpernumber" class="form-control-sm input" placeholder="Contact Person Number" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm column">
                  <input type="email" name="contperemail" class="form-control-sm input" aria-describedby="emailHelp" placeholder="Contact Person Email-ID" required>
                  </div>

                  <div class="col-sm column">
                  </div>
                </div>

                <div class="col-sm d-flex justify-content-center">
                <button type="submit" name="subjobpost" class="btns">SUBMIT</button>
                </div>
        </form>
</div>
<?php include 'head-foot/footer.php'?>

    <script src="head-foot/header.js"></script>
</body>
</html>
