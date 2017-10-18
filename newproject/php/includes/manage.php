<?php require_once'../classes/db.php';
	  require_once '../functions/login_functions.php';
	  logged();?>
<?php require_once '../functions/db_functions.php'; ?>
<?php require_once '../functions/registeration_functions.php'; ?>

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
											
	<div class="header"> 			<!--header starts over here-->
		<h1>Updated.lk</h1>
		<h5>Welcome <?php echo htmlentities($_SESSION['username'])?></h5>

			<hr>
				<nav>
			<div class="navigation">
				<ul>
					<li><a href="login.php?name=home">Home  </a></li>
					<li><a href="profile.php">Profile</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="manage.php">Manager Centre</a></li>
					<li style="float:right"><button class="btn logout-btn"><a style ="padding: 5px 20px;" href="index.php">Logout</a></button></li>
				</ul>
			</div>
		</nav>
	</div>


	<div class="entire-post">
		<form action="../classes/posts.php" method="post">
			<div class="post-body">
				<div class="post">
					<label>Create Post:</label><br>
					<textarea name="textarea" rows="10" cols="100"></textarea>
					<br>
					<input type="submit" name="submit" value="post">
				</div>
			</div>
		</form>


		<form action="manage.php" method="post">
				<div class="show users">
					<input type="submit" name="show" value="Show users">
					<br>
				<table style="text-align: left;">
						<th>User id</th>
						<th>username</th>
				<?php 
					if (isset($_POST['show'])) {
						$queryShow = "SELECT id,username FROM users";
						
						if (isset($queryShow)) {
							$result = mysqli_query($connection,$queryShow);

							while ($rows = mysqli_fetch_assoc($result)) {
							
				?>	
						
							<tr>
								<td><?php echo $rows['id']?></td>
								<td><?php echo $rows['username']?></td>
							</tr>
						
							<?php	
							}

						}

					}
				?>
				</table>
				
				</div>
		</form>
			<form action="manage.php" method="POST">
					<div class="admin-manage">
					<label>Add new admins:</label><br>
					<input type="text" name="newadmin"> <input type="submit" name="admin_submit" value="Add">
					<br>
					<label>Delete Users:</label><br>
					<input type="text" name="delete_users"> <input type="submit" name="delete" value="Delete">
				<?php
				if (isset($_POST['delete'])) {
					$user1 = escapeString($_POST['delete_users']);
					if (isset($user1)) {
						$queryDelete = "DELETE FROM users WHERE username ='".$user1."'";
						echo "deleted";
						(query_test($queryDelete));
						
						if (isset($queryDelete)) {
							$res = mysqli_query($connection,$queryDelete);
							//var_dump($res);
						}
					}
			}
				?>
				</div>
			</form>
	</div>	


<?php
require_once 'footer.php';
?>