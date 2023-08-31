<?php
   include('inc/config.php');
   if(isset($_POST['invreg']))
   {
      $iname = $_POST['iname'];
      $iaddress = $_POST['iaddress'];
      $iemail = $_POST['iemail'];
      $pimg = $_FILES["pimg"]["name"];
      $iabout = $_POST['iabout'];
      $iq1 = $_POST['iq1'];
      $iq2 = $_POST['iq2'];
      $iq3 = $_POST['iq3'];
      $iq4 = $_POST['iq4'];
      $iq5 = $_POST['iq5']; 
      $usecc = $_POST['usecc'];
      $lindinp = $_POST['lindinp'];
      $invtype = $_POST['invtype'];
      $iq6 = $_POST['iq6']; 
      $iq7 = $_POST['iq7'];
      $iq8 = $_POST['iq8'];
      $atnc = $_POST['atnc'];
      move_uploaded_file($_FILES["pimg"]["tmp_name"],"admin/uploads/img/".$_FILES["pimg"]["name"]);
      $sql = "INSERT INTO investorreg (iname, iaddress, iemail, ipp, iabout, iaccredit, istrategies, ihopetoallocate, ipnetworthneed, ireasonatcc, hopetousecc, ildprofile, iinvestortype, iexperienceinvestvc, ietechstartups, aangelList, itca) VALUES( :iname, :iaddress, :iemail, :pimg, :iabout, :iq1, :iq2, :iq3, :iq4, :iq5, :usecc,:lindinp, :invtype, :iq6, :iq7, :iq8, :atnc)";
      $query = $dbh->prepare($sql);
      $query->bindParam(':iname',$iname,PDO::PARAM_STR);
      $query->bindParam(':iaddress',$iaddress,PDO::PARAM_STR);
      $query->bindParam(':iemail',$iemail,PDO::PARAM_STR);
      $query->bindParam(':pimg',$pimg,PDO::PARAM_STR);
      $query->bindParam(':iabout',$iabout,PDO::PARAM_STR);
      $query->bindParam(':iq1',$iq1,PDO::PARAM_STR);
      $query->bindParam(':iq2',$iq2,PDO::PARAM_STR);
      $query->bindParam(':iq3',$iq3,PDO::PARAM_STR);
      $query->bindParam(':iq4',$iq4,PDO::PARAM_STR);
      $query->bindParam(':iq5',$iq5,PDO::PARAM_STR);
      $query->bindParam(':usecc',$usecc,PDO::PARAM_STR);
      $query->bindParam(':lindinp',$lindinp,PDO::PARAM_STR);
      $query->bindParam(':invtype',$invtype,PDO::PARAM_STR);
      $query->bindParam(':iq6',$iq6,PDO::PARAM_STR);
      $query->bindParam(':iq7',$iq7,PDO::PARAM_STR);
      $query->bindParam(':iq8',$iq8,PDO::PARAM_STR);
      $query->bindParam(':atnc',$atnc,PDO::PARAM_STR);
      $query->execute();
      $lastInsertId = $dbh->lastInsertId();
      if($lastInsertId) { $msg = " Investor Registration Submitted Successfully"; } else { $error = " Something went wrong. Please try again"; } header( "refresh:3;url=b-investment.php" ); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/b-investerreg.css">
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
            <h4 class="heading-text">INVESTOR REGISTRATION</h4>
        </div>
        <center><?php if($error){?><div class="errorWrap"><a class="btn btn-warning btn-icon-split"><i class="fas fa-exclamation-triangle"></i></span><span class="text">  <?php echo htmlentities($error); ?></span></a></div><?php }
		else if($msg){?><div class="succWrap text-white"><a class="btn btn-success btn-icon-split"><i class="fas fa-check"></i></span><span class="text">  <?php echo htmlentities($msg); ?></span></a></div><?php }?><br></center>
        <form method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <div class="col-sm column">
                    <input type="text" name="iname" class="form-control-sm input" placeholder="Where is your full legal name?" aria-label="full legal name" required>
                  </div>
                  <div class="col-sm column">
                    <input type="text" name="iaddress" class="form-control-sm input" placeholder="Where is your legal place of residence?" aria-label="place of residence" required>
                  </div>
                </div>
                
                <div class="row mb-3">
                  <div class="col-sm column">
                    <input type="email" name="iemail" class="form-control-sm input" placeholder="Your Email" aria-label="email" required>
                    <div class="py-3">
                      <label for="formFileSm" class="form-label">Upload Profile Photo</label>
                      <input class="form-control-sm input" name="pimg" id="formFileSm" type="file" accept="image/png, image/gif, image/jpeg, image/jpg" required="">
                    </div>
                  </div>
                  <div class="col-sm column">
                    <textarea class="form-control input" name="iabout" id="exampleFormControlTextarea5" rows="3" placeholder="Tell us About you" required=""></textarea>
                  </div>
                </div>

                <div class="row mb-3 mt-4">
                  <div class="col-sm column">                        
                    <h6>How are you accredited?</h6>
                        <input type="radio" name="iq1" value="I have, either on my own or with my spouse, more than ₹8.25cr of net tangible assets (excluding my primary residence)"> I have, either on my own or with my spouse, more than ₹8.25cr of net tangible assets (excluding my primary residence)</br>
                        <input type="radio" name="iq1" value="I want to make investments via AngelList India only. I do not meet the above criteria. However, I hereby declare that I have more than ₹2cr of net tangible assets (excluding my primary residence)"> I want to make investments via AngelList India only. I do not meet the above criteria. However, I hereby declare that I have more than ₹2cr of net tangible assets (excluding my primary residence)</br>
                        <input type="radio" name="iq1" value="I'm not accredited yet"> I'm not accredited yet</br>
                  </div>
                </div>

                <h5 class="mt-4">Tell us more about why you want to invest on Career Cruise</h5>
                <div class="row mb-3 ">
                  <div class="col-sm column">                        
                    <h6>Which of the following investment strategies (or products) best match your preferences?</h6>
                        <input type="radio" name="iq2" value="Picking companies to invest in (Career Cruise Syndicates)"> Picking companies to invest in (Career Cruise Syndicates)</br>
                        <input type="radio" name="iq2" value="Investing in funds that broadly index venture, such as Career Cruise Access Fund (Career Cruise Managed Funds)"> Investing in funds that broadly index venture, such as Career Cruise Access Fund (Career Cruise Managed Funds)</br>
                        <input type="radio" name="iq2" value="Investing behind Fund Managers who pick companies to invest in (Career Cruise Rolling or Venture Funds)"> Investing behind Fund Managers who pick companies to invest in (Career Cruise Rolling or Venture Funds)</br>
                  </div>
                </div>

                <div class="row mb-3 mt-2">
                  <div class="col-sm column">                        
                    <h6>How much are you hoping to allocate (in USD) to startups using Career Cruise over the next 12 months?</h6>
                    This will help us match you with the products that best fit your goals</br>
                        <input type="radio" name="iq3" value="Up to $20,000"> Up to $20,000</br>
                        <input type="radio" name="iq3" value="Up to $50,000"> Up to $50,000</br>
                        <input type="radio" name="iq3" value="Up to $100,000"> Up to $100,000</br>
                        <input type="radio" name="iq3" value="Up to $250,000"> Up to $250,000</br>
                        <input type="radio" name="iq3" value="Up to $500,000"> Up to $500,000</br>
                        <input type="radio" name="iq3" value="More than $500,000"> More than $500,000</br>
                  </div>
                </div>

                <div class="row mb-3 mt-2">
                  <div class="col-sm column">                        
                    <h6>What percentage of your net worth do you want to allocate to investing in startups?</h6>
                        <input type="radio" name="iq4" value="Up to 5%"> Up to 5%</br>
                        <input type="radio" name="iq4" value="Up to 10%"> Up to 10%</br>
                        <input type="radio" name="iq4" value="Up to 15%"> Up to 15%</br>
                        <input type="radio" name="iq4" value="More than 15%"> More than 15%</br>
                  </div>
                </div>

                <div class="row mb-3 mt-2">
                  <div class="col-sm column">                        
                    <h6>What are your main reasons for choosing Career Cruise?</h6>
                        <input type="radio" name="iq5" value="Generating financial returns for your portfolio"> Generating financial returns for your portfolio</br>
                        <input type="radio" name="iq5" value="Meeting new people to expand your network"> Meeting new people to expand your network</br>
                        <input type="radio" name="iq5" value="Accessing dealflow you can't get anywhere else"> Accessing dealflow you can’t get anywhere else</br>
                        <input type="radio" name="iq5" value="Learning more about tech and startups"> Learning more about tech and startups</br>
                  </div>
                </div>

                
                <div class="row mb-3 mt-2">
                  <div class="col-sm column">                        
                    <h6>How are you hoping to use Career Cruise?</h6>
                    <textarea class="form-control input" name="usecc" id="exampleFormControlTextarea5" rows="3" placeholder="How are you hoping to use Career Cruise?" required=""></textarea>
                  </div>
                </div>

                <div class="row mb-3 mt-2">
                  <div class="col-sm column">                        
                    <h6>LinkedIn Profile</h6>
                    <p>Providing a LinkedIn profile helps us determine your eligibility. If you don’t have one, leave this field blank.</p>
                        <input type="url" name="lindinp" class="form-control-sm input" placeholder="LinkedIn Profile Link" required="">
                  </div>
                </div>

                <div class="row mb-3 mt-2">
                  <div class="col-sm column">                        
                    <h6>What type of Invester You want to be</h6>
                        <input type="radio" name="invtype" value="Angel Investors"> Angel Investors</br>
                        <input type="radio" name="invtype" value="Venture capital firms"> Venture capital firms</br>
                  </div>
                </div>

                <div class="row mb-3 mt-2">
                  <div class="col-sm column">                        
                    <h6>What is your experience investing in venture-backed tech startups or venture capital funds?</h6>
                        <input type="radio" name="iq6" value="I invested in a startup directly or through a single-purpose vehicle (SPV)"> I invested in a startup directly or through a single-purpose vehicle (SPV)</br>
                        <input type="radio" name="iq6" value="I invested in startups indirectly through a venture fund"> I invested in startups indirectly through a venture fund</br>
                        <input type="radio" name="iq6" value="I work or worked at a venture capital or investment firm"> I work or worked at a venture capital or investment firm</br>
                        <input type="radio" name="iq6" value="I represent or represented a family office or Registered Investment Advisor (RIA)"> I represent or represented a family office or Registered Investment Advisor (RIA)</br>
                        <input type="radio" name="iq6" value="None of the above"> None of the above</br>
                  </div>
                </div>
                <div class="row mb-3 mt-2">
                  <div class="col-sm column">                        
                    <h6>What is your experience working with tech startups?</h6>
                        <input type="radio" name="iq7" value="I work or worked at a tech startup"> I work or worked at a tech startup</br>
                        <input type="radio" name="iq7" value="I advise or advised a tech startup"> I advise or advised a tech startup</br>
                        <input type="radio" name="iq7" value="I am or was a tech startup founder"> I am or was a tech startup founder</br>
                        <input type="radio" name="iq7" value="None of the above"> None of the above</br>
                  </div>
                </div>
                <div class="row mb-3 mt-2">
                  <div class="col-sm column">                        
                    <h6>How did you hear about AngelList?</h6>
                        <input type="radio" name="iq8" value="Google search"> Google search</br>
                        <input type="radio" name="iq8" value="Newsletter/Media Site (TechCrunch, etc.)"> Newsletter/Media Site (TechCrunch, etc.)</br>
                        <input type="radio" name="iq8" value="Twitter"> Twitter</br>
                        <input type="radio" name="iq8" value="Friend or Connection"> Friend or Connection</br>
                        <input type="radio" name="iq8" value="Career Cruise Syndicate Lead or Fund Manager"> Career Cruise Syndicate Lead or Fund Manager</br>
                  </div>
                </div>
                <div class="row mb-3 mt-2">
                  <div class="col-sm column">
                    <h6>Please carefully review the information below before submitting your application:</h6>
                        <ol class="list-group list-group-numbered p-2">
                                <li class="list-group-item">I understand that most investments in startups result in a complete loss.</li>
                                <li class="list-group-item">I understand that AngelList does not verify information on the site, and I am responsible for my own diligence.</li>
                                <li class="list-group-item">I promise to hold AngelList harmless against any damage that may happen to myself as a result of my use of AngelList.</li>
                                <li class="list-group-item">If I invest, I will comply with securities laws and consult my own attorney and professional advisors where I need advice.</li>
                                <li class="list-group-item">I understand that I will be permanently banned from AngelList and that I may face legal consequences if I falsely represent my accreditation status.</li>
                                <li class="list-group-item">I declare that I am resident of India</li>
                        </ol>
                        <input type="radio" name="atnc" value="I agree to the terms and conditions, as well as the terms above." required> I agree to the terms and conditions, as well as the terms above.</br>
                  </div>
                </div>

                <div class="col-sm d-flex justify-content-center">
                        <button type="submit" name="invreg" class="btns">SUBMIT</button>
                </div>
        </form>
</div>
<?php include 'head-foot/footer.php'?>

    <script src="head-foot/header.js"></script>
</body>
</html>
