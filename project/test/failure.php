<?php  
echo '<script language="javascript">';
		echo 'alert("Check Bounce, charge 2$")';
		echo '</script>';

?>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<?php include ('Templates/header.php'); ?>
	<section class="container grey-text">
		<form class="white" action="cheque.php" method="POST">
				
			<div class="center">
				<input type="submit" name="submit" value="Back">
			</div>
		</form>
	</section>
	<?php include ('Templates/footer.php'); ?>
</body>
</html>