<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<?php include ('Templates/header.php'); ?>
	<section class="container grey-text">
		<h4 class="center">Insert</h4>
		
		<form class="white" action="test1.php" method="POST">
			<label> Username:</label>
			<input type="text" name="username" required>
			<label> Password:</label>
			<input type="text" name="password" required>	
			<div class="center">
				<input type="submit" name="submit" value="Submit">
			</div>
		</form>
	</section>
	<?php include ('Templates/footer.php'); ?>
</body>
</html>