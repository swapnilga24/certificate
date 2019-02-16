<?php
	session_start();
	
	if(isset($_SESSION['uid']))
	{
		echo "";
	}
	else
	{
		header('location: ../login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Management System</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body bgcolor="yellow">

	<div class="admintitle" align="center">
		<h4><a href="admindash.php" style="float:left; margin-left:50px;margin-top: 5px; color:green;font-size: 20px">Back To Home</a></h4>
		<h4><a href="Logout.php" style="float: right; margin-right:30px;margin-top: 5px; color:green;font-size: 20px">Logout</a></h4>
		<h1>Welcome to Admin page</h1>
	</div>

	<table align="center">
	<form action="updatestudent.php" method="post">
		<br>
		<tr>
			<th>Enter Year</th><td><input type="text" name="year" placeholder="Enter Year" required></td>
			<th>Enter Name</th><td><input type="text" name="stuname" placeholder="Enter Student Name" required></td>
			<td colspan="2"><input type="submit" name="submit" value="Search"></td>
		</tr>
		</br>
	</form>
	</table>

<table align="center" border="1" width="80%" style="margin-top: 10px">
	<tr style="background-color: #000; color: white;">
		<th>No</th>
		<th>Image</th>
		<th>Name</th>
		<th>Rollno</th>
		<th>Edit</th>
	</tr>

<?php
	if(isset($_POST['submit']))
	{
		include ('../dbcon.php');

		$year=$_POST['year'];
		$name=$_POST['stuname'];

		$sql="SELECT * FROM `student` WHERE `year`='$year' AND `name` LIKE '%$name%'";

		$run=mysqli_query($con,$sql);

		if(mysqli_num_rows($run)<1)
		{
			echo "<tr><td colspan='5'>No Record Found</td></tr>";
		}
		else
		{
			$count=0;
			while($data=mysqli_fetch_assoc($run	))
			{
				$count++;
				?>
				<tr>
					<td><?php echo "$count";?></td>
					<td><img src="../dataimg/<?php echo $data['photo']; ?>" alt ="Image is not available"; style="max-width: 100px;"/></td>
					<td><?php echo $data['name']; ?></td>
					<td><?php echo $data['rollno']; ?></td>
					<td><a href="updateform.php?sid=<?php echo $data['id'];?>">Edit</a></td>
				</tr>
				<?php
					
			}
		}
	}
	?>
</table>
</body>
</html>
