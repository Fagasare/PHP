<?php require_once 'dbh.inc.php';?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="./favicon/site.webmanifest">
	<title>Korle-Bu IT Staff</title>
</head>
<body>

	<div class="bg-container-contact100" style="background-image: url(images/pM13RD.gif);">
		<div class="contact100-header flex-sb-m">
			<a href="#" class="contact100-header-logo">
				<img src="images/download.png" alt="LOGO">
			</a>

			<div>
				<button class="btn-show-contact100">
					Register Here
				</button>
			</div>
		</div>
	</div>

	<div class="container-contact100">
		<div class="wrap-contact100">
			<button class="btn-hide-contact100">
				<i class="zmdi zmdi-close"></i>
			</button>

			<div class="contact100-form-title" style="background-image: url(images/bg-02.jpg);">
				<span>Register Here</span>
			</div><br>
              <?php 
                                  if(isset($_GET['message']))
                                  {
                                    $message = $_GET['message'];
                                    echo $message;
                                    set_time_limit(10);
                                  }?>
			<form class="contact100-form validate-form" action="sign.inc.php" method="POST">
				<div class="wrap-input100 validate-input">
					<input id="name" class="input100" type="text" name="full_name" placeholder="Full name ..." required>
					<span class="focus-input100"></span>
					<label class="label-input100" for="name">
						<span class="lnr lnr-user m-b-2"></span>
					</label>
				</div>


				<div class="wrap-input100 validate-input">
					<input id="email" class="input100" type="email" name="email" placeholder="Eg. example@email.com" required>
					<span class="focus-input100"></span>
					<label class="label-input100" for="email">
						<span class="lnr lnr-envelope m-b-5"></span>
					</label>
				</div>

				<div class="wrap-input100 validate-input">
					<input type="password" class="input100" name="password" id="password" placeholder="Password ..." required>
					<span></span>
					<label class="label-input100" for="password">
						<i class="fa fa-lock" aria-hidden="true"></i>
					</label>
				</div>

				<div class="wrap-input100 validate-input">
					<input type="password" class="input100" name="password_2" id="password_2" placeholder="Confirm Password ..." required>
					<span></span>
					<label class="label-input100" for="confirm password">
						<i class="fa fa-lock" aria-hidden="true"></i>
					</label>
				</div>

				<div class="wrap-input100 validate-input">
					<input type="text" class="input100" name="area_name" id="area_name" placeholder="Area name ..." required>
					<span></span>
					<label class="label-input100" for="Area name">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</label>
				</div>

				<div class="wrap-input100 validate-input">
					<input type="text" class="input100" name="gps_location" id="gps_location" placeholder="GPS Location Address..." required>
					<span></span>
					<label class="label-input100" for="GPS Location Address">
						<i class="fa fa-location-arrow" aria-hidden="true"></i>
					</label>
				</div>

				<div class="wrap-input100 validate-input">
					<input type="text" class="input100" name="department" id="department" placeholder="Department ..." required>
					<span></span>
					<label class="label-input100" for="Department">
						<i class="fa fa-home" aria-hidden="true"></i>
					</label>
				</div>

				<div class="wrap-input100 validate-input">
					<input type="text" class="input100" name="school" id="school" placeholder="Institution you from ..." required>
					<span></span>
					<label class="label-input100" for="school">
						<i class="fa fa-graduation-cap" aria-hidden="true"></i>
					</label>
				</div>


				<div class="wrap-input100 validate-input">
					<input type="phone" class="input100"  name="phone" placeholder="Eg. +1 800 000000" required>
					<span class="focus-input100"></span>
					<label class="label-input100" for="phone">
						<span class="lnr lnr-smartphone m-b-2"></span>
					</label>
				</div>

				<div class="wrap-input100 validate-input">
					<input type="text" class="input100" name="location_1" id="location_1" placeholder="Your place of Residence ..." required>
					<span class="focus-input100"></span>
					<label class="label-input100" for="location">
						<i class="fa fa-home" aria-hidden="true"></i>
					</label>
				</div>

				<div class="wrap-input100 validate-input">
					<input type="text" class="input100" name="location_2" id="location_2" placeholder="The previous junction to your place of Residence ..." required>
					<span class="focus-input100"></span>
					<label class="label-input100" for="location">
						<i class="fa fa-home" aria-hidden="true"></i>
					</label>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="register" id="register">
						Register
					</button>
					<input type="hidden" name="Save" id="Save" value="do">
				</div>
				
			</form>
		</div>
	</div>



	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>



