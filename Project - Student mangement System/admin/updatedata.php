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

		$id=$_POST['sid'];

		$imagename = $_FILES['simg']['name'];
		$tempname = $_FILES['simg']['tmp_name'];

		move_uploaded_file($tempname, "../dataimg/$imagename"); 
		
		$qry="UPDATE `student` SET `rollno`='$a',`name`='$b',`year`='$c',`branch`='$d',`email`='$e',`city`='$f',`address`='$g',`mobileno`='$h',`photo`='$imagename' WHERE `id`='$id';";
		
		$run=mysqli_query($con,$qry);
		
	 	if($run)
		{
			?>
			<script>
				alert('Data Updated Successfully.');
				window.open('updateform.php?sid=<?php echo $id;?>','_self');    
			</script>
			<?php
		}
	}
?>