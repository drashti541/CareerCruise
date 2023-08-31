<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0) {
header('location:index.php'); }
else{
if(isset($_POST['add'])) {
$name=$_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$categories = implode(', ', $_POST['categories']);
$img = $_FILES["img_file"]["name"];
move_uploaded_file($_FILES["img_file"]["tmp_name"],"uploads/".$_FILES["img_file"]["name"]);
$sql="INSERT INTO products (pname,pdescription,pprice,pcategories,pimage) VALUE('$name','$description','$price','$categories','$img')";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->bindParam(':price',$price,PDO::PARAM_STR);
$query->bindParam(':categories',$categories,PDO::PARAM_STR);
$query->bindParam(':img',$img,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId) {
$msg="Product Created successfully"; }
else {
$error="Something went wrong. Please try again"; } }
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Admin Dashboard</title>
    <link rel="shortcut icon" href="img/logo.ico">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Edit Product</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Basic Info</div>
									<div class="panel-body">
							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php }
								else if($msg){?><div class="succWrap"><strong>SUCCESS</strong> : <?php echo htmlentities($msg); ?> </div><?php }?>
								
                                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Products Name : <span style="color:red">*</span></label>
                                        <div class="col-sm-4">
                                            <input type="text" name="name" class="form-control" required>
                                        </div>
                                        <label class="col-sm-2 control-label">Products Price : <span style="color:red">*</span></label>
                                        <div class="col-sm-4">
                                            <input type="number" name="price" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Categories  : </label>
                                        <div class="col-sm-4">
                                       <select name="categories[]" class="form-control mb-3 js-example-basic-multiple" multiple="multiple" required>
                                       <?php
                                          $con = mysqli_connect("localhost","root","","test_1_rainstreamweb");
                                          $cate_query = "SELECT * FROM categories";
                                          $query_run = mysqli_query($con, $cate_query);
                                          if(mysqli_num_rows($query_run) > 0)
                                          {
                                             foreach($query_run as $cate)
                                             {
                                                ?>
                                                <option value="<?= $cate["categories"];?>"><?= $cate["categories"];?></option>
                                                <?php
                                             }
                                          }
                                          else{
                                             echo "No Record Found";
                                          }
                                       ?>
                                       </select>
                                        </div>
                                        <label class="col-sm-2 control-label">Description : </label>
                                        <div class="col-sm-4">
                                            <textarea type="text" name="description" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Image<span style="color:red">*</span></label>
                                            <div class="col-sm-4">
                                              <input type="file" name="img" accept="image/png, image/jpeg">                                            
                                            </div>
                                      </div>
											        <div class="form-group">
                             <div style="padding-top: 30px; padding-left:30px;">
											    <button class="btn btn-primary" name="add" type="submit">Add</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  </body>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
   <script>
         $(document).ready(function() {
         $('.js-example-basic-multiple').select2();
      });
   </script>
</body>
</html>
<?php } ?>