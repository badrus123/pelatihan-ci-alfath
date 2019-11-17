<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V6</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/login/vendor/bootstrap/css/bootstrap.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/login/fonts/iconic/css/material-design-iconic-font.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/login/vendor/animate/animate.css'?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/login/vendor/css-hamburgers/hamburgers.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/login/vendor/animsition/css/animsition.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/login/vendor/select2/select2.min.css'?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/login/vendor/daterangepicker/daterangepicker.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/login/css/util.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/login/css/main.css'?>">
<!--===============================================================================================-->
</head>
<?php
if ($this->session->flashdata('alert')=='registrasi_berhasil'){
    echo "<script>alert('berhasil mendaftarkan akun');</script>";
}else if ($this->session->flashdata('alert')=='login_gagal'){
    echo "<script>alert('login anda gagal');</script>";
}
?>


<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form method="post" action="<?php echo site_url().'/LoginController/cek_login';?>" class="login100-form validate-form">
					<span class="login100-form-avatar">
						<img src="<?php echo base_url().'assets/login/images/asprak.png'?>" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<ul class="login-more p-t-190">
						<li>
							<span class="txt1">
								Tidak Punya akun?
							</span>

							<a href="<?php echo site_url().'/LoginController/register_view';?>" class="txt2">
								Register
							</a>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/login/vendor/jquery/jquery-3.2.1.min.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/login/vendor/animsition/js/animsition.min.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/login/vendor/bootstrap/js/popper.js'?>"></script>
	<script src="<?php echo base_url().'assets/login/vendor/bootstrap/js/bootstrap.min.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/login/vendor/select2/select2.min.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/login/vendor/daterangepicker/moment.min.js'?>"></script>
	<script src="<?php echo base_url().'assets/login/vendor/daterangepicker/daterangepicker.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/login/vendor/countdowntime/countdowntime.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'assets/login/js/main.js'?>"></script>

</body>
</html>
