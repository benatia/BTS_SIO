$(document).ready(function(){
	$('.formulaire').submit(function(){
		
		var check=$('.check').val();
		$.post('php/send.php',function(donnees){
			$('.test').html(donnees).slideDown;
			$('.check').val('');
		
		 });
		return false;
	});
	});
