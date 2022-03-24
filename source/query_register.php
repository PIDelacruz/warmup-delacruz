<?php
	include('dbcon.php');

	$password = password_hash("pass", PASSWORD_DEFAULT);

	$sql = "INSERT INTO accounts (username, password, is_admin) 
			VALUES ('user', :password, 0)";
	$query = $pdo->prepare($sql);
	$query->bindParam(':password', $password);
	$query->execute();

?>