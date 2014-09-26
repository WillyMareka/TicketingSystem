<?php 
//echo "<pre>";print_r($this->session->all_userdata());echo "</pre>"; exit; 
$fname = $this->session->userdata('firstname');
$sname = $this->session->userdata('secondname');
$onames = $this->session->userdata('othernames');
$dob = $this->session->userdata('dob');
$photo = $this->session->userdata('photo');
$email = $this->session->userdata('email');
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
        <link type="text/css" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.css';?>" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url().'assets/bootstrap/css/bootstrap-responsive.min.css';?>" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url().'assets/font-awesome-4.1.0/css/font-awesome.css'; ?>" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
        <link type="text/css" href="<?php echo base_url().'assets/css/lecturer_theme.css';?>" rel="stylesheet">
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="fa fa-reorder shaded"></i></a><a class="brand" href="index.html">Edmin </a>
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
                                    <li><a href="#">Logout</a></li>
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
                                    11</b> </a></li>
                                <li><a href="<?php echo base_url()."lecturer/page_to_load/tasks"?>"><i class="menu-icon fa fa-tasks"></i>Tasks <b class="label orange pull-right">
                                    19</b> </a></li>

                                <li><a href="ui-button-icon.html"><i class="menu-icon fa fa-bold"></i> Buttons </a></li>
                                <li><a href="ui-typography.html"><i class="menu-icon fa fa-book"></i>Typography </a></li>
                                <li><a href="form.html"><i class="menu-icon fa fa-paste"></i>Forms </a></li>
                                <li><a href="table.html"><i class="menu-icon fa fa-table"></i>Tables </a></li>
                                <li><a href="<?php echo base_url()."lecturer/page_to_load/charts"?>"><i class="menu-icon fa fa-area-chart"></i>Charts </a></li>

                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon fa fa-cog">
                                </i><i class="fa fa-chevron-down pull-right"></i><i class="fa fa-chevron-up pull-right">
                                </i>More Pages </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.html"><i class="fa fa-inbox"></i>Login </a></li>
                                        <li><a href="other-user-profile.html"><i class="fa fa-inbox"></i>Profile </a></li>
                                        <li><a href="other-user-listing.html"><i class="fa fa-inbox"></i>All Users </a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="menu-icon fa fa-signout"></i>Logout </a></li>
                            </ul>
                </div>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                        <div class="span3">
                            <!--/.sidebar-->
                        </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="span9 lec_info row">
                            <span class="topdeck_1">Your Information</span>
                            <span class="topdeck_2"></span>
                            <table class="table table-condensed half_width no_margin float_left fixed_height">
                                <tr>
                                <th colspan="2">
                                    <center><img src="<?php echo $photo ?>"></center>
                                </th>
                                </tr>
                                <tr>
                                    <td>Name(s): </td>
                                    <td><?php echo $full_name; ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        Email: 
                                    </td>
                                    <td><?php echo $email ?></td>
                                </tr>
                                <tr>
                                    <td>Date Of Birth: </td>
                                    <td><?php echo $dob; ?></td>
                                </tr>
                                <tr>
                                    <td>Course: </td>
                                    <td><?php echo $course; ?></td>
                                </tr>

                            </table>

                            <table class="table table-condensed half_width no_margin float_left fixed_height">
                                <tr>
                                    <td>
                                    <div class="message_height">
                                        <div id="messages">
                                             <a href="<?php echo base_url()."lecturer/page_to_load/messages"?>" class="btn-box big span4"><i class=" fa fa-envelope"></i><b>65</b>
                                            <p class="text-muted">
                                                Messages</p>
                                        </a>
                                        <a href="#" class="instant_message">Compose Message</a></br></br>
                                        </div>
                                    <?php $attributes=array('id'=>'instant_message'); echo form_open('lecturer/instant_msg',$attributes) ?>
                                    <input class="inputs" type="text" placeholder="Enter email">
                                    <textarea class="inputs" placeholder = "Enter message"></textarea>
                                    <button class="button" type="button" class="btn"><span class = "glyphicon glyphicon-send"></span>Send</button>
                                    <?php echo form_close(); ?>
                                    <center><i class = "fa fa-arrow-circle-down instantup"></i></center>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <a href="#" class="btn-box big span4"><i class="fa fa-group"></i><b><?php echo $total_students; ?></b>
                                        <p class="text-muted">
                                            Total Students</p>
                                    </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="content">
                            <div class="btn-controls">

                            <!--/.module-->
                                <div class="btn-box-row row-fluid">
                                    <!-- <a href="#" class="btn-box big span4"><i class=" fa fa-random"></i><b>65%</b>
                                        <p class="text-muted">
                                            Growth</p>
                                    </a> -->
                                   
                                   <!--  <a href="#" class="btn-box big span4"><i class="fa fa-money"></i><b>15,152</b>
                                        <p class="text-muted">
                                            Profit</p>
                                    </a> -->
                                </div>
                           <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Profit Chart</h3>
                                </div>
                                <div class="module-body">
                                    <div class="chart inline-legend grid">
                                        <div id="placeholder2" class="graph" style="height: 250px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="btn-box-row row-fluid">
                                    <div class="span8">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="#" class="btn-box small span4"><i class="fa fa-envelope"></i><b>Messages</b>
                                                </a><a href="#" class="btn-box small span4"><i class="fa fa-group"></i><b>Clients</b>
                                                </a><a href="#" class="btn-box small span4"><i class="fa fa-exchange"></i><b>Expenses</b>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="#" class="btn-box small span4"><i class="fa fa-save"></i><b>Total Sales</b>
                                                </a><a href="#" class="btn-box small span4"><i class="fa fa-bullhorn"></i><b>Social Feed</b>
                                                </a><a href="#" class="btn-box small span4"><i class="fa fa-sort-down"></i><b>Bounce
                                                    Rate</b> </a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <ul class="widget widget-usage unstyled span4">
                                        <li>
                                            <p>
                                                <strong>Windows 8</strong> <span class="pull-right small muted">78%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar" style="width: 78%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Mac</strong> <span class="pull-right small muted">56%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-success" style="width: 56%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Linux</strong> <span class="pull-right small muted">44%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-warning" style="width: 44%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>iPhone</strong> <span class="pull-right small muted">67%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-danger" style="width: 67%;">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--/#btn-controls-->

                            <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Adjust Budget Range</h3>
                                </div>
                                <div class="module-body">
                                    <div class="form-inline clearfix">
                                        <a href="#" class="btn pull-right">Update</a>
                                        <label for="amount">
                                            Price range:</label>
                                        &nbsp;
                                        <input type="text" id="amount" class="input-" />
                                    </div>
                                    <hr />
                                    <div class="slider-range">
                                    </div>
                                </div>
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        DataTables</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Rendering engine
                                                </th>
                                                <th>
                                                    Browser
                                                </th>
                                                <th>
                                                    Platform(s)
                                                </th>
                                                <th>
                                                    Engine version
                                                </th>
                                                <th>
                                                    CSS grade
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>
                                                    Trident
                                                </td>
                                                <td>
                                                    Internet Explorer 4.0
                                                </td>
                                                <td>
                                                    Win 95+
                                                </td>
                                                <td class="center">
                                                    4
                                                </td>
                                                <td class="center">
                                                    X
                                                </td>
                                            </tr>
                                            <tr class="even gradeC">
                                                <td>
                                                    Trident
                                                </td>
                                                <td>
                                                    Internet Explorer 5.0
                                                </td>
                                                <td>
                                                    Win 95+
                                                </td>
                                                <td class="center">
                                                    5
                                                </td>
                                                <td class="center">
                                                    C
                                                </td>
                                            </tr>
                                            <tr class="odd gradeA">
                                                <td>
                                                    Trident
                                                </td>
                                                <td>
                                                    Internet Explorer 5.5
                                                </td>
                                                <td>
                                                    Win 95+
                                                </td>
                                                <td class="center">
                                                    5.5
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="even gradeA">
                                                <td>
                                                    Trident
                                                </td>
                                                <td>
                                                    Internet Explorer 6
                                                </td>
                                                <td>
                                                    Win 98+
                                                </td>
                                                <td class="center">
                                                    6
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="odd gradeA">
                                                <td>
                                                    Trident
                                                </td>
                                                <td>
                                                    Internet Explorer 7
                                                </td>
                                                <td>
                                                    Win XP SP2+
                                                </td>
                                                <td class="center">
                                                    7
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="even gradeA">
                                                <td>
                                                    Trident
                                                </td>
                                                <td>
                                                    AOL browser (AOL desktop)
                                                </td>
                                                <td>
                                                    Win XP
                                                </td>
                                                <td class="center">
                                                    6
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Gecko
                                                </td>
                                                <td>
                                                    Firefox 1.0
                                                </td>
                                                <td>
                                                    Win 98+ / OSX.2+
                                                </td>
                                                <td class="center">
                                                    1.7
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Gecko
                                                </td>
                                                <td>
                                                    Firefox 1.5
                                                </td>
                                                <td>
                                                    Win 98+ / OSX.2+
                                                </td>
                                                <td class="center">
                                                    1.8
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Gecko
                                                </td>
                                                <td>
                                                    Firefox 2.0
                                                </td>
                                                <td>
                                                    Win 98+ / OSX.2+
                                                </td>
                                                <td class="center">
                                                    1.8
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Gecko
                                                </td>
                                                <td>
                                                    Firefox 3.0
                                                </td>
                                                <td>
                                                    Win 2k+ / OSX.3+
                                                </td>
                                                <td class="center">
                                                    1.9
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Gecko
                                                </td>
                                                <td>
                                                    Camino 1.0
                                                </td>
                                                <td>
                                                    OSX.2+
                                                </td>
                                                <td class="center">
                                                    1.8
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Gecko
                                                </td>
                                                <td>
                                                    Camino 1.5
                                                </td>
                                                <td>
                                                    OSX.3+
                                                </td>
                                                <td class="center">
                                                    1.8
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Gecko
                                                </td>
                                                <td>
                                                    Netscape 7.2
                                                </td>
                                                <td>
                                                    Win 95+ / Mac OS 8.6-9.2
                                                </td>
                                                <td class="center">
                                                    1.7
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Gecko
                                                </td>
                                                <td>
                                                    Netscape Browser 8
                                                </td>
                                                <td>
                                                    Win 98SE+
                                                </td>
                                                <td class="center">
                                                    1.7
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Gecko
                                                </td>
                                                <td>
                                                    Netscape Navigator 9
                                                </td>
                                                <td>
                                                    Win 98+ / OSX.2+
                                                </td>
                                                <td class="center">
                                                    1.8
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Gecko
                                                </td>
                                                <td>
                                                    Mozilla 1.0
                                                </td>
                                                <td>
                                                    Win 95+ / OSX.1+
                                                </td>
                                                <td class="center">
                                                    1
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Gecko
                                                </td>
                                                <td>
                                                    Mozilla 1.1
                                                </td>
                                                <td>
                                                    Win 95+ / OSX.1+
                                                </td>
                                                <td class="center">
                                                    1.1
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Gecko
                                                </td>
                                                <td>
                                                    Mozilla 1.2
                                                </td>
                                                <td>
                                                    Win 95+ / OSX.1+
                                                </td>
                                                <td class="center">
                                                    1.2
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Gecko
                                                </td>
                                                <td>
                                                    Mozilla 1.3
                                                </td>
                                                <td>
                                                    Win 95+ / OSX.1+
                                                </td>
                                                <td class="center">
                                                    1.3
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Gecko
                                                </td>
                                                <td>
                                                    Mozilla 1.4
                                                </td>
                                                <td>
                                                    Win 95+ / OSX.1+
                                                </td>
                                                <td class="center">
                                                    1.4
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Gecko
                                                </td>
                                                <td>
                                                    Mozilla 1.5
                                                </td>
                                                <td>
                                                    Win 95+ / OSX.1+
                                                </td>
                                                <td class="center">
                                                    1.5
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Gecko
                                                </td>
                                                <td>
                                                    Mozilla 1.6
                                                </td>
                                                <td>
                                                    Win 95+ / OSX.1+
                                                </td>
                                                <td class="center">
                                                    1.6
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Gecko
                                                </td>
                                                <td>
                                                    Mozilla 1.7
                                                </td>
                                                <td>
                                                    Win 98+ / OSX.1+
                                                </td>
                                                <td class="center">
                                                    1.7
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Gecko
                                                </td>
                                                <td>
                                                    Mozilla 1.8
                                                </td>
                                                <td>
                                                    Win 98+ / OSX.1+
                                                </td>
                                                <td class="center">
                                                    1.8
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Gecko
                                                </td>
                                                <td>
                                                    Seamonkey 1.1
                                                </td>
                                                <td>
                                                    Win 98+ / OSX.2+
                                                </td>
                                                <td class="center">
                                                    1.8
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Gecko
                                                </td>
                                                <td>
                                                    Epiphany 2.20
                                                </td>
                                                <td>
                                                    Gnome
                                                </td>
                                                <td class="center">
                                                    1.8
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Webkit
                                                </td>
                                                <td>
                                                    Safari 1.2
                                                </td>
                                                <td>
                                                    OSX.3
                                                </td>
                                                <td class="center">
                                                    125.5
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Webkit
                                                </td>
                                                <td>
                                                    Safari 1.3
                                                </td>
                                                <td>
                                                    OSX.3
                                                </td>
                                                <td class="center">
                                                    312.8
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Webkit
                                                </td>
                                                <td>
                                                    Safari 2.0
                                                </td>
                                                <td>
                                                    OSX.4+
                                                </td>
                                                <td class="center">
                                                    419.3
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Webkit
                                                </td>
                                                <td>
                                                    Safari 3.0
                                                </td>
                                                <td>
                                                    OSX.4+
                                                </td>
                                                <td class="center">
                                                    522.1
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Webkit
                                                </td>
                                                <td>
                                                    OmniWeb 5.5
                                                </td>
                                                <td>
                                                    OSX.4+
                                                </td>
                                                <td class="center">
                                                    420
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Webkit
                                                </td>
                                                <td>
                                                    iPod Touch / iPhone
                                                </td>
                                                <td>
                                                    iPod
                                                </td>
                                                <td class="center">
                                                    420.1
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Webkit
                                                </td>
                                                <td>
                                                    S60
                                                </td>
                                                <td>
                                                    S60
                                                </td>
                                                <td class="center">
                                                    413
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Presto
                                                </td>
                                                <td>
                                                    Opera 7.0
                                                </td>
                                                <td>
                                                    Win 95+ / OSX.1+
                                                </td>
                                                <td class="center">
                                                    -
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Presto
                                                </td>
                                                <td>
                                                    Opera 7.5
                                                </td>
                                                <td>
                                                    Win 95+ / OSX.2+
                                                </td>
                                                <td class="center">
                                                    -
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Presto
                                                </td>
                                                <td>
                                                    Opera 8.0
                                                </td>
                                                <td>
                                                    Win 95+ / OSX.2+
                                                </td>
                                                <td class="center">
                                                    -
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Presto
                                                </td>
                                                <td>
                                                    Opera 8.5
                                                </td>
                                                <td>
                                                    Win 95+ / OSX.2+
                                                </td>
                                                <td class="center">
                                                    -
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Presto
                                                </td>
                                                <td>
                                                    Opera 9.0
                                                </td>
                                                <td>
                                                    Win 95+ / OSX.3+
                                                </td>
                                                <td class="center">
                                                    -
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Presto
                                                </td>
                                                <td>
                                                    Opera 9.2
                                                </td>
                                                <td>
                                                    Win 88+ / OSX.3+
                                                </td>
                                                <td class="center">
                                                    -
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Presto
                                                </td>
                                                <td>
                                                    Opera 9.5
                                                </td>
                                                <td>
                                                    Win 88+ / OSX.3+
                                                </td>
                                                <td class="center">
                                                    -
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Presto
                                                </td>
                                                <td>
                                                    Opera for Wii
                                                </td>
                                                <td>
                                                    Wii
                                                </td>
                                                <td class="center">
                                                    -
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Presto
                                                </td>
                                                <td>
                                                    Nokia N800
                                                </td>
                                                <td>
                                                    N800
                                                </td>
                                                <td class="center">
                                                    -
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Presto
                                                </td>
                                                <td>
                                                    Nintendo DS browser
                                                </td>
                                                <td>
                                                    Nintendo DS
                                                </td>
                                                <td class="center">
                                                    8.5
                                                </td>
                                                <td class="center">
                                                    C/A<sup>1</sup>
                                                </td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>
                                                    KHTML
                                                </td>
                                                <td>
                                                    Konqureror 3.1
                                                </td>
                                                <td>
                                                    KDE 3.1
                                                </td>
                                                <td class="center">
                                                    3.1
                                                </td>
                                                <td class="center">
                                                    C
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    KHTML
                                                </td>
                                                <td>
                                                    Konqureror 3.3
                                                </td>
                                                <td>
                                                    KDE 3.3
                                                </td>
                                                <td class="center">
                                                    3.3
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    KHTML
                                                </td>
                                                <td>
                                                    Konqureror 3.5
                                                </td>
                                                <td>
                                                    KDE 3.5
                                                </td>
                                                <td class="center">
                                                    3.5
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>
                                                    Tasman
                                                </td>
                                                <td>
                                                    Internet Explorer 4.5
                                                </td>
                                                <td>
                                                    Mac OS 8-9
                                                </td>
                                                <td class="center">
                                                    -
                                                </td>
                                                <td class="center">
                                                    X
                                                </td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>
                                                    Tasman
                                                </td>
                                                <td>
                                                    Internet Explorer 5.1
                                                </td>
                                                <td>
                                                    Mac OS 7.6-9
                                                </td>
                                                <td class="center">
                                                    1
                                                </td>
                                                <td class="center">
                                                    C
                                                </td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>
                                                    Tasman
                                                </td>
                                                <td>
                                                    Internet Explorer 5.2
                                                </td>
                                                <td>
                                                    Mac OS 8-X
                                                </td>
                                                <td class="center">
                                                    1
                                                </td>
                                                <td class="center">
                                                    C
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Misc
                                                </td>
                                                <td>
                                                    NetFront 3.1
                                                </td>
                                                <td>
                                                    Embedded devices
                                                </td>
                                                <td class="center">
                                                    -
                                                </td>
                                                <td class="center">
                                                    C
                                                </td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>
                                                    Misc
                                                </td>
                                                <td>
                                                    NetFront 3.4
                                                </td>
                                                <td>
                                                    Embedded devices
                                                </td>
                                                <td class="center">
                                                    -
                                                </td>
                                                <td class="center">
                                                    A
                                                </td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>
                                                    Misc
                                                </td>
                                                <td>
                                                    Dillo 0.8
                                                </td>
                                                <td>
                                                    Embedded devices
                                                </td>
                                                <td class="center">
                                                    -
                                                </td>
                                                <td class="center">
                                                    X
                                                </td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>
                                                    Misc
                                                </td>
                                                <td>
                                                    Links
                                                </td>
                                                <td>
                                                    Text only
                                                </td>
                                                <td class="center">
                                                    -
                                                </td>
                                                <td class="center">
                                                    X
                                                </td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>
                                                    Misc
                                                </td>
                                                <td>
                                                    Lynx
                                                </td>
                                                <td>
                                                    Text only
                                                </td>
                                                <td class="center">
                                                    -
                                                </td>
                                                <td class="center">
                                                    X
                                                </td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>
                                                    Misc
                                                </td>
                                                <td>
                                                    IE Mobile
                                                </td>
                                                <td>
                                                    Windows Mobile 6
                                                </td>
                                                <td class="center">
                                                    -
                                                </td>
                                                <td class="center">
                                                    C
                                                </td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>
                                                    Misc
                                                </td>
                                                <td>
                                                    PSP browser
                                                </td>
                                                <td>
                                                    PSP
                                                </td>
                                                <td class="center">
                                                    -
                                                </td>
                                                <td class="center">
                                                    C
                                                </td>
                                            </tr>
                                            <tr class="gradeU">
                                                <td>
                                                    Other browsers
                                                </td>
                                                <td>
                                                    All others
                                                </td>
                                                <td>
                                                    -
                                                </td>
                                                <td class="center">
                                                    -
                                                </td>
                                                <td class="center">
                                                    U
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>
                                                    Rendering engine
                                                </th>
                                                <th>
                                                    Browser
                                                </th>
                                                <th>
                                                    Platform(s)
                                                </th>
                                                <th>
                                                    Engine version
                                                </th>
                                                <th>
                                                    CSS grade
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!--/.module-->
                        </div>
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
        <script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/js/jquery.flot.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/js/jquery.flot.resize.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/js/jquery.dataTables.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/js/common.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/js/custom_lecturer.js';?>" type="text/javascript"></script>
      
    </body>
    </html>
