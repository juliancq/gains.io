<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="views/styles.css">
</head>
<body>

	<div class="maxcontainer">
		
		<?php
			
			require_once "views/header.php";
			require_once "views/nav.php";
			
		?>
		
		<section>
			
			<form action="controllers/registerController.php" method="POST">
				
				<table>
					
					<tr>
						<td><input type="text" name="user" placeholder="Username" required></td>
						<td><input type="text" name="email" placeholder="Email" required></td>

					</tr>
					<tr>
						
						<td><input type="number" name="age" placeholder="Age"></td>
						<td><input type="number" name="height" placeholder="Height"></td>

					</tr>
					<tr>
						
						<td><input type="number" name="weight" placeholder="Weight"><br></td>
						<td><input type="password" name="password" placeholder= "Password" required><br></td>

					</tr>
				</table>
				
				<button type="submit">Send</button><br>

			</form>
			
		</section>

		<?php
			require_once "views/footer.php";
		?>

	</div>

</body>
</html>