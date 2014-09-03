<!DOCTYPE HTML>
<html>
<head>

</head>
<body>
	
	<div class="" id="">
		<?php echo form_open('mail/mail/email_details');?>
			<div>
				<input required name="recipient" id="recipient" placeholder="To:" />
			</div>

			<div>
				<input required name="subject" id="subject" placeholder="Add Subject" />
			</div>

			<div>
				<textarea required name="message" id="message" placeholder="Enter Message here" cols="50" rows="5"></textarea>
			</div>

			<div>
				<button type="submit" name="save" class="btn btn-hg btn-primary">
					Send Email
				</button>
			</div>
		</form>
	</div>
	
	
</body>
</html>