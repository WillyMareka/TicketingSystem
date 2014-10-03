<?php 
// echo "<pre>";print_r($this->session->all_userdata());echo "</pre>"; exit; 
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
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="fa fa-reorder shaded"></i></a><a class="brand" href="<?php echo base_url().'lecturer' ?>">Lecturer Dashboard</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li><a href="<?php echo base_url()."lecturer/page_to_load/messages"?>"><i class="fa fa-envelope"></i></a></li>
                            <li><a href="<?php echo base_url()."lecturer/page_to_load/attendance"?>"><i class="menu-icon fa fa-area-chart"></i></a></li>
                            <li><a href="http://www.bbc.com" target="_blank"><i class="menu-icon fa fa-bullhorn"></i></a>
                        </ul>
                        <!-- <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                        </form> -->
                        <ul class="nav pull-right">
                            <!-- 
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
                            -->
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php echo $full_name; ?>   <img src="<?php echo $photo ?>" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <!-- <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li> -->
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
                <li><a href="http://www.bbc.com" target="_blank"><i class="menu-icon fa fa-bullhorn"></i>News Feed </a>
                </li>
                <li><a href="<?php echo base_url()."lecturer/page_to_load/messages"?>"><i class="menu-icon fa fa-inbox"></i>Sentbox <b class="label green pull-right">
                <?php echo $msg_no[0]['total']; ?></b> </a></li>
                <li><a href="<?php echo base_url()."lecturer/page_to_load/students"?>"><i class="menu-icon fa fa-tasks"></i>Students <b class="label orange pull-right">
                    <?php echo $total_students; ?></b> </a></li>

                <li><a href="<?php echo base_url()."lecturer/page_to_load/charts"?>"><i class="menu-icon fa fa-area-chart"></i>Statistics </a></li>
                <li><a href = "<?php echo base_url() ."lecturer/page_to_load/upload_notes"?>"><i class = "menu-icon fa fa-upload"></i>Upload Notes</a></li>
                <li><a href="<?php echo base_url()."lecturer/page_to_load/attendance"?>"><i class="menu-icon fa fa-area-chart"></i>Attendance</a></li>
                <li><a href="<?php echo base_url()."lecturer/page_to_load/examinations"?>"><i class="menu-icon fa fa-gavel"></i>Examinations</a></li>

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
                                <tr>
                                    <td>Unit: </td>
                                    <td><?php echo $unit; ?></td>
                                </tr>

                            </table>

                            <table class="table table-condensed half_width no_margin float_left fixed_height">
                                <tr>
                                    <td>
                                    <div class="message_height">
                                        <div id="messages">
                                             <a href="<?php echo base_url()."lecturer/page_to_load/messages"?>" class="btn-box big span4"><i class=" fa fa-envelope"></i><b><?php echo $msg_no[0]['total']; ?></b>
                                            <p class="text-muted">
                                                Sent Messages</p>
                                        </a>
                                        <a href="#" class="instant_message">Quick Message</a></br></br>
                                        </div>
                                    <?php $attributes=array('id'=>'instant_message'); echo form_open('lecturer/messages',$attributes) ?>
                                                    <select class="clear unit_selection">
                                                        <option>--Select Units--</option>
                                                        <?php 
                                                        foreach ($units as $unit) {
                                                            echo '

                                                        <option value = "'.$unit['id'
                                                        ].'" data-lecturer_id = "'.$unit['lecturer_id'].'">'.$unit['unit_name'] .'</option>

                                                            ';
                                                        }
                                                         ?>
                                                </select>
                                    <input type="text" placeholder="Subject" required = "required" class="inputs sbj">
                                    <textarea class="inputs msg" placeholder = "Enter message" required = "required"></textarea>
                                    <button class="button instant_msg_button" id="submit_im" type="button"><div id="sub_button_animation"><i class = "fa fa-paper-plane"></i>Send</div></button>
                                    <i class = "fa fa-arrow-circle-down instantup"></i>
                                    <?php echo form_close(); ?>
                                    <div class="empty_warn"></div>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <a href="<?php echo base_url()."lecturer/page_to_load/students"?>" class="btn-box big span4"><i class="fa fa-group"></i><b><?php echo $total_students; ?></b>
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
                               <!-- 
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
                                -->
                                <div class="btn-box-row row-fluid">
                                    <div class="span8">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="#" class="btn-box small span4"><i class="fa fa-envelope"></i><b>Sentbox</b>
                                                </a><a href="<?php echo base_url()."lecturer/page_to_load/attendance"?>" class="btn-box small span4"><i class="fa fa-group"></i><b>Attendance</b>
                                                </a><a href="<?php echo base_url()."lecturer/page_to_load/examinations"?>" class="btn-box small span4"><i class="fa fa-gavel"></i><b>Examinations</b>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- <div class="row-fluid">
                                            <div class="span12">
                                                <a href="#" class="btn-box small span4"><i class="fa fa-save"></i><b>Total Sales</b>
                                                </a><a href="#" class="btn-box small span4"><i class="fa fa-bullhorn"></i><b>Social Feed</b>
                                                </a><a href="#" class="btn-box small span4"><i class="fa fa-sort-down"></i><b>Bounce
                                                    Rate</b> </a>
                                            </div>
                                        </div> -->
                                    </div>
                                    
                                    <!-- <ul class="widget widget-usage unstyled span4">
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
                                    </ul> -->
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
        <script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/js/jquery.flot.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/js/jquery.flot.resize.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/js/jquery.dataTables.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/js/custom_lecturer.js';?>" type="text/javascript"></script>

      
    </body>
    </html>
