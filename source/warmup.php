<?php
if(isset($_POST['btnsubmit'])){ 
  include('database_input.php');
}    
?>

<html>
	<head>
	<title>PHP Warmup Module - News Feed</title>
	<style>
		.news{
			border-style: solid;
			background-color: lightgray;
			width: 250px;
			margin:  5px;
		}
	</style>
	</head>
	<body>
		<form method = "post">
			<input type = "text" name = "message">
			<input type = "submit" name = "btnsubmit">
		</form>
		<br />
		<h3> Draft News Feed</h3>
		<?php include ('database_output.php') ?>
	</body>
</html>