

<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration FOR NEW USER</title>
    
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #6FE5C9">
     <iframe width="0" height="0" src="bensound-anewbeginning.mp3" frameborder="0" allowfullscreen></iframe>
	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user" >Login</button>
			<button type="button" class="btn" name="back" onclick="history.back()" >Back</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>


</body>
</html>