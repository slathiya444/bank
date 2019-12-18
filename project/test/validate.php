<?php
	include('conn.php');
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM `login` WHERE `username` = '".$email."'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)){
			if($password == $row['password']){
				session_start();
				$_SESSION["username"] = $row["username"];
				header("Location: main.php");
			}
			else{
				header("Location: lo.php");
				echo "Username or Password is wrong";
			}
		}
	}
	else{
		header("Location: welcome.php");
	}
?>