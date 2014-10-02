 <?php //echo "<pre>"; print_r($msg_data);echo "</pre>"; exit; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lecturer Dashboard</title>
        <link type="text/css" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url().'assets/bootstrap/css/bootstrap-responsive.min.css';?>" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url().'assets/css/lecturer_theme.css';?>" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url().'assets/semantic/packaged/css/semantic.css'; ?>" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url().'assets/css/lecturer_theme.css';?>" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url().'assets/font-awesome-4.1.0/css/font-awesome.css'; ?>" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url().'assets/css/animate.css'; ?>" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="fa fa-reorder shaded"></i></a><a class="brand" href="index.php">Edmin </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="fa fa-envelope"></i></a></li>
                            <li><a href="#"><i class="fa fa-eye-open"></i></a></li>
                            <li><a href="#"><i class="fa fa-bar-chart"></i></a></li>
                        </ul>
                        <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                        </form>
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
                                <img src="<?php echo base_url().'assets/images/lec_images/user.png';?>" class="nav-avatar" />
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

                                <li><a href="<?php echo base_url()."lecturer/page_to_load/charts"?>"><i class="menu-icon fa fa-area-chart"></i>Statistics </a></li>

                               <!--  <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon fa fa-cog">
                                </i><i class="fa fa-chevron-down pull-right"></i><i class="fa fa-chevron-up pull-right">
                                </i>More Pages </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.html"><i class="fa fa-inbox"></i>Login </a></li>
                                        <li><a href="other-user-profile.html"><i class="fa fa-inbox"></i>Profile </a></li>
                                        <li><a href="other-user-listing.html"><i class="fa fa-inbox"></i>All Users </a></li>
                                    </ul>
                                </li> -->
                                <li><a href="#"><i class="menu-icon fa fa-signout"></i>Logout </a></li>
                            </ul>
                </div>
        <div class="animated display-none" id = "message_compose">
                <?php $attributes=array('id'=>'compose_message'); echo form_open(base_url().'lecturer/messages',$attributes) ?>
                <h6 style="color:#ffffff;">Compose New</h6>
                <h5 style="color:#ffffff;">Subject:</h5></br>
                <input type="text" placeholder="Subject" required = "required" class="inputs_md sbj">
                <h5 style="color:#ffffff;">Message:</h5></br>
                <textarea class="inputs_md msg" placeholder = "Enter message" required = "required"></textarea></br>
                <button class="button instant_msg_button" id="submit_im" type="button"><div id="sub_button_animation"><i class = "fa fa-paper-plane"></i></span>Send</div></button>
                <i class = "fa fa-close close_msg_modal"></i>
                <?php echo form_close(); ?>
                <div class="empty_warn"></div>
        </div>

        <div class="animated display-none" id = "message_view">
                <?php $attributes=array('id'=>'compose_message'); echo form_open(base_url().'lecturer/messages',$attributes) ?>
                <h5 style="color:#ffffff;" class="float_left margin_right">Message Sent By Lecturer:</h5>
                <input type="text" placeholder="Subject" required = "required" disabled="disabled" class="float_left inputs_modal_sm view_from margin_right">
                <h5 style="color:#ffffff;" class="float_left margin_right">Designated Unit:</h5>
                <input type="text" placeholder="Subject" required = "required" disabled="disabled" class="float_left inputs_modal_sm designated_unit margin_right">
                
                <h5 style="color:#ffffff;" class="clear">Subject:</h5></br>
                <input type="text" placeholder="Subject" required = "required" disabled="disabled" class="inputs_md view_msg_sbj">
                <h5 style="color:#ffffff;">Message:</h5></br>
                <textarea rows="3" class="inputs_md msg msg_view_content" placeholder = "Enter message" disabled="disabled"></textarea></br>
                <!-- 
                <h5 style="color:#ffffff;">Reply:</h5></br>
                <textarea rows="5" class="inputs_md msg_reply" placeholder = "Enter message" required = "required"></textarea></br>
                 -->
                 <button class="button instant_msg_button" id="submit_reply" type="button"><div id="sub_button_animation_reply"><i class = "fa fa-paper-plane"></i></span>Re-Send/Re-Use Msg</div></button>
                <i class = "fa fa-close close_msg_view_modal"></i>
                <?php echo form_close(); ?>
                <div class="empty_warn"></div>
        </div>

        <div class="wrapper">
            <div class="container ">

                <div class="row ">
                    <div class="span9 content_span9">
                        <div class="content">
                            <div class="module message">
                                <div class="module-head">
                                    <h3>
                                        Message</h3>
                                </div>
                                <div class="module-option clearfix">
                                    <div class="pull-left">
                                        <div class="btn-group">
                                            <button class="btn">
                                                Sent Messages</button>
                                            <!-- 
                                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                            </button> 
                                            -->
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Sent Messages(<?php echo $msg_no; ?>)</a></li>
                                               <!--  
                                               <li><a href="#">Sent</a></li>
                                               <li><a href="#">Draft(2)</a></li>
                                               <li><a href="#">Trash</a></li>
                                               <li class="divider"></li>
                                               <li><a href="#">Settings</a></li> 
                                                -->
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" id = "compose" class="compose btn btn-primary">Compose</a>
                                    </div>
                                </div>
                                <div class="module-body table">
                                    <table class="table table-message">
                                        <tbody>
                                            <tr class="heading">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    Lecturer Name(s) 
                                                </td>
                                                <td class="cell-title">
                                                    Subject
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                </td>
                                                <td class="cell-time align-right">
                                                    View Message
                                                </td>
                                                <td class="cell-time align-right">
                                                    Date Sent
                                                </td>
                                            </tr>

                                           <?php 
                                           foreach ($msg_data as $data) {
                                            $fullname = $data['f_name'].' '.$data['s_name'].' '.$data['o_names'];
                                            $info = array();
                                              echo '
                                            <tr class="unread starred">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="fa fa-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    '.$fullname.'
                                                </td>
                                                <td class="cell-title">
                                                    '.$data['subject'].'
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="fa fa-paper-clip"></i>
                                                </td>

                                               <td class="cell-time align-right display-none">
                                                   
                                                </td>

                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="fa fa-binoculars"></i>

                                                     <input type="hidden" id = "'.$data['message_id'].'" class="" value ="'.$data['message'].'" data-sbj = "'.$data['subject'].'" data-fullname = "'.$fullname.'" data-designated-unit = "'.$data['unit_name'].'">
                                                     <a value = "'.$data['message_id'].'" class = "message_view_link">View</a>
                                                </td>

                                                <td class="cell-time align-right">
                                                    '.$data['sent_on'].'
                                                </td>

                                            </tr>

                                              ';
                                           }

                                            ?>
                                            
                                        </tbody>

                                


                                    </table>
                                </div>
                                <div class="module-foot">
                                </div>
                            </div>
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
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div>
        </div>

       
        <script src="<?php echo base_url().'assets/js/jquery-1.9.1.min.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/js/jquery-ui-1.10.1.custom.min.js';?>" type="text/javascript"></script>
       <script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/semantic/packaged/javascript/semantic.js';?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/js/custom_lecturer.js';?>" type="text/javascript"></script>

        

    </body>
