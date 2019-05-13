<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tata cara dan info poin</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>

          <!-- Content Row -->
          <div class="row">

          <?php if($this->session->userdata('logged_in')) : ?>

            <?php if ($this->session->userdata('fk_level_id')=='1') :?>
          <?php $this->load->view('indexx/tatacara_new_view'); 
          endif; ?>

          <?php if ($this->session->userdata('fk_level_id')=='5') :
            $this->load->view('indexx/tatacara_new_view');
          endif; ?>
           <?php if ($this->session->userdata('fk_level_id')=='4') :
            $this->load->view('indexx/tatacara_new_view');
          endif; ?>
           <?php if ($this->session->userdata('fk_level_id')=='3') :
            $this->load->view('indexx/tatacara_new_view');
          endif; ?>
           <?php if ($this->session->userdata('fk_level_id')=='2') :
            $this->load->view('indexx/tatacara_new_view');
          endif; ?>

        <?php endif; ?> 
      </div>
      <!-- End of Main Content -->

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

