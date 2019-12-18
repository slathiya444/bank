<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<?php include ('Templates/header.php'); ?>
	<section class="container grey-text">
		<h4 class="center">Login Page</h4>
		<form class="white" action="validate.php" method="POST">
		<label> UserName:</label>
		<input type="text" name="email" required>
		<label> Password</label>
		<input type="password" name="password" required>
		<div class="center">
			<input type="submit" name="submit" value="Login">
		</div>
	</form>
	</section>
	<?php include ('Templates/footer.php'); ?>
</body>
</html>