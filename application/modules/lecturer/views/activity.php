﻿<!DOCTYPE html>
<html lang="en">
<head>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lecturer Dashboard</title>
	<link type="text/css" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.css';?>" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url().'assets/bootstrap/css/bootstrap-responsive.min.css';?>" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url().'assets/css/lecturer_theme.css';?>" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url().'assets/font-awesome-4.1.0/css/font-awesome.css'; ?>" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="fa fa-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.php">
			  		Edmin
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav nav-icons">
						<li class="active"><a href="#">
							<i class="fa fa-envelope"></i>
						</a></li>
						<li><a href="#">
							<i class="fa fa-eye-open"></i>
						</a></li>
						<li><a href="#">
							<i class="fa fa-bar-chart"></i>
						</a></li>
					</ul>

					<form class="navbar-search pull-left input-append" action="#">
						<input type="text" class="span3">
						<button class="btn" type="button">
							<i class="fa fa-search"></i>
						</button>
					</form>
				
					<ul class="nav pull-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Drops <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li class="nav-header">Nav header</li>
								<li><a href="#">Separated link</a></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
						
						<li><a href="#">
							Support
						</a></li>
						<li class="nav-user dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?php echo base_url().'assets/images/lec_images/user.png';?>" class="nav-avatar" />
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Your Profile</a></li>
								<li><a href="#">Edit Profile</a></li>
								<li><a href="#">Account Settings</a></li>
								<li class="divider"></li>
								<li><a href="#">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<div class="sidebar">

						<ul class="widget widget-menu unstyled">
							<li class="active">
								<a href="index.php">
									<i class="menu-icon fa fa-dashboard"></i>
									Dashboard
								</a>
							</li>
							<li>
								<a href="activity.php">
									<i class="menu-icon fa fa-bullhorn"></i>
									News Feed
								</a>
							</li>
							<li>
								<a href="message.php">
									<i class="menu-icon fa fa-inbox"></i>
									Inbox
									<b class="label green pull-right">11</b>
								</a>
							</li>
							
							<li>
								<a href="task.php">
									<i class="menu-icon fa fa-tasks"></i>
									Tasks
									<b class="label orange pull-right">19</b>
								</a>
							</li>
						</ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
                                <li><a href="ui-button-icon.php"><i class="menu-icon fa fa-bold"></i> Buttons </a></li>
                                <li><a href="ui-typography.php"><i class="menu-icon fa fa-book"></i>Typography </a></li>
                                <li><a href="form.php"><i class="menu-icon fa fa-paste"></i>Forms </a></li>
                                <li><a href="table.php"><i class="menu-icon fa fa-table"></i>Tables </a></li>
                                <li><a href="charts.php"><i class="menu-icon fa fa-bar-chart"></i>Charts </a></li>
                            </ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon fa fa-cog"></i>
									<i class="fa fa-chevron-down pull-right"></i><i class="fa fa-chevron-up pull-right"></i>
									More Pages
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="other-login.php">
											<i class="fa fa-inbox"></i>
											Login
										</a>
									</li>
									<li>
										<a href="other-user-profile.php">
											<i class="fa fa-inbox"></i>
											Profile
										</a>
									</li>
									<li>
										<a href="other-user-listing.php">
											<i class="fa fa-inbox"></i>
											All Users
										</a>
									</li>
									<li>
										<a href="other-faq.php">
											<i class="fa fa-inbox"></i>
											Frequently Asked Questions
										</a>
									</li>
									<li>
										<a href="other-404.php">
											<i class="fa fa-inbox"></i>
											Error Page (404)
										</a>
									</li>
								</ul>
							</li>
							
							<li>
								<a href="#">
									<i class="menu-icon fa fa-signout"></i>
									Logout
								</a>
							</li>
						</ul>

						

					
					</div><!--/.sidebar-->
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>News Feed</h3>
							</div>
							<div class="module-body">
								<div class="stream-composer media">
									<a href="#" class="media-avatar medium pull-left">
										<img src="<?php echo base_url().'assets/images/lec_images/user.png';?>">
									</a>
									<div class="media-body">
										<div class="row-fluid">
											<textarea class="span12" style="height: 70px; resize: none;"></textarea>
										</div>
										<div class="clearfix">
											<a href="#" class="btn btn-primary pull-right">
												Update Status
											</a>
											<a href="#" class="btn btn-small" rel="tooltip" data-placement="top" data-original-title="Upload a photo">
												<i class="fa fa-camera shaded"></i>
											</a>
											<a href="#" class="btn btn-small" rel="tooltip" data-placement="top" data-original-title="Upload a video">
												<i class="fa fa-facetime-video shaded"></i>
											</a>
											<a href="#" class="btn btn-small" rel="tooltip" data-placement="top" data-original-title="Pin your location">
												<i class="fa fa-map-marker shaded"></i>
											</a>
										</div>
									</div>
								</div>

								<div class="stream-list">
									<div class="media stream new-update">
										<a href="#">
											<i class="fa fa-refresh shaded"></i>
											11 updates
										</a>
									</div>
									<div class="media stream">
										<a href="#" class="media-avatar medium pull-left">
											<img src="<?php echo base_url().'assets/images/lec_images/user.png';?>">
										</a>
										<div class="media-body">
											<div class="stream-headline">
												<h5 class="stream-author">
													John Donga 
													<small>08 July, 2014</small>
												</h5>
												<div class="stream-text">
													 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. 
												
                                              
                                                
                                                
                                               

                                                
                                                </div>
												<div class="stream-attachment photo">
													<div class="responsive-photo">
														<img src="<?php echo base_url().'assets/images/lec_images/img.jpg';?>" />
													</div>
												</div>
											</div><!--/.stream-headline-->

											<div class="stream-options">
												<a href="#" class="btn btn-small">
													<i class="fa fa-thumbs-up shaded"></i>
													Like
												</a>
												<a href="#" class="btn btn-small">
													<i class="fa fa-reply shaded"></i>
													Reply
												</a>
												<a href="#" class="btn btn-small">
													<i class="fa fa-retweet shaded"></i>
													Repost
												</a>
											</div>
										</div>
									</div><!--/.media .stream-->
									<div class="media stream">
										<a href="#" class="media-avatar medium pull-left">
											<img src="<?php echo base_url().'assets/images/lec_images/user.png';?>">
										</a>
										<div class="media-body">
											<div class="stream-headline">
												<h5 class="stream-author">
													John Donga 
													<small>08 July, 2014</small>
												</h5>
												<div class="stream-text">
													 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. 
												</div>
												<div class="stream-attachment video">
													<div class="responsive-video">
														
                                                        
                                                        <iframe src="//player.vimeo.com/video/20630217" width="560" height="315" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/20630217">Google Car</a> from <a href="http://vimeo.com/user3524956">Henk Rogers</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                                                        
                                                        
													</div>
												</div>
											</div><!--/.stream-headline-->

											<div class="stream-options">
												<a href="#" class="btn btn-small">
													<i class="fa fa-thumbs-up shaded"></i>
													Like
												</a>
												<a href="#" class="btn btn-small">
													<i class="fa fa-reply shaded"></i>
													Reply
												</a>
												<a href="#" class="btn btn-small">
													<i class="fa fa-retweet shaded"></i>
													Repost
												</a>
											</div>
										</div>
									</div><!--/.media .stream-->

									<div class="media stream">
										<a href="#" class="media-avatar medium pull-left">
											<img src="<?php echo base_url().'assets/images/lec_images/user.png';?>">
										</a>
										<div class="media-body">
											<div class="stream-headline">
												<h5 class="stream-author">
													John Donga 
													<small>08 July, 2014</small>
												</h5>
												<div class="stream-text">
													 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. 
												</div>
											</div><!--/.stream-headline-->

											<div class="stream-options">
												<a href="#" class="btn btn-small">
													<i class="fa fa-thumbs-up shaded"></i>
													Like
												</a>
												<a href="#" class="btn btn-small">
													<i class="fa fa-reply shaded"></i>
													Reply
												</a>
												<a href="#" class="btn btn-small">
													<i class="fa fa-retweet shaded"></i>
													Repost
												</a>
											</div>

											<div class="stream-respond">
												<div class="media stream">
													<a href="#" class="media-avatar small pull-left">
														<img src="<?php echo base_url().'assets/images/lec_images/user.png';?>">
													</a>
													<div class="media-body">
														<div class="stream-headline">
															<h5 class="stream-author">
																John Donga 
																<small>10 July 14</small>
															</h5>
															<div class="stream-text">
																Lorem Ipsum is simply dummy text of the printing and typesetting industry.
															</div>
														</div><!--/.stream-headline-->
													</div>
												</div><!--/.media .stream-->
												<div class="media stream">
													<a href="#" class="media-avatar small pull-left">
														<img src="<?php echo base_url().'assets/images/lec_images/user.png';?>">
													</a>
													<div class="media-body">
														<div class="stream-headline">
															<h5 class="stream-author">
																John Donga 
																<small>12 July 14</small>
															</h5>
															<div class="stream-text">
																Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text.
															</div>
														</div><!--/.stream-headline-->
													</div>
												</div><!--/.media .stream-->
											</div><!--/.stream-respond-->
                                            
                                            <div class="stream-respond">
												<div class="media stream">
													<a href="#" class="media-avatar small pull-left">
														<img src="<?php echo base_url().'assets/images/lec_images/user.png';?>">
													</a>
													<div class="media-body">
														<div class="stream-headline">
															<h5 class="stream-author">
																John Donga 
																<small>10 July 14</small>
															</h5>
															<div class="stream-text">
																Lorem Ipsum is simply dummy text of the printing and typesetting industry.
															</div>
														</div><!--/.stream-headline-->
													</div>
												</div><!--/.media .stream-->
												<div class="media stream">
													<a href="#" class="media-avatar small pull-left">
														<img src="<?php echo base_url().'assets/images/lec_images/user.png';?>">
													</a>
													<div class="media-body">
														<div class="stream-headline">
															<h5 class="stream-author">
																John Donga 
																<small>12 July 14</small>
															</h5>
															<div class="stream-text">
																Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text.
															</div>
														</div><!--/.stream-headline-->
													</div>
												</div><!--/.media .stream-->
											</div><!--/.stream-respond-->
                                            <div class="stream-respond">
												<div class="media stream">
													<a href="#" class="media-avatar small pull-left">
														<img src="<?php echo base_url().'assets/images/lec_images/user.png';?>">
													</a>
													<div class="media-body">
														<div class="stream-headline">
															<h5 class="stream-author">
																John Donga 
																<small>10 July 14</small>
															</h5>
															<div class="stream-text">
																Lorem Ipsum is simply dummy text of the printing and typesetting industry.
															</div>
														</div><!--/.stream-headline-->
													</div>
												</div><!--/.media .stream-->
												<div class="media stream">
													<a href="#" class="media-avatar small pull-left">
														<img src="<?php echo base_url().'assets/images/lec_images/user.png';?>">
													</a>
													<div class="media-body">
														<div class="stream-headline">
															<h5 class="stream-author">
																John Donga 
																<small>12 July 14</small>
															</h5>
															<div class="stream-text">
																Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text.
															</div>
														</div><!--/.stream-headline-->
													</div>
												</div><!--/.media .stream-->
											</div><!--/.stream-respond-->
										</div>
									</div><!--/.media .stream-->
									<div class="media stream">
										<a href="#" class="media-avatar medium pull-left">
											<img src="<?php echo base_url().'assets/images/lec_images/user.png';?>">
										</a>
										<div class="media-body">
											<div class="stream-headline">
												<h5 class="stream-author">
													John Donga 
													<small>08 July, 2014</small>
												</h5>
												<div class="stream-text">
													 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. 
												</div>
											</div><!--/.stream-headline-->

											<div class="stream-options">
												<a href="#" class="btn btn-small">
													<i class="fa fa-thumbs-up shaded"></i>
													Like
												</a>
												<a href="#" class="btn btn-small">
													<i class="fa fa-reply shaded"></i>
													Reply
												</a>
												<a href="#" class="btn btn-small">
													<i class="fa fa-retweet shaded"></i>
													Repost
												</a>
											</div>
										</div>
									</div><!--/.media .stream-->
                                    
                                    <div class="media stream">
										<a href="#" class="media-avatar medium pull-left">
											<img src="<?php echo base_url().'assets/images/lec_images/user.png';?>">
										</a>
										<div class="media-body">
											<div class="stream-headline">
												<h5 class="stream-author">
													John Donga 
													<small>08 July, 2014</small>
												</h5>
												<div class="stream-text">
													 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. 
												
                                              
                                                
                                                
                                               

                                                
                                                </div>
												<div class="stream-attachment photo">
													<div class="responsive-photo">
														<img src="<?php echo base_url().'assets/images/lec_images/img.jpg';?>" />
													</div>
												</div>
											</div><!--/.stream-headline-->

											<div class="stream-options">
												<a href="#" class="btn btn-small">
													<i class="fa fa-thumbs-up shaded"></i>
													Like
												</a>
												<a href="#" class="btn btn-small">
													<i class="fa fa-reply shaded"></i>
													Reply
												</a>
												<a href="#" class="btn btn-small">
													<i class="fa fa-retweet shaded"></i>
													Repost
												</a>
											</div>
										</div>
									</div><!--/.media .stream-->
									<div class="media stream">
										<a href="#" class="media-avatar medium pull-left">
											<img src="<?php echo base_url().'assets/images/lec_images/user.png';?>">
										</a>
										<div class="media-body">
											<div class="stream-headline">
												<h5 class="stream-author">
													John Donga 
													<small>08 July, 2014</small>
												</h5>
												<div class="stream-text">
													 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. 
												</div>
												<div class="stream-attachment video">
													<div class="responsive-video">
														
                                                        
                                                        <iframe src="//player.vimeo.com/video/20630217" width="560" height="315" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/20630217">Google Car</a> from <a href="http://vimeo.com/user3524956">Henk Rogers</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                                                        
                                                        
													</div>
												</div>
											</div><!--/.stream-headline-->

											<div class="stream-options">
												<a href="#" class="btn btn-small">
													<i class="fa fa-thumbs-up shaded"></i>
													Like
												</a>
												<a href="#" class="btn btn-small">
													<i class="fa fa-reply shaded"></i>
													Reply
												</a>
												<a href="#" class="btn btn-small">
													<i class="fa fa-retweet shaded"></i>
													Repost
												</a>
											</div>
										</div>
									</div><!--/.media .stream-->

									<div class="media stream load-more">
										<a href="#">
											<i class="fa fa-refresh shaded"></i>
											show more...
										</a>
									</div>
								</div><!--/.stream-list-->
							</div><!--/.module-body-->
						</div><!--/.module-->
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
<!--COPYRIGHT FOR WHO???
 		<div class="container">
			 
	
			<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
		</div> -->
	</div>

	<script src="<?php echo base_url().'assets/js/jquery-1.9.1.min.js' ?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'assets/js/jquery-ui-1.10.1.custom.min.js' ?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'; ?>" type="text/javascript"></script>
</body>