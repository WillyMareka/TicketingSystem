var base_url = 'http://localhost/sun/';
var msg_path = 'lecturer/messages';
var reply_path = 'lecturer/reply';
var attendance_path = 'lecturer/attendance';
var exam_path = 'lecturer/examinations';
var marks_path = 'lecturer/get_marks';
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
		var unit = $('.unit_selection').val();
		var path = base_url.concat(msg_path);
		if (msg == '' || sbj == '') {
			$('#sub_button_animation').replaceWith('<div id="sub_button_animation"><i id="im_icon" class = "fa fa-exclamation"></i> Please Enter Message/Subject before sending</div>');
		}else{
		$('#sub_button_animation').replaceWith('<div id="sub_button_animation"><span id="im_icon" class = "fa fa-spinner fa-spin"></span>Sending</div>');
		$.ajax({
			type:'POST',
			url:path,
			data:{
				'msg':msg,
				'sbj':sbj,
				'unit':unit
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

	$('.student_select').change(function(){
		var student_id = $('.student_select').val();
		// alert(student_id);return;
		
		$.ajax({
			type:'POST',
			url:base_url.concat(marks_path),
			data:{
				'student_id':student_id
			},success:function(msg){
				console.log(msg);
				$('#error_message').replaceWith('<div id="error_message"><i id="im_icon" class = "fa fa-info-circle"></i> '+msg+'</div>');
			}
		});
	});
	$('#save_examination').click(function(event){
		event.preventDefault();
		var cat_1 = $('.cat_1').val();
		var cat_2 = $('.cat_2').val();
		var final_exam = $('.final_exam').val();
		var student_select = $('.student_select').val();
		//alert(student_select);return;

		var path = base_url.concat(exam_path);

		if (student_select == '') {
			$('#error_message').replaceWith('<div id="error_message"><i id="im_icon" class = "fa fa-exclamation"></i> Please Select a Student</div>');
		}else if(cat_1 == '' || cat_2 == '' || final_exam == '' ) {
			$('#error_message').replaceWith('<div id="error_message"><i id="im_icon" class = "fa fa-exclamation"></i> Please Insert Appropriate Data into the fields</div>');
		}
		else{
			$('#error_message').replaceWith('<div id="error_message"><span id="im_icon" class = "fa fa-spinner fa-spin"></span>Inserting Record</div>');
			$.ajax({
				type:'POST',
				url:path,
				data:{
					'student_select':student_select,
					'cat_1':cat_1,
					'cat_2':cat_2,
					'final_exam':final_exam
				},
				success:function(success_im){
					$('.cat_1').val('');
					$('.cat_2').val('');
					$('.final_exam').val('');

					$('#error_message').replaceWith('<div id="error_message"><span id="im_icon" class = "fa fa-check"></span>Record Inserted</div>');
					console.log(success_im);
					console.log(cat_1);
					console.log(cat_2);
					console.log(final_exam);
					console.log(student_select);
				}
			});//end of AJAX

		}//end of if		
	});//LEAVE THIS ALONE

	// save_examination
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
		var designated_unit = $('#'+msg_id).attr('data-designated-unit');
		var full_name =  $('#'+msg_id).attr('data-fullname')
		// alert(msg_content);return;

		$('#submit_reply').click(function(event){
			event.preventDefault();
				send_reply(msg_id);
					});

			$('.msg_view_content').html(msg_content);
			$('.view_from').val(full_name);
			$('.view_msg_sbj').val(msg_sbj);
			$('.designated_unit').val(designated_unit);

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

		if (student_selection == '') {
			$('#error_message').replaceWith('<div id="error_message"><i id="im_icon" class = "fa fa-exclamation"></i> Please Select a Student</div>');
		}
		else{

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
				$('#error_message').replaceWith('<div id="error_message"><span id="im_icon" class = "fa fa-check"></span> Student Absentism Updated</div>');
				// $('.alert-success').removeClass('display-none');
				// $('.alert-success').addClass('fadeInDown');
				// $('.alert-success').html(success);
				console.log(student_selection);
				console.log(morning_class);
				console.log(late_morning_class);
				console.log(afternoon_class);
				console.log(evening_class);
			}
		});
		}//end of if
	});//end of update attendance



	function send_reply(msg_id){
			var reply = $('.msg_reply').val();
			var rep_path = base_url.concat(reply_path);
			// console.log(msg_id);return;
			if (reply == '') {
				$('#sub_button_animation_reply').replaceWith('<div id="sub_button_animation_reply"><i id="im_icon" class = "fa fa-exclamation"></i> Please Enter Message/Subject before sending</div>');
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