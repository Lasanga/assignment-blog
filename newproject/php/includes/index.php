<?php
require_once '../classes/db.php';
require_once '../functions/login_functions.php';
require_once '../functions/registeration_functions.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Updated.lk</title>

<!--added an icon to the tab-->
	<link rel="icon" type="image/x-icon" href="../../images/success.png">

<!--linked the external stylesheet home.css and bootstrap css -->

	<link rel="stylesheet" type="text/css" href="../../css/home.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>




<body>
<!-- body content starts from here-->

<div class="container">
	<div class="wrapper">
		<header>
			<h1 class="heading">Updated.lk</h1>
		</header>
	</div>

<!--creating a form login to be displayed only if button is clicked-->


		<div id="newpost">
		
			<form action="login.php" method="POST" >

				<div class="form-group">				
						<label class="control-label col-sm-1" for="email">Username:</label> 
					<div class="col-sm-10">
						<input type="text" name="Username" id="user" class="form-control" placeholder="Enter email" required>
					</div>
				</div>

				<div class="form-group">
						<label class="control-label col-sm-5" for="pwd">Password:</label>
					<div class="col-sm-10">
						<input type="Password" name="Password" id="pass" class="form-control" placeholder="Password" required>
         			</div>
         		</div>
         		<div class="col-sm-3">
         			<input type="submit" name="submitpass" value="login" class="btn btn-success btn-lg">
         		</div>
			</form>
			
		</div>
<!--end of login form.........-->

<!-- .....register form starts from here-->		
		<div id="newpost2">
			<form action="../classes/register.php" method="POST">
				
				<div class="form-group">
						<label class="control-label col-sm-3" for="name">Name:</label>
					<div class="col-sm-10">
						<input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
					</div>
				</div>

				<div class="form-group">
						<label class="control-label col-sm-3" for="uname">User-Name:</label>
					<div class="col-sm-10">
						<input type="text" name="username" id="lname" class="form-control" placeholder="Enter User-Name" >
					</div>
				</div>

				<div class="form-group">
						<label class="control-label col-sm-3" for="email">Email Address:</label>
					<div class="col-sm-10">
						<input type="text" name="email" id="email" class="form-control" placeholder="Enter Email Address" required value="@gmail.com">
					</div>
				</div>

				<div class="form-group">
						<label class="control-label col-sm-3" for="pass">Password:</label>
					<div class="col-sm-10">
						<input type="Password" name="pass" id="pass" class="form-control" placeholder="Enter Password" required>
					</div>
				</div>

				<div class="form-group">
						<label class="control-label col-sm-3" for="repass">Re-enter Password:</label>
					<div class="col-sm-10">
						<input type="Password" name="repass" id="repass" class="form-control" placeholder="Re-enter Password" required>
					</div>
				</div>

				<div class="col-sm-3">
         			<input type="submit" name="submit" value="Register" class="btn btn-primary btn-lg">
         		</div>
			</form>
			
		</div>
<!-- end of register form...-->

<!-- buttons to choose the option -->

	<div class="hidbutton">
		<input type="button" value="Login" onclick="show();" id="button1" class="btn btn-success btn-lg">
	</div><br>

	<div class="bt2">
		<input type="button" id="button2" onclick="showreg();" class="btn btn-primary btn-lg" value="Register">
	</div>


</div>

<!--end of the content-->

<!--starting the footer-->

<footer class="footer-area">
	<div class="bottom-footer">
		www.Updated.lk
		<hr>
		<a href="" class="f fa-facebook"></a>
	</div>

</footer>

<!--end of the footer-->

<!--javascripts start from here--> 
<script src="../../jquery/jquery-3.2.1.min.js"></script>
<script src="../../bootstrap.min.js"></script>
<script src="../../javascript/myjs.js"></script>

</body>
</html>

<!-- end of the page-->
