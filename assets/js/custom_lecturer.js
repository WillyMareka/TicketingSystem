$(document).ready(function(){
	$('.instant_message').click(function(){
		$('#messages').animate({
			'marginTop': '-220px'
		});
	});
	// instantup
	$('.instantup').click(function(){
		$('#messages').animate({
			'marginTop': '0px'
		});
	});
});