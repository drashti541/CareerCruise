<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/logo.png" rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="css/profile1.css"> 
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>CAREER CRUISE</title> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">CAREER CRUISE</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="html/profile1.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">General Details</span>
                </a></li>
                <li><a href="html/profile2.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">KYC</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Support</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <img src="images/PHOTO.jpg" alt="" onclick="toggleMenu()">
            
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <h2>Rashika Machhi</h2>
                    </div>
                    <hr>
                </div>
            </div>
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">General Details</span>
                </div>

                <div class="container">
                    <form action="html/profile2.php">
                    <div class="box4">
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Full Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Email-id</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="mail" name="emailid" placeholder="Your email-id..">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Phone no</label>
                            </div>
                            <div class="col-75">
                                <input type="number" id="phno" name="phone" placeholder="Your phoneno..">
                            </div>
                        </div>
                        <div class="row">
                            <input type="submit" value="Submit">
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        <div>
    </section>

    <script>
        const body = document.querySelector("body"),
      modeToggle = body.querySelector(".mode-toggle");
      sidebar = body.querySelector("nav");
      sidebarToggle = body.querySelector(".sidebar-toggle");

let getMode = localStorage.getItem("mode");
if(getMode && getMode ==="dark"){
    body.classList.toggle("dark");
}

let getStatus = localStorage.getItem("status");
if(getStatus && getStatus ==="close"){
    sidebar.classList.toggle("close");
}

modeToggle.addEventListener("click", () =>{
    body.classList.toggle("dark");
    if(body.classList.contains("dark")){
        localStorage.setItem("mode", "dark");
    }else{
        localStorage.setItem("mode", "light");
    }
});

sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if(sidebar.classList.contains("close")){
        localStorage.setItem("status", "close");
    }else{
        localStorage.setItem("status", "open");
    }
})


let subMenu = document.getElementById("subMenu");

function toggleMenu() {
    subMenu.classList.toggle("open-menu");
    
}
    </script>
</body>
</html>