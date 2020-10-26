<!DOCTYPE html>
<html>
	<!--Description : Login Page-->
	<!--Author : Manfred-->
	<!--Date : 16/10/2020-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Cache-control" content="no-cache">
	<script src="script/validation.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="style/style.css">
	<!--FontAwesome CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>Login</title>
</head>

<body class="loginpage">
	<div class="container">
		<div class="loginform d-flex justify-content-center">
			<div class="card">
				<div class="card-header">
					<h3>Sign In</h3>
				</div>
				<div class="card-body">
					<form name="loginform" onsubmit="return validateLogin()"  enctype="text/plain" action ="index.php" required>
						<div class="input-group form-group">
							<span class="input-group-text"><i class="fa fa-user"></i></span>
							<input type="text" name="username" class="form-control" placeholder="username">
							
						</div>
						<div class="input-group form-group">
							<span class="input-group-text"><i class="fa fa-lock"></i></span>
							<input type="password" name="password" class="form-control" placeholder="password">
						</div>
						<div class="row align-items-center remember">
							<input type="checkbox">Remember Me
						</div>
						<div class="form-group">
							<input type="submit" value="Login" class="btn float-right">
						</div>
					</form>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center">
						Don't have an account?<a href="register.php">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center">
						<a href="#">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>


</body>
</html>


