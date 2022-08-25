<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>STUDENT ATTENDANCE MANAGEMENT SYSTEM</title>

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
	<!-- Main Layout  -->
	<main>
		<!-- Container-fluid -->
		<div class="container-fluid">
			<section>
				<!-- Grid row -->
				<div class="row">
					<!-- Grid Column -->
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<h3 class="text-center">STUDENT ATTENDANCE MANAGEMENT SYSTEM</h3>
						<div style="background-color: #FFFFFF; margin-top: 30px;">
							<!-- Default Form Content -->
							<form action="" method="post" class="text-center borfer border-light p-5">
								<p class="h4 mb-4">Sign In</p>	


								<select name="user_type" class="browser-default custom-select mb-4">
									<option value="" disabled>Choose User Type</option>
									<option value="admin" selected>Admin</option>
									<option value="hod" selected>HOD</option>
									<option value="lecturer" selected>Lecturer</option>
								</select>							
								<input type="text" id="username" name="username" value="" class="form-control mb4" placeholder="Username" required /> <br>

								<input type="password" id="password name="password" value="" class="form-control mb4" placeholder="Password" required />

								<div class="d-flex">
									<div>
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember" />
											<label class="custom-control-label" id="defaultLoginFormRemember"> Remember me </label>
										</div>
									</div>
								</div>

								<!-- Sign In Button -->
								<button class="btn btn-info btn-block my-4" type="submit" name="login">Sign In</button>
								<!-- Sign In Button -->
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
				<!-- Container-fluid -->
	</main>

	<!-- Main Layout  -->
  
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