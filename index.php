<?php
include 'include/controller.php';
if (isset($_SESSION['user_name'])) {
	if (($_SESSION['user_type']) == "admin") {
		header("location:admin/index.php");
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Student Attendance Management System</title>

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

<body class="fixed-sh light-blue-skin">

	<!-- Main Layout -->
	<main>
		<!-- Countainer-fluid -->
		<div class="container-fluid">
			<section>
				<!-- Grid row -->
				<div class="row">
					<!-- Grid Column -->
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<h3 class="text-center">STUDENT ATTENDANCE SYSTEM</h3>
						<div style="background-color:  #FFFFFF; margin-top: 30px;">
							<!-- Default Form Content -->
							<form action="" method="post" class="text-center border border-light p-5">
								<p class="h4 mb-4">Sign in</p>

								<select name="user_type" class="browser-default custom-select mb-4">
									<option value="" disabled>Choose User Type</option>
									<option value="admin" selected>Admin</option>
									<option value="hod">HOD</option>
									<option value="staff">Lecturer</option>
								</select>

								<input type="text" id="username" name="username" value="<?php echo $username; ?>" class="form-control mb-4" placeholder="Username" required />
								<?php echo $usernameErr ?>

								<input type="password" id="password" name="password" value="" class="form-control mb-4" placeholder="Password" required />
								<?php echo $passwordErr ?>

								<div class="d-flex">
									<div>
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember" />
											<label class="custom-control-label" id="defaultLoginFormRemember">Remember me</label>
										</div>
									</div>
								</div>

								<!-- Sign in Button -->
								<button class="btn btn-info btn-block my-4" type="submit" name="login">Sign in </button>
								<!-- Sign in Button -->

							</form>
							<!-- Default Form Content -->
						</div>
					</div>
					<div class="col-md-3">

					</div>
				</div>
				<!-- Grid row -->
			</section>
		</div>
		<!-- Countainer-fluid -->
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