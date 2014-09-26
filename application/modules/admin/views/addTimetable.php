<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<form method="POST" action = "<?php echo base_url() .'admin/uploadtime'?>" enctype = "multipart/form-data"> 
			<input type = "text" name = "file_name" /><br/>
			<?php echo $courses; ?><br/>
			<input type = "file" name = "upload_file" value = "Pick File"/><br/>
		<button type = "submit">Upload Timetable</button>
		</form>
	</body>
</html>