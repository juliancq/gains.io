<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="views/styles.css">
</head>
<body>

	<div class="maxcontainer">
		
		<?php
			
			require_once "views/header.php";
			require_once "views/nav.php";
			
		?>
		
		<section>
			
			<form action="controllers/loginController.php" method="POST">
				
				<input type="text" name="user" placeholder="Username" required><br>
				<input type="password" name="password" placeholder= "Password" required><br>
				<button type="submit">Send</button><br>

			</form>
			
		</section>

		<?php
			require_once "views/footer.php";
		?>

	</div>

</body>
</html>