<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<?php include ('Templates/header.php'); ?>
	<section class="container grey-text">
		<h4 class="center">Customer Application</h4>
		<form class="white" action="Insert.php" method="POST">
		<div class="center">
			<input type="submit" name="submit" value="Insert">
		</div>
	</form>
	<form class="white" action="Modify.php" method="POST">
		<div class="center">
			<input type="submit" name="submit" value="Modify">
		</div>
	</form>
	<form class="white" action="Delete.php" method="POST">
		<div class="center">
			<input type="submit" name="submit" value="Delete">
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