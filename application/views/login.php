<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Admin</title>
	<!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url();?>assets/dist/img/icon-pn.png" type="image/x-icon">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url();?>assets/dist/img/icon-pn.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/admin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/admin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/admin/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/admin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/admin/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/admin/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/admin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/admin/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/admin/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #bcbcbc;">

	
<!-- particles.js container -->
<div id="particles-js" style="position: absolute ;z-index: 0; width: 100%;"></div>
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(<?= base_url();?>assets/admin/images/bg-01.png);">
					<span class="login100-form-title-1">
						<img src="<?= base_url();?>assets/dist/img/icon-pn.png" alt="" style="width: 120PX;">
					</span>
				</div>

				<form class="login100-form validate-form" action="login/auth" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="<?= base_url();?>assets/admin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url();?>assets/admin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url();?>assets/admin/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url();?>assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url();?>assets/admin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url();?>assets/admin/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url();?>assets/admin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url();?>assets/admin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url();?>assets/admin/js/main.js"></script>

	<!-- scripts -->
<script src="<?= base_url();?>assets/admin/js/particles.js"></script>
<script src="<?= base_url();?>assets/admin/js/app.js"></script>

<!-- stats.js -->
<script src="<?= base_url();?>assets/admin/js/lib/stats.js"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>

</body>
</html>