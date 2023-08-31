<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)	{
header('location:index.php'); }
else{
	if(isset($_GET['del'])) 	{
	$pid=$_GET['del'];
	$sql = "DELETE FROM products WHERE pid=:pid";
	$query = $dbh->prepare($sql);
	$query -> bindParam(':pid',$pid, PDO::PARAM_STR);
	$query -> execute();
	$msg="Product Deleted Successfully";
	}	?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Admin Dashboard</title>
    <link rel="shortcut icon" href="img/logo.ico">
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
						<h2 class="page-title">All Products</h2>
						<div class="panel panel-default">
							<div class="panel-heading">Products Details</div>
							<div class="panel-body">
							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php }
								else if($msg){?><div class="succWrap"><strong>SUCCESS</strong> : <?php echo htmlentities($msg); ?> </div><?php }?>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>#</th>
											<th>Image</th>
											<th>Product Name</th>
											<th>Price </th>
											<th>Categories </th>
											<th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
										<th>#</th>
											<th>Image</th>
											<th>Product Name</th>
											<th>Price </th>
											<th>Categories </th>
											<th>Action</th>
										</tr>
										</tr>
									</tfoot>
									<tbody>
										<?php $sql = "SELECT * FROM products";
										$query = $dbh -> prepare($sql);
										$query->execute();
										$results=$query->fetchAll(PDO::FETCH_OBJ);
										$cnt=1;
										if($query->rowCount() > 0) {
										foreach($results as $result) { ?>
											<tr>
												<td><?php echo htmlentities($cnt);?></td>
												<td><img src="uploads/<?php echo htmlentities($result->pimage);?>" width="40px" alt="Image"></td>
												<td><?php echo htmlentities($result->pname);?></td>
												<td><?php echo htmlentities($result->pprice);?></td>
												<td><?php echo htmlentities($result->pcategories);?></td>
											<td><a href="editproduct.php?pid=<?php echo $result->pid;?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
											<a href="allproducts.php?del=<?php echo $result->pid;?>" onclick="return confirm('Do you want to delete');"><i class="fa fa-close"></i></a></td>
										</tr>
										<?php $cnt=$cnt+1; }} ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
<?php } ?>