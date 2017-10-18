<?php session_start();?>
<?php require_once '../classes/db.php';?>
<?php require_once 'form_errors.php';
	  require_once 'db_functions.php';	
?>


<?php

function loginValidator($username, $password)
{

	global $connection;

	$query = "SELECT * FROM users WHERE username = '$username' && password = '$password'";
	query_test($query);
		if (isset($query)) 
			{
				$res = mysqli_query($connection,$query);

					if (isset($res)) 
						{
							$results = mysqli_fetch_assoc($res);
								if ($results['username'] == $username && $results['password'] == $password && $results['group_id'] == 0) 
									{
										$_SESSION['username'] = $results['username'];
										$_SESSION['Email'] = $results['email'];
										$_SESSION['group_id'] = $results['group_id'];
										
									}elseif($results['username'] == $username && $results['password'] == $password && $results['group_id'] == 1) 
										{
											$_SESSION['username'] = $results['username'];
											$_SESSION['Email'] = $results['email'];
											$_SESSION['group_id'] = $results['group_id'];

											header("location:admin.php?".session_name()."=".session_id());
										}else
											{
												header("location:index.php?");

											}	
									
						}
			}



}

function logged(){
	if (isset($_SESSION['username'])) {
	echo "";
	}else{
		header("location:../includes/index.php");
	}
}



function updateUsername($name){

	global $connection;
	$reply1 ="updated";
	$reply2 ="not updated";

	if (empty($name)) {
		echo "Enter a Name please";
		die();
	}else{
		
		$sql = "UPDATE users SET username = '{$name}' WHERE username = '{$_SESSION['username']}' ";
		//echo $sql;
		//die();
		query_test($sql);

		if (isset($sql)) {
			$res = mysqli_query($connection,$sql);

			if (isset($res)) {
				$_SESSION['username'] = $name;
				return $reply1;
			}else{
				return $reply2;
			}
		}
	}
}

?>	