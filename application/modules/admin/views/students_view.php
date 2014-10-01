<div>
	<aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Students
                <small>Control panel</small>
            </h1>
                <ol class="breadcrumb">
        	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    	            <li class="active">Students</li>
 	            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

        	<div style="float:right; margin-right: 30px; margin-bottom: 30px">
        		
                	<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addstudent">Add Students</button>
               
        	</div>

        	<br />
			<?php
				if ($stude != NULL)
				{
			?>
			<div class="row">

				<div class="col-xs-12">
                    <div class="box">
                    	<div class="box-header">
                            <h3 class="box-title">Students Details</h3>
                            <div class="box-tools">
                                <div class="input-group">
                                    <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                           	        <div class="input-group-btn">
                                       <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-header -->
						<div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
								<thead>
									<tr>
										<th rowspan="2">#</th>
										<th rowspan="2">First Name</th>
										<th rowspan="2">Last Name</th>
										<th rowspan="2">Other Names</th>
										<th rowspan="2">Student Phone</th>
										<th rowspan="2">Student Email</th>
										<th rowspan="2">Admission Date</th>
										<th rowspan="2">Status</th>
										<th colspan="2">Actions</th>
									</tr>
									<tr>
										<th>Deactivate</th>
										<th>Edit</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$i=1; 
										foreach ($stude as $value) {
										$id = $value['id'];
									?>
									<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $value['firstname'];?></td>
										<td><?php echo $value['lastname'];?></td>
										<td><?php echo $value['othernames'];?></td>
										<td><?php echo $value['student_phone'];?></td>
										<td><?php echo $value['student_email'];?></td>
										<td><?php echo $value['admission_date'];?></td>

									<?php
										if($value['status'] == 1)
										{
											$span = "<span class='label label-success'>Active</span>";
										}else
										{
											$span = "<span class='label label-danger'>Deactivated</span>";
										}
									?>
										
										<td><center><?php echo $span;?></center></td>
										<td><center><a href="admin/deactivateStude/<?php echo $id;?>"><span class="label label-danger">Deactivate</span></a></center></td>
										<td><center><a href="" data-toggle="modal" data-target="#editstudent"><span style="color:#44D2F2;"><i class="fa fa-edit"></i></span></a></center></td>
									</tr>
									<?php
										$i++;
										}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				</div>
				<?php
					}else
					{
				?>
				<div class="row">
					<div class="col-xs-12">
	                    <div class="box">
	                    	<div class="box-header">
	                            <h3 class="box-title">Students Details</h3>
	                            <div class="box-tools">
	                                <div class="input-group">
	                                    <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
	                           	        <div class="input-group-btn">
	                                       <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
	                                    </div>
	                                </div>
	                            </div>
	                        </div><!-- /.box-header -->
	                        <div class="box-body table-responsive no-padding">
	                            <table class="table table-hover">
							
									<thead>
										<tr>
											<th>#</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Other Names</th>
											<th>Student Phone</th>
											<th>Student Email</th>
											<th>Admission Date</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td colspan="7"><center>No data found in this table...</center></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<?php
					}
				?>
			
		</section>
	</aside>
</div>

<div class="modal fade" id="addstudent">
	    <div class="modal-dialog" style="width:60%;margin-bottom:2px;">
	        <div class="modal-content" >
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h5 class="modal-title">Add Student</h5>
	            </div>
	            <div class="modal-body" style="padding-bottom:0px;">    

	                <?php echo form_open_multipart(base_url().'admin/addStudent') ?>
	                    <div>
	                        <div class="input-group" style="width: 100%;padding:4px;">
	                            <span class="input-group-addon" style="width: 40%;" >First Name:</span>
	                            <input class="textfield form-control" type="text" name="firstname" id="firstname" required/>
	                        </div>
	                        <div class="input-group" style="width: 100%;padding:4px;">
	                            <span class="input-group-addon" style="width: 40%;">Second Name: </span>
	                            <input class="textfield form-control" type="text" name="lastname" id="lastname" required/>
	                        </div>
	                        <div class="input-group" style="width: 100%;padding:4px;">
	                            <span class="input-group-addon" style="width: 40%;">Other Name: </span>
	                            <input class="textfield form-control" type="text" name="othername" id="othername" required/>
	                        </div>
	                         <div class="input-group" style="width: 100%;padding:4px;">
	                            <span class="input-group-addon" style="width: 40%;">Phone Number: </span>
	                            <input class="textfield form-control" type="text" name="phonenumber" id="phonenumber" required/>
	                        </div>
	                         <div class="input-group" style="width: 100%;padding:4px;">
	                            <span class="input-group-addon" style="width: 40%;">Student Email@: </span>
	                            <input class="textfield form-control" type="text" name="student_email" id="student_email" required/>
	                        </div>
	                         <div class="input-group" style="width: 100%;padding:4px;">
	                            <span class="input-group-addon" style="width: 40%;">Gender: </span>
	                            <select class="textfield form-control"name="gender" id="gender">
	                            	<option value="" selected="true" disabled="on">**Select a gender**</option>
	                            	<option value="male">Male</option>
	                            	<option value="female">Female</option>
	                            </select>
	                        </div>
	                        <div class="input-group" style="width: 100%;padding:4px;">
	                            <span class="input-group-addon" style="width: 40%;">Parent phone: </span>
	                            <input class="textfield form-control" type="text" name="parent_phone" id="parent_phone" required/>
	                        </div>
	                        <div class="input-group" style="width: 100%;padding:4px;">
	                            <span class="input-group-addon" style="width: 40%;">Parent Email: </span>
	                            <input class="textfield form-control" type="text" name="parent_email" id="parent_email" required/>
	                        </div>
	                        <div class="input-group" style="width: 100%;padding:4px;">
	                            <span class="input-group-addon" style="width: 40%;">Location: </span>
	                            <input class="textfield form-control" type="text" name="location" id="location" required/>
	                        </div>
	                       <div class="input-group" style="width: 100%;padding:4px;">
	                       		<span class="input-group-addon" style="width: 40%;">Photo: </span>
	                       		<input type = "file" name = "photos" />
	                       </div>
	                       
	                        <div style="margin-left:685px;">
	                            <button type="submit" class="btn btn-default"> Save User</button>
	                        </div>
	                                
	                    </div>
	                </form>
	                <div class="modal-footer" style="height:11px;padding-top:11px;">
	                    <?php echo $this->config->item("copyrights");?>
	                </div> 
	            </div>
	        </div>
	    </div>
	</div>

<div class="modal fade" id="editstudent">
	    <div class="modal-dialog" style="width:60%;margin-bottom:2px;">
	        <div class="modal-content" >
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h5 class="modal-title">Edit Student Details</h5>
	            </div>
	            <div class="modal-body" style="padding-bottom:0px;">    

	                <?php echo form_open_multipart(base_url().'admin/editStudent') ?>
	                    <div>
	                       <div class="input-group" style="width: 100%;padding:4px;">
	                            <span class="input-group-addon" style="width: 40%;" >First Name:</span>
	                            <input class="textfield form-control" type="text" name="f_name" id="f_name" required/>
	                        </div>
	                        <div class="input-group" style="width: 100%;padding:4px;">
	                            <span class="input-group-addon" style="width: 40%;" >First Name:</span>
	                            <input class="textfield form-control" type="text" name="s_name" id="s_name" required/>
	                        </div>
	                        <div class="input-group" style="width: 100%;padding:4px;">
	                            <span class="input-group-addon" style="width: 40%;" >First Name:</span>
	                            <input class="textfield form-control" type="text" name="o_name" id="o_name" required/>
	                        </div>

	                        <div style="margin-left:685px;">
	                            <button type="submit" class="btn btn-default"> Edit User</button>
	                        </div>
	                    </div>
	                </form>
	                <div class="modal-footer" style="height:11px;padding-top:11px;">
	                    <?php echo $this->config->item("copyrights");?>
	                </div> 
	            </div>
	        </div>
	    </div>
	</div>
