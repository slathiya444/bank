<?php
	include('conn.php');
	$acc_no = $_POST["acc_no"];
	$b_name = $_POST["b_name"];
	$deposit = $_POST["withdraw"];
	

	$sql =  "SELECT `balance` FROM `account` where `acc_no` = '".$acc_no."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	// echo " <script> alert('$sql');</script>";
	// echo " <script> alert('$sql');</script>";
	// echo " <script> alert('$sql');</script>";
	$cash = $row["balance"];
	if ($cash>=$deposit) {
		# code...
		$cash1 = $cash - $deposit;
		$sql = "UPDATE account SET balance= '".$cash1."' where `acc_no` = '".$acc_no."'";
		mysqli_query($conn, $sql);
		header("Location: transactions.php");
	}
	
	else
		echo "Not Successfull";
		header("Location: transactions.php");

	$sql4 = "SELECT `record_no` FROM `transaction` ORDER BY `record_no` DESC LIMIT 1";
	$result1 = mysqli_query($conn, $sql4);
	while($row = mysqli_fetch_assoc($result1)){
		$record_no = $row["record_no"];
	}
	$record_no = $record_no + 1;
	$tt = "WD";
	$date = date('Y-m-d');

	$sql5 = "SELECT `c_ssn` FROM `account` WHERE `acc_no` = '".$acc_no."'";
	$result2 = mysqli_query($conn, $sql5);
	$row = mysqli_fetch_assoc($result2);
	$ssn = $row["c_ssn"];
	$credit = 0;

	$sql6 = "INSERT INTO `transaction` (`record_no`, `acc_no`, `datee`, `balance`,`c_ssn`,`debit`,`credit`,`tt`) VALUES ('".$record_no."', '".$acc_no."', '".$date."', '".$cash1."', '".$ssn."', '".$deposit."', '".$credit."', '".$tt."')";
	mysqli_query($conn, $sql6);



	

	?>