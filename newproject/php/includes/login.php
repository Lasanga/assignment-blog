<?php
require_once '../classes/db.php';
require_once '../functions/db_functions.php';
require_once '../functions/registeration_functions.php';
require_once '../functions/login_functions.php';

?>

<?php logged();?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Updated.lk</title>

<!--added an icon to the tab-->
	<link rel="icon" type="image/x-icon" href="../../images/success.png">
	<link rel="stylesheet" type="text/css" href="../../css/base.css">
	

</head>

<body>

			<?php
				if (isset($_POST['submitpass'])) 
				{
					$username = escapeString($_POST['Username']);
					$password = md5($_POST['Password']);
					loginValidator($username,$password);
				}
			?>


											
			<div class="header"> 			<!--header starts over here-->
				<h1>Updated.lk</h1>
				<h5>Welcome <?php echo htmlentities($_SESSION['username'])?></h5>

					<hr>

						<nav>
					<div class="navigation">
							<ul>
								<li><a href="login.php">Home </a></li>
								<li><a href="profile.php?">Profile</a></li>
								<li><a href="about.php?">About</a></li>
								<li style="float:right">
									<button class="btn logout-btn">
							   			<a style ="padding: 5px 20px;" href="logout.php">Logout</a>
							  		 </button>
								</li>
							</ul>
					</div>
				</nav>
			</div>	
				

			<div class="content">			<!--content starts-->		
					<div class="user-profile">
						<div class="display-picture">
							<img src="../../images/clouds.jpg" width="px" height="290px" style= "border-radius: 8px;">
						</div>
						<div class="user-details">
							<ul>
								<li>Name : <?php echo htmlentities($_SESSION['username'])?></li>
								<br>
								<li>Email: <?php echo htmlentities($_SESSION['Email'])?></li>
							</ul>
						</div>
					</div>	
					<div class="whole">
						<iframe src="../classes/posts.php" height="600px" width="100%"></iframe>
					</div>
			</div>							<!--content ends-->

<?php
	include 'footer.php'; //include the footer file
?>

