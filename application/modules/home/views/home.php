<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Strathmore Notification System</title>
		<link rel="stylesheet" type="text/css" href= "<?php echo base_url(). 'assets/Flat-UI/bootstrap/css/bootstrap.css'?>">
		<link href="<?php echo base_url(). 'assets/Flat-UI/css/flat-ui.css'?>" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/kickstart/css/fonts/font-awesome/css/font-awesome.min.css'?>">
		<link rel="stylesheet" type="text/css" href= "<?php echo base_url(). 'assets/stylesheets/style.css'?>">
		<link rel="stylesheet" href="<?php echo base_url(). 'assets/stylesheets/animate.css'?>">

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
		<section class = "section-panel">
		<div class="jumbotron jumbotron-back" id = "home-div">
			<div class = "row">
				<div id = "jumbo-instruction" class = "col-md-7">
					<h3>Welcome to Strathmore Notification System</h3>
					<p>
						This is a system that enables both students and lecturers have a good notification system. Login to experience this
					</p>
					<p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>
				</div>

				<div id = "login" class = "col-md-4 not-active">
					<div class = "login-header"></div>
					<div class = "login-form">
					<div id = "close-button"><i class = "glyphicon glyphicon-remove"></i></div>
					<?php echo validation_errors(); ?>
					<?php echo form_open('verifylogin'); ?>
					<?php $attributes = array('class' => 'su-notification-login', 'id' => 'slasa-login', 'style' => 'background: '); ?>
					<div class = "form-group"><div class = "input-group"><input type="text" id="username" name="username" required placeholder = "Enter Username" class = "form-control" /><span class="input-group-addon"><i class = "fui-user"></i></span></div></div>
					<div class = "form-group"><div class = "input-group"><input type="password" required placeholder = "Enter Password"  id="passowrd" name="password" class = "form-control"/><span class="input-group-addon"><i class = "fui-lock"></i></span></div></div>
					<button class = "btn btn-primary" type="submit">Login</button>
					<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
		</section>
		
		<section class = "section-panel">
		<div class="jumbotron about-jumbotron" id = "about-div">
			<div class = "overlay">
				<div class = "row">
					<div class = "col-md-7 about-description">
						<h3>BETTER WORLD</h3>
						<p>
							The system seeks to improve communication between lecturers and students, parents and the school and the lectures and the school.
							Read the documentation here
						</p>
						<p><a class="btn btn-primary btn-lg" role="button" href="#">Documentation</a></p>
					</div>
				</div>
			</div>
		</div>
		</section>

		<section class = "section-panel">
			<div class = "jumbotron teamnews" id = "team-div">
			<h1>THE TEAM</h1>
			<p>These are the developers who made this what it is</p>
				<div class = "row">
					<div class = "col-md-4 programmer">
						<img src="<?php echo base_url(). 'assets/images/chris.jpg'?>" class = "img-circle" style = "width: 140px; height: 140px;">
						<h4>Chrispine Otaalo</h4>
						<p>Chrispine Otaalo is a 2nd Year student at Strathmore University taking a Bachelor in Informatics</p>
						<p><i class = "icon-facebook"></i></p>
					</div>

					<div class = "col-md-4 programmer">
						<img src="<?php echo base_url(). 'assets/images/joshua.jpg'?>" class = "img-circle" style = "width: 140px; height: 140px;">
						<h4>Joshua Bakasa</h4>
						<p>Joshua Bakasa is a 2nd Year student at Strathmore University taking a Bachelor in Informatics</p>
					</div>

					<div class = "col-md-4 programmer">
						<img src="<?php echo base_url(). 'assets/images/richard.jpg'?>" class = "img-circle" style = "width: 140px; height: 140px;">
						<h4>Richard Karsan</h4>
						<p>Richard Karsan is a 2nd Year student at Strathmore University taking a Bachelor in Informatics</p>
					</div>
				</div>
			</div>
		</section>

		<section class  = "section-panel">
			<div class = "jumbotron text-centered" id = "contact-div">
				<div class = "row">
					<h3>WE LOVE TO TALK</h3>
					<p>Drop us a line and say hello</p>
					<div id = "contact-form" class = "contact-form col-md-6 col-md-offset-3">
					<?php echo validation_errors(); ?>
					<?php echo form_open('addContact'); ?>
					<?php $attributes = array('class' => 'su-contact-form', 'id' => 'slasa-contact'); ?>
					<div class = "form-group"><input type="text" id="fullname" name="contact_name" required placeholder = "Please Enter your name" class = "form-control" /></div>
					<div class = "form-group"><input type="email" required placeholder = "Please Enter your Email"  id="c-email" name="contact_email" class = "form-control"/></div>
					<div class = "form-group"><input type="phone" placeholder = "Enter your phone number" name = "contact_phonenumber" class="form-control" /></div>
					<div class = "form-group"><textarea class = "form-control" placeholder = "Add a comment"></textarea></div>
					<button class = "btn btn-info btn-lg btn-embossed pull-right full-width" type="submit">Submit Comment</button>
					<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</section>
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