<html>
<head>
	<title>Login</title>
</head>
<body>
<?php
$htmlUsername = $_POST["username"];
$htmlPassword = $_POST["password"];

// Connection
$mysqli = new mysqli("localhost", "webphp", "password", "finaldb");
if($mysqli->connect_errno){
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

// Check if username exits in the database
$passwordDB = $mysqli->query("SELECT password FROM auth WHERE username='$htmlUsername'");
if($passwordDB->num_rows > 0){
	$password = $passwordDB->fetch_assoc(); // Important for accessing DB query results
	if(strcmp($htmlPassword,$password["password"])  == 0){
		print "<p>" . "Welcome back " . $htmlUsername . "! Login was succesful." . "</p>";
	}else{
		print "<p>"."Incorrect username or password." . "</p>"; // Incorrect password
	}
}else{
	print "<p>"."Incorrect username or password." . "</p>"; // Username incorrect
}
$mysqli->close();
?>
</body>
</html>	