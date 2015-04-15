<?php 
	class hangman{
		
		public $manHealth;
		public $password;
		public $guessedPositions = array();
		public $missedLetters = array();
		public $guessedLetters = array();

		function __construct($word){
			$this->password = $word;
			$this->manHealth = 6;
		}



		function checkInput($input){
			if(substr_count($this->password, $input)){	
				array_push($this->guessedLetters, $input);
				$this->letterPositions($input);
			}
			else{	
				array_push($this->missedLetters, $input);
				$this->decreaseHealth();
			}
		}



		function letterPositions($input){
			$letters = str_split($this->password);
			
			foreach ($letters as $index => $letter) {
				if($input == $letter){	array_push($this->guessedPositions, $index);}
			}	
		}


		function decreaseHealth(){
			$this->manHealth--;
		}


		function checkGameEnd(){
			if($this->manHealth <= 0 || sizeof($this->guessedPositions) == strlen($this->password)){
				if ($this->manHealth <= 0) {
					return 'hanged';
				}else{
					return 'won';
				}
			
			}
			else{	return false;}	
		}


		
	}
?> 	