<?php

/* Connecting to MySQL database */
if ($_POST) {
	$con=mysqli_connect("localhost","ccit1783_SamD","sam123", "ccit1783_userdetails");

	//Check connection and print out any error messages that may exist if failed to connect.
	if(mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	// Identify variables	
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
	
													
		$user_check=mysqli_query($con, "SELECT * FROM userdetails where username='$username' and password='$password'");

// print_r($user_check);
if ($user_check) {
	$num_rows = mysqli_num_rows($user_check);
// 	print $num_rows;
}
		if (($num_rows) && $num_rows == 1){  
			// Start session & go to profile
			$_SESSION=array();
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['logged']=TRUE;
				header('Location: batcentral.php');
		}
		else 
		{

	// Create Error Message Variable
		$error="Try again Joker, Batname or Password incorrect.";
		}
}
?>
<html>
	<head> 
	<title>
		BatTeam Login
	</title>	

		 <link href="php.css" rel="stylesheet">
	</head>
	<body>

<!-- Login to Bat Team with username and password -->
		<form action="login.php" method="post">
		<h1>
			<!-- If error print/echo $error -->

			<p>
				<?php if($error) {echo $error;} ?>
			</p>	
		</h1>
		
			BatName: <input type="text" name="username">
			Password: <input type="text" name="password">
		<input type="submit" value="Login">
		</form>
<!-- Register BatCentral (Register) -->	
		Want to help save Gotham - Join BatTeam?
		<form>
		<input type="button" value="Join BatTeam" onClick="location.href='register.php'">
		</form>
	</body>
</html>
