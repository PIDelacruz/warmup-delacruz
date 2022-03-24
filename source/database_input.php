<?php
if(!empty($_POST)){
	include('dbcon.php');

	$sql = "INSERT INTO messages (message) VALUES (:message)";
	$query = $pdo->prepare($sql);
	$query->bindParam(':message', $_POST['message']);
	$query->execute();
	
	header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 );
   	exit();
}
else{echo "fail";}
?>