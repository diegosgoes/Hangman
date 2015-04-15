function checkPassword(psw){
	
	if( psw == null || psw == '' ){
		return false;
	}else{ return true;}
}


$(function(){
	var text = document.getElementById('passwordInp');
	
	$("#startBtn").on('click',function(){	
		
		if(!checkPassword(text.value)){
			alert('Palavra inválida!');
		}else{
			$.ajax({
				url: 'init.php',
				type: 'post',
				data: {password: text.value.toUpperCase()},
				success: function(){ window.location = 'forka.php';}
			});
		}
	});

	$("#inputSbm").click(function(){
		var text = document.getElementById('inputText');

		if(text.value == ''){	alert('Digite uma letra');}
		else{
			$.ajax({
				url: 'engine.php',
				type: 'post',
				data: {input: text.value.toUpperCase()},
				success: function(){ window.location = 'forka.php';}
			});
		}

	});
});