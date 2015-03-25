<?php
//Connect to Database
	$con=mysqli_connect("localhost","ccit1783_SamD","sam123", "ccit1783_userdetails");

//define variables
$username=$_POST['username'];
$password=$_POST['password'];

// Define user for check
$user_check = mysqli_query($con, " SELECT * FROM userdetails WHERE username='$username'");

// Checks if Username is taken - if so send to fail
if (mysqli_num_rows($user_check) == 1) {
header("Location: fail.php");
}
// Checks if password field is empty, if so, send to fail
else {
if ($password == "") {
header("Location: fail.php");
}

// If all checks are met; add to BatTeam
else {
mysqli_query( $con, "INSERT INTO userdetails (username, password) VALUES ('$username', '$password') ");
echo "Time to fight crime with the BatTeam.";
}

}
?>
<html>
	<head>
<link href="php.css" rel="stylesheet">
	</head>
<form>
<!-- This creates a login button-->
<input type="button" value="Login" onClick="location.href='login.php'">


<table width='30'>

	
</table>
</form>
</html>