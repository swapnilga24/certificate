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
	include('../dbcon.php');

	$sid = $_GET['sid'];

	$qry="SELECT * FROM `student` WHERE `id`='$sid';";

	$run=mysqli_query($con,$qry);

	$data=mysqli_fetch_assoc($run);

?>

	<div class="admintitle" align="center">
		<h4><a href="admindash.php" style="float:left; margin-left:50px;margin-top: 5px; color:green;font-size: 20px">Back To Home</a></h4>
		<h4><a href="Logout.php" style="float: right; margin-right:30px;margin-top: 5px; color:green;font-size: 20px">Logout</a></h4>
		<h1>Welcome to Admin page</h1>
	</div>

	
	<form method="post" action="updatedata.php" enctype="multipart/form-data">
	<div class "tableinsert" align ="center">
		<table border="2"; style="width: 50%;background-color:green;color:white;margin-top:50px;margin-left:50px;font-size: 30px;">

			<tr>
				<th>Roll Number</th>
				<td><input type="text" name="rollno" value="<?php echo $data['rollno'];?>" required></td>
			</tr>

			<tr>
				<th>Name</th>
				<td><input type="text" name="name" value="<?php echo $data['name'];?>" required></td>
			</tr>

			<tr>
				<th>Year</th>
				<td><input type="text" name="year" value="<?php echo $data['year'];?>" required></td>
			</tr>

			<tr>
				<th>Branch</th>
				<td><input type="text" name="branch" value="<?php echo $data['branch'];?>" required></td>
			</tr>

			<tr>
				<th>Email</th>
				<td><input type="text" name="email" value="<?php echo $data['email'];?>" required></td>
			</tr>

			<tr>
				<th>City</th>
				<td><input type="text" name="city" value="<?php echo $data['city'];?>" required></td>
			</tr>

			<tr>
				<th>Address</th>
				<td><input type="text" name="address" value="<?php echo $data['address'];?>" required></td>
			</tr>

			<tr>
				<th>Mobile No.</th>
				<td><input type="text" name="mobileno" value="<?php echo $data['mobileno'];?>" required></td>
			</tr>

			<tr>
				<th>Photo</th>
				<td><input type="file" name="simg" ></td>
			</tr>

			<tr>
				<td colspan="2" align="center">
					<input type="hidden" name="sid" value="<?php echo $data['id'];?>"/>
					<input type="submit" name="submit" value="submit">
				</td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>
