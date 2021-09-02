<?php

	namespace controller;


	$user = $_POST['user'];
	$password = $_POST['password'];


	if($user == "julicq" && $password == "1234"){

		session_start();

		$_SESSION['user'] = $user;

		header("location:../profile.php");

	}
	else{

		header("location:../register.php");
	}
?>
