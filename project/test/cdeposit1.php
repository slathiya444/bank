<?php
	include('conn.php');
	$acc_no = $_POST["acc_no"];
	$b_name = $_POST["b_name"];
	$deposit = $_POST["deposit"];
	

	$sql =  "SELECT `balance` FROM `checkin_account` where `acc_no` = '".$acc_no."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$cash = $row["balance"];
	$cash1 = $cash + $deposit;


	$sql = "UPDATE checkin_account SET balance= '".$cash1."' where `acc_no` = '".$acc_no."'";
	mysqli_query($conn, $sql);

	// $sql4 = "SELECT `record_no` FROM `transaction` ORDER BY `record_no` DESC LIMIT 1";
	// $result1 = mysqli_query($conn, $sql4);
	// while($row = mysqli_fetch_assoc($result1)){
	// 	$record_no = $row["record_no"];
	// }
	// $record_no = $record_no + 1;
	// $tt = "CD";
	// $date = date('Y-m-d');

	// $sql5 = "SELECT `c_ssn` FROM `checkin_account` WHERE `acc_no` = '".$acc_no."'";
	// $result2 = mysqli_query($conn, $sql5);
	// $row = mysqli_fetch_assoc($result2);
	// $ssn = $row["c_ssn"];
	// $debit = 0;

	// $sql6 = "INSERT INTO `transaction` (`record_no`, `acc_no`, `datee`, `balance`,`c_ssn`,`debit`,`credit`,`tt`) VALUES ('".$record_no."', '".$acc_no."', '".$date."', '".$cash1."', '".$ssn."', '".$debit."', '".$deposit."', '".$tt."')";
	// mysqli_query($conn, $sql6);
	// header("Location: transactions.php");

	?>