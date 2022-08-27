<?php

include '../include/controller.php';
$session_username = $_SESSION['user_name'];
if (empty($_SESSION['user_name'])) {
	header("location:../index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="/public/css/font-awesome.min.css">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="/public/css/bootstrap.min.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" href="/public/css/mdb.min.css">
	<!-- Sweetalert -->
	<script src="/public/js/sweetalert.min.js"></script>
	<!-- Custom styles -->
	<link rel="stylesheet" href="/public/css/style.css">
</head>

<body class="fixed-sn light-blue-skin">

	<!-- Main Navigation -->
	<header>
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark double-nav fixed-top scrolling-navbar">
			<!-- SideNav Slide-out Button-->
			<div class="float-left">
				<a href="#" data-activities="Slide-out" class="button-collapse">
					<i class="fa fa-bars"></i>
				</a>
			</div>
			<!-- SideNav Slide-out Button -->

			<!-- Breadcrum -->
			<div class="breadcrumb-dn mr-auto">
				<p>KU | Admin Panel</p>
			</div>
			<!-- Breadcrum -->

			<!-- Links -->
			<ul class="nav navbar-nav nav-flex-icons ml-auto">
				<li class="nav-item">
					<a class="nav-link">
						<i class="fa fa-user"></i>
						<span class="clearfix"><?php echo $session_username ?> ( Admin )</span>
					</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-user"></i>
						<span class="clearfix d-none d-sm-inline-block">Account</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right" arial-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#"> My Profile</a>
						<a class="dropdown-item" href="#"> Logout</a>
					</div>
				</li>
			</ul>
			<!-- Links -->
		</nav>
		<!-- Navbar -->

		<!-- Sidebar Navigation -->
		<div id="slide-out" class="side-nav fixed sn-bg-4 ">
			<ul class="custom-scrollbar list-unstyled">
				<!-- Logo -->
				<li class="logo-sn waves-effect">
					<div class="text-center">
						<a href="#" class="p1-0">
							<h4 style="color:#FFFFFF;">Student Attendance System</h4>
						</a>
					</div>
				</li>
				<!-- Logo -->
				<!-- Search Form -->
				<li>
					<form class="search-form" role="search">
						<div class="md-form my-0 waves-light">
							<input type="text" name="form-control py-2" placeholder="Search...">

						</div>

					</form>
				</li>
				<!-- Search Form -->
				<!-- Side Navigation Links -->
				<li>
					<ul class="collapsible collapsible-accordion">
						<li>
							<a href="index.php">
								<i class="fa fa-home"></i> Dashboard
							</a>
						</li>
						<li>
							<a class="collapsible-header waves-effect arrow-r">
								<i class="fa fa-chevron-right"></i> User Management
								<i class="fa fa-angle-down rotate-icon"></i>
							</a>
							<div class="collapsible-body">
								<ul>
									<li>
										<a href="#" class="waves-effect"> Admin</a>
									</li>
									<li>
										<a href="#" class="waves-effect"> HOD</a>
									</li>
									<li>
										<a href="#" class="waves-effect"> STAFF</a>
									</li>
								</ul>
						</li>
						<li>
							<a class="collapsible-header waves-effect arrow-r">
								<i class="fa fa-chevron-right"></i> System Management
								<i class="fa fa-angle-down rotate-icon"></i>
							</a>
							<div class="collapsible-body">
								<ul>
									<li>
										<a href="#" class="waves-effect"> Department</a>
									</li>
									<li>
										<a href="#" class="waves-effect"> Courses</a>
									</li>
									<li>
										<a href="#" class="waves-effect"> Subject</a>
									</li>
								</ul>
						</li>
						<li>
							<a class="collapsible-header waves-effect arrow-r">
								<i class="fa fa-chevron-right"></i> Student Management
								<i class="fa fa-angle-down rotate-icon"></i>
							</a>
							<div class="collapsible-body">
								<ul>
									<li>
										<a href="#" class="waves-effect"> Student</a>
									</li>
								</ul>
						</li>
						<li>
							<a class="collapsible-header waves-effect arrow-r">
								<i class="fa fa-chevron-right"></i> Attendance Management
								<i class="fa fa-angle-down rotate-icon"></i>
							</a>
							<div class="collapsible-body">
								<ul>
									<li>
										<a href="#" class="waves-effect"> View Attendance</a>
									</li>
								</ul>
						</li>
					</ul>
				</li>

				<!-- Side Navigation Links -->

			</ul>
			<!-- Mask -->
			<div class="sidenav-bg mask-strong"> </div>
			<!-- Mask -->
		</div>
		<!-- Sidebar Navigation -->

	</header>
	<!-- Main Navigation -->

	<!-- Main Layout -->
	<main>
		<div class="container-fluid">
			<section class="card card-cascade narrower mb-5">
				<!-- Grid Row -->
				<div class="row">
					<!-- Grid Column -->
					<div class="col-md-12">
						<!-- Panel Header -->
						<div class="view view-cascade py-3 gradient-card-header info-color-dark">
							<h5 class="mb-0">Total Records Data</h5>
						</div>
						<!-- Panel Header -->
						<!-- Panel Content -->
						<div class="card-body card-body-cascade">
							<div class="row">
								<div class="col-md-3" style="margin-bottom: 20px; margin-top:20px;">
									<!-- Panel Header -->
									<div class="view view-cascade py-5 gradient-card-header" style="background-color:#df4510;">
										<h5 class="mb-0">ADMIN</h5>
										<h6 class="mb-0">0</h6>
									</div>
									<!-- Panel Header -->
								</div>

								<div class="col-md-3" style="margin-bottom: 20px; margin-top:20px;">
									<!-- Panel Header -->
									<div class="view view-cascade py-5 gradient-card-header primary-color-dark">
										<h5 class="mb-0">HOD</h5>
										<h6 class="mb-0">0</h6>
									</div>
									<!-- Panel Header -->
								</div>

								<div class="col-md-3" style="margin-bottom: 20px; margin-top:20px;">
									<!-- Panel Header -->
									<div class="view view-cascade py-5 gradient-card-header success-color-dark">
										<h5 class="mb-0">STAFF</h5>
										<h6 class="mb-0">0</h6>
									</div>
									<!-- Panel Header -->
								</div>

								<div class="col-md-3" style="margin-bottom: 20px; margin-top:20px;">
									<!-- Panel Header -->
									<div class="view view-cascade py-5 gradient-card-header danger-color-dark">
										<h5 class="mb-0">STUDENT</h5>
										<h6 class="mb-0">0</h6>
									</div>
									<!-- Panel Header -->
								</div>

								<div class="card-body card-body-cascade">
									<div class="row">
										<div class="col-md-3" style="margin-bottom: 20px; margin-top:20px;">
											<!-- Panel Header -->
											<div class="view view-cascade py-5 gradient-card-header" style="background-color:#df4510;">
												<h5 class="mb-0">ADMIN</h5>
												<h6 class="mb-0">0</h6>
											</div>
											<!-- Panel Header -->
										</div>

										<div class="col-md-3" style="margin-bottom: 20px; margin-top:20px;">
											<!-- Panel Header -->
											<div class="view view-cascade py-5 gradient-card-header primary-color-dark">
												<h5 class="mb-0">HOD</h5>
												<h6 class="mb-0">0</h6>
											</div>
											<!-- Panel Header -->
										</div>

										<div class="col-md-3" style="margin-bottom: 20px; margin-top:20px;">
											<!-- Panel Header -->
											<div class="view view-cascade py-5 gradient-card-header success-color-dark">
												<h5 class="mb-0">STAFF</h5>
												<h6 class="mb-0">0</h6>
											</div>
											<!-- Panel Header -->
										</div>

										<div class="col-md-3" style="margin-bottom: 20px; margin-top:20px;">
											<!-- Panel Header -->
											<div class="view view-cascade py-5 gradient-card-header danger-color-dark">
												<h5 class="mb-0">STUDENT</h5>
												<h6 class="mb-0">0</h6>
											</div>
											<!-- Panel Header -->
										</div>

									</div>
									<!-- Panel Content -->
								</div>
								<!-- Grid Column -->
							</div>
							<!-- Grid Row -->
			</section>
		</div>
		<!-- Container-fluid -->

	</main>
	<!-- Main Layout -->

	<!-- SCRIPTS -->
	<!-- JQuery -->
	<script type="text/javascript" src="/public/js/jquery-3.3.1.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="/public/js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="/public/js/mdb.min.js"></script>
</body>

</html>