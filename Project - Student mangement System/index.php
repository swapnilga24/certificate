<!DOCTYPE html>
<html>
<head>
	<title>Student management system</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body background="images/p8.png">

<h3 align="right"><a href="login.php">Admin Login</a></h3>
<h1 align="center" style="background-color: red">Welcome to student management system</h1>

<form method="post" action="index.php">
<table style="width:40%"; align="center" border="1">
<h3>0
	<tr>
		<td colspan="2" align="center"><h3>Student information</h3></td>
	</tr>
	<tr>
		<td align="left">Choose Year:</td>
		<td>
			<select name="year">
				<option value="1">FE</option>
				<option value="2">SE</option>
				<option value="3">TE</option>
				<option value="4">BE</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="left">Enter Roll no.:</td>
		<td><input type="text" name="rollno" placeholder="ex.323007" required></td>
	</tr>	
	<tr>
		</br>
		<td colspan="2" align="center"><input type="submit" name="submit" value="Show Info"></td>
	</tr>
</h3>
</table>		
</form>
</body>
</html>

<?php  

	if(isset($_POST['submit']))
	{

		$Year=$_POST['year'];
		$Roll=$_POST['rollno'];
	
		include('dbcon.php');
		include('function.php');
		showdetails($Year,$Roll);
	}
?>
















