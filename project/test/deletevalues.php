<?php
	include('conn.php');
	$c_ssn = $_POST["c_ssn"];
	$sql = "delete from transaction where  `c_ssn` = '".$c_ssn."'";
	mysqli_query($conn, $sql);
	$sql2 = "delete from account where  `c_ssn` = '".$c_ssn."'";
	mysqli_query($conn, $sql2);
	$sql3 = "delete from customer where  `c_ssn` = '".$c_ssn."'";
	if(mysqli_query($conn, $sql3)){
      echo "Records Deleted successfully.";
     header("Location: customerapplication.php");

	 } else{
     	echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	 }
header("Location: customerapplication.php");

?>



