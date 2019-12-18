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

	$sql = "UPDATE customer SET  
	e_ssn = '".$e_ssn."', b_name = '".$b_name."', name = '".$name."', apt_no = '".$apt_no."', street_no = '".$street_no."', city = '".$city."', state= '".$state."', zip = '".$zip."', deposit = '".$deposit."' WHERE `c_ssn` = '".$c_ssn."'";
	if(mysqli_query($conn, $sql)){
    echo "Records Deleted successfully.";
    header("Location: customerapplication.php");

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
header("Location: customerapplication.php");

?>

