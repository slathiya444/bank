<?php
	include('conn.php');
	$username = $_POST["username"];
	$password = $_POST["password"];

	$sql = "INSERT INTO `login` (`username`, `password`) VALUES ('".$username."', '".$password."')";
	if(mysqli_query($conn, $sql)){
		echo '<script>alert("Added to  database Succesfully")</script>';
		//header("Location: customerapplication.php");
	}
	else{
		//header("Location: insert.php");
		echo '<script>alert("We ran into some problem. Please signup again")</script>';
	}

?>






