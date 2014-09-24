<!DOCTYPE html>
<html>
	<head>
		<meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Caption|Source+Sans+Pro|Lato|PT+Sans|Roboto' rel='stylesheet' type='text/css'>
		<title>Strathmore Notification System</title>
		<link rel="stylesheet" type="text/css" href= "<?php echo base_url(). 'assets/startup/flat-ui/bootstrap/css/bootstrap.css'?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/bootstrap/css/bootstrap.css'?>">
		<link href="<?php echo base_url(). 'assets/startup/flat-ui/css/flat-ui.css'?>" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/kickstart/css/fonts/font-awesome/css/font-awesome.min.css'?>">
		<link rel="stylesheet" href="<?php echo base_url(). 'assets/stylesheets/animate.css'?>">
		<link rel="stylesheet" href="<?php echo base_url(). 'assets/startup/common-files/css/icon-font.css'?>">
        <!-- end -->
        <link rel="stylesheet" href="<?php echo base_url(). 'assets/startup/common-files/css/animations.css'?>">
        <!-- header -->
        <link rel="stylesheet" href="<?php echo base_url(). 'assets/startup/ui-kit/ui-kit-header/css/style.css'?>">
        <link rel="stylesheet" type="text/css" href= "<?php echo base_url(). 'assets/stylesheets/style.css'?>">

	</head>
	<body>
		<header class="header-10">
          <div class="container-fluid">
            <div class="row">
              <div class="navbar col-sm-12" role="navigation">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle"></button>
                  <a class="brand" href="#">Startup</a>
                </div>
                <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home-div">Home</a></li>
                        <li><a href="#about-div" id = "about">About</a></li>
                        <li><a href="#team-div">Team</a></li>
                        <li><a href="#contact-div">Contact</a></li>
                        <li><a id = "login-button" style = "cursor: pointer;" >Login</a></li>
       
                      </ul>
                    </div><!-- /.navbar-collapse -->
              </div>
            </div>
          </div>
        </header>
        <section class="header-10-sub v-center bg-midnight-blue" id = "home-div">
          <div class="background">&nbsp;</div>
          <div>
            <div class="container">
              <div class="hero-unit">
                <h1>Welcome to Strathmore Notification System</h1>
                <p>This is a system that enables both students and lecturers have a good notification system
                  <br/>Login to experience this</p>
                  <button class = "btn loginbutton" data-toggle="modal" data-target="#myModal">Login Here</button>
              </div>
            </div>
          </div>
		</div>
          <a class="control-btn fui-arrow-down" href="#"></a>
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
					<h1>WE LOVE TO TALK</h1>
					<p>Drop us a line and say hello</p>
					<div id = "contact-form" class = "contact-form col-md-6 col-md-offset-3">
					<form class="su-contact-form" id="slasa-contact" action="home/addContact" method="POST">
					<div class = "form-group"><input type="text" id="fullname" name="contact_name" required placeholder = "Please Enter your name" class = "form-control" /></div>
					<div class = "form-group"><input type="email" required placeholder = "Please Enter your Email"  id="c-email" name="contact_email" class = "form-control"/></div>
					<div class = "form-group"><input type="phone" placeholder = "Enter your phone number" name = "contact_phonenumber" class="form-control" /></div>
					<div class = "form-group"><textarea class = "form-control" placeholder = "Add a comment" name = "contact_comment"></textarea></div>
					<button class = "btn btn-info btn-lg btn-embossed pull-right full-width" id = "submit-comment" >Submit Comment</button>
					<div id = "result"></div>
					<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class = "jumbotron">
				<div class = "login-form">
					<form>
						<input type = "email" name =  "email"/>
					</form>
				</div>
			</div>
		</section>
		<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h4 style = "font-family: 'PT Sans Caption', sans-serif !important;" class="modal-title" id="myModalLabel">Login Here</h4>
		      </div>
		      <div class="modal-body">
		      <div class = "login-form">
                <?php echo validation_errors(); ?>
                <?php echo form_open('Users/login'); ?>
                <?php $attributes = array('class' => 'su-notification-login', 'id' => 'slasa-login', 'style' => 'background: '); ?>
                <div class = "form-group"><div class = "input-group"><input type="text" id="username" name="username" required placeholder = "Enter Username" class = "form-control" /><span class="input-group-addon"><i class = "fui-user"></i></span></div></div>
                <div class = "form-group"><div class = "input-group"><input type="password" required placeholder = "Enter Password"  id="passowrd" name="password" class = "form-control"/><span class="input-group-addon"><i class = "fui-lock"></i></span></div></div>
                </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-info">Login</button>
		        <?php echo form_close(); ?>
		      </div>
		    </div>
		  </div>
		<script src="<?php echo base_url(). 'assets/Flat-UI/js/jquery-1.8.3.min.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/Flat-UI/js/jquery-ui-1.10.3.custom.min.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/Flat-UI/js/jquery.ui.touch-punch.min.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/bootstrap/js/bootstrap.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/Flat-UI/js/bootstrap-select.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/Flat-UI/js/bootstrap-switch.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/Flat-UI/js/flatui-checkbox.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/Flat-UI/js/flatui-radio.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/Flat-UI/js/jquery.tagsinput.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/Flat-UI/js/jquery.placeholder.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/js/core.js'?>"></script>
	</body>
</html>