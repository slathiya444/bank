 <?php
	include('conn.php');
	$c_ssn = $_POST["c_ssn"];
	$e_ssn = $_POST["e_ssn"];
	$b_name = $_POST["b_name"];
	$name = $_POST["name"];
	$apt_no = $_POST["apt_no"];
	$street_no = $_POST["street_no"];
	$city = $_POST["city"];
	$state = $_POST["state"];
	$zip = $_POST["zip"];
	$deposit = $_POST["deposit"];

	$acc_no = 100;
	$sql1 = "SELECT `acc_no` FROM `account` ORDER BY `acc_no` DESC LIMIT 1";
	$result = mysqli_query($conn, $sql1);
	while($row = mysqli_fetch_assoc($result)){
		$acc_no = $row["acc_no"];
	}
	$acc_no = $acc_no + 1;
	$date = date('Y-m-d');
	if($deposit>500){
	$sql = "INSERT INTO `customer` (`c_ssn`, `e_ssn`, `b_name`, `name`, `apt_no`,`street_no`, `city`, `state`, `zip`, `deposit`) VALUES ('".$c_ssn."', '".$e_ssn."', '".$b_name."'
	, '".$name."', '".$apt_no."','".$street_no."','".$city."','".$state."','".$zip."','".$deposit."')";
	if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
    header("Location: customerapplication.php");

	} 
	else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}
	$sql3 = "INSERT INTO `account` (`acc_no`, `b_name`, `date_last_accessed`, `balance`,`c_ssn`) VALUES ('".$acc_no."', '".$b_name."', '".$date."', '".$deposit."', '".$c_ssn."')";
	mysqli_query($conn, $sql3);


	$sql4 = "INSERT INTO `checkin_account` (`acc_no`, `b_name`, `date_last_accessed`, `balance`,`c_ssn`) VALUES ('".$acc_no."', '".$b_name."', '".$date."', '".$deposit."', '".$c_ssn."')";
	mysqli_query($conn, $sql4);


	$record_no = 1000;
	$sql5 = "SELECT `record_no` FROM `transaction` ORDER BY `record_no` DESC LIMIT 1";
	$result = mysqli_query($conn, $sql5);
	while($row = mysqli_fetch_assoc($result)){
		$record_no = $row["record_no"];
	}
	$record_no = $record_no + 1;
	$credit = $deposit;
	$tt = "CD";
	$sql6 = "INSERT INTO `transaction` (`record_no`, `acc_no`, `datee`, `balance`,`c_ssn`,`debit`,`credit`,`tt`) VALUES ('".$record_no."', '".$acc_no."', '".$date."', '".$deposit."', '".$c_ssn."', '".$debit."', '".$credit."', '".$tt."')";
	mysqli_query($conn, $sql6);
	header("Location: customerapplication.php");
}
else{
	echo '<script>alert("uiguigui")</script>';
	header("Location: customerapplication.php");
}

?>






