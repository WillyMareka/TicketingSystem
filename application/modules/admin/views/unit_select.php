<?php //echo "<pre>"; print_r($units); echo "</pre>"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Unit Selection</title>
</head>
<body>

<h1>Select Unit for Lecturer</h1>
<?php echo form_open('admin/add_lecturer_units'); ?>
	<input type="hidden" name="lecturer_id" value="<?php echo $lec_id ?>">
	 <select name="unit" class="unit">
	 <option> Select Unit</option>
<?php 
foreach ($units as $unit) {
	echo '
		<option value = '.$unit['unit_id'].'>'.$unit['unit_name'].'</option>

	';
}
 ?>
	 </select>


 <input type="submit" value="Submit">
 <?php echo form_close(); ?>
</body>
</html>