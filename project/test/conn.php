<?php
	//connect to database
	$conn = mysqli_connect('localhost', 'root', '', 'bank');
	//check the connection
	if(!$conn){
		echo 'connection error:' .mysqli_connect_error();
	}
	$sql = 'SELECT * FROM bank';

?>