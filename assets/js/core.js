$(document).ready(function()
{
	var start = new Date();
	$(window).load(function() {
	var timetaken = (new Date() - start);
	});
	// $('#login').hide();
	$('#login-button').click(function(){
		if($('#login').hasClass('not-active'))
		{
			$('#login').removeClass("not-active");
			$('#login').removeClass("bounceOutUp");
			$('#login').addClass("animated bounceInDown");
		}
		else
		{
			$('#login').removeClass("bounceOutUp");
			$('#login').addClass("animated bounceInDown");
		}
		// $('#login').show();
	});

	$('#close-button').click(function(){
		$('#login').removeClass("bounceInDown");
		$('#login').addClass("bounceOutUp");
	});
	$('.navbar-brand').hover(function(){
		$('.navbar-brand').addClass('pulse');
	}, function()
	{
		$('.navbar-brand').removeClass('pulse');
	});

	$(function() {
	$('a[href*=#]:not([href=#])').click(function() {
	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	    var target = $(this.hash);
	    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	    if (target.length) {
	        $('html,body').animate({
	        scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});

	$("#submit-comment").click(function(){
		var data = $('#slasa-contact :input :textarea').serializeArray();

		$.post($('#slasa-contact').attr("action"), data, function(info){$('#success-message').html(info)});

	$('#slasa-contact').submit(function(){return false;});
	});
});
