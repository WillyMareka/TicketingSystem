<div>
	<aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Programs
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Programs</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-6">                      
                    <div class="box box-solid box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Units Registration</h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <?php echo form_open('admin/register_units');?>
                            <div class="box-body">
                                <div class="input-group" style="width: 100%;padding:4px;">
                                    <span class="input-group-addon" style="width: 40%;">Course: </span>
                                    <select class="form-control" name="course">
                                    <?php 
                                        foreach ($courses as $value) {
                                    ?>
                                        <option value="<?php echo $value['course_id'];?>"><?php echo $value['course_name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                    </select>
                                </div>
                                <div class="input-group" style="width: 100%;padding:4px;">
                                    <span class="input-group-addon" style="width: 40%;">Unit name: </span>
                                    <input class="textfield form-control" type="text" name="unit_name" id="unit_name" required/>
                                </div>
                                <div class="input-group" style="width: 100%;padding:4px;">
                                    <span class="input-group-addon" style="width: 40%;">Unit short code: </span>
                                    <input class="textfield form-control" type="text" name="unit_code" id="unit_code" required/>
                                </div>
                               
                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Register Unit</button>
                            </div><!-- /.box-footer-->
                         </form>
                    </div><!-- /.box -->
                 </div><!-- /.col -->

                 <div class="col-md-6">                      
                    <div class="box box-solid box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Course Registration</h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <?php echo form_open('admin/addCourse'); ?>
                            <div class="box-body">
                                <div class="input-group" style="width: 100%;padding:4px;">
                                    <span class="input-group-addon" style="width: 40%;">Course name: </span>
                                    <input class="textfield form-control" type="text" name="course_name" id="course_name" required/>
                                </div>
                                <div class="input-group" style="width: 100%;padding:4px;">
                                    <span class="input-group-addon" style="width: 40%;">Course short code: </span>
                                    <input class="textfield form-control" type="text" name="course_code" id="course_code" required/>
                                </div>
                                
                                <div class="input-group" style="width: 100%;padding:4px;">
                                    <span class="input-group-addon" style="width: 40%;">Decription: </span>
                                    <input class="textfield form-control" type="text" name="Decription" id="Decription" required/>
                                </div>
                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Register course</button>
                            </div><!-- /.box-footer-->
                        </form>
                    </div><!-- /.box -->
                 </div><!-- /.col -->

                <div class="col-md-12">                      
                    <div class="box box-solid box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Program Assignment</h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <?php echo form_open('admin/assign'); ?>
                            <div class="box-body">
                                
                                <div class="input-group" style="width: 100%;padding:4px;">
                                    <span class="input-group-addon" style="width: 40%;">Lecturer: </span>
                                    <select class="form-control" name="lect_id">
                                    <?php 
                                        foreach ($lecturers as $value) {
                                    ?>
                                        <option value="<?php echo $value['id'];?>"><?php echo $value['f_name']." ".$value['s_name']." ".$value['o_names']; ?></option>
                                    <?php
                                        }
                                    ?>
                                    </select>
                                </div>
                               <div class="input-group" style="width: 100%;padding:4px;">
                                    <span class="input-group-addon" style="width: 40%;">Unit: </span>
                                    <select class="form-control" name="unit_id">
                                    <?php 
                                        foreach ($units as $value) {
                                    ?>
                                        <option value="<?php echo $value['unit_id'];?>"><?php echo $value['unit_name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                    </select>
                                </div>
                                
                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Asssign</button>
                            </div><!-- /.box-footer-->
                        </form>
                    </div><!-- /.box -->
                 </div><!-- /.col -->
            </div>

        </section><!-- /.content -->
    </aside><!-- /.right-side -->
</div>