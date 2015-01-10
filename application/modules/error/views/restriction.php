<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>ACCESS DENIED</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() .'assets/bootstrap/css/bootstrap.css'?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url() .'assets/font-awesome-4.1.0/css/font-awesome.css'?>" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() .'assets/css/style.css'?>" rel="stylesheet">
    <link href="<?php echo base_url() .'assets/css/style-responsive.css'?>" rel="stylesheet">
     <!-- Ionicons -->
    <link href="<?php echo base_url() .'assets/admin/css/ionicons.min.css'?>" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="<?php echo base_url() .'assets/admin/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'?>" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="<?php echo base_url() .'assets/admin/css/iCheck/minimal/blue.css'?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() .'assets/css/animate.css'?>" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <style type="text/css">
    	body
    	{
    		
    	}
    	.centered {
			position: fixed;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			text-align: center;
		}
    </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style = "background-color: #000 !important;">
  <div class = "centered">
  	<h1 class = "animated shake"><i class = "fa fa-exclamation-triangle"></i> ACCESS DENIED</h1>
  	<div class = "animated bounceIn"><h3>Sorry!! You cannot view this page unless you are logged in.</h3>
  	<h4>Please go <a href = "<?php echo base_url();?>">home</a> to Log In</h4></div>
  	<h3 class = "animated fadeInDown">OR</h3>
  	<div class = "animated zoomIn"><h4>Go <input action="action" type="button" value="Back" onclick="history.go(-1);" class = "btn btn-default"/></h4></div>
  </div>
  </body>
</html>