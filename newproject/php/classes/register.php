<?php require_once 'db.php'; ?>
<?php require_once '../functions/registeration_functions.php';?>
<?php require_once '../functions/db_functions.php';?>


<?php

$errors = array();

if (isset($_POST['submit'])) {

$name = escapeString($_POST['name']);
$username = escapeString($_POST['username']);
$email = escapeString($_POST['email']);
$pass = escapeString(md5($_POST['pass']));
$repass = escapeString(md5($_POST['repass']));
}

if (lengthValidation($name) || lengthValidation($username)) {
	$errors["name"] = "Check the length of username or name min = 5 and max = 12";
}elseif(!emailValidation($email)){
	$errors["email"] = "Check he email format";
}elseif(!comparePassword($pass,$repass)) {
	$errors["password"] = "Passwords didnt match try again";
}elseif (checkAvailability($username) === $username) {
	$errors["usernameMatched"] = "Sorry same username exists try another";
}elseif (empty($errors)) {
	$query = "INSERT INTO users(name,username,email,password) VALUES('$name','$username','$email','$pass')";
	query_test($query);
	
	if (isset($query)) {
		# code...
		$res = mysqli_query($connection,$query);

		echo "successfully registered";
		echo "<a href =../includes/index.php>"." <br>" ."back to login"."</a>";
	}

echo allErrors($errors);
}
?>


<?php
if (isset($connection)) {
	mysqli_close($connection);
}
?>