<?php
	
	session_start();

	if(!empty($_SESSION['user'])){
		$user = $_SESSION['user'];
	}
	else{
		header("location:login.php");
	}
  	

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Your profile</title>
	<link rel="stylesheet" type="text/css" href="views/styles.css">
</head>
<body>

	<div class="maxcontainer">
		
		<?php
			
			require_once "views/header.php";
			require_once "views/nav.php";
			
		?>
		
		<section>
			
			<?php
				echo "<h1> Bienvenido " . $user . "</h1>";
			?>
			
		</section>

		<?php
			require_once "views/footer.php";
		?>

	</div>

</body>
</html>