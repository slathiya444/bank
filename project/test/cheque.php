<?php
	include('conn.php');
	$acc_no = $_POST["acc_no"];
	$acc_no1 = $_POST["acc_no1"];
	$b_name = $_POST["b_name"];
	$deposit = $_POST["deposit"];
	

	$sql =  "SELECT `balance` FROM `account` where `acc_no` = '".$acc_no."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	
	$cash = $row["balance"];
	if ($cash>=$deposit) {
		# code...
			$cash1 = $cash - $deposit;
			$sql = "UPDATE account SET balance= '".$cash1."' where `acc_no` = '".$acc_no."'";
			mysqli_query($conn, $sql);


			$sql4 = "SELECT `record_no` FROM `transaction` ORDER BY `record_no` DESC LIMIT 1";
		$result1 = mysqli_query($conn, $sql4);
		while($row = mysqli_fetch_assoc($result1)){
			$record_no = $row["record_no"];
		}
		$record_no = $record_no + 1;
		$tt = "Cheque";
		$date = date('Y-m-d H:i:s');

		$sql5 = "SELECT `c_ssn` FROM `account` WHERE `acc_no` = '".$acc_no."'";
		$result2 = mysqli_query($conn, $sql5);
		$row = mysqli_fetch_assoc($result2);
		$ssn = $row["c_ssn"];
		$credit = 0;

		$sql6 = "INSERT INTO `transaction` (`record_no`, `acc_no`, `datee`, `balance`,`c_ssn`,`debit`,`credit`,`tt`) VALUES ('".$record_no."', '".$acc_no."', '".$date."', '".$cash1."', '".$ssn."', '".$deposit."', '".$credit."', '".$tt."')";
		mysqli_query($conn, $sql6);





		//reciever
	$sql =  "SELECT `balance` FROM `account` where `acc_no` = '".$acc_no1."'";
	$result1 = mysqli_query($conn, $sql);
	$row1 = mysqli_fetch_assoc($result1);
	
		$cash1 = $row1["balance"];
		$cash11 = $cash1 + $deposit;


		$sql = "UPDATE account SET balance= '".$cash11."' where `acc_no` = '".$acc_no1."'";
		mysqli_query($conn, $sql);

		$sql4 = "SELECT `record_no` FROM `transaction` ORDER BY `record_no` DESC LIMIT 1";
		$result1 = mysqli_query($conn, $sql4);
		while($row = mysqli_fetch_assoc($result1)){
			$record_no = $row["record_no"];
		}
		$record_no = $record_no + 1;
		$tt = "Cheque";
		$date = date('Y-m-d H:i:s');

		$sql5 = "SELECT `c_ssn` FROM `account` WHERE `acc_no` = '".$acc_no1."'";
		$result2 = mysqli_query($conn, $sql5);
		$row = mysqli_fetch_assoc($result2);
		$ssn = $row["c_ssn"];
		$debit = 0;

		$sql6 = "INSERT INTO `transaction` (`record_no`, `acc_no`, `datee`, `balance`,`c_ssn`,`debit`,`credit`,`tt`) VALUES ('".$record_no."', '".$acc_no1."', '".$date."', '".$cash11."', '".$ssn."', '".$debit."', '".$deposit."', '".$tt."')";
		mysqli_query($conn, $sql6);

		header("Location: transactions.php");
		}

		
	else {
		
		$cash2=$cash-2;
		$sql = "UPDATE account SET balance= '".$cash2."' where `acc_no` = '".$acc_no."'";
		mysqli_query($conn, $sql);

			$sql4 = "SELECT `record_no` FROM `transaction` ORDER BY `record_no` DESC LIMIT 1";
		$result1 = mysqli_query($conn, $sql4);
		while($row = mysqli_fetch_assoc($result1)){
			$record_no = $row["record_no"];
		}
		$record_no = $record_no + 1;
		$tt = "Cheque Bounce Charge";
		$date = date('Y-m-d H:i:s');

		$sql5 = "SELECT `c_ssn` FROM `account` WHERE `acc_no` = '".$acc_no."'";
		$result2 = mysqli_query($conn, $sql5);
		$row = mysqli_fetch_assoc($result2);
		$ssn = $row["c_ssn"];
		$credit = 0;
		$reduced = 2;
		$sql6 = "INSERT INTO `transaction` (`record_no`, `acc_no`, `datee`, `balance`,`c_ssn`,`debit`,`credit`,`tt`) VALUES ('".$record_no."', '".$acc_no."', '".$date."', '".$cash2."', '".$ssn."', '".$reduced."', '".$credit."', '".$tt."')";
		mysqli_query($conn, $sql6);
		header("Location: failure.php");
		
	}

	







	?>

	