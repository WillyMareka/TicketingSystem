            <div class="row">
                <h3 class="page-header"><i class = "fa fa-home"></i> Student Home</h3>
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

                 <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
                    <h4>NOTIFICATIONS</h4>
                                        
                      <!-- First Action -->
                      <div class="desc">
                        <div class="thumb">
                            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                            <p><muted>2 Minutes Ago</muted><br/>
                               <a href="#">James Brown</a> subscribed to your newsletter.<br/>
                            </p>
                        </div>
                      </div>
                      <!-- Second Action -->
                      <div class="desc">
                        <div class="thumb">
                            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                            <p><muted>3 Hours Ago</muted><br/>
                               <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>
                            </p>
                        </div>
                      </div>
                      <!-- Third Action -->
                      <div class="desc">
                        <div class="thumb">
                            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                            <p><muted>7 Hours Ago</muted><br/>
                               <a href="#">Brandon Page</a> purchased a year subscription.<br/>
                            </p>
                        </div>
                      </div>
                      <!-- Fourth Action -->
                      <div class="desc">
                        <div class="thumb">
                            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                            <p><muted>11 Hours Ago</muted><br/>
                               <a href="#">Mark Twain</a> commented your post.<br/>
                            </p>
                        </div>
                      </div>
                      <!-- Fifth Action -->
                      <div class="desc">
                        <div class="thumb">
                            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                            <p><muted>18 Hours Ago</muted><br/>
                               <a href="#">Daniel Pratt</a> purchased a wallet in your store.<br/>
                            </p>
                        </div>
                    </div>
                    </div>
			</div>

            <!-- /.row -->
            </div>
            <!-- /.row -->
