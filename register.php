<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registration Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/acrepair.jpg" alt="">
				</div>
				<form action="prosesRegis.php" method="POST">
					<h3>Registration Form</h3>
					<div class="form-group">
						<input type="text" name="fristName" placeholder="First Name" class="form-control">
						<input type="text" name="lastName" placeholder="Last Name" class="form-control">
					</div>
					<div class="form-wrapper">
						<input type="text" name="username" placeholder="Username" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" name="email" placeholder="Email Address" class="form-control">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" name="address" placeholder="Address" class="form-control">
						<i class="zmdi zmdi-accounts-list-alt"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" name="notelp" placeholder="Telepon" class="form-control">
						<i class="zmdi zmdi-phone"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" name="password" placeholder="Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button>Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>