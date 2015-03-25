<?php
// Session start for logged in user
session_start();
if(!$_SESSION['logged']){
	
	header("Location: login.php");
	exit;
}
// Greeting for logged in user by name
echo "Welcome, " . $_SESSION ['username'];
?>
<html>
	<head>
	<title>
		BatCentral
	</title>	
			  <link href="php.css" rel="stylesheet">
	</head>
	
	<body>
		<br>
		<h3>
		<!-- External link for crime fighters-->
		<a href="http://www.torontopolice.on.ca/statistics/crime_maps.php" target="_blank">Fight Crime in your area</a> 
		</h3>
				<!-- Forms for updating or logging out-->
		<form>
			<input type="button" value="Edit BatTeam Details" onClick="location.href='profile22.php'">
		</form>
		
		<form>
		<input type="button" value="Logout" onClick="location.href='logout.php'">
		</form>
	</body>
</html>	