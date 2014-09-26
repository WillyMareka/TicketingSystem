
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
<img src = "<?php echo $img ?>" />
<form method = "POST" action = "<?php echo base_url() .'admin/addLecturer'?>" enctype = "multipart/form-data">
	<input type = "text" placeholder = "Enter Firstname" name = "firstname"/>
	<input type = "text" placeholder = "Enter Surname" name = "surname"/>
	<input type = "text" placeholder = "Enter Othernames" name = "othername"/>
	<input type = "date" placeholder = "Date of Birth" name = "dob"/>
	<input type = "text" placeholder = "Enter Phone number" name = "phonenumber"/>
	<input type = "text" placeholder = "Enter lecturer email" name = "lec_email"/>
	<input type = "text" placeholder = "Enter Location" name = "location" />
	<select name="course">
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
	<input type = "file" name = "lec_photo" />

	<button type = "submit">Add Lecturer</button>
</form>
</body>
</html>