<?php

	session_start();

		if(isset($_SESSION['uid']))
		{
			header('location:admin/admindash.php');
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body bgcolor="yellow">
	<div class ="index" style="background-color: blue; color: white; margin-top:10px;">
			<marquee> <h2>Please enter username and password for login</h2></marquee>
	</div>

<div class ="loginpage">
<form method="post" action="login.php" style="width: 100%; background-color:red;color: white ;font-size: 35px;">
<h2 align="center">Admin Login</h2>
<h6 style="color: white;margin-left: 10px;margin-bottom: 10px"><a href="index.php">Back To Search Page</a></h6>
<table align="center">
	<tr>
		<td>Username</td><td><input type="text" name="username" required placeholder="Admin"></td>
	</tr>
	<tr>
		<td>Password</td><td><input type="password" name="password" required placeholder="Password"></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="Login" value="Login"></td>
	</tr>
</table>	
</form>
</div>
</body>
</html>
 
<?php

include('dbcon.php');

if(isset($_POST['Login']))
{
	$user = $_POST['username'];
	$pass = $_POST['password'];

	$qry="SELECT * FROM `admin` WHERE `username`='$user' AND `Password`='$pass'";

	$run=mysqli_query($con,$qry);
	$row=mysqli_num_rows($run);

	if($row<1)
	{
		?>
		<script>
			alert('Username or Password not match !!!');
			window.open('login.php','_self');
		</script>
		<?php
	}
	else
	{
		$data=mysqli_fetch_assoc($run);
		$id=$data['id'];

		session_start();

		$_SESSION['uid']=$id;

		header('location:admin/admindash.php');
	}
}

?>


