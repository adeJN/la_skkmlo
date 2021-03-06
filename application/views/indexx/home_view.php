<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"><i class="fa fa-play fa-rotate-270"></i> SKKM</a> </div>
    <!-- Navbar -->
      <?php include('home_nav_view.php'); ?>
    <!-- end navbar -->

        <?php if($this->session->flashdata('user_loggedin')): ?>
          <?php echo '<div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>'.$this->session->flashdata('user_loggedin').'</div>'; ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('login_failed')): ?>
          <?php echo '<div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>'.$this->session->flashdata('login_failed').'</div>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_registered')): ?>
          <?php echo '<div class="alert alert-info fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>'.$this->session->flashdata('user_registered').'</div>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedout')): ?>
          <?php echo '<div class="alert alert-warning fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>'.$this->session->flashdata('user_loggedout').'</div>'; ?>
        <?php endif; ?>


  </div>

  <!-- /.container-fluid --> 
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="container">
      <div class="row">
        <div class="intro-text" style="">
          <?php if(!$this->session->userdata('logged_in')) : ?>
              <h1>SKKM (Satuan Kredit Kegiatan Mahasiswa)</h1>
              <p>kumpulkan poinmu sekarang</p>
          <?php endif; ?>
          <?php if($this->session->userdata('logged_in')) : ?>
            <?php if ($this->session->userdata('fk_level_id')=='1') :?>
                <h1>
                  Selamat Datang admin<br>
                  <font style="color:#14B9D5"><?php echo ( $user->nama_lengkap );?></font>
                </h1>
                <p>hay admin</p>
                <a href="<?php echo site_url('dashboard');?>" class="btn btn-custom btn-lg page-scroll">Halaman Admin</a>
            <?php endif; ?>
            <?php if ($this->session->userdata('fk_level_id')=='2') :?>
                <h1>
                  Selamat Datang DPK<br>
                  <font style="color:#14B9D5"><?php echo ( $user->nama_lengkap );?></font>
                </h1>
                <p>Verifikasi data mahasiswa</p>
                <a href="<?php echo site_url('dashboard');?>" class="btn btn-custom btn-lg page-scroll">Beranda</a>
                <a href="<?php echo site_url('point');?>" class="btn btn-custom btn-lg page-scroll">Verifikasi poin mahasiswa</a>
            <?php endif; ?>
            <?php if ($this->session->userdata('fk_level_id')=='3') :?>
                <h1>
                  Selamat Datang admin BEM<br>
                  <font style="color:#14B9D5"><?php echo ( $user->nama_lengkap );?></font>
                </h1>
                <p>Verifikasi data mahasiswa</p>
                <a href="<?php echo site_url('dashboard');?>" class="btn btn-custom btn-lg page-scroll">Beranda</a>
                <a href="<?php echo site_url('kegiatan');?>" class="btn btn-custom btn-lg page-scroll">Daftar Kegiatan</a>
                <a href="<?php echo site_url('point');?>" class="btn btn-custom btn-lg page-scroll">Verifikasi poin</a>
            <?php endif; ?>
            <?php if ($this->session->userdata('fk_level_id')=='4') :?>
                <h1>
                  Selamat Datang admin himpunan<br>
                  <font style="color:#14B9D5"><?php echo ( $user->nama_lengkap );?></font>
                </h1>
                <p>Verifikasi data mahasiswa</p>
                <a href="<?php echo site_url('dashboard');?>" class="btn btn-custom btn-lg page-scroll">Beranda</a>
                <a href="<?php echo site_url('point');?>" class="btn btn-custom btn-lg page-scroll">Verifikasi Poin</a>
            <?php endif; ?>
            <?php if ($this->session->userdata('fk_level_id')=='5') :?>
                <h1>
                  Selamat Datang mahasiswa<br>
                  <font style="color:#14B9D5"><?php echo ( $user->nama_lengkap );?></font>
                </h1>
                <p>kumpulkan poin</p>
                <a href="<?php echo site_url('dashboard');?>" class="btn btn-custom btn-lg page-scroll">Beranda</a>
                <a href="#about" class="btn btn-custom btn-lg page-scroll">Timeline</a>
                <a href="<?php echo site_url('mhs')?>" class="btn btn-custom btn-lg page-scroll">Poin saya</a>
                <a href="<?php echo site_url('kegiatan')?>" class="btn btn-custom btn-lg page-scroll">Kegiatan</a>
            <?php endif; ?>
          <?php endif; ?>
           </div>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<?php if(!$this->session->userdata('logged_in')) : ?>
<div id="about" class="text-center">
  <div class="container">
    <div class="section-title center" style="margin-top: -60px">
      <h2>Silahkan Login untuk melihat poin</h2>
      <hr>
    </div>
    <div class="col-md-4 col-md-offset-3">
    <img src="<?php echo site_url('assets/img/logo_login.png')?>" style="margin-bottom: 50px;
    margin-top: -20px;margin-right: 20px">
    </div><br><br><br>
    <div class="col-md-4 col-md-offset-4">
      <!-- <form name="sentMessage" id="contactForm" novalidate> -->

        <?php
          $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
        ?>
        <?php echo validation_errors(); ?>
        <?php echo form_open('home/login'); ?>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <input type="text" name="username" class="form-control" style="height: 45px;text-align: center;" placeholder="Masukkan Username" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <input type="password" name="password" class="form-control" style="height: 45px;text-align: center;" placeholder="Masukkan Password" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-default btn-lg">Login</button>
      <?php echo form_close(); ?><br>
      Pengguna baru, silahkan <a href="<?php echo site_url('home/register')?>">Daftar dulu</a>
    </div>
    
    <div class="col-md-8 col-md-offset-2" style="margin-top: 60px">
          <div class="portfolio-item" style="height:300px">
            <?php foreach($timeline as $t){ ?>
            <div class="hover-bg" style="height:300px"> <a href="<?php echo base_url() .'assets/img/timeline/'. $t->gambar ?>" title="Timeline" data-lightbox-gallery="gallery1">
              <h2>TIMELINE</h2>
              <div class="hover-text">
                <h4>Timeline SKKM</h4>
              </div>
              <img src="<?php echo base_url() .'assets/img/timeline/'. $t->gambar ?>" class="img-responsive" alt="Project Tiwtle"> </a> </div>
              <?php } ?>
          </div>
      </div>
  </div>
</div>
<?php endif; ?>
<?php if($this->session->userdata('logged_in')) : ?>
<div id="about" class="text-center">
  <div class="container">
    <div class="section-title center" style="margin-top: -60px">
      <h2>Timeline</h2>
      <hr>
    </div>
      <div class="col-md-8 col-md-offset-2">
          <?php foreach($timeline as $t){ ?>
          <div class="portfolio-item" style="height:300px">
            <div class="hover-bg" style="height:300px">
              <a href="<?php echo site_url('assets/img/timeline/'.$t->gambar)?>" title="Timeline" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Timeline SKKM</h4>
              </div>
              <img src="<?php echo site_url('assets/img/timeline/'.$t->gambar)?>" class="img-responsive" alt="Project Title"> 
              </a> 
            </div>
          </div>
          <?php } ?>
      </div>
  </div>
</div>
<?php endif; ?>
<!-- Portfolio Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Kegiatan</h2>
      <hr>
    </div>
    <div class="row">
      <div class="portfolio-items">

        <?php  $no=1; foreach($kegiatan as $k){ if($k->terbit=='y'){?>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo site_url('assets/img/kegiatan/'. $k->gambar )?>" title="<?php echo $k->nama_kegiatan; ?>" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4><?php echo $k->nama_kegiatan; ?></h4>
              </div>
              <img src="<?php echo site_url('assets/img/kegiatan/'. $k->gambar )?>" class="img-responsive" alt="<?php echo $k->nama_kegiatan; ?>"> </a> </div>
          </div>
        </div>
        <?php } } ?>

      </div>
    </div>
  </div>
</div>