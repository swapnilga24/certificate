<!DOCTYPE html>
<html>
<head>
	<title>Status page</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>

<body style="text-align: center;background-color: lightgreen;">
	<form method="POST" action="status1.php">
		<h1 style="text-align: center;background-color: red;color: white;"> Status Page</h1>
	</form>
 
<h2 style ="text-align: left;background-color: yellow;width: 200px;">Room Allocated: </h2>
<h5 style="padding-left: 70px;">
			<h3 style="float: right;padding-right: 100px;"><a href="status1.php">BACK</a></h3>
<?php
	session_start();
	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";
	// connect to database

	$db = mysqli_connect('localhost', 'root', '', 'registration');

	$sql="select fname,gname,category,cg from register_boys order by cg DESC,pri_cat DESC;";


	$result = mysqli_query($db, $sql);
		
		echo "<table border='1'>
		<tr>
		<th>NAME</th>
		<th>MIS NO</th>
		<th>Category</th>
		<th>CGPA</th>
		</tr>";
  		
  if (mysqli_num_rows($result) > 0) 
  {
  	while($row = mysqli_fetch_assoc($result)) 
  	{
	  echo "<tr>";
	  echo "<td>" . $row['fname'] . "</td>";
	  echo "<td>" . $row['gname'] . "</td>";
	  echo "<td>" . $row['category'] . "</td>";
	  echo "<td>" . $row['cg'] . "</td>";
	  echo "</tr>";
  	}
  	echo "</table>";
  }
?>
</h5>
</body>
</html>
