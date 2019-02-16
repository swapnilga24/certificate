<!DOCTYPE html>
<html>
<head>
	<title>Status page</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>

<body style="text-align: center;background-color: lightgreen;">
	<form method="POST" action="status1.php">
		<h1 style="text-align: center;background-color: red;color: white;"> Status Page</h1>

	
	</br></br>
<h3>Room Allocated<a href="Allocated1.php">  Click here</a></h3>
</br>
<h3>Waiting List<a href="Waitlist1.php">  Click here</a></h3>
 </br></br>
		<h3>	
		<div>
         <label>Enter your MIS Number:-</label>
	  	 <input type="text" name="no" align="right" id="h1" placeholder="11111111" required><br>
	    </div>
		</h3>

		<div class="but">
         <div class="input-group">
         <button style="color: blue;width: 300px;height: 30px;background-color: yellow;text-align: center;" type="submit" class="btn" name="form1">Search</button>
        </div>
    	</div>
    </form>

<?php
	session_start();
	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";
	// connect to database
	error_reporting(E_ERROR | E_PARSE);
	
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	$res=$_POST['no'];

	$sql="select fname from register_boys where gname=$res";

	$result = mysqli_query($db, $sql);
			
	  if (mysqli_num_rows($result) > 0) 
	  {
	  	?>
		<script>
			alert('Room Allocate Please procced !!!');
			window.open('payment.html','_self');
		</script>
		<?php
	  }

	  $sql="select fname from register_boys where gname!=$res";

	  $result = mysqli_query($db, $sql);

	  if (mysqli_num_rows($result) > 0) 
	  {			
	  	?>
		<script>
			alert('Room is not Allocate !!!');
			window.open('logout.php','_self');
		</script>
		<?php
	  }

?>
</body>
</html>
	