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
        		<a class="">
                	<button class="btn btn-primary btn-lg">Add Students</button> 
                </a>
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
									<?php
										$i=1; 
										foreach ($stude as $value) {
																
									?>
									<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $value['firstname'];?></td>
										<td><?php echo $value['lastname'];?></td>
										<td><?php echo $value['othernames'];?></td>
										<td><?php echo $value['student_phone'];?></td>
										<td><?php echo $value['student_email'];?></td>
										<td><?php echo $value['admission_date'];?></td>
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