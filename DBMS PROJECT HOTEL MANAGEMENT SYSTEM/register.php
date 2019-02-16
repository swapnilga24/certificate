<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration FOR NEW USER</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <iframe width="0" height="0" src="bensound-anewbeginning.mp3" frameborder="0" allowfullscreen></iframe>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form id="for"method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="inp">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="inp">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="inp">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="inp">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="inp">
			<button type="submit" class="btn" name="reg_user">Register</button>
			<button type="button" class="btn" name="back" onclick="history.back()" >Back</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>