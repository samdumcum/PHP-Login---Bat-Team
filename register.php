<html>
	<head>
		<title>
		Join BatTeam
	</title>
		<link href="php.css" rel="stylesheet">
	</head?
	<body>
		<p>
			Fighting Crime is <u>easy</u> with	
			<h1> BATTEAM </h1>
		</p>
<!-- Form to join Bat Team / create a username and password -->
		<form action="register10.php" method="post">
			BatName: <input type="text" name="username">
			Password: <input type="text" name="password">
		<input type="submit" value="Join BatTeam">
		</form>
<!-- Return to BatCentral (Login) -->	
		Already a BatTeam Member?
		<form>
		<input type="button" value="Login" onClick="location.href='login.php'">
		</form>
	</body>
</html>