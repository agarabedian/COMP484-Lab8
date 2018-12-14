<html>
<title>Create an Account</title>
<body>

<?php 
function showTable(&$userList){
			
	$table = "<table><tr><th>Firstname</th><th>Lastname</th></tr>";
	if($userList->num_rows > 0){
		while($rows = $userList->fetch_assoc()){
			$table = $table . "<tr><td>" . $rows["firstName"] . "</td><td>" . $rows["lastName"] . "</td></tr>";
		}
	}
	$table = $table . "</table>";
	
	print $table;
}	


$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$username = $_POST["username"];
$pass = $_POST["password"];



$mysqli = new mysqli("localhost","webphp","password","finaldb");
if($mysqli->connect_errno){
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

//Insert data
$query = $mysqli->query("INSERT INTO auth(username, password, firstName, lastName, email, phone) VALUES ('$username','$pass','$fname','$lname','$email','$phone')");
if($query){//Sucess
	print "<p>" . "Account successfully created" . "</p>";
	$userList = $mysqli->query("SELECT firstName, lastName FROM auth");
	showTable($userList);
} else{//Error
	print "<p>" . "Account creation not successful." . "</p>";
}	

$mysqli->close();
?>
</body>
</html>