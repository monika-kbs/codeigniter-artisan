<?php
$seg = $this->uri->segment(2);
?>
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
                <div class="user-profile">
                    
                </div>
                <ul class="nav" id="side-menu">
                    <li> <a href="<?php echo url('admin/dashboard'); ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard <span class="fa arrow"></span> </span></a>                 
                    </li>
                    <li> <a href="<?php echo url('admin/customers'); ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Customers <span class="fa arrow"></span> </span></a>                 
                    </li>
                     <li> <a href="<?php echo url('admin/logs'); ?>" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Logs <span class="fa arrow"></span> </span></a>                 
                    </li>
                </ul>
            </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
