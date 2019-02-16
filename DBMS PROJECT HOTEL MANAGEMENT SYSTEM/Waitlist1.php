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
 
	<h2 style="text-align: left;background-color: yellow;width: 200px;" >Waiting List  :  </h2>
		<h3 style="float: right;padding-right: 100px;"><a href="status1.php">BACK</a></h3>
<h5 style="padding-left: 70px;">
<?php
	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";
	// connect to database

	$db = mysqli_connect('localhost', 'root', '', 'registration');

	//$sql1="create table waitinglist as select fname,gname,category,cg from register_boys where category='OPEN' ORDER BY cg ASC,pri_cat ASC LIMIT 2;";

	$sql1="select fname,gname,category,cg from register_boys where category='OPEN' or category='OTHERS' ORDER BY cg ASC,pri_cat ASC LIMIT 5;";

	$result1 = mysqli_query($db, $sql1);

	//$sql2="insert into waitinglist select fname,gname,category,cg from register_boys where category='OTHERS' ORDER BY cg ASC,pri_cat ASC LIMIT 3;";

	//$result2 = mysqli_query($db, $sql2);

	//$sql3="select * from waitinglist";

	//$result3 = mysqli_query($db, $sql3);

		echo "<table border='1'>
		<tr>
		<th>NAME</th>
		<th>MIS NO</th>
		<th>Category</th>
		<th>CGPA</th>
		</tr>";
  
  if (mysqli_num_rows($result1)>0) 
  {
  	while($row1 = mysqli_fetch_assoc($result1)) 
  	{
	  echo "<tr>";
	  echo "<td>" . $row1['fname'] . "</td>";
	  echo "<td>" . $row1['gname'] . "</td>";
	  echo "<td>" . $row1['category'] . "</td>";
	  echo "<td>" . $row1['cg'] . "</td>";
	  echo "</tr>";
  	}
  	echo "</table>";
  }
?>
</h5> 
</body>
</html>
