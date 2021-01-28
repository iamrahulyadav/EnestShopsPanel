 <!-- <?php
		// require 'include/header.php';
		// $getkey = $con->query("select * from shops where username='" . $_SESSION['username'] . "'")->fetch_assoc();
		?> -->
 <?php
	session_start();
	require 'include/dbconfig.php';
	$getkey = $con->query("select * from shops where username='" . $_SESSION['username'] . "'")->fetch_assoc();
	?>
 <!DOCTYPE html>
 <html lang="en" class="loading">

 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1" />
 	<title>E-Nest Shops Panel</title>

 	<link rel="shortcut icon" href="<?php echo $fset['favicon']; ?>">
 	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-touch-fullscreen" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="default">
 	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
 	<link rel="stylesheet" href="app-assets/css/tag.css" />
 	<link rel="stylesheet" type="text/css" href="app-assets/fonts/feather/style.min.css">
 	<link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.css">
 	<link rel="stylesheet" type="text/css" href="app-assets/fonts/font-awesome/css/font-awesome.min.css">
 	<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/perfect-scrollbar.min.css">
 	<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/prism.min.css">
 	<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/chartist.min.css">
 	<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">

 	<link rel="stylesheet" type="text/css" href="app-assets/css/app.css">

 </head>

 <body data-col="2-columns" class=" 2-columns ">
 	<div class="layer"></div>
 	<!-- ////////////////////////////////////////////////////////////////////////////-->
 	<div class="wrapper">

 		<!-- main menu-->
 		<!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
 		<?php include('main.php'); ?>
 		<!-- Navbar (Header) Ends-->

 		<div class="main-panel">
 			<div class="main-content">
 				<div class="content-wrapper">
 					<!--Statistics cards Starts-->

 					<div class="row">
 						<div class="col-md-12">
 							<div class="card">
 								<div class="card-header">
 									<h4 class="card-title" id="basic-layout-form">Update Profile</h4>

 								</div>
 								<div class="card-body">
 									<div class="px-3">
 										<form class="form" method="post" enctype="multipart/form-data">
 											<div class="form-body">

 												<div class="form-group">
 													<label for="cname">Username</label>
 													<input type="text" id="cname" class="form-control" name="username" value="<?php echo $getkey['username']; ?>" required>
 												</div>
 												<div class="form-group">
 													<label for="cname">Password</label>
 													<input type="text" id="cname" class="form-control" name="password" value="<?php echo $getkey['password']; ?>" required>
 												</div>

 											</div>

 											<div class="form-actions">

 												<button type="submit" name="sub_cat" class="btn btn-raised btn-raised btn-primary">
 													<i class="fa fa-check-square-o"></i> Update Profile
 												</button>
 											</div>

 											<?php
												if (isset($_POST['sub_cat'])) {
													$username = $_POST['username'];
													$password = $_POST['password'];

													$con->query("update shops set username='" . $username . "',password='" . $password . "' where username='" . $_SESSION['username'] . "'");
												?>
 												<script type="text/javascript">
 													$(document).ready(function() {
 														toastr.options.timeOut = 4500; // 1.5s
 														toastr.info('Profile Updated Successfully!!!');
 														setTimeout(function() {
 															window.location.href = "profile.php";
 														}, 1500);
 													});
 												</script>
 											<?php
												}
												?>
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

 	<?php
		require 'include/js.php';
		?>

 </body>

 </html>