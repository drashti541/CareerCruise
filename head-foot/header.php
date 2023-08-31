<?php
session_start();
include('php/config.php');
error_reporting(0);
?>
<!--Navbar-->
    <section id="nav-bar" class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-color fixed-top"> 
            <a class="navbar-brand" href="#"><img src="LOGO_PROJECT/LOGO MAIN.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-capitalize p-1">
                    <li class="nav-item active " >
                        <a class="nav-link" id="scroll" href="index.php" data-page="banner">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Investor</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="b-investment.php">Become Investor</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="w-investment.php">Want Investor</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Mentor</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="bementor.php">Become Mentor</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="mentor.php">Want Mentoring</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Job</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="job.php">Apply</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="hire.php">Hire</a>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" id="scroll" href="index.php#contacts" data-page="contact">Contact Us</a>
                    </li>

                    <?php  if(!$_SESSION['user']) 
                    {?>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Connect</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="userreg.php">Register</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="userlogin.php">Login</a>
                        </div>
                    <?php } else { ?>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown">Hey, <?php
                            $email=$_SESSION['user'];
                            $sql ="SELECT name FROM user_login WHERE email=:email ";
                            $query= $conn -> prepare($sql);
                            $query-> bindParam(':email', $email, PDO::PARAM_STR);
                            $query-> execute();
                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                            if($query->rowCount() > 0)
                            {foreach($results as $result)
                            {echo htmlentities($result->name); }}?></a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="profile.php">Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">Log Out</a>
                            </div>
                        </li>
                    <?php } ?>



                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Connect</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="userreg.php">Register</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="userlogin.php">Login</a>
                        </div>
                    </li> -->
                </ul>
            </div>
        </nav>
        </section>
  