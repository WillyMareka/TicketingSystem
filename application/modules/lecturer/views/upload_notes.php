<?php 
//echo "<pre>";print_r($this->session->all_userdata());echo "</pre>"; exit; 
//echo "<pre>";print_r($msg_no);echo "</pre>"; exit; 
$fname = $this->session->userdata('firstname');
$sname = $this->session->userdata('secondname');
$onames = $this->session->userdata('othernames');
$dob = $this->session->userdata('dob');
$photo = $this->session->userdata('photo');
$email = $this->session->userdata('email');
$unit = $this->session->userdata('unit');
$course = $this->session->userdata('course');
$status = $this->session->userdata('firstname');
$user_type = $this->session->userdata('user_type');

$full_name = $fname.' '.$sname.' '.$onames;

?>
<html>
    <head>
        <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lecturer Dashboard</title>
        <link type="text/css" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url().'assets/bootstrap/css/bootstrap-responsive.min.css';?>" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url().'assets/css/lecturer_theme.css';?>" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url().'assets/semantic/packaged/css/semantic.css'; ?>" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url().'assets/font-awesome-4.1.0/css/font-awesome.css'; ?>" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
        <link href="<?php echo base_url() .'assets/admin/css/AdminLTE.css" rel="stylesheet'?>" type="text/css" />
        <link href="<?php echo base_url() .'assets/admin/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'?>" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="<?php echo base_url() .'assets/admin/css/iCheck/minimal/blue.css'?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/bootstrap/css/bootstrap.css'?>">
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="fa fa-reorder shaded"></i></a><a class="brand" href="<?php echo base_url().'lecturer' ?>">Lecturer Dashboard</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#"><i class="fa fa-area-chart"></i></a></li>
                        </ul>
                        <!-- <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                        </form> -->
                        <ul class="nav pull-right">
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Item No. 1</a></li>
                                    <li><a href="#">Don't Click</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Example Header</li>
                                    <li><a href="#">A Separated link</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Support </a></li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo $photo ?>" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo base_url().'lecturer/log_out' ?>">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="sidebar">
            <ul class="widget widget-menu unstyled">
                <li class="active"><a href="<?php echo base_url()."lecturer"?>"><i class="menu-icon fa fa-dashboard"></i>Dashboard
                </a></li>
                <li><a href="<?php echo base_url()."lecturer/page_to_load/activity"?>"><i class="menu-icon fa fa-bullhorn"></i>News Feed </a>
                </li>
                <li><a href="<?php echo base_url()."lecturer/page_to_load/messages"?>"><i class="menu-icon fa fa-inbox"></i>Inbox <b class="label green pull-right">
                <?php echo $msg_no[0]['total']; ?></b> </a></li>
                <li><a href="<?php echo base_url()."lecturer/page_to_load/students"?>"><i class="menu-icon fa fa-tasks"></i>Students <b class="label orange pull-right">
                    <?php echo $total_students; ?></b> </a></li>

                <li><a href="<?php echo base_url()."lecturer/page_to_load/charts"?>"><i class="menu-icon fa fa-area-chart"></i>Statistics </a></li>
                <li><a href = "<?php echo base_url() ."lecturer/page_to_load/upload_notes"?>"><i class = "menu-icon fa fa-upload"></i>Upload Notes</a></li>

               <!--  <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon fa fa-cog">
                </i><i class="fa fa-chevron-down pull-right"></i><i class="fa fa-chevron-up pull-right">
                </i>More Pages </a>
                    <ul id="togglePages" class="collapse unstyled">
                        <li><a href="other-login.html"><i class="fa fa-inbox"></i>Login </a></li>
                        <li><a href="other-user-profile.html"><i class="fa fa-inbox"></i>Profile </a></li>
                        <li><a href="other-user-listing.html"><i class="fa fa-inbox"></i>All Users </a></li>
                    </ul>
                </li> -->
                <li><a href="<?php echo base_url().'lecturer/log_out' ?>"><i class="menu-icon fa fa-signout"></i>Logout </a></li>
            </ul>
        </div>
        
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <!--/.span3-->
                    <div class="span9 content_span9">
                        <?php echo $upload_section; ?>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
        <div class="span3"></div>
            <div class="span9">
                <b class="copyright">&copy; 2014 Richard Seth Karsan|Otaalo John Chrispine|Bakasa Joshua  </b>  All rights reserved.
            </div>
        </div>
        <script src="<?php echo base_url().'assets/js/jquery-1.9.1.min.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/js/jquery-ui-1.10.1.custom.min.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/js/jquery.flot.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/js/jquery.flot.resize.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/js/jquery.dataTables.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/js/common.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/js/custom_lecturer.js';?>" type="text/javascript"></script>

      
    </body>
    </html>