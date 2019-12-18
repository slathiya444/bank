<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<?php include ('Templates/header.php'); ?>
	<section class="container grey-text">
		<h4 class="center">Transactions</h4>
		
		<form class="white" action="type1.php" method="POST">	
			<div class="center">
				<input type="submit" name="submit" value="Cash Deposite">
			</div>
		</form>

		<form class="white" action="type2.php" method="POST">	
			<div class="center">
				<input type="submit" name="submit" value="Cash Withdrawal">
			</div>
		</form>
		<form class="white" action="main.php" method="POST">
		<div class="center">
			<input type="submit" name="submit" value="Home">
		</div>
		</form>

	</section>
	<?php include ('Templates/footer.php'); ?>
</body>
</html>