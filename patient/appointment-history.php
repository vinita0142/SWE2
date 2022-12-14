<?php
session_start();
error_reporting(0);
include 'include/config.php';
if (isset($_GET['cancel'])) {
    if(mysqli_query($con,"update apptdetails set status='canceled' where aptID = '" . $_GET['id'] . "'")){
		echo '<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script type="text/javascript">
		
			$(document).ready(function() {
				swal({
					title: "Appointment canceled ",
					text: "Appointment canceled",
					icon: "success",
					button: "Ok",
					timer: 5000
				}).then(function(){
					window.location="appointment-history.php";
				});
			});
		</script>';
	}
}
if(isset($_GET['join'])){
	$result=mysqli_query($con,"update apptdetails set status='completed' where aptId='".$_GET['id']."'");
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User | Appointment History</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	</head>
	<body>
		<div id="app">		
<?php include 'include/sidebar.php'; ?>
			<div class="app-content">
				

					<?php include 'include/header.php'; ?>
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">User  | Appointment History</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User </span>
									</li>
									<li class="active">
										<span>Appointment History</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
						

									<div class="row">
								<div class="col-md-12">
									
									<p style="color:red;"><?php echo htmlentities($_SESSION['msg']); ?>
								<?php echo htmlentities($_SESSION['msg'] = ''); ?></p>	
								<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
  									<tr align="center">
										<thead>
											<tr>
												<th class="center">#</th>
												<th class="hidden-xs">Doctor Name</th>
												<th>Specialization</th>
												<th>Consultancy Fee</th>
												<th>Appointment Date / Time </th>
												<th>Appointment Creation Date  </th>
												<th>Current Status</th>
												<th>Action</th>
												<th>Cancel</th>
												
											</tr>
										
<?php
$sql = mysqli_query(
    $con,
    "select aptID,dname,spec,fee,date,time,cdate,status from apptdetails where email='" .
        $_SESSION['email'] .
        "'"
);
$cnt = 1;
while ($row = mysqli_fetch_array($sql)) { ?>

											<tr>
												<td class="center"><?php echo $cnt; ?>.</td>
												<td class="hidden-xs"><?php echo $row['dname']; ?></td>
												<td><?php echo $row['spec']; ?></td>
												<td><?php echo $row['fee']; ?></td>
												<td><?php echo $row['date']; ?> / <?php echo $row['time']; ?>
												</td>
												<td><?php echo $row['cdate']; ?></td>
												<td><?php echo $row['status']; ?></td>
												<!-- <td><a id="join" href="https://webrtc-video-call-ec3b9.web.app">Join</a></td> -->
												<td>

													<a href="meet.php?id=<?php echo $row['aptID']?>&join=join" class="btn btn-transparent btn-xs tooltips" title="Join Appointment" tooltip-placement="top" tooltip="join">Join</a>
												</td>
												<!-- <td><a href="cancel.php">Cancel</a></td> -->
												<td>

													<a href="appointment-history.php?id=<?php echo $row['aptID']?>&cancel=update" onClick="return confirm('Are you sure you want to cancel this appointment ?')"class="btn btn-transparent btn-xs tooltips" title="Cancel Appointment" tooltip-placement="top" tooltip="Remove">Cancel</a>
												</td>

											</tr>
											
											<?php $cnt = $cnt + 1;}?>
											
											</thead>
										</tr>		
										
									</table>
								</div>
							</div>
								</div>
						
						<!-- end: BASIC EXAMPLE -->
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include 'include/footer.php'; ?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include 'include/setting.php'; ?>
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
