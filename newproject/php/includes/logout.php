<?php
session_start();

$_SESSION['username'] = null;
$_SESSION['id'] = null;
$_SESSION['Email'] = null;
header("location:index.php");
?>