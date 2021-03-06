<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <link rel="shortcut icon" href="<?php echo site_url('assets/img/logo.png')?>" type="image/x-icon">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SKKM</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo site_url('assets/adm/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="<?php echo site_url('assets/adm/css/sb-admin-2.min.css')?>" rel="stylesheet">
  <link href="<?php echo site_url('assets/adm/vendor/datatables/dataTables.bootstrap4.min.css')?>" rel="stylesheet">


</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>
    <!-- End Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <?php if ($this->session->userdata('fk_level_id')=='5') :?>
                <?php $data['notif'] = $this->notifikasi_model->get_all_notifikasi_by_pengguna_limit($user->id_user);
                  $data['total_point_mah'] = $this->notifikasi_model->jumlah_notifikasi($user->id_user);
                ?>
            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter"><?php echo $data['total_point_mah'];?></span>
              </a>

              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Pemberitahuan
                </h6>
                <?php  foreach($data['notif'] as $n){ 
                  if(($n['dibaca']) == 0) {?>

                <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url() .'notifikasi/buka_notifikasi/'.$n['id_notifikasi'] ?>">
                  <div class="dropdown-list-image mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-book text-white"></i>
                    </div>
                    <div class="status-indicator bg-danger"></div>
                  </div>
                  <div>
                    <div class="small text-gray-500"><?php echo ($n['tggl_notifikasi']); ?></div>
                    <span class="font-weight-bold"><?php echo ($n['judul_notifikasi']); ?></span>
                  </div>
                </a>

                <?php } else {?>

                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-book-open text-white"></i>
                    </div>
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="small text-gray-500"><?php echo ($n['tggl_notifikasi']); ?></div>
                    <span class="font-weight"><?php echo ($n['judul_notifikasi']); ?></span>
                  </div>
                </a>

                <?php } } ?>
                <a class="dropdown-item text-center small text-gray-500" href="<?php echo base_url() .'notifikasi'?>">Lihat semua pemberitahuan</a>
              </div>
            </li>
          <?php endif;?>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Selamat datang, <font color="#14B9D5"><?php echo ( $user->nama_lengkap );?></font></span>
                <?php if( $user->foto ) : ?>
                    <img class="img-profile rounded-circle" src="<?php echo base_url() .'assets/img/pengguna/'. $user->foto ?>" alt="Card image cap" title="<?php echo $user->foto; ?>">
                    <?php ; else : ?>
                    <img class="img-profile rounded-circle" src="<?php echo base_url() .'assets/img/default.jpg' ?>" alt="Card image cap">
                <?php endif; ?>

              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo site_url('pengguna/edit/'.$user->id_user)?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Keluar
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          

          
      </div>
      <!-- End of Main Content -->

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Keluar</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Anda yakin ingin keluar</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="<?php echo site_url('home/logout');?>">Keluar</a>
        </div>
      </div>
    </div>
  </div>

