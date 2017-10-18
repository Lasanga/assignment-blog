<?php
include 'header.php';  //included the header file
require_once '../functions/login_functions.php';
require_once '../functions/registeration_functions.php';
logged();
?>	

	<div class="content">			<!--content starts-->		
			<div class="user-profile">
				<div class="display-picture">
					<img src="../../images/clouds.jpg" width="px" height="290px" style= "border-radius: 8px;">
				</div>
				<div class="user-details">
					<ul>
						<li>Name:  <?php echo htmlentities($_SESSION['username'])?></li>
						<li>Email: <?php echo htmlentities($_SESSION['Email'])?></li>
					</ul>
				</div>
			</div>

			<div class="user-account">
				<div class="user-details">
					<div class="update-form">
						<form action="profile.php?content=updated" method="post">
							<div class="update_name">
								<label><strong>Change-Username:</strong></label><br>
								<ul>
									<li><label>Enter New Username:</label><br>
										<input type="text" name="usernameValue">
									</li>
									<li><input type="submit" name="submit_update_user" value="Change-Username">
									</li>
								</ul>
							</div>
							<br>
							<div class="update-password">
								<label><strong>Change-Password:</strong></label><br/>
									<ul>
										<li>
											<label>Enter current Password:</label><br>
												<input type="password" name="passwordValue">		
										</li>
										<li>
											<label>Enter New Password:</label><br>
												<input type="password" name="newpasswordValue">
										</li>
										<li><input type="submit" name="submit" value="Change-Password"></li>
							</div>
					</div>
				</div>
			</div>

			<?php 
				if (isset($_POST['submit_update_user'])) {
					$new_user_name = escapeString($_POST['usernameValue']);
			?>

			<div class="display-response">
				<h3>response</h3>
				<?php echo updateUsername($new_user_name); }?>
			</div>
	</div>





<?php
	include 'footer.php';
?>
