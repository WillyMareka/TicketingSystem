<!DOCTYPE HTML>
<html>
<head>
<title>REGISTER STUDENT</title>
</head>
<body>
<h1>Student Registration</h1>
<?php $img = $student[0]['photo'];
// echo $img;die;
?>
<?php //echo $img; die;?>
<img src = "<?php echo $img ?>" />
<form method = "POST" action = "<?php echo base_url() .'admin/addStudent'?>" enctype = "multipart/form-data">
	<input type = "text" placeholder = "Enter Firstname" name = "firstname"/>
	<input type = "text" placeholder = "Enter Lastname" name = "lastname"/>
	<input type = "text" placeholder = "Enter Othernames" name = "othername"/>
	<input type = "text" placeholder = "Enter Phonenumber" name = "phonenumber"/>
	<input type = "text" placeholder = "Enter student email" name = "student_email"/>
	<input type = "text" placeholder = "Enter parent number" name = "parent_phone" />
	<input type = "text" placeholder = "Enter parent email" name = "parent_email" />
	<input type = "text" placeholder = "Enter Location" name = "location" />
	<input type = "file" name = "photos" />

	<button type = "submit">Add Student</button>
</form>
</body>
</html>