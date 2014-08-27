<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Strathmore Notification System</title>
		<link rel="stylesheet" type="text/css" href= "<?php echo base_url(). 'assets/Flat-UI/bootstrap/css/bootstrap.css'?>">
		<link href="<?php echo base_url(). 'assets/Flat-UI/css/flat-ui.css'?>" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/kickstart/css/fonts/font-awesome/css/font-awesome.css'?>">
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
		        <li><a href="#">Home</a></li>
		        <li><a href="#" id = "about" onclick="toggleAbout();">About</a></li>
		        <li><a href="#">Contact</a></li>
		        <li><a href="#" id = "login-button" >Login</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<div class="jumbotron blur-me">
			<div id = "jumbo-instruction" class = "col-md-7">
				<h3>Welcome to Strathmore Notification System</h3>
				<p>
					This is a system that enables both students and lecturers have a good notification system. Login to experience this
				</p>
				<p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>
			</div>

			<div id = "login" class = "col-md-4 not-active">
				<div class = "login-header"><div id = "close-button"><i class="glyphicon glyphicon-remove"></i></div></div>
				<div class = "login-form">
				<?php echo validation_errors(); ?>
				<?php echo form_open('verifylogin'); ?>
				<?php $attributes = array('class' => 'su-notification-login', 'id' => 'slasa-login', 'style' => 'background: '); ?>
				<div class = "form-group"><div class = "input-group"><input type="text" id="username" name="username" required placeholder = "Enter Username" class = "form-control" /><span class="input-group-addon"><i class = "fui-user"></i></span></div></div>
				<br/>
				<div class = "form-group"><div class = "input-group"><input type="password" required placeholder = "Enter Password"  id="passowrd" name="password" class = "form-control"/><span class="input-group-addon"><i class = "glyphicon-padlock"></i></span></div></div>
				<br/>
				<button class = "btn btn-primary" type="submit">Login</button>
				<?php echo form_close(); ?>
				</div>
			</div>
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