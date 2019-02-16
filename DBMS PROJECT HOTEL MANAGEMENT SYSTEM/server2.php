<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registration');
	if (mysqli_connect_errno()) {
die("Database connection failed: " .
mysqli_connect_error() .
" (" . mysqli_connect_errno() . ")"
);
}

	// REGISTER USER
	if (isset($_POST['form2'])) {
		// receive all input values from the form
		$fname = mysqli_real_escape_string($db, $_POST['fname']);
		$branch = mysqli_real_escape_string($db, $_POST['branch']);
		$gname = mysqli_real_escape_string($db, $_POST['gname']);
		$cg = mysqli_real_escape_string($db, $_POST['cg']);
		$pri_cat = mysqli_real_escape_string($db, $_POST['pri_cat']);
		$category = mysqli_real_escape_string($db, $_POST['category']);
		$mob = mysqli_real_escape_string($db, $_POST['mob']);
		$pmob = mysqli_real_escape_string($db, $_POST['pmob']);
		$gen = mysqli_real_escape_string($db, $_POST['gen']);


		// register user if there are no errors in the form
		if (count($errors) == 0) 
		{
			$query="INSERT INTO register_girls VALUES ('".$fname."','".$branch."','".$gname."','".$cg."','".$pri_cat."','".$category."','".$mob."','".$pmob."','".$gen."')";

			$result=mysqli_query($db, $query);
 		
			$_SESSION['success'] = "You are now logged in";
		
			header('location: hostelhome2.html');
		}

	}

?>