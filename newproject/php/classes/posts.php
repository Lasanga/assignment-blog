<?php session_start()?>
<?php require_once'db.php' ?>
<?php require '../functions/form_errors.php'; ?>
<?php require '../functions/db_functions.php'; ?>
<?php require '../functions/registeration_functions.php'; ?>


<h1><?php echo "Posts over here";?></h1>
<?php
date_default_timezone_get();

echo $time = "";

if (isset($_POST['submit'])) {
	
	$post = escapeString($_POST['textarea']);
	$time = date("h:i:sa");
	if (strlen($post) < 10) {
		$mess = "not recorded";
		header("location:../includes/manage.php?messege ={$mess}");
	}else{

	$query = "INSERT INTO posts(post,date_time)Values('$post','$time')";
	query_test($query);

	if (isset($query)) {
		$result = mysqli_query($connection, $query);
		header("location: ../includes/admin.php");
	}else{
		echo "error";
	}
}
	
}
?>
<?php

	$display = "SELECT id,post,date_time FROM posts";
	query_test($display);

	if (isset($display)) {
		$displayResult = mysqli_query($connection,$display);

		$posts ="";
		while ($posts = mysqli_fetch_assoc($displayResult)) {
			
			?>
			<h4><?php echo htmlentities($posts['post'])?></h4>
			<h6><?php echo htmlentities($posts['date_time'])?></h6>

		<div style="padding: 0px;">
			<textarea name="comment" cols="30" rows="1" placeholder="comment"></textarea>
			<br>
			<input type="submit" name="comment_btn" style="padding: 0px; margin: 10px 10px;" value="okay">
			
		</div>
			<?php
				
				if (isset($_POST['comment_btn'])) {
					$comment = escapeString($_POST['comment']);

					if (isset($comment)) {
						//$sql = "INSERT INTO comments(comment,post_id)VALUES('$comments','$posts['id']) ";
						query_test($sql);

						if (isset($sql)) {
							$displayComments = mysqli_query($connection,$sql);
							if ($displayComments) {
								echo "sss";
							}else{
								echo "sdsd";
							}

						}
					}
				}

			?>

			<?php
		}

	}

?>
<?php
mysqli_free_result($displayResult);
?>