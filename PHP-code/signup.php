<?php
    session_start();
    include("connections.php");
    include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
			mysqli_query($con, $query);
			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="../style/style.css">
    <title>Signup</title>
</head>
<body>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>