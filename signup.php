<html>
<title>Create an Account</title>
<body>

<?php 
/*foreach($_POST as $element => $value)
print( "<p>".$value."</p>");
*/
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$user = $_POST["username"];
$pass = $_POST["password"];

print $fname;

$mysqli = new mysqli("localhost","webphp","password","finaldb");

$send = "INSERT INTO auth(username, password, firstName, lastName, email, phone) VALUES ($user, $pass, $fname, $lname, $email, $phone)";
?>
</body>
</html>