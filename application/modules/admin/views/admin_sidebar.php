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
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url().'admin/lectures'?>"><i class="glyphicon glyphicon-user"></i> Lecturers</a></li>
                                <li><a href="<?php echo base_url().'admin/students'?>"><i class="glyphicon glyphicon-user"></i> Students</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'admin/sendmail' ?>">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="badge pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'admin/admin_reg'?>">
                                <i class="fa fa-user-md"></i> <span>Administrators</span>
                                <small class="badge pull-right bg-yellow">12</small>
                            </a>
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
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="<?php echo base_url().'admin/courses'?>"><i class="fa fa-angle-double-right"></i> View Courses</a></li>
                                            <li><a href="<?php echo base_url().'admin/units'?>"><i class="fa fa-angle-double-right"></i> View Units</a></li>
                                        </ul>
                                    </li>
                                </li>
                                <li>
                                    <li>
                                        <a href="<?php echo base_url().'admin/register_programs'?>">
                                            <i class="fa fa-folder"></i> <span>Register Programs</span>
                                        </a>
                                    </li>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'admin/Timetable'?>">
                                <i class="fa fa-th"></i> <span>Timetables</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>