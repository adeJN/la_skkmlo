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
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>

          <!-- Content Row -->
          <div class="row">

          <?php if($this->session->userdata('logged_in')) : ?>

            <?php if ($this->session->userdata('fk_level_id')=='1') :?>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Anggota</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total;?> terdaftar</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Kegiatan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_keg;?> acara</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Mahasiswa point tercukupi</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">12</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Menunggu keputusan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_regis;?> menunggu</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-upload fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- pengumuman -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h3 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-fw fa-bullhorn"></i>
                    Pengumuman
                    <?php foreach($pengumuman as $p){ ?>
                    <a href="<?php echo site_url('pengumuman/edit/'.$p->id_pengumuman); ?>" class="btn btn-info btn-xs" style="float:right;"><span class="fa fa-cogs"></span> Edit</a> 
                  </h3>
                </div>
                <div class="card-body">
                  <p class="bg-gray-200 p-3 m-0 text-center"><b><?php echo $p->judul;?></b></p><br>
                  <p><?php echo $p->isi;?></p>
                  <?php } ?>
                </div>
              </div>
              <!-- timeline -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h3 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-fw fa-calendar"></i>
                    Timeline
                    <?php foreach($timeline as $p){ ?>
                    <a href="<?php echo site_url('pengumuman/ganti_timeline/'.$p->id_timeline); ?>" class="btn btn-info btn-xs" style="float:right;"><span class="fa fa-cogs"></span> Edit</a> 
                  </h3>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <p class="bg-gray-200 p-3 m-0 text-center"><b><?php echo $p->judul;?></b></p><br>
                    <?php if( $p->gambar ) : ?>
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" src="<?php echo base_url() .'assets/img/timeline/'. $p->gambar ?>" alt="Card image cap" width=500>
                    <?php endif; ?>
                    <?php } ?>
                  </div>
                </div>
              </div>
          <!-- Content Row -->
          <?php endif; ?>

          <?php if ($this->session->userdata('fk_level_id')=='5') :?>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Himpunan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Belum Terverifikasi</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-times-circle fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">BEM</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Belum Terverifikasi</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-times-circle fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">DPK</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Belum Terverifikasi</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-times-circle fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- pengumuman -->
              <div class="card shadow mb-4 col-xl-12">
                <div class="card-header py-3 ">
                  <h6 class="m-0 font-weight-bold text-primary">Pengumuman</h6>
                </div>
                <div class="card-body">
                  <p>!!! PENGUMUMAAN !!!</p>
                  <p class="mb-0">Ada sesuatu yang baru.</p>
                </div>
              </div>
            <!-- timeline -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Timeline</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?php echo site_url('assets/img/undraw_posting_photo.svg')?>" alt="">
                  </div>
                </div>
              </div>
          <?php endif; ?>

        <?php endif; ?> 
      </div>
      <!-- End of Main Content -->
