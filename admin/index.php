<?php 

	include '../include/controller.php';
	$session_useername = $_SESSION['user_name'];
	if(empty($_SESSION['user_name'])) {
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
  	<link rel="stylesheet" href="public/css/font-awesome.min.css">
  	<!-- Bootstrap core CSS -->
  	<link rel="stylesheet" href="public/css/bootstrap.min.css">
  	<!-- Material Design Bootstrap -->
  	<link rel="stylesheet" href="public/css/mdb.min.css">
  	<!-- Sweetalert -->
  	<script src="public/js/sweetalert.min.js"></script>
  	<!-- Custom styles -->
  	<link rel="stylesheet" href="public/css/style.css">
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
						<i class="fa fa-user" ></i>
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
	</header>
	<!-- Main Navigation -->

	<!-- SCRIPTS -->
	<!-- JQuery -->
	<script type="text/javascript" src="public/js/jquery-3.3.1.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="public/js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="public/js/mdb.min.js"></script>
</body>
</html>