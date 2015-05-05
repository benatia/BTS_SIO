$(document).ready(function(){
	
	$('form').submit(function(){
		valid=true;
		if($('#nom').val()=='')
			{
			$('#nom').css('borderColor','red');
			$('#nom').next('.erreur').fadeIn('fast').text("Veuillez  entrer votre nom");
			valid=false;
		}else
			{
				$('#nom').css('borderColor','green');
				$('#nom').next('.erreur').fadeOut();
				valid=true;
			
			
			}
		
		if($('#mail').val()=='')
		{
			$('#mail').css('borderColor','red');
			$('#mail').next('.erreur').fadeIn('fast').text("Veuillez entrer votre mail");
			valid=false;
		}else
			{
				$('#mail').css('borderColor','green');
				$('#mail').next('.erreur').fadeOut();
				valid=true;
			
			
			}
		
		if($('#remarque').val()=='')
		{
			$('#remarque').css('borderColor','red');
			$('#remarque').next('.erreur').fadeIn('fast').text("Veuillez entrer votre message");
			valid=false;
		}else
			{
				$('#remarque').css('borderColor','green');
				$('#remarque').next('.erreur').fadeOut();
				valid=true;
			
			
			}
		
		
	return valid;
		
	});
	/*$('.td').mouseover(function(){
		$(this).css({'borderColor':'red','height':'400px','width':'400px'});

		
		
	});
	
	$('.td').mouseleave(function(){
		$(this).css({'borderColor':'black','height':'20px'});
		
	});
	$('.td1').mouseover(function(){
		$(this).css({'borderColor':'green','height':'250px','width':'400px'});
		
		
		
	});
	
	$('.td1').mouseleave(function(){
		$(this).css({'borderColor':'black','height':'10px','width':'200px'});
	
	});
	$('ul').mouseleave(function(){
		$(this).css({'borderColor':'black','height':'10px','width':'20px'});
	
	});*/
	
});