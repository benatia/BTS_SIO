$(document).ready(function(){
	$('.formulaire').submit(function(){
   
        var check=$('.check').val();
		    $.post('php/send.php',{check:check},function(donnees){
			 $check=$_POST['check'];
		    alert("ok");
			$('.check').val('');
		
			
			
		});
			return false;
	});
	});
