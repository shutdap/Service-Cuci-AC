<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/acrepair.jpg" alt="">
				</div>
				<form action="prosess_login.php" method="POST">
					<h3>Login</h3>
					<div class="form-wrapper">
						<input type="text" name="username" placeholder="Username" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" name="password" placeholder="Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button>Login
					</button>
					<br/>
					<br/>
					<br/>
					<div class="form-wrapper" style="text-align: center;">
						<h6>Tidak Punya Akun ? <a href="register.php">Daftar Di Sini</a></h6>
					</div>					
				</form>
			</div>
		</div>
		
	</body>
</html>