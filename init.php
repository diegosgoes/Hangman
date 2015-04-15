<?php 
	require('hangmanClass.php');

	session_start();

	$password = $_POST['password'];

	$_SESSION['game'] = new hangman($password);

?>
