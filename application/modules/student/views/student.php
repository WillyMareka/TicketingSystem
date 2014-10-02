            <div class = "row">
              <div class = "col-md-5">
                <h3><i class = "fa fa-home"></i> Student Home</h3>
              </div>
            </div>
            <div class = "row">
            	<div class = "col-lg-9">
              <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title"><?php echo $student['firstname'];?> <?php echo $student['lastname'];?> <?php echo $student['othernames'];?></h3>
                                </div>
                                <div class="box-body">
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
                    </div><!-- /.box-body -->
                    <div class = "box-footer">
                      <a href = "<?php echo base_url() .'student/profile'?>">View My Profile <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    
				        </div>
                <div class = "row">
                  <div class="col-lg-4 col-xs-7">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>
                                150
                            </h3>
                            <p>
                                Notifications
                            </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios7-alarm-outline"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-xs-7">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>
                                2
                            </h3>
                            <p>
                                Units Updated
                            </p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-book"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-xs-7">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>
                                2
                            </h3>
                            <p>
                                Messages
                            </p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-inbox"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                  </div>
                </div>
        </div>

                 <div class="col-lg-3">
                 <div class = "box box-primary">
                    <div class = "box-header" style = "text-align: center;">
                      <h3>NOTIFICATIONS</h3>
                    </div>
                    <div class = "box-body">                
                      <!-- First Action -->
                      <div class="desc">
                        <div class = "row">
                          <div class = "col-md-4">
                            <img src = "<?php echo base_url() .'upload/chris.jpg'?>"style = "width: 60px; height: 60px;"/>
                          </div>
                          <div class = "col-md-8">
                            <div class = "row">
                              <div class="thumb">
                                <span class = "pull-left"><p><muted><i class="fa fa-clock-o"></i> 2 Minutes Ago</muted><br/></p></span>
                              </div>
                            </div>
                            <div class = "row">
                              <div class="details">
                                   <p><a href="#">James Brown</a> subscribed to your newsletter.<br/></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Second Action -->
                      <div class="desc">
                        <div class = "row">
                          <div class = "col-md-4">
                            <img src = "<?php echo base_url() .'upload/profile-02.jpg'?>"style = "width: 60px; height: 60px;"/>
                          </div>
                          <div class = "col-md-8">
                            <div class = "row">
                              <div class="thumb">
                                <span class = "pull-left"><p><muted><i class="fa fa-clock-o"></i> 2 Minutes Ago</muted><br/></p></span>
                              </div>
                            </div>
                            <div class = "row">
                              <div class="details">
                                   <p><a href="#">James Brown</a> subscribed to your newsletter.<br/></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Third Action -->
                      <div class="desc">
                        <div class = "row">
                          <div class = "col-md-4">
                            <img src = "<?php echo base_url() .'upload/profile-02.jpg'?>"style = "width: 60px; height: 60px;"/>
                          </div>
                          <div class = "col-md-8">
                            <div class = "row">
                              <div class="thumb">
                                <span class = "pull-left"><p><muted><i class="fa fa-clock-o"></i> 2 Minutes Ago</muted><br/></p></span>
                              </div>
                            </div>
                            <div class = "row">
                              <div class="details">
                                   <p><a href="#">James Brown</a> subscribed to your newsletter.<br/></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="desc">
                        <div class = "row">
                          <div class = "col-md-4">
                            <img src = "<?php echo base_url() .'upload/profile-02.jpg'?>"style = "width: 60px; height: 60px;"/>
                          </div>
                          <div class = "col-md-8">
                            <div class = "row">
                              <div class="thumb">
                                <span class = "pull-left"><p><muted><i class="fa fa-clock-o"></i> 2 Minutes Ago</muted><br/></p></span>
                              </div>
                            </div>
                            <div class = "row">
                              <div class="details">
                                   <p><a href="#">James Brown</a> subscribed to your newsletter.<br/></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="desc">
                        <div class = "row">
                          <div class = "col-md-4">
                            <img src = "<?php echo base_url() .'upload/profile-06.jpg'?>"style = "width: 60px; height: 60px;"/>
                          </div>
                          <div class = "col-md-8">
                            <div class = "row">
                              <div class="thumb">
                                <span class = "pull-left"><p><muted><i class="fa fa-clock-o"></i> 2 Minutes Ago</muted><br/></p></span>
                              </div>
                            </div>
                            <div class = "row">
                              <div class="details">
                                   <p><a href="#">James Brown</a> subscribed to your newsletter.<br/></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    </div>
			</div>

            <!-- /.row -->
            </div>
            <!-- /.row -->
