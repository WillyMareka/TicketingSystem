<div>
	<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Timetables
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Timetables</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

		    <?php
                if ($timetables != NULL)
                {
            ?>
           		    <div class="row">

                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Timetables</h3>
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
                                       	<th >#</th>
                                        <th >File Name</th>
                                        <th >Category</th>
                                        <th >Course Name</th>
                                        <th >Date Of Upload</th>
                                        <th >Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $i=1; 
                                        foreach ($timetables as $value) {
                                         $id = $value['id'];
                                    ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $value['file_name'];?></td>
                                        <td><?php echo $value['category'];?></td>
                                        <td><?php echo $value['course_name'];?></td>
                                        <td><?php echo $value['upload_date'];?></td>

                                        <?php
                                        if($value['active'] == 1)
                                        {
                                            $span = "<span class='label label-success'>Active</span>";
                                        }else
                                        {
                                            $span = "<span class='label label-danger'>Deactivated</span>";
                                        }
                                         ?>
                                        
                                        <td><center><?php echo $span;?></center></td>
                                        
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
                                <h3 class="box-title">Timetables</h3>
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
                                       <th >#</th>
                                        <th >File Name</th>
                                        <th >Category</th>
                                        <th >Course Name</th>
                                        <th >Date Of Upload</th>
                                        <th >Status</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="6"><center>No data found in this table...</center></td>
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

            <div class="row">
		        <div class="col-md-6">                      
		            <div class="box box-solid box-primary">
		                <div class="box-header">
		                    <h3 class="box-title">Upload Timetable</h3>
		                    <div class="box-tools pull-right">
		                        <button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
		                        <button class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
		                    </div>
		                </div>
		                <?php echo form_open_multipart('admin/uploadtime');?>
		    	            <div class="box-body">
		                      	<div class="input-group" style="width: 100%;padding:4px;">
		                            <span class="input-group-addon" style="width: 40%;">Descriptoin: </span>
		                            <input class="textfield form-control" type="text" name="file_name" id="file_name" required/>
		                        </div>
		                        <div class="input-group" style="width: 100%;padding:4px;">
		                            <span class="input-group-addon" style="width: 40%;">Course: </span>
		                            <?php echo $courses; ?>
		                        </div>
		                        <div class="input-group" style="width: 100%;padding:4px;">
		                            <span class="input-group-addon" style="width: 40%;">Timetable type: </span>
		                            <select class="textfield form-control" name="category" id="category">
		                            	<option value="" disabled="on" selected="true">**Select the timetable type**</option>
		                               	<option value="class">Class Timetable</option>
		                               	<option value="exam">Exam Timetable</option>
		                            </select>
		                        </div>
		                        <div class="input-group" style="width: 100%;padding:4px;">
		                            <span class="input-group-addon" style="width: 40%;">Select a timetable: </span>
		                            <input class="textfield form-control" type="file" name="upload_file" id="unit_code" value = "Pick File" required/>
		                        </div>
		                               
		                    </div><!-- /.box-body -->
		                    <div class="box-footer">
		                        <button type="submit" class="btn btn-primary">Upload Timetable</button>
		                    </div><!-- /.box-footer-->
		                </form>
		            </div><!-- /.box -->
		        </div><!-- /.col -->
		    </div>
        </section><!-- /.content -->
    </aside><!-- /.right-side -->
</div>

	