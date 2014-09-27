<div>
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               Administrators
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Administrators</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
        <div class="row">
            <div class="col-md-6">                      
                <div class="box box-solid box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Administrator Registration</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <?php echo form_open_multipart(base_url().'admin/addAdmin') ?>
                        <div class="box-body">
                            <div>
                                <div class="input-group" style="width: 100%;padding:4px;">
                                    <span class="input-group-addon" style="width: 40%;" >First Name:</span>
                                    <input class="textfield form-control" type="text" name="firstname" id="firstname" required/>
                                </div>
                                <div class="input-group" style="width: 100%;padding:4px;">
                                    <span class="input-group-addon" style="width: 40%;">Second Name: </span>
                                    <input class="textfield form-control" type="text" name="surname" id="surname" required/>
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
                                    <span class="input-group-addon" style="width: 40%;">Lecturer Email@: </span>
                                    <input class="textfield form-control" type="text" name="lec_email" id="lec_email" required/>
                                </div>
                                <div class="input-group" style="width: 100%;padding:4px;">
                                    <span class="input-group-addon" style="width: 40%;">Date of Birth: </span>
                                    <!--  <input type="text" name="dob" id="dob" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask /> -->
                                    <input class="textfield form-control" type="date" name="dob" id="dob" required/>
                                </div>
                                <div class="input-group" style="width: 100%;padding:4px;">
                                    <span class="input-group-addon" style="width: 40%;">Location: </span>
                                    <input class="textfield form-control" type="text" name="location" id="location" required/>
                                </div>
                                <div class="input-group" style="width: 100%;padding:4px;">
                                    <span class="input-group-addon" style="width: 40%;">Photo: </span>
                                    <input type = "file" name = "lec_photo" class="textfield form-control" />
                                </div>
                                <div style="">
                                    <button type="submit" class="btn btn-default"> Save User</button>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                    </form>
                </div>
            </div>
        </div>        

        </section><!-- /.content -->
    </aside><!-- /.right-side -->
</div>