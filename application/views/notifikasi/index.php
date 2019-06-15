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
            <h1 class="h3 mb-0 text-gray-800">Notifikasi</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>


          <?php if($this->session->userdata('logged_in')) : ?>

            <?php if ($this->session->userdata('fk_level_id')=='5') :?>
          <!-- Content Row -->
          <?php $data['notif'] = $this->notifikasi_model->get_all_notifikasi_by_pengguna($user->id_user);?>
          <div class="row">
          <?php  foreach($data['notif'] as $n){ 
                  if(($n['dibaca']) == 0) {?>
            <div class="col-xl-12 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?php echo ($n['tggl_notifikasi']); ?></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ($n['judul_notifikasi']); ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book fa-2x text-gray-500"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

                <?php } else {?>

            <div class="col-xl-12 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?php echo ($n['tggl_notifikasi']); ?></div>
                      <div class="h5 mb-0 text-gray-800"><?php echo ($n['judul_notifikasi']); ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book-open fa-2x text-gray-500"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

                <?php } } ?>
            <!-- Earnings (Monthly) Card Example -->

          </div>
          <!-- Content Row -->
          <?php endif; ?>
        <?php endif; ?> 
      </div>
      <!-- End of Main Content -->
