<?php 
	require('hangmanClass.php');
	session_start();

	$game = $_SESSION['game'];
	$input = $_POST['input'];

	//array_push($game->guessedLetters, $input);
	$game->checkInput($input);


?>