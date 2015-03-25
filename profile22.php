<?php
session_start();
if(!$_SESSION['logged']){
	
	header("Location: login.php");
	exit;
}
// Greet logged in user with their BatName
echo "Welcome, " . $_SESSION ['username'];

/* Connecting to MySQL database */

$con=mysqli_connect("localhost","ccit1783_SamD","sam123", "ccit1783_userdetails");

//Check connection and print out any error messages that may exist if failed to connect.
if(mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (($_POST['username']) && $_SESSION['logged']){ 
	
	// Variables
	$username=$_POST['username'];
	$password=$_POST['password'];

	mysqli_query($con, "UPDATE userdetails SET password='$password' WHERE username='$username'");	
//var_dump($username);
	$message="Password Updated";
}
else {
	// Identify variables	
	$username = mysqli_real_escape_string($con, $_SESSION['username']);	
												
}
// Get info from user
$user_load=mysqli_query($con, "SELECT * FROM userdetails where username='$username'");
$user=$user_load->fetch_row();
//var_dump($user);


?>
<html>
	<head>
		<title>
			Edit BatTeam
		</title>	
		<link href="php.css" rel="stylesheet" type="text/css>
	</head?
	<body>
<!--Edit User Details -->
		<form action="profile22.php" method="post">
		<h1>
			<p>
				Edit BatTeam Password
			</p>	
		</h1>
		
		<h1>
			<p>	<!--Print update message-->

				<?php if(isset($message)) {echo $message;} ?>
			</p>	
		</h1>
		
			BatName: <input type="text" name="username" readonly="true" value="<?php echo $user[1] ?>">
			Password: <input type="text" name="password">
		<input type="submit" value="Update">
		</form>
		<form>
		<!--List alternate navigation buttons-->

		<input type="button" value="Logout" onClick="location.href='logout.php'">
		</form>
		</form>
		<form>
		<input type="button" value="BatCentral" onClick="location.href='batcentral.php'">
		</form>
	</body>
		
	</body>
</html>