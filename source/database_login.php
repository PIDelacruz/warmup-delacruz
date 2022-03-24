<?php
	include('dbcon.php');
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);


	$sql = "SELECT user_id, username, password, is_admin FROM accounts 
			WHERE username = :username ;";

	$query = $pdo->prepare($sql);
	$query->bindParam('username', $username);
	$query->execute();

	if($query->rowCount() == 1){
		$row = $query->fetch();
			$user_id = $row["user_id"];
			$hash_password = $row["password"];
			$is_admin = $row["is_admin"];

		if (password_verify($password, $hash_password)){
			session_start();

			$_SESSION["loggedin"] = true;
			$_SESSION["user_id"] = $user_id;
			$_SESSION['username'] = $username;
			$_SESSION['is_admin'] = $is_admin;

			echo("session here");
		}
		else{
			echo("Login Failed");
		}

	}
	else{
		echo("Login Failed");
	}
?>