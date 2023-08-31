<?php
   session_start();
   error_reporting(0);
   include('inc/config.php');
   if(isset($_POST['mentoreg']))
   {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $pnumber = $_POST['pnumber'];
      $pimg = $_FILES["pimg"]["name"];
      $rfile = $_FILES["rfile"]["name"];
      $jobrole = $_POST['jobrole'];
      $fees = $_POST['fees'];
      $avaiblity=$_POST['avaiblity']; 
      $mavai=implode(", ",$avaiblity);
      $contactme=$_POST['contactme']; 
      $mcallm=implode(", ",$contactme);
      $about = $_POST['about'];
      move_uploaded_file($_FILES["pimg"]["tmp_name"],"admin/uploads/img/".$_FILES["pimg"]["name"]);
      move_uploaded_file($_FILES["rfile"]["tmp_name"],"admin/uploads/pdf/".$_FILES["rfile"]["name"]);
      $sql = "INSERT INTO mentorreg (mfname,mlname,memail,mcon,mpp,mrf,mjobr,mfee,mavai,mcallm,mabout) VALUES(:fname,:lname, :email, :pnumber, :pimg, :rfile, :jobrole, :fees, :mavai, :mcallm, :about)";
      $query = $dbh->prepare($sql);
      $query->bindParam(':fname',$fname,PDO::PARAM_STR);
      $query->bindParam(':lname',$lname,PDO::PARAM_STR);
      $query->bindParam(':email',$email,PDO::PARAM_STR);
      $query->bindParam(':pnumber',$pnumber,PDO::PARAM_STR);
      $query->bindParam(':pimg',$pimg,PDO::PARAM_STR);
      $query->bindParam(':rfile',$rfile,PDO::PARAM_STR);
      $query->bindParam(':jobrole',$jobrole,PDO::PARAM_STR);
      $query->bindParam(':fees',$fees,PDO::PARAM_STR);
      $query->bindParam(':mavai',$mavai,PDO::PARAM_STR);
      $query->bindParam(':mcallm',$mcallm,PDO::PARAM_STR);
      $query->bindParam(':about',$about,PDO::PARAM_STR);
      $query->execute();
      $lastInsertId = $dbh->lastInsertId();
      if($lastInsertId) { $msg = " Mentor Registration Submitted Successfully"; } else { $error = " Something went wrong. Please try again"; } header( "refresh:3;url=mentor.php" );
   }
?>
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
            <h4 class="heading-text">MENTOR REGISTRATION</h4>
        </div>
        <center><?php if($error){?><div class="errorWrap"><a class="btn btn-warning btn-icon-split"><i class="fas fa-exclamation-triangle"></i></span><span class="text">  <?php echo htmlentities($error); ?></span></a></div><?php }
		else if($msg){?><div class="succWrap text-white"><a class="btn btn-success btn-icon-split"><i class="fas fa-check"></i></span><span class="text">  <?php echo htmlentities($msg); ?></span></a></div><?php }?><br></center>
        <form method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <div class="col-sm column">
                    <input type="text" name="fname" class="form-control-sm input" placeholder="First name" aria-label="First name" required>
                  </div>
                  <div class="col-sm column">
                    <input type="text" name="lname" class="form-control-sm input" placeholder="Last name" aria-label="Last name" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm column">
                    <input type="email" name="email" class="form-control-sm input" placeholder="Email" required>
                  </div>

                  <div class="col-sm column">
                    <input type="number" name="pnumber" class="form-control-sm input"  placeholder="Phone Number" required>
                  </div>
                </div>


                <div class="row mb-3">
                <div class="col-sm-2 column">
                    <label for="formFileSm" class="form-label">Upload Profile Photo</label>
                </div>

                <div class="col-sm-4 column">
                  <input class="form-control-sm input" name="pimg" id="formFileSm" type="file" accept="image/png, image/gif, image/jpeg, image/jpg"  required>
                  </div>

                  <div class="col-sm-2 column">
                    <label for="formFileSm" class="form-label">Upload Resume</label>
                    </div>
                    <div class="col-sm-4 column">
                  <input class="form-control-sm input" name="rfile" id="formFileSm" type="file" accept="application/pdf" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm column">
                    <input type="text" name="jobrole" class="form-control-sm input" placeholder="Your Current Job Role" required>
                  </div>

                  <div class="col-sm column">
                    <input type="number" name="fees" class="form-control-sm input" placeholder="Your Fees" required>
                  </div>
                </div>


                <div class="row mb-3">
                <div class="col-sm column">
                    <label for="formFileSm" class="form-label">Weekly Avaiblity</label>
                </div>

                <div class="col-sm column">
                <input class="form-check-input" name="avaiblity[]" type="checkbox" value="Monday" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">Monday
                        </label> 
                </div>

                <div class="col-sm column">
                <input class="form-check-input" name="avaiblity[]" type="checkbox" value="Tuesday" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">Tuesday
                        </label> 
                </div>

                <div class="col-sm column">
                <input class="form-check-input" name="avaiblity[]" type="checkbox" value="Wednesday" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">Wednesday
                        </label> 
                </div>


                <div class="col-sm column">
                <input class="form-check-input" name="avaiblity[]" type="checkbox" value="Thursday" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">Thursday
                        </label> 
                </div>


                <div class="col-sm column">
                <input class="form-check-input" name="avaiblity[]" type="checkbox" value="Friday" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">Friday
                        </label> 
                </div>

                <div class="col-sm column">
                <input class="form-check-input" name="avaiblity[]" type="checkbox" value="Saturday" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">Saturday
                        </label> 
                </div>

                <div class="col-sm column">
                <input class="form-check-input" name="avaiblity[]" type="checkbox" value="Sunday" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">Sunday
                        </label> 
                </div>

                </div>


                <div class="row mb-3">
                <div class="col-sm-3 column">
                    <label for="formFileSm" class="form-label">Choose Contact Methods</label>
                </div>

                <div class="col-sm column">
                <input class="form-check-input" name="contactme[]" type="checkbox" value="Call" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">Call
                        </label> 
                </div>

                <div class="col-sm column">
                <input class="form-check-input" name="contactme[]" type="checkbox" value="Message" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">Message
                        </label> 
                </div>

                <div class="col-sm column">
                <input class="form-check-input" name="contactme[]" type="checkbox" value="Mail" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">Mail
                        </label> 
                </div>


                <div class="col-sm column">
                <input class="form-check-input" name="contactme[]" type="checkbox" value="Meet" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">Meet
                        </label> 
                </div>


                <div class="col-sm column">
                <input class="form-check-input" name="contactme[]" type="checkbox" value="Zoom" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">Zoom
                        </label> 
                </div>

                <div class="col-sm column">
                <input class="form-check-input" name="contactme[]" type="checkbox" value="Teams" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">Teams
                        </label> 
                </div>

                </div>


                <div class="row mb-3">
                  <div class="col-sm column green-border-focus">
                  <textarea class="form-control input" name="about" id="exampleFormControlTextarea5" rows="3" placeholder="About You" required></textarea>
                  </div>    
                </div>

                <div class="col-sm d-flex justify-content-center">
                <button type="submit" name="mentoreg" class="btns">SUBMIT</button>
                </div>
        </form>
</div>
<?php include 'head-foot/footer.php'?>

    <script src="head-foot/header.js"></script>
</body>
</html>
