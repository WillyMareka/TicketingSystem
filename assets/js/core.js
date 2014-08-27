$(document).ready(function()
{
	var start = new Date();
	$(window).load(function() {
	var timetaken = (new Date() - start);
	});
	// $('#login').hide();
	$('#login-button').toggle(function(){
		if($('#login').hasClass('not-active'))
		{
			$('#login').removeClass("not-active");
			$('#login').addClass("animated bounceInDown");
		}
		else
		{
			$('#login').removeClass("bounceOutUp");
			$('#login').addClass("animated bounceInDown");
		}
		// $('#login').show();
	}, function(){
		$('#login').removeClass("bounceInDown");
		$('#login').addClass("bounceOutUp");
	});
});
