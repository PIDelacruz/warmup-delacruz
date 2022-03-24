<?php
if(isset($_POST['btnsubmit'])){ 
  include('database_login.php');
}

if(isset($_SESSION['loggedin'])){
	header("Location: warmup.php");
	exit;
}
?>

<html>
	<head>
	<title>PHP User Login</title>
	</head>
	<body>
		<form method = "post">
			<label for="username">Username:</label>
			<input type = "text" name = "username"><br><br>
			<label for="password">Password:</label>
			<input type = "text" name = "password"><br><br>
			<input type = "submit" name = "btnsubmit">
		</form>
		<script>
	    if ( window.history.replaceState ) {
	        window.history.replaceState( null, null, window.location.href );
	    }
		</script>
	</body>
</html>