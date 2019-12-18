<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<?php include ('Templates/header.php'); ?>
	<section class="container grey-text">
		<h4 class="center">Withdraw Cash</h4>
		
		<form class="white" action="wd.php" method="POST">
			
			<label> Enter the account Number to withdraw money</label>
			<input type="text" name="acc_no" required>
			<label> Enter branch Name</label>
			<input type="text" name="b_name" required>
			<label> Enter amount to withdraw </label>
			<input type="text" name="withdraw" required>

			<div class="center">
				<input type="submit" name="submit" value="Submit">
			</div>
		</form>
	</section>
	<?php include ('Templates/footer.php'); ?>
</body>
</html>