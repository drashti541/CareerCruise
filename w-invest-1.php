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
    <link rel="stylesheet" href="head-foot/header.css">
    <link rel="stylesheet" href="head-foot/footer.css">
    <link rel="stylesheet" href="css/w-invest-1.css">
    <script src="https://kit.fontawesome.com/a42162768d.js" crossorigin="anonymous"></script> 
    <title>CAREER CRUISE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
        include 'head-foot/header.php'
    ?>
    <section id="investment">
        <div class="container invest">
        <h1 class="heading-text">Here's different Investors</h1>
        <h4 class="heading-text">Find Right Investor for your Startup</h4>

            <form action="w-invest-1_1.php" method="post" >
                <div class="investment">
                    <div class="investor-update text-justify">
                        <h3><b>Angel Investors</b></h3>
                        <p>Professional angel investors are normally approached when it comes to the seed round and beyond. They are willing to fund smaller operations than VCs, may be more flexible in terms, and can offer a lot of value in wisdom and connections.Angel investors can be approached directly online, at live pitch events, and through introductions from other startup founders.</p>
                    </div>
                    <div class="apply-btn">
                        <button class="btn" type="submit" name="investor">View Profiles</button>
                    </div>
                </div>
            </form>

            <form action="w-invest-1_4.php" method="post" >
                <div class="investment">
                    <div class="investor-update text-justify">
                        <h3><b>Venture capital firms</b></h3>
                        <p>VCs are the holy grail of investors for fundraising entrepreneurs. They come with the biggest checks, the most power to fuel success and gaining market share, and most juice when it comes to achieving more credibility and visibility.More venture capital firms are looking at and are participating in earlier funding rounds. Though it is much more likely these investors will show up and be secured in Series A, B and C fundraising rounds than earlier.Do note that not all of these firms are created equal. The best match can be influenced by location, the timeline of their funds, their interest and expertise in a certain field, their power to help you get to the next stage and of course, how they treat their founders.</p>
                    </div>
                    <div class="apply-btn">
                        <button class="btn" type="submit" name="investor">View Profiles</button>
                    </div>
                </div>
            </form>

        </div>
    </section>

    <?php include 'head-foot/footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="head-foot/header.js"></script>
    </body>
</html>