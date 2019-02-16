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

<?php
	include('header.php');
?>

	<div class="admintitle" align="center">
		<h4><a href="admindash.php" style="float:left; margin-left:50px;margin-top: 5px; color:green;font-size: 20px">Back To Home</a></h4>
		<h4><a href="Logout.php" style="float: right; margin-right:30px;margin-top: 5px; color:green;font-size: 20px">Logout</a></h4>
		<h1>Welcome to Admin page</h1>
	</div>

	
	<form method="post" action="addstudent.php" enctype="multipart/form-data">
	<div class "tableinsert" align ="center">
		<table border="2"; style="width: 50%;background-color:green;color:white;margin-top:50px;margin-left:50px;font-size: 30px;">

			<tr>
				<th>Roll Number</th>
				<td><input type="text" name="rollno" placeholder="Enter Rollno" required></td>
			</tr>

			<tr>
				<th>Name</th>
				<td><input type="text" name="name" placeholder="Enter Name" required></td>
			</tr>

			<tr>
				<th>Year</th>
				<td><input type="text" name="year" placeholder="1st/2nd/3rd/4th" required></td>
			</tr>

			<tr>
				<th>Branch</th>
				<td><input type="text" name="branch" placeholder="Enter Branch" required></td>
			</tr>

			<tr>
				<th>Email</th>
				<td><input type="text" name="email" placeholder="Enter Email address " required></td>
			</tr>

			<tr>
				<th>City</th>
				<td><input type="text" name="city" placeholder="Enter the city name" required></td>
			</tr>

			<tr>
				<th>Address</th>
				<td><input type="text" name="address" placeholder="Enter Address" required></td>
			</tr>

			<tr>
				<th>Mobile No.</th>
				<td><input type="text" name="mobileno" placeholder="Enter Mobile no" required></td>
			</tr>

			<tr>
				<th>Photo</th>
				<td><input type="file" name="simg" ></td>
			</tr>

			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>

<?php

	if(isset($_POST['submit']))
	{
		include ('../dbcon.php');

		$a=$_POST["rollno"];
		$b=$_POST["name"];
		$c=$_POST["year"];
		$d=$_POST["branch"];
		$e=$_POST["email"];
		$f=$_POST["city"];
		$g=$_POST["address"];		
		$h=$_POST["mobileno"];

		$imagename = $_FILES['simg']['name'];
		$tempname = $_FILES['simg']['tmp_name'];

		move_uploaded_file($tempname, "../dataimg/$imagename");

		$qry="INSERT INTO `student`(`rollno`, `name`, `year`, `branch`, `email`, `city`, `address`, `mobileno`,`photo`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$imagename');";
		
		$run=mysqli_query($con,$qry);
		
	 	if($run)
		{
			?>
			<script>
				alert('Data Inserted Successfully.');
			</script>
			<?php
		}
	}
?>
