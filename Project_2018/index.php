<?php
    //include_once 'OOP/user.php';
    //$user = new user();
?>
<?php
    if ($_SERVER ['REQUES_METHOD'] = 'POST' && isset($_POST['Login'])){
				$login =$user-> login($_POST);
		}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="website/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="website/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="website/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="website/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="website/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="website/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="website/css/util.css">
	<link rel="stylesheet" type="text/css" href="website/css/main.css">
</head>
 <link rel="icon" type="image/png" href="website/images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="website/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8084/website/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8084/website/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8084/website/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="website/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="website/css/util.css">
    <link rel="stylesheet" type="text/css" href="website/css/main.css">

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="website/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="" method="POST">
					<span class="login100-form-title">
						Member Login
					</span>


					<div class="wrap-input100 validate-input" data-validate = "Valid ID">
						<input class="input100" type="text" name="StudentID" placeholder="ID">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						 <input type="submit" id="btn" name="Login" class="login100-form-btn" value="Login">

					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
                            Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="website/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="website/vendor/bootstrap/js/popper.js"></script>
	<script src="website/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="website/vendor/select2/select2.min.js"></script>
	<script src="website/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="website/js/main.js"></script>

</body>
</html>
