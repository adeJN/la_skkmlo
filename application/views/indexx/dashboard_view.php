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


          <?php if($this->session->userdata('logged_in')) : ?>

            <?php if ($this->session->userdata('fk_level_id')=='1'||$this->session->userdata('fk_level_id')=='3') :?>
          <!-- Content Row -->
          <div class="row">
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
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Mahasiswa masuk</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php if ($this->session->userdata('fk_level_id')=='3') :?>
                        <?php echo $total_mah_bem;?> Mahasiswa
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
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
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Poin Mahasiswa belum diverifikasi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php if ($this->session->userdata('fk_level_id')=='3') :?>
                        <?php echo $total_mah_belum_verif_bem;?> Mahasiswa
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Poin mahasiswa sudah diverifikasi</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                          <?php if ($this->session->userdata('fk_level_id')=='3') :?>
                            <?php $hasil=$total_mah_bem-$total_mah_belum_verif_bem; echo $hasil; ?> Mahasiswa
                          <?php endif; ?>
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

          <?php if ($this->session->userdata('fk_level_id')=='2'||$this->session->userdata('fk_level_id')=='4') :?>
          <!-- Content Row -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Mahasiswa masuk</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php if ($this->session->userdata('fk_level_id')=='4') :?>
                        <?php echo $total_mah_him;?> Mahasiswa
                        <?php endif; ?>
                        <?php if ($this->session->userdata('fk_level_id')=='2') :?>
                        <?php echo $total_mah_dpk;?> Mahasiswa
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Poin Mahasiswa Belum diverifikasi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php if ($this->session->userdata('fk_level_id')=='4') :?>
                        <?php echo $total_mah_belum_verif_him;?> Mahasiswa
                        <?php endif; ?>
                        <?php if ($this->session->userdata('fk_level_id')=='2') :?>
                        <?php echo $total_mah_belum_verif_dpk;?> Mahasiswa
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
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
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Poin mahasiswa sudah diverifikasi</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                          <?php if ($this->session->userdata('fk_level_id')=='4') :?>
                            <?php $hasil=$total_mah_him-$total_mah_belum_verif_him; echo $hasil; ?> Mahasiswa
                          <?php endif; ?>
                          <?php if ($this->session->userdata('fk_level_id')=='2') :?>
                            <?php $hasil=$total_mah_dpk-$total_mah_belum_verif_dpk; echo $hasil; ?> Mahasiswa
                          <?php endif; ?>
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
          </div>
          <!-- pengumuman -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h3 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-fw fa-bullhorn"></i>
                    Pengumuman
                    <?php foreach($pengumuman as $p){ ?>
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
          <!-- Content Row -->
          <div class="row">
            <!-- total himp -->
            <div class="col-xl-4 col-md-6 mb-4">
              <?php if($total_point>0){if($total_point_him==$total_point){
                              echo "<div class='card border-left-success shadow h-100 py-2'>";
                            }else{
                              echo "<div class='card border-left-danger shadow h-100 py-2'>";
                            }
                          }else {
                            echo "<div class='card border-left-danger shadow h-100 py-2'>";
                          }
                      ?>
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <?php if($total_point>0){if($total_point_him==$total_point){
                              echo "<div class='text-xs font-weight-bold text-success text-uppercase mb-1'>Himpunan</div>";
                            }else{
                              echo "<div class='text-xs font-weight-bold text-danger text-uppercase mb-1'>Himpunan</div>";
                            }
                          }else {
                            echo "<div class='text-xs font-weight-bold text-danger text-uppercase mb-1'>Himpunan</div>";
                          }
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_point_him;?>/<?php echo $total_point;?>Terverifikasi</div>
                    </div>
                    <div class="col-auto">
                    <?php if($total_point>0){if($total_point_him==$total_point){
                              echo "<i class='fas fa-check-circle fa-2x'></i>";
                            }else{
                              echo "<i class='fas fa-times-circle fa-2x text-gray-400'></i>";
                            }
                          }else {
                            echo "<i class='fas fa-times-circle fa-2x text-gray-400'></i>";
                          }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- total bem -->
            <div class="col-xl-4 col-md-6 mb-4">
              <?php if($total_point>0){if($total_point_bem==$total_point){
                              echo "<div class='card border-left-success shadow h-100 py-2'>";
                            }else{
                              echo "<div class='card border-left-danger shadow h-100 py-2'>";
                            }
                          }else {
                            echo "<div class='card border-left-danger shadow h-100 py-2'>";
                          }
                      ?>
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <?php if($total_point>0){if($total_point_bem==$total_point){
                              echo "<div class='text-xs font-weight-bold text-success text-uppercase mb-1'>BEM</div>";
                            }else{
                              echo "<div class='text-xs font-weight-bold text-danger text-uppercase mb-1'>BEM</div>";
                            }
                          }else {
                            echo "<div class='text-xs font-weight-bold text-danger text-uppercase mb-1'>BEM</div>";
                          }
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_point_bem;?>/<?php echo $total_point;?> Terverifikasi</div>
                    </div>
                    <div class="col-auto">
                    <?php if($total_point>0){if($total_point_bem==$total_point){
                              echo "<i class='fas fa-check-circle fa-2x'></i>";
                            }else{
                              echo "<i class='fas fa-times-circle fa-2x text-gray-400'></i>";
                            }
                          }else {
                            echo "<i class='fas fa-times-circle fa-2x text-gray-400'></i>";
                          }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- total dpk -->
            <div class="col-xl-4 col-md-6 mb-4">
              <?php if($total_point>0){if($total_point_dpk==$total_point){
                              echo "<div class='card border-left-success shadow h-100 py-2'>";
                            }else{
                              echo "<div class='card border-left-danger shadow h-100 py-2'>";
                            }
                          }else {
                            echo "<div class='card border-left-danger shadow h-100 py-2'>";
                          }
                      ?>
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <?php if($total_point>0){if($total_point_dpk==$total_point){
                              echo "<div class='text-xs font-weight-bold text-success text-uppercase mb-1'>DPK</div>";
                            }else{
                              echo "<div class='text-xs font-weight-bold text-danger text-uppercase mb-1'>DPK</div>";
                            }
                          }else {
                            echo "<div class='text-xs font-weight-bold text-danger text-uppercase mb-1'>DPK</div>";
                          }
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php echo $total_point_dpk;?>/<?php echo $total_point;?> Terverifikasi</div>
                    </div>
                    <div class="col-auto">
                    <?php if($total_point>0){if($total_point_dpk==$total_point){
                              echo "<i class='fas fa-check-circle fa-2x'></i>";
                            }else{
                              echo "<i class='fas fa-times-circle fa-2x text-gray-400'></i>";
                            }
                          }else {
                            echo "<i class='fas fa-times-circle fa-2x text-gray-400'></i>";
                          }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <div class="card shadow mb-4">
              <?php if($total_point>0){if($total_point_dpk==$total_point){ ?>
                <button class="btn btn-success btn-xs"><i class="fas fa-fw fa-print"></i> Cetak form</button>
              <?php } }?>
            </div>
          <!-- pengumuman -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h3 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-fw fa-bullhorn"></i>
                    Pengumuman
                    <?php foreach($pengumuman as $p){ ?>
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
          <?php endif; ?>

        <?php endif; ?> 
      </div>
      <!-- End of Main Content -->
