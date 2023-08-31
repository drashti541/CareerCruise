<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/homepage.css">
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
          
        <div class="container-fluid" style="margin-top:5%">
          <div class="row">
            <div class="col-lg-7 main-head">
              <img src="../images/homep-header.jpg" alt="">
            </div>

            <div class="col-lg-5 main-content">
     
              <h1 class="main-text">Stuck???
              <h1 class="main-text">Our <span> Mentors </span> and <span> Investors </span></h1>
              <h3 class="main-text">are here to</h3>
              <h1 class="main-text">Help you GROW!</h1>

              <button onclick="window.open('userlogin.php','_self')" id="btn">Login</button>

            </div>
          </div>
        </div>


        <h1 class="heading-text">SERVICES</h1>
        <div class="container" id="service">
          <div class="row">

              <div class="col-lg service-part">
                <img src="../images/homep-ser-1invest.png" alt="" class="service-img">
                <h2 class="inner-heading">INVESTMENT</h2>
                <p class="paragraph-text">Our website connects you with investors who wants to invest in your startup and help your stuck startup to grow.</p>

                <button onclick="window.open('w-investment.php','_blank')" class="service-btn">See More</button>
              </div>

              <div class="col-lg service-part">
                <img src="../images/homep-ser-2mentor.png" alt="" class="service-img">
                <h2 class="inner-heading">MENTORING</h2>
                <p class="paragraph-text">Our website connects you with mentors that helps you to grow your startup with their mentoring skills.</p>

                <button onclick="window.open('mentor.php','_blank')" class="service-btn">See More</button>
              </div>

              <div class="col-lg service-part">
                <img src="../images/homep-ser-3job.png" alt="" class="service-img">
                <h2 class="inner-heading">JOBS</h2>
                <p class="paragraph-text">Work in the Startups, Use your skills and grow your carrer as well as startup company.</p>

                <button onclick="window.open('job.php','_blank')" class="service-btn">See More</button>
              </div>

          </div>
        </div>
       
            

        <h1 class="heading-text">JOIN OUR COMMUNITY</h1>

        <div class="container">
          <div class="row provide-invest">
            <div class="col-lg-5">
              <img src="../images/homep-comm-1investor.jpg" alt="Investment">
            </div>

            <div class="col-lg-7 provide-invest-content">
            <h2 class="inner-heading">Become Investor</h2>
            <p class="paragraph-text">Help others by becoming Investor. If you have good investing skills and money then invest in startups that needs investment. <br><br>Register as a Investor and become a member of our Community.</p>

            <button onclick="window.open('b-investment.php','_blank')" class="provide-btn">Register</button>
            </div>
          </div>



          <div class="row provide-invest">

            <div class="col-lg-7 provide-invest-content">
              <h2 class="inner-heading">Become Mentor</h2>
              <p class="paragraph-text">Help others by becoming Mentor. Use your powerful mentoring skills to grow startup that are stuck because of lack of guidance.<br><br>Register as a Investor and become a member of our Community.</p>

              <button onclick="window.open('bementor.php','_blank')" class="provide-btn">Register</button>
            </div>

            <div class="col-lg-5">
              <img src="../images/homep-comm-2mentor.jpg" alt="Mentoring">
            </div>
          </div>



          <div class="row provide-invest">
            <div class="col-lg-5">
              <img src="../images/homep-comm-3job.jpg" alt="Job">
            </div>

            <div class="col-lg-7 provide-invest-content">
              <h2 class="inner-heading">Hire Employees</h2>
              <p class="paragraph-text">Hire employees that wants to work in a startup and help them to grow their carrer and grow your startup with the help of them <br><br>Post job details and hire employees</p>

              <button onclick="window.open('hire.php','_blank')" class="provide-btn">Register</button>
            </div>
          </div>

        </div>




        <h1 class="heading-text">OUR COMMUNITY</h1>
        <div class="container" id="counter" style="width:70%">
          <div class="row counter-row">

            <div class="col-lg-3">
              <div class="counter-row-col">
                <div class="counter-row-inner" data-number="2000">
                  <h1>0</h1>
                </div>
                <h2 class="paragraph-text">INVESTORS</h2>
                <img src="../images/homep-counter-1investor.png" alt="">
              </div>
            </div>

            <div class="col-lg-3">
              <div class="counter-row-col">
                <div class="counter-row-inner" data-number="3000">
                  <h1>0</h1>
                </div>
                <h2 class="paragraph-text">MENTORS</h2>
                  <img src="../images/homep-counter-2mentor.png" alt="">
              </div>
            </div>


            <div class="col-lg-3">
              <div class="counter-row-col">
                <div class="counter-row-inner" data-number="4000">
                  <h1>0</h1>
                </div>
                <h2>CLIENTS</h2>
                <img src="../images/homep-counter-3client.png" alt="">
              </div>
            </div>


            <div class="col-lg-3">
              <div class="counter-row-col">
                <div class="counter-row-inner" data-number="5000">
                  <h1>0</h1>
                </div>
                <h2 class="paragraph-text">REVIEWS</h2>
                <img src="../images/homep-counter-4rating.png" alt="">
              </div>
            </div>


          </div>
        </div>




        <h1 class="heading-text">TEAM MEMBERS</h1>

        <div class="container" style="width:70%;padding:2% 5%">
        <div class="row">
          <div class="col-lg-3">
            <div class="about-team">

              <div class="about-team-img">
                <img src="../images/homep-team-1s.png" alt="">
              </div>
              <h3>Sahil Shaikh</h3>
              <h4>Back-end Developer</h4>
              <p>Handles the backend of website.</p>

                <div class="about-team-icon">
                  <a href=""><i class="fa-brands fa-facebook"></i></a>
                  <a href=""><i class="fa-brands fa-instagram"></i></a>
                  <a href=""><i class="fa-brands fa-twitter"></i></a>
                  <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
          </div>


          <div class="col-lg-3">
            <div class="about-team">

              <div class="about-team-img">
                <img src="../images/homep-team-2d.png" alt="">
              </div>
              <h3>Drashti Chitre</h3>
              <h4>Front-end Developer</h4>
              <p>Handles the frontend of the website</p>

                <div class="about-team-icon">
                  <a href=""><i class="fa-brands fa-facebook"></i></a>
                  <a href=""><i class="fa-brands fa-instagram"></i></a>
                  <a href=""><i class="fa-brands fa-twitter"></i></a>
                  <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
          </div>


          <div class="col-lg-3">
            <div class="about-team">

              <div class="about-team-img">
                <img src="../images/homep-team-3m.png" alt="">
              </div>
              <h3>Maitry Shah</h3>
              <h4>Data Analyst</h4>
              <p>Handles the data of the website</p>

                <div class="about-team-icon">
                  <a href=""><i class="fa-brands fa-facebook"></i></a>
                  <a href=""><i class="fa-brands fa-instagram"></i></a>
                  <a href=""><i class="fa-brands fa-twitter"></i></a>
                  <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
          </div>


          <div class="col-lg-3">
            <div class="about-team">

              <div class="about-team-img">
                <img src="../images/homep-team-4r.png" alt="">
              </div>
              <h3>Rashika Machhi</h3>
              <h4>Database Developer</h4>
              <p>Handles the database of the website</p>

                <div class="about-team-icon">
                  <a href=""><i class="fa-brands fa-facebook"></i></a>
                  <a href=""><i class="fa-brands fa-instagram"></i></a>
                  <a href=""><i class="fa-brands fa-twitter"></i></a>
                  <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
          </div>
          </div>
        </div>

   
<div class="container" id="contacts" style="margin-top:5%;">
  <div class="row" style="background-color:white;">

  
    <div class="col-lg-6">
      <div class="contact-img">
        <img src="../images/homep-contact.jpg" alt="">
      </div>
    </div>

    <div class="col-lg-6">
      <div class="contact-form">
          <h1 class="heading-text">CONTACT US</h1>
          <p>If you have any doubt... We are just one message away from You.</p>
          <input type="text" placeholder="Name">
          <input type="email" placeholder="Email">
          <br>
          <input type="text" placeholder="Subject">
          <input type="tel" placeholder="Phone No." id="Timing">
          <textarea name="message" id="msg" cols="10" rows="2" placeholder="Message"></textarea>
          <h4 class="contact-btn">Send Message</h4>
      </div>
    </div>
    
  </div>
</div>


    </header>
  <?php 
  include '../head-foot/footer.html'
  ?>
    <script src="../js/homepage.js"></script>
    
  
    <script src="../head-foot/header.js"></script>

</body>
</html>
