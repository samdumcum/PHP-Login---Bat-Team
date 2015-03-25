<?php

// Starts the session as result of login

session_start(); 
?>


<?php 

// Close - logout session
session_destroy(); 


?>

<html>
	<head>
		<title>
			Logout BatCentral
		</title>
			<link href="php.css" rel="stylesheet">
	</head?	  
	<body>
		<h3>Thank you for your service to Gotham City.</h3>
		When you want to serve justice again...
		<br>
		<form>
		<!-- This creates a login button-->
		<input type="button" value="Login" onClick="location.href='login.php'">
		</form>
	</body>		
</html>