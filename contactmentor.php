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
            <h4 class="heading-text">CONTACT MENTOR</h4>
        </div>

        <div class="row mb-3">
  <div class="col-sm column">
    <input type="text" class="form-control-sm input" placeholder="First name" aria-label="First name">
  </div>
  <div class="col-sm column">
    <input type="text" class="form-control-sm input" placeholder="Last name" aria-label="Last name">
  </div>
</div>

<div class="row mb-3">
  <div class="col-sm column">
    <input type="email" class="form-control-sm input" placeholder="Email">
  </div>

  <div class="col-sm column">
    <input type="tel" class="form-control-sm input"  placeholder="Phone Number">
  </div>
</div>

<div class="row mb-3">
  <div class="col-sm column green-border-focus">
  <textarea class="form-control input" id="exampleFormControlTextarea5" rows="3" placeholder="About Your Startup"></textarea>
  </div>    
</div>

<div class="row mb-3">
  <div class="col-sm column green-border-focus">
  <textarea class="form-control input" id="exampleFormControlTextarea5" rows="3" placeholder="Why you need Mentoring?"></textarea>
  </div>    

  <div class="col-sm column green-border-focus">
  <textarea class="form-control input" id="exampleFormControlTextarea5" rows="3" placeholder="Expectation from Mentor"></textarea>
  </div>  

</div>

<div class="col-sm d-flex justify-content-center">
<button type="button" class="btns">SUBMIT</button>
</div>

</div>
<?php include 'head-foot/footer.php'?>

    <script src="head-foot/header.js"></script>
</body>
</html>
