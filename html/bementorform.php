<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bementorform.css">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/a42162768d.js" crossorigin="anonymous"></script> 

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Career Cruise</title>

    <style>
        @import url('../fonts/Source_Sans_Pro/SourceSansPro-Light.ttf'); 
        @import url('https://fonts.googleapis.com/css2?family=Signika+Negative:wght@500&display=swap');
    </style>

</head>
<body>
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content popup">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <?php 
                include 'userlogin.php'
            ?>
            </div>
            <div class="modal-footer text-align-centered">
                <button type="submit" name="submitdate" id="submit" class="btn d-block m-auto btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
  $("#modalbtn").click(function(){
    $("#myModal").modal({backdrop: true});
  });
});
</script>
</body>
</html>
