<?php 
	require('includes.php');
	session_start();
	$game = $_SESSION['game'];

	if(!$game->checkGameEnd()){	
		require_once('forka.html');
	?>
	<div id='inputDiv'>
		<h2>Descura qual é a palavra chave e salve NED da Forka!</h2>
		<input id='inputText' type='text' size='2' maxlength='1'>
		<button id='inputSbm'>Go</button>
	</div>
	<?php
	}
	else{
		if ($game->checkGameEnd() == 'hanged'){
			require_once('forka.html');
			echo "
			<p>OH NÃO, NED FOI ENFORCADO =O !!!</p>			
			<a href='index.php'><button>Começar nova partida!</button></a>";
		}else{
			require_once('forka.html');
			echo "
			<p>PARABÉNS, VOCÊ SALVOU O NED =) !!!</p>
			<a href='index.php'><button>Começar nova partida!</button></a>";
		}	
		
	}
?>