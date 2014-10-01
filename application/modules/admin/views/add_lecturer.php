
<!DOCTYPE HTML>
<html>
<head>
<title>Register Lecturer</title>
</head>
<body>
<h1>Student Registration</h1>
<?php 
// $img = $student[0]['photo'];
// echo $img;die;
?>
<?php //echo $img; die;?>
<div id="container">
<div id="ajax_replace">
<form method = "POST" action = "<?php echo base_url() .'admin/addLecturer'?>" enctype = "multipart/form-data">
	<input type = "text" placeholder = "Enter Firstname" class="firstname" name = "firstname"/>
	<input type = "text" placeholder = "Enter Surname" class="surname" name = "surname"/>
	<input type = "text" placeholder = "Enter Othernames" class="othername" name = "othername"/>
	<input type = "date" placeholder = "Date of Birth" class="dob" name = "dob"/>
	<input type = "text" placeholder = "Enter Phone number" class="phonenumber" name = "phonenumber"/>
	<input type = "text" placeholder = "Enter lecturer email" class="lec_email" name = "lec_email"/>
	<select id="course" class="course" name="course">
		<option>-- Select Course --</option>
		<?php 
		// AT THE MOMENT,ONLY ONE COURSE PER LECTURER
			foreach ($courses as $course) {
				echo "
				<option value = ".$course['course_id'].">".$course['course_name']."</option>
				";
			}
		 ?>
	</select>
	<input type = "file" name = "lec_photo" class="lec_photo" />

	<button type = "submit" class="submit_add_lec">Add Lecturer</button>
</form>
</div>
</div>
<script src="<?php echo base_url().'assets/js/jquery-1.9.1.min.js';?>" type="text/javascript"></script>
</body>
<script type="text/javascript">
$(document).ready(function(){
/*	$('.submit_add_lec').click(function(){
	var firstname = $('.firstname').val();
	var surname = $('.surname').val();
	var othername = $('.othername').val();
	var dob = $('.dob').val();
	var phonenumber = $('.phonenumber').val();
	var lec_email = $('.lec_email').val();
	var course = $('.course').val();
	var lec_photo = $('.lec_photo').val();

	$.ajax({
		type:'POST',
		url: 'admin/addLecturer',
		data:{
			'firstname':firstname,
			'surname':surname,
			'othername':othername,
			'dob':dob,
			'phonenumber':phonenumber,
			'lec_email':lec_email,
			'lec_photo':lec_photo
		},
		success:function(msg){
			alert(msg);
			$.ajax({
				type:'POST',
				url:'admin/get_all_units',
				data:{
					'course_id':course
				},
				success:function(units){
					console.log(units);
				}
			});
			}
			// $('#ajax_replace').replaceWith('

			// 	');
		});//ajax
		});//onclick

	function find_units(course){
		var course = course;
		$.ajax({
				type:'POST',
				url:'admin/get_all_units',
				data:{
					'course_id':course
				},
				success:function(units){
					console.log(units);
				}
			});
	};
	*/
});//document ready
</script>
</body>
</html>