<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mentor.css">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../head-foot/header.css">
    <link rel="stylesheet" href="../head-foot/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a42162768d.js" crossorigin="anonymous"></script> 
  
    
    <title>Career Cruise</title>

    <style>
      @import url('../fonts/Source_Sans_Pro/SourceSansPro-Light.ttf'); 
      @import url('https://fonts.googleapis.com/css2?family=Signika+Negative:wght@500&display=swap');
      </style>

</head>
<body>

  <?php 
  include '../head-foot/header.html'
  ?>

        <header>
          
        <div class="container" style="margin-top:5%">
            <div class="row">
                <div class="col-lg-6 main-head">
                    <img src="../images/5070812-removebg-preview.png" alt="">
                </div>

            <div class="col-lg-6 main-content">
                <h1 class="main-text">1 on 1
                <h1 class="main-text"><span>Startup Mentorship </span></h1>
                <p class="main-text">Boost your startup with skillful mentors at your side. Boost your knowledge with every online mentoring session.</p>

                <div class="search">
                    <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                        <div class="input">
                            <input type="text" placeholder="Search Mentor" id="mysearch">
                        </div>
            
                        <span class="clear" onclick="document.getElementById('mysearch').value=''"><i class="fa-solid fa-xmark"></i></span>
                    </div>

                    <div class="find">
                        <button onclick="window.open('#','_blank')" id="btn">Search</button>
                        <a href="bementor.php" target="_blank">Become a Mentor</a>
                    </div>
                </div>
            </div>

          </div>
        </div>


        <h1 class="heading-text">OUR TOP MENTORS</h1>

        <div class="container" style="margin-top:6%">

            <div class="row">


                <div class="col-lg mentor-card">

                    <div class="mentor-imgbox">
                        <img src="../images/lady11.png" alt="">
                    </div>
                    <h2>Madhu Gupta</h2>
                    <h3>Customer Engineer, Security & Privacy at Google Cloud</h3>

                    <div class="mentor-icon">
                        <h4><i class="fa-solid fa-comment-dots"></i> Chat</h4>
                        <h4><i class="fa-solid fa-phone"></i> Call</h4>  
                        <h4><i class="fa-solid fa-list-check"></i> Task</h4>
                    </div>

                    <div class="mentor-tag">
                        <p>Engineering & Data</p>
                        <p>interview</p>
                        <p>resume</p>
                        <p>Google cloud</p>
                    </div>

                   
                    <button class="button" onclick="window.open('mentor1.php','_blank')">View Profile</button>
                    
                </div>



                <div class="col-lg mentor-card">

                    <div class="mentor-imgbox">
                        <img src="../images/man22.png" alt="">
                    </div>
                    <h2>Manjeet Patil</h2>
                    <h3>Customer Engineer, Security & Privacy at Google Cloud</h3>

                    <div class="mentor-icon">
                        <h4><i class="fa-solid fa-comment-dots"></i> Chat</h4>
                        <h4><i class="fa-solid fa-phone"></i> Call</h4>  
                        <h4><i class="fa-solid fa-list-check"></i> Task</h4>
                    </div>

                    <div class="mentor-tag">
                        <p>Engineering & Data</p>
                        <p>interview</p>
                        <p>resume</p>
                        <p>Google cloud</p>
                    </div>

                    <button class="button" onclick="window.open('mentor1.php','_blank')">View Profile</button>
                </div>


                <div class="col-lg mentor-card">

                    <div class="mentor-imgbox">
                        <img src="../images/lady33.png" alt="">
                    </div>
                    <h2>Mitra Singh</h2>
                    <h3>Customer Engineer, Security & Privacy at Google Cloud</h3>

                    <div class="mentor-icon">
                        <h4><i class="fa-solid fa-comment-dots"></i> Chat</h4>
                        <h4><i class="fa-solid fa-phone"></i> Call</h4>  
                        <h4><i class="fa-solid fa-list-check"></i> Task</h4>
                    </div>

                    <div class="mentor-tag">
                        <p>Engineering & Data</p>
                        <p>interview</p>
                        <p>resume</p>
                        <p>Google cloud</p>
                    </div>

                    <button class="button" onclick="window.open('mentor1.php','_blank')">View Profile</button>
                </div>

</div>
</div>

    
        
            

        <h1 class="heading-text">CONNECT WITH MENTORS</h1>

        <div class="container" style="width:75%">
            <div class="row provide-invest" style="margin:0">

                <div class="col-lg-5">
                    <img src="../images/chat.png" alt="Investment">
                </div>

                <div class="col-lg-7 provide-invest-content">
                    <h2 class="inner-heading">EXPERT MENTORNSHIP JUST A TEXT AWAY.</h2>
                    <p class="paragraph-text">Ask questions, kick the tires on a new idea, or discuss professional progress and improvements in your online mentoring sessions with unlimited messaging.
                    <br><br>Have an upcoming interview at Amazon? Need help in product management or marketing? Whatever it is, our online mentors are there for you.</p>
                </div>

            </div>


            <div class="row provide-invest" style="margin:0">

                <div class="col-lg-7 provide-invest-content">
                    <h2 class="inner-heading">FACE-TO-FACE MENTORNSHIP</h2>
                    <p class="paragraph-text">Help others by becoming Mentor. Use your powerful mentoring skills to grow startup that are stuck because of lack of guidance.<br><br>Register as a Investor and become a member of our Community.</p>
                </div>

                <div class="col-lg-5">
                    <img src="../images/casual-life-3d-recruiter-woman-having-online-interview.png" alt="Mentoring">
                </div>
            </div>


            <div class="row provide-invest" style="padding:2% 0%;margin:0">
                <div class="col-lg-6 offset-md-3">
                    <button onclick="window.open('mentor1.php','_blank')" class="btn1">Find Mentors</button>
                    <a href="bementor.php" target="_blank" class="a">Become a Mentor</a>
                </div>        
            </div>

        </div>


    </header>
  <?php 
  include '../head-foot/footer.html'
  ?>
    
  
    <script src="../head-foot/header.js"></script>
</body>
</html>
