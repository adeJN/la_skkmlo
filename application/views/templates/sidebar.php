<?php if($this->session->userdata('logged_in')) : ?>


 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('');?>">
        <div class="sidebar-brand-icon">
          <img width="50px" src="<?php echo site_url('assets/img/');?>logo.png">
        </div>
        <div class="sidebar-brand-text mx-3">SKKM POLINEMA <sup>2</sup></div>
      </a>

      <hr class="sidebar-divider my-0">

  <?php if ($this->session->userdata('fk_level_id')=='1') :?>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('dashboard');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Beranda</span></a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('pengguna/registrasi');?>"  >
          <i class="fas fa-fw fa-user"></i>
          <span>Registrasi</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('kegiatan_pengguna');?>" >
          <i class="fas fa-fw fa-th-list"></i>
          <span>Kegiatan Pengguna</span>
        </a>
      </li>
      <hr class="sidebar-divider my-0">
      <!-- Heading -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Pengguna" aria-expanded="true" aria-controls="Pengguna">
          <i class="fas fa-fw fa-users"></i>
          <span>Pengguna</span>
        </a>
        <div id="Pengguna" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih:</h6>
            <a class="collapse-item" href="<?php echo site_url('pengguna/add');?>"><i class="fas fa-fw fa-plus"></i> Tambah</a>
            <a class="collapse-item"  href="<?php echo site_url('pengguna');?>"><i class="fas fa-fw fa-bars"></i> List Admin</a>
            <a class="collapse-item"  href="<?php echo site_url('pengguna/mahasiswa');?>"><i class="fas fa-fw fa-bars"></i> List Mahasiswa</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Kegiatan" aria-expanded="true" aria-controls="Kegiatan">
          <i class="fas fa-fw fa-calendar"></i>
          <span>Kegiatan</span>
        </a>
        <div id="Kegiatan" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih:</h6>
            <a class="collapse-item" href="<?php echo site_url('kegiatan/add');?>"><i class="fas fa-fw fa-plus"></i> Tambah</a>
            <a class="collapse-item"  href="<?php echo site_url('kegiatan');?>"><i class="fas fa-fw fa-bars"></i> List</a>
          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
         <a class="nav-link" href="<?php echo site_url('tatacarainfo');?>" >
          <i class="fas fa-fw fa-info"></i>
          <span>Tata Cara dan info </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-sitemap"></i>
          <span>Kategori</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih:</h6>
            <a class="collapse-item" href="<?php echo site_url('Kategori/add');?>"><i class="fas fa-fw fa-plus"></i> Tambah</a>
            <a class="collapse-item" href="<?php echo site_url('Kategori');?>"><i class="fas fa-fw fa-bars"></i> List</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagess2" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-arrows-alt"></i>
          <span>Level</span>
        </a>
        <div id="collapsePagess2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih:</h6>
            <a class="collapse-item" href="<?php echo site_url('Level/add');?>"><i class="fas fa-fw fa-plus"></i> Tambah</a>
            <a class="collapse-item" href="<?php echo site_url('Level');?>"><i class="fas fa-fw fa-bars"></i> List</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Jurusan" aria-expanded="true" aria-controls="Jurusan">
          <i class="fas fa-fw fa-building"></i>
          <span>Jurusan</span>
        </a>
        <div id="Jurusan" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih:</h6>
            <a class="collapse-item" href="<?php echo site_url('Jurusan/add');?>"><i class="fas fa-fw fa-plus"></i> Tambah</a>
            <a class="collapse-item"  href="<?php echo site_url('Jurusan');?>"><i class="fas fa-fw fa-bars"></i> List</a>
            
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagess5" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-home"></i>
          <span>Prodi</span>
        </a>
        <div id="collapsePagess5" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih:</h6>
            <a class="collapse-item" href="<?php echo site_url('Prodi/add');?>"><i class="fas fa-fw fa-plus"></i> Tambah</a>
            <a class="collapse-item" href="<?php echo site_url('Prodi/index');?>"><i class="fas fa-fw fa-list"></i> List</a>
        </div>
      </li>
  <?php endif; ?>


  <?php if ($this->session->userdata('fk_level_id')=='2') :?>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('dashboard');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Beranda</span></a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('point');?>"  >
          <i class="fas fa-fw fa-tags"></i>
          <span>Poin Mahasiswa</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('tatacarainfo');?>" >
          <i class="fas fa-fw fa-info"></i>
          <span>Tata Cara dan info poin</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('kontak');?>">
          <i class="fas fa-fw fa-phone"></i>
          <span>Contact</span>
        </a>
      </li>
      <hr class="sidebar-divider my-0">
  <?php endif; ?>


  <?php if ($this->session->userdata('fk_level_id')=='3') :?>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('dashboard');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Beranda</span></a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('pengguna/registrasi');?>"  >
          <i class="fas fa-fw fa-user"></i>
          <span>Registrasi</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('kegiatan_pengguna');?>" >
          <i class="fas fa-fw fa-th-list"></i>
          <span>Kegiatan Pengguna</span>
        </a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#poin" aria-expanded="true" aria-controls="Kegiatan">
          <i class="fas fa-fw fa-tags"></i>
          <span>Poin Mahasiswa</span>
        </a>
        <div id="poin" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih:</h6>
            <a class="collapse-item" href="<?php echo site_url('pengguna');?>"><i class="fas fa-fw fa-users"></i> Semua mahasiswa</a>
            <a class="collapse-item"  href="<?php echo site_url('point');?>">
          <i class="fas fa-fw fa-tags"></i>
          <span>Poin Mahasiswa</span></a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Kegiatan" aria-expanded="true" aria-controls="Kegiatan">
          <i class="fas fa-fw fa-calendar"></i>
          <span>Kegiatan</span>
        </a>
        <div id="Kegiatan" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih:</h6>
            <a class="collapse-item" href="<?php echo site_url('kegiatan/add');?>"><i class="fas fa-fw fa-plus"></i> Tambah</a>
            <a class="collapse-item"  href="<?php echo site_url('kegiatan');?>"><i class="fas fa-fw fa-bars"></i> List</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tatacarainfo" >
          <i class="fas fa-fw fa-info"></i>
          <span>Tata Cara</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" >
          <i class="fas fa-fw fa-inbox"></i>
          <span>Contact</span>
        </a>
      </li>
      <hr class="sidebar-divider my-0">
  <?php endif; ?>


  <?php if ($this->session->userdata('fk_level_id')=='4') :?>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('dashboard');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Beranda</span></a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('point');?>"  >
          <i class="fas fa-fw fa-tags"></i>
          <span>Poin Mahasiswa</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Kegiatan" aria-expanded="true" aria-controls="Kegiatan">
          <i class="fas fa-fw fa-calendar"></i>
          <span>Kegiatan</span>
        </a>
        <div id="Kegiatan" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih:</h6>
            <a class="collapse-item" href="<?php echo site_url('kegiatan/add');?>"><i class="fas fa-fw fa-plus"></i> Tambah</a>
            <a class="collapse-item"  href="<?php echo site_url('kegiatan');?>"><i class="fas fa-fw fa-bars"></i> List</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('tatacarainfo');?>" >
          <i class="fas fa-fw fa-info"></i>
          <span>Tata Cara</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('kontak');?>" >
          <i class="fas fa-fw fa-inbox"></i>
          <span>Contact</span>
        </a>
      </li>
      <hr class="sidebar-divider my-0">
  <?php endif; ?>


  <?php if ($this->session->userdata('fk_level_id')=='5') :?>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('dashboard');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Beranda</span></a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Kegiatan" aria-expanded="true" aria-controls="Kegiatan">
          <i class="fas fa-fw fa-tags"></i>
          <span>Poin Saya</span>
        </a>
        <div id="Kegiatan" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih:</h6>
            <a class="collapse-item" href="<?php echo site_url('mhs/tp');?>"><i class="fas fa-fw fa-plus"></i> Tambah</a>
            <a class="collapse-item"  href="<?php echo site_url('mhs');?>"><i class="fas fa-fw fa-bars"></i> List</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('kegiatan');?>" >
          <i class="fas fa-fw fa-calendar"></i>
          <span>Kegiatan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('tatacarainfo');?>" >
          <i class="fas fa-fw fa-info"></i>
          <span>Tata Cara & Info Poin</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" >
          <i class="fas fa-fw fa-phone"></i>
          <span>Contact</span>
        </a>
      </li>
      <hr class="sidebar-divider my-0">
  <?php endif; ?>


     <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>


    <!-- End of Sidebar -->

<?php endif; ?>
    
    