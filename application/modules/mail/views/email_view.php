<!DOCTYPE HTML>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mailing Section: Strathmore Notification System</title>
	<link rel="stylesheet" type="text/css" href= "<?php echo base_url(). 'assets/Flat-UI/bootstrap/css/bootstrap.css'?>">
	<link href="<?php echo base_url(). 'assets/Flat-UI/css/flat-ui.css'?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/kickstart/css/fonts/font-awesome/css/font-awesome.min.css'?>">
	<link rel="stylesheet" type="text/css" href= "<?php echo base_url(). 'assets/stylesheets/style.css'?>">
	<link rel="stylesheet" href="<?php echo base_url(). 'assets/stylesheets/animate.css'?>">
	<script type="text/javascript">
		$(".tagsinput").tagsInput();
	</script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand animated" href="#">SU Notification Portal</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#home-div">Home</a></li>
		        <li><a href="#about-div" id = "about" onclick="toggleAbout();">About</a></li>
		        <li><a href="#team-div">Team</a></li>
		        <li><a href="#contact-div">Contact</a></li>
		        <li><a href="#home-div" id = "login-button" >Login</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="jumbotron jumbotron-back" id="">
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
	
	<script src="<?php echo base_url(). 'assets/Flat-UI/js/jquery-1.8.3.min.js'?>"></script>
    <script src="<?php echo base_url(). 'assets/Flat-UI/js/jquery-ui-1.10.3.custom.min.js'?>"></script>
	<script src="<?php echo base_url(). 'assets/Flat-UI/js/jquery.ui.touch-punch.min.js'?>"></script>
	<script src="<?php echo base_url(). 'assets/Flat-UI/js/bootstrap.min.js'?>"></script>
	<script src="<?php echo base_url(). 'assets/Flat-UI/js/bootstrap-select.js'?>"></script>
	<script src="<?php echo base_url(). 'assets/Flat-UI/js/bootstrap-switch.js'?>"></script>
	<script src="<?php echo base_url(). 'assets/Flat-UI/js/flatui-checkbox.js'?>"></script>
	<script src="<?php echo base_url(). 'assets/Flat-UI/js/flatui-radio.js'?>"></script>
	<script src="<?php echo base_url(). 'assets/Flat-UI/js/jquery.tagsinput.js'?>"></script>
	<script src="<?php echo base_url(). 'assets/Flat-UI/js/jquery.placeholder.js'?>"></script>
	<script src="<?php echo base_url(). 'assets/js/core.js'?>"></script>
</body>
</html>