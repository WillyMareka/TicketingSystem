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

	$('#submit_im').click(function(){
		event.preventDefault();
		var msg = $('.msg').val();
		var sbj = $('.sbj').val();
		if (msg == '' || sbj == '') {
			$('#sub_button_animation').replaceWith('<div id="sub_button_animation"><span id="im_icon" class = "fa"></span> Please Enter Message/Subject before sending</div>');
		}else{
		$('#sub_button_animation').replaceWith('<div id="sub_button_animation"><span id="im_icon" class = "fa fa-spinner fa-spin"></span>Sending</div>');
		$.ajax({
			type:'POST',
			url:'lecturer/messages',
			data:{
				'msg':msg,
				'sbj':sbj
			},
			success:function(success_im){
				$('.msg').val('');
				$('.sbj').val('');
				$('#sub_button_animation').replaceWith('<div id="sub_button_animation"><span id="im_icon" class = "fa fa-check"></span>Message Sent</div>');
				console.log(success_im);
			}
		});
		}//end of if
	});
});