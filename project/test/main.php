<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<?php include ('Templates/header.php'); ?>
	<section class="container grey-text">
		<h4 class="center">Customer Application</h4>
		<form class="white" action="customerapplication.php" method="POST">
		<div class="center">
			<input type="submit" name="submit" value="Customer Apllication">
		</div>
	</form>
	<form class="white" action="transactions.php" method="POST">
		<div class="center">
			<input type="submit" name="submit" value="Transactions">
		</div>
	</form>
	<form class="white" action="passbook.php" method="POST">
		<div class="center">
			<input type="submit" name="submit" value="Passbook">
		</div>
	</form>
	
	</section>
	<?php include ('Templates/footer.php'); ?>
</body>
</html>