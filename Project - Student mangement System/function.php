<?php
	function showdetails($Year,$Roll)
	{
		include('dbcon.php');

		$sql="SELECT * FROM `student` WHERE `rollno`='$Roll' AND `year`='$Year'";
		$run=mysqli_query($con,$sql);

		$data=mysqli_fetch_assoc($run);
		
		if($data==0)
		{
			?>
			<script style="center">
				alert('Data Not Found !!!');
				window.open('index.php','_self');
			</script>
			<?php
		}
		else
		{
			?>
				<table border="1" style="width: 50%; margin-top: 50px; background-color: white">
					<tr>
						<th colspan="3" style="background-color: green;color: white;">STUDENT DETAILS</th>
					</tr>
					<tr>
						<td rowspan="8"><img src="dataimg/<?php echo $data['photo'];?>" alt="Image is not available" style="max-height: 150px;max-width: 120px;padding-left: 70px;"/></td>
						<th style="background-color: blue;color: white;">Roll NO:</th>
						<td><?php echo $data['rollno']; ?></td>
					</tr>

					<tr>
						<th style="background-color: blue;color: white;">Name:</th>
						<td><?php echo $data['name']; ?></td>
					</tr>

					<tr>
						<th style="background-color: blue;color: white;">Year:</th>
						<td><?php echo $data['year']; ?></td>
					</tr>

					<tr>
						<th style="background-color: blue;color: white;">Branch:</th>
						<td><?php echo $data['branch']; ?></td>
					</tr>

					<tr>
						<th style="background-color: blue;color: white;">Email:</th>
						<td><?php echo $data['email']; ?></td>
					</tr>

					<tr>
						<th style="background-color: blue;color: white;">City:</th>
						<td><?php echo $data['city']; ?></td>
					</tr>

					<tr>
						<th style="background-color: blue;color: white;">Mobile No:</th>
						<td><?php echo $data['mobileno']; ?></td>
					</tr>
				</table>
					<?php	
		}
	}
?>	