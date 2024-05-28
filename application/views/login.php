<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login to NoeLelang</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<!-- Favicon icon -->

	<!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

	<!-- Font Awesome -->
	<link href="<?= base_url('assets/') ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!--ico Fonts-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>assets/icon/icofont/css/icofont.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- waves css -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>assets/plugins/Waves/waves.min.css">

	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>assets/css/main.css">

	<!-- Responsive.css-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>assets/css/responsive.css">

	<!--color css-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>assets/css/color/color-1.min.css" id="color"/>

</head>
<body>
<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
	<!-- Container-fluid starts -->
	<div class="container-fluid">
		<div class="row">

			<div class="col-sm-12">
				<div class="login-card card-block">
					<form class="md-float-material" method="post" action="<?= base_url('auth/login') ?>">
						<div class="text-center">
							<img src="assets/images/logo-black.png" alt="logo">
						</div>
						<h3 class="text-center txt-primary">
							Login to NoeLelang
						</h3>
						<div class="row">
							<div class="col-md-12">
								<div class="md-input-wrapper">
									<input type="text" class="md-form-control" required="required" placeholder="Username" name="username"/>
								</div>
							</div>
							<div class="col-md-12">
								<div class="md-input-wrapper">
									<input type="password" class="md-form-control" required="required" placeholder="Password" name="password"/>
								</div>
							</div>
						<div class="row">
							<div class="col-xs-10 offset-xs-1">
								<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
							</div>
						</div>
					</form>
					<!-- end of form -->
					<center>
					<h3>Belum Punya Akun? <a href="<?= base_url('auth/daftar') ?>">Register</a></h3>
					</center>
				</div>
				<!-- end of login-card -->
			</div>
			<!-- end of col-sm-12 -->
		</div>
		<!-- end of row -->
	</div>
	<!-- end of container-fluid -->
</section>

<!-- Warning Section Starts -->
<!-- Older IE warning message -->

<!-- Warning Section Ends -->
<!-- Required Jqurey -->
<script src="<?= base_url('assets/') ?>assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?= base_url('assets/') ?>assets/plugins/tether/dist/js/tether.min.js"></script>

<!-- Required Fremwork -->
<script src="<?= base_url('assets/') ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- waves effects.js -->
<script src="<?= base_url('assets/') ?>assets/plugins/Waves/waves.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="<?= base_url('assets/') ?>assets/pages/elements.js"></script>



</body>
</html>
