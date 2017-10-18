<?php require_once '../classes/db.php';?>
<?php require_once 'form_errors.php';?>
<?php

function escapeString($value){
	global $connection;

	$escaped = mysqli_real_escape_string($connection, $value);
	return $escaped;	
}

function lengthValidation($field){
	$min = 5;
	$max = 12;
  	return strlen($field)<$min || strlen($field) >$max;
	
}

function emailValidation($email){
		 return preg_match("/@gmail.com/", $email);		
}

function comparePassword($pass,$repass){
	return $pass === $repass ;
}

function checkAvailability($username){
	global $connection;

	$checkQuery = "SELECT * FROM users";
	$result = mysqli_query($connection,$checkQuery);
	return $result;
}





?>