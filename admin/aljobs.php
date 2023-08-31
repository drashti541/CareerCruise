<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0) {
header('location:index.php'); }
else { ?>
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
						<h2 class="page-title">Job's Posted</h2>
						<div class="panel panel-default">
							<div class="panel-heading">All Posted Job's</div>
							<div class="panel-body">
							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php }
								else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Job Title</th>
											<th>Company Name</th>
											<th>Job Role</th>
											<th>Experience</th>
											<th>CTC</th>
											<th>Location</th>
											<th>Contact Person</th>
											<th>Contact Person Number</th>
											<th>Contact Person Email</th>
											<th>Posted</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>#</th>
											<th>Job Title</th>
											<th>Company Name</th>
											<th>Job Role</th>
											<th>Experience</th>
											<th>CTC</th>
											<th>Location</th>
											<th>Contact Person</th>
											<th>Contact Person Number</th>
											<th>Contact Person Email</th>
											<th>Posted</th>
										</tr>
									</tfoot>
									<tbody>
									<?php $sql = "SELECT * from jobpost";
										$query = $dbh -> prepare($sql);
										$query->execute();
										$results=$query->fetchAll(PDO::FETCH_OBJ);
										$cnt=1;
										if($query->rowCount() > 0) {
										foreach($results as $result)
										{ ?>
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($result->jobtitle);?></td>
											<td><?php echo htmlentities($result->companyname);?></td>
											<td><?php echo htmlentities($result->jobrole);?></td>
											<td><?php echo htmlentities($result->experience);?></td>
											<td><?php echo htmlentities($result->ctc);?></td>
											<td><?php echo htmlentities($result->location);?></td>
											<td><?php echo htmlentities($result->contactpname);?></td>
											<td><?php echo htmlentities($result->contactpcontact);?></td>
											<td><?php echo htmlentities($result->contactpemail);?></td>
											<td><?php echo htmlentities($result->postedtime);?></td>
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