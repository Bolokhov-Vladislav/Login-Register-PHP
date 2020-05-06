<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="styles.css">
	<title>Document</title>
</head>
<body>
	<div class="container">
	<div class="login-box">
		<div class="row">
			<div class="col-md-6 login-left">
				<h2>Login here</h2>
				<form action="validation.php" method="post">
				 <div class="form-group">
				  <label>Usename</label>
					<input type="text" name="user" class="form-control" required>
				 </div>

				 <div class="form-group">
				  <label>Password</label>
					<input type="password" name="password" class="form-control" required>
				 </div>
				 <button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>

			<div class="col-md-6 login-right">
				<h2>Register here</h2>
				<form action="registration.php" method="post">
				 <div class="form-group">
				  <label>Usename</label>
					<input type="text" name="user" class="form-control" required>
					<?php 
						if(isset($_SESSION['error'])){
							echo $_SESSION['error'];
							session_destroy();
						}
						if(isset($_SESSION['success'])){
							echo $_SESSION['success'];
							session_destroy();
						}
					?>
				 </div>

				 <div class="form-group">
				  <label>Password</label>
					<input type="password" name="password" class="form-control" required>
				 </div>
				 <button type="submit" class="btn btn-primary">Register</button>
				</form>
			</div>
		</div>
		</div>
	</div>
</body>
</html>