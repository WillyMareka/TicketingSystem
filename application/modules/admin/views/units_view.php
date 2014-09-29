<div>
	<aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Units
                <small>Control panel</small>
            </h1>
                <ol class="breadcrumb">
        	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    	            <li class="active">Units</li>
 	            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

			<?php
				if ($units != NULL)
				{
			?>
			<div class="row">

				<div class="col-xs-12">
                    <div class="box">
                    	<div class="box-header">
                            <h3 class="box-title">Units Details</h3>
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
										<th>Unit Name</th>
										<th>Unit Short Code</th>
										<th>Course Name</th>
										
									</tr>
								</thead>
								<tbody>
									<?php
										$i=1; 
										foreach ($units as $value) {
																
									?>
									<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $value['unit_name'];?></td>
										<td><?php echo $value['unit_short_code'];?></td>
										<td><?php echo $value['course_name'];?></td>
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
	                            <h3 class="box-title">Units Details</h3>
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
										<th>Unit Name</th>
										<th>Unit Short Code</th>
										<th>Course Name</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td colspan="4"><center>No data found in this table...</center></td>
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
