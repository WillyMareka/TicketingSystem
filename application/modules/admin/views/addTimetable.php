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

	