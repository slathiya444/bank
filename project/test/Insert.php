<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<?php include ('Templates/header.php'); ?>
	<section class="container grey-text">
		<h4 class="center">Insert</h4>
		
		<form class="white" action="Insertvalues.php" method="POST">
			<label> Customer SSN:</label>
			<input type="text" name="c_ssn" required>
			<label> Employee SSN:</label>
			<input type="text" name="e_ssn" required>
			<label> Branch Name:</label>
			<input type="text" name="b_name" required>
			<label> Customer Name:</label>
			<input type="text" name="name" required>
			<label> Apartment Number:</label>
			<input type="text" name="apt_no" required>
			<label> Street Number:</label>
			<input type="text" name="street_no" required>
			<label> City:</label>
			<input type="text" name="city" required>
			<label> State:</label>
			<input type="text" name="state" required>
			<label> Zip:</label>
			<input type="text" name="zip" required>
			<label> Deposit:</label>
			<input type="text" name="deposit" required> 
			
			<div class="center">
				<input type="submit" name="submit" value="Submit">
			</div>
		</form>
	</section>
	<?php include ('Templates/footer.php'); ?>
</body>
</html>