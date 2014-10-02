var base_url = 'http://localhost/sun/';
var msg_path = 'lecturer/messages';
var reply_path = 'lecturer/reply';
var attendance_path = 'lecturer/attendance';

$(document).ready(function(){
	$('#message_compose').addClass('fadeOutUp');

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

	$('#submit_im').click(function(event){
		event.preventDefault();
		var msg = $('.msg').val();
		var sbj = $('.sbj').val();
		var path = base_url.concat(msg_path);
		if (msg == '' || sbj == '') {
			$('#sub_button_animation').replaceWith('<div id="sub_button_animation"><span id="im_icon" class = "fa"></span> Please Enter Message/Subject before sending</div>');
		}else{
		$('#sub_button_animation').replaceWith('<div id="sub_button_animation"><span id="im_icon" class = "fa fa-spinner fa-spin"></span>Sending</div>');
		$.ajax({
			type:'POST',
			url:path,
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
	});//LEAVE THIS ALONE

	$('.compose,.close_msg_modal').click(function(){
		if ($("#message_compose").hasClass("fadeOutUp")) {
		$("#message_compose").removeClass("fadeOutUp");
		$("#message_compose").removeClass("display-none");
		$("#message_compose").addClass("fadeInDown");

		}else{
		$("#message_compose").removeClass("fadeInDown");	
		$("#message_compose").addClass("fadeOutUp");
		// $("#login").hide();
		};
	});//end of message compose modal

	$('.message_view_link,.close_msg_view_modal').click(function(event){
		event.preventDefault();
		// alert($(this).attr('value'));return;
		var msg_id = $(this).attr('value');
		var msg_content = $('#'+msg_id).attr('value');
		var student_id = $('#'+msg_id).attr('data-student-id');
		var msg_sbj = $('#'+msg_id).attr('data-sbj');
		var student_email = $('#'+msg_id).attr('data-student-email');
		var full_name =  $('#'+msg_id).attr('data-fullname')
		// alert(msg_content);return;
		$('#submit_reply').click(function(){
		event.preventDefault();
			send_reply(msg_id);
				});

		$('.msg_view_content').html(msg_content);
		$('.view_from').val(full_name);
		$('.view_msg_sbj').val(msg_sbj);
		$('.view_from_email').val(student_email);

		if ($("#message_view").hasClass("fadeOutUp")) {
		$("#message_view").removeClass("fadeOutUp");
		$("#message_view").removeClass("display-none");
		$("#message_view").addClass("fadeInDown");

		}else{
		$("#message_view").removeClass("fadeInDown");	
		$("#message_view").addClass("fadeOutUp");
		// $("#login").hide();
		};
	});//end of message compose modal

	//LEAVE THIS ALONE TOO

	// message_view
	$('.student_select').focus(function(){
		$('.alert-success').removeClass('fadeInDown');
		$('.alert-success').addClass('fadeUpOut');
	});
	$('.update_attendance').click(function(event){
		event.preventDefault();
		var student_selection = $('#student_select option:selected').val();
		var morning_class = $('.morning_class').is(':checked');
		var late_morning_class = $('.late_morning_class').is(':checked');
		var afternoon_class = $('.afternoon_class').is(':checked');
		var evening_class = $('.evening_class').is(':checked');
		var total_hrs = $('.total_hrs').val();
		var att_path = base_url.concat(attendance_path);

		$.ajax({
			type:'POST',
			url:att_path,
			data:{
				'student_id':student_selection,
				'morning_class':morning_class,
				'late_morning_class':late_morning_class,
				'afternoon_class':afternoon_class,
				'total_hrs':total_hrs,
				'evening_class':evening_class
			},
			success:function(success){
				console.log(success);
				$('.alert-success').removeClass('display-none');
				$('.alert-success').addClass('fadeInDown');
				$('.alert-success').html(success);
				console.log(student_selection);
				console.log(morning_class);
				console.log(late_morning_class);
				console.log(afternoon_class);
				console.log(evening_class);
			}
		});
	});//end of update attendance



	function send_reply(msg_id){
			var reply = $('.msg_reply').val();
			// console.log(msg_id);return;
			var rep_path = base_url.concat(reply_path);
			if (reply == '') {
				$('#sub_button_animation_reply').replaceWith('<div id="sub_button_animation_reply"><span id="im_icon" class = "fa"></span> Please Enter Message/Subject before sending</div>');
			}else{
			$('#sub_button_animation_reply').replaceWith('<div id="sub_button_animation_reply"><span id="im_icon" class = "fa fa-spinner fa-spin"></span>Sending</div>');
			$.ajax({
				type:'POST',
				url:rep_path,
				data:{
					'reply':reply,
					'msg_id':msg_id
				},
				success:function(success_im){
					$('.msg_reply').val('');
					$('#sub_button_animation_reply').replaceWith('<div id="sub_button_animation_reply"><span id="im_icon" class = "fa fa-check"></span>Reply Sent</div>');
					console.log(success_im);
				}
			});
			}//end of if
	}

});