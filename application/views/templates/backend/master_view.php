<?php $this->load->view('templates/backend/_parts/master_header_view'); ?>
 <div id="wrapper">
        <?php $this->load->view('templates/backend/_parts/master_nav_view'); ?>
              <div class="navbar-default sidebar" role="navigation">
                          <?php $this->load->view('templates/backend/_parts/master_sidebar_view'); ?>
              </div>
              <div id="page-wrapper">
                 <div class="container-fluid">
                 <!-- COntent starts -->
                  <?php echo $the_view_content; ?>
                <!-- COntent ends -->
                 </div>
              </div>
            </div>
        </div>
 </div>
<?php $this->load->view('templates/backend/_parts/master_footer_view'); ?>

