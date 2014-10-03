            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo $userdetails[0]['profile_picture']?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">

                            <p>Hello, <?php echo $userdetails[0]['f_name'];?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="<?php echo base_url().'admin'?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-group"></i>
                                <span>Users</span>
                                <small class="badge pull-right bg-red"><?php echo $lecturer[0]['total']+$student[0]['total']; ?></small>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url().'admin/lectures'?>"><i class="glyphicon glyphicon-user"></i> <span>Lecturers</span><small class="badge pull-right bg-yellow"><?php echo $lecturer[0]['total']; ?></small></a></li>
                                <li><a href="<?php echo base_url().'admin/students'?>"><i class="glyphicon glyphicon-user"></i> <span>Students</span><small class="badge pull-right bg-green"><?php echo $student[0]['total']; ?></small></a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Programs</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="fa fa-folder"></i> <span>View Programs</span>
                                            <small class="badge pull-right bg-red"><?php echo $course[0]['total']+$unit[0]['total']; ?></small>
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="<?php echo base_url().'admin/courses'?>"><i class="fa fa-angle-double-right"></i> <span>View Courses</span><small class="badge pull-right bg-yellow"><?php echo $course[0]['total']; ?></small></a></li>
                                            <li><a href="<?php echo base_url().'admin/units'?>"><i class="fa fa-angle-double-right"></i> <span>View Units</span><small class="badge pull-right bg-blue"><?php echo $unit[0]['total']; ?></small></a></li>
                                        </ul>
                                    </li>
                                </li>
                                <li>
                                    <li>
                                        <a href="<?php echo base_url().'admin/register_programs'?>">
                                            <i class="fa fa-angle-double-right"></i> <span>Register Programs</span>
                                        </a>
                                    </li>
                                </li>
                                
                            </ul>
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url().'admin/admin_reg'?>">
                                <i class="fa fa-user-md"></i> <span>Administrators</span>
                                 
                            </a>
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url().'admin/Timetable'?>">
                                <i class="fa fa-th"></i> <span>Timetables</span> 
                                <!-- <small class="badge pull-right bg-green">new</small> -->
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>