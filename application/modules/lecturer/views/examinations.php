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
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lecturer Dashboard:Examinations</title>
	<link type="text/css" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url().'assets/bootstrap/css/bootstrap-responsive.min.css';?>" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url().'assets/css/lecturer_theme.css';?>" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url().'assets/font-awesome-4.1.0/css/font-awesome.css'; ?>" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url().'assets/css/lecturer_theme.css';?>" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url().'assets/css/animate.css'; ?>" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
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

<?php echo $sidebar; ?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span9 content_span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Forms</h3>
							</div>
							<div class="module-body">
									<div class="alert alert-success display-none animated">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong></strong> 
									</div>

									<br />

									<form class="form-horizontal row-fluid">
									<div class="control-group">
									<div class="control-group">
											<label class="control-label" for="basicinput">Students: </label>
											<div class="controls ">
												<select id="student_select" tabindex="1" class="span8 student_select">
												<option value="">-- Select Student -- </option>
											<?php 
													foreach ($students as $student_data) {
														$full_names= $student_data['firstname'].' '.$student_data['lastname'].' '.$student_data['othernames'];
														echo '
														<option value="'.$student_data['student_id'].'">'.$full_names.'</option>
														
														';
													}
													 ?>
												</select>
											</div>
										</div>
										<div class="control-group">
										<?php echo validation_errors(); ?>
										<?php $attr = array('id'=>'exam_form'); echo form_open('lecturer/examinations'); ?>
											<label class="control-label" for="basicinput">CAT One: </label>
											<div class="controls">
												<input type="number" title="Please enter a Number between 1 and 100" required = "required" maxlength="3" max = "100"  id="basicinput" class="cat_1"> %
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">CAT Two: </label>
											<div class="controls">
												<input type="number" title="Please enter a Number between 1 and 100" required = "required" maxlength="3" max = "100"  id="basicinput" class="cat_2"> %
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Final Examination: </label>
											<div class="controls">
												<input type="number" title="Please enter a Number between 1 and 100" required = "required" maxlength="3" max = "100"  id="basicinput" class="final_exam"> %
											</div>
										</div>
										</br>
												<center><button type="submit" id="save_examination" class="btn "> Save Record </button></center>
												<div id="error_message"></div>
										<?php echo form_close(); ?>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

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