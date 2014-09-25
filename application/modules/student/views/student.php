<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SU Notification</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() .'assets/bootstrap/css/bootstrap.css'?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url() .'assets/css/plugins/metisMenu/metisMenu.min.css'?>" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url() .'assets/css/plugins/timeline.css'?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url() .'assets/css/sb-admin-2.css'?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url() .'assets/css/plugins/morris.css'?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url() .'assets/font-awesome-4.1.0/css/font-awesome.min.css'?>" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/student.css'?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top navbar-inverse" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SU Notification</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                    <div class = "user-profile" style = "text-align: center; width: 250px;">
                    	<img src="<?php echo $student['photo']; ?>" class = "img-circle" style = "width: 100px; height: 100px;">
                    	<div class = "row">
                    		<div class = "col-lg-12">
                    			<p><?php echo $student['firstname'];?> <?php echo $student['lastname'];?> <?php echo $student['othernames'];?></p>
                    		</div>

                    		<div class = "col-lg-12">
                    			<p><?php echo $this->session->userdata('email'); ?></p>
                    		</div>
                    	</div>
                    	<li class="divider"></li>
                    	<div class = "row">
                    		<div class = "col-xs-6">
                    			<a href = "" ><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    		</div>
                    		<div class = "col-xs-6">
                    			<a href = "" ><i class="fa fa-user fa-fw"></i> Profile</a>
                    		</div>
                    	</div>
                    </div>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a class="active" href="<?php echo base_url() .'student'?>"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Progress Report</a>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="forms.html"><i class="fa fa-users fa-fw"></i> Attendance</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Time Tables</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-mortar-board fa-fw"></i> E-Learning</a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope fa-fw"></i> Messages</a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-tasks fa-fw"></i> Tasks<span class="badge pull-right">New</span></a>
                        </li>
                        <li>
                        	<a href="#"><i class = "fa fa-magic fa-fw"></i> Forum</a>
                        </li>

                        <li>
                        	<a href="#"><i class = "fa fa-sign-out fa-fw"></i> Log Out</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class = "fa fa-mortar-board"></i> Student Home</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class = "row">
            	<div class = "col-lg-9">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                        	<h3><?php echo $student['firstname'];?> <?php echo $student['lastname'];?> <?php echo $student['othernames'];?></h3>
                        </div>
                        <div class = "panel-body">
	                        <div class = "row">
	                        	<div class="col-md-3">
	                        		<img src="<?php echo $student['photo']; ?>" style = "width: 170px !important; height: 210px !important;">
	                        	</div>

	                        	<div class = "col-md-9">
	                        		<table class = "table table-striped table-bordered table-hover">
	                        			<tr>
	                        				<th>ADMISSION NO:</th>
	                        				<td><?php echo $this->session->userdata('username'); ?></td>
	                        			</tr>
		                        		<tr>
		                        			<th>NAME:</th>
		                        			<td><?php echo $student['firstname'];?> <?php echo $student['lastname'];?> <?php echo $student['othernames'];?></td>
	                        			</tr>
	                        			<tr>
		                        			<th>CURRENT COURSE:</th>
		                        			<td><?php echo $student['course_name']; ?></td>
	                        			</tr>
	                        			<tr>
		                        			<th>EMAIL:</th>
		                        			<td><?php echo $student['student_email'];?></td>
	                        			</tr>
	                        			<tr>
		                        			<th>PHONE NUMBER:</th>
		                        			<td><?php echo $student['student_phone'];?></td>
	                        			</tr>
	                        			<tr>
		                        			<th>LOCATION:</th>
		                        			<td><?php echo $student['location'];?></td>
	                        			</tr>
	                        		</table>
	                        	</div>
                        	</div>
                        </div>
                       <!--  <a href="#">
                            <div class="panel-footer">
                            	<span class="pull-left"><?php echo $this->session->userdata('firstname') . ' ' . $this->session->userdata('lastname');?></span>
                                <span class="pull-left"><small> <?php echo $this->session->userdata('email');?> </small></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a> -->
                    </div>
				</div>

				<div class = "col-lg-3">
					<div class="panel panel-green">
                        <div class="panel-heading">
                            <h4><i class="fa fa-bell fa-fw"></i> Notifications Panel</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> Notes uploaded
                                    <span class="pull-right text-muted small">
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> 2 New messages
                                    <span class="pull-right text-muted small">
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-envelope fa-fw"></i> 1 Message in the Forum
                                    <span class="pull-right text-muted small">
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i> 10 tasks yet to complete
                                    <span class="pull-right text-muted small">
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-upload fa-fw"></i> 4 Assignments
                                    <span class="pull-right text-muted small">
                                    </span>
                                </a>
                            </div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
			</div>
			</div>

            <!-- /.row -->
            <div class = "row">
            	<div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-inbox fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>New Notifications!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-envelope fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>New Messages!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>New Uploads!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-warning fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Report</div>
                                    <div>Problems</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url() .'assets/js/jquery.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() .'assets/bootstrap/js/bootstrap.min.js'?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url() .'assets/js/plugins/metisMenu/metisMenu.min.js'?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url() .'assets/js/plugins/morris/raphael.min.js'?>"></script>
    <!--<script src="<?php echo base_url() .'assets/js/plugins/morris/morris.min.js'?>"></script>
    <script src="<?php echo base_url() .'assets/js/plugins/morris/morris-data.js'?>"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url() .'assets/js/sb-admin-2.js'?>"></script>

</body>

</html>
