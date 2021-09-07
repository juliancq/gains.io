<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gains.io</title>
	<link rel="stylesheet" type="text/css" href="views/styles.css">
</head>
<body>

	<?php
		require_once("config/autoload.php");
	?>

	<div class="maxcontainer">
		
		<?php
			
			require_once "views/header.php";
			require_once "views/nav.php";

			require_once "models/Usuario.php";
			use models\Usuario as Usuario;
			

			$julian = new Usuario("Julian", "julmdq@live.com.ar", "12345", 21, 1.73, 75, "m");

			
		?>
		
		<section>
			
			<?php

				if(!empty($_SESSION['user'])){

					echo $_SESSION['user'];
				}
				else{
					echo "Bienvenido";
				}

			?>
			
		</section>

		<?php
			require_once "views/footer.php";
		?>

	</div>

</body>
</html>