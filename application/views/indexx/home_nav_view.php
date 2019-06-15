    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <?php if(!$this->session->userdata('logged_in')) : ?>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#page-top" class="page-scroll">Home</a></li>
          <li><a href="#about" class="page-scroll">Login</a></li>
          <li><a href="#portfolio" class="page-scroll">Kegiatan</a></li>
        </ul>
      <?php endif; ?>

      <?php if($this->session->userdata('logged_in')) : ?>

        <?php if ($this->session->userdata('fk_level_id')=='1') :?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#page-top" class="page-scroll">Home</a></li>
            <li><a href="<?php echo site_url('dashboard')?>" class="page-scroll">Halaman admin</a></li>
            <li><a href="#portfolio" class="page-scroll">Kegiatan</a></li>
            <li><a href="<?php echo site_url('home/logout')?>" onClick="return confirm('Anda yakin ingin logout ?')" class="page-scroll">Logout</a></li>
          </ul>
        <?php endif; ?>
        <?php if ($this->session->userdata('fk_level_id')=='2') :?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#page-top" class="page-scroll">Home</a></li>
            <li><a href="<?php echo site_url('dashboard')?>" class="page-scroll">Halaman DPK</a></li>
            <li><a href="<?php echo site_url('point')?>" class="page-scroll">verifikasi</a></li>
            <li><a href="<?php echo site_url('home/logout')?>" onClick="return confirm('Anda yakin ingin logout ?')" class="page-scroll">Logout</a></li>
          </ul>
        <?php endif; ?>
        <?php if ($this->session->userdata('fk_level_id')=='3') :?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#page-top" class="page-scroll">Home</a></li>
            <li><a href="<?php echo site_url('dashboard')?>" class="page-scroll">Halaman BEM</a></li>
            <li><a href="#portfolio" class="page-scroll">Kegiatan</a></li>
            <li><a href="<?php echo site_url('home/logout')?>" onClick="return confirm('Anda yakin ingin logout ?')" class="page-scroll">Logout</a></li>
          </ul>
        <?php endif; ?>
        <?php if ($this->session->userdata('fk_level_id')=='4') :?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#page-top" class="page-scroll">Home</a></li>
            <li><a href="<?php echo site_url('dashboard')?>" class="page-scroll">Halaman Himpunan</a></li>
            <li><a href="#portfolio" class="page-scroll">Kegiatan</a></li>
            <li><a href="<?php echo site_url('home/logout')?>" onClick="return confirm('Anda yakin ingin logout ?')" class="page-scroll">Logout</a></li>
          </ul>
        <?php endif; ?>
        <?php if ($this->session->userdata('fk_level_id')=='5') :?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#page-top" class="page-scroll">Home</a></li>
            <li><a href="<?php echo site_url('Tatacarainfo')?>" class="page-scroll">Detail poin dan tata cara</a></li>
            <li><a href="#portfolio" class="page-scroll">Kegiatan</a></li>
            <li><a href="<?php echo site_url('home/logout')?>" onClick="return confirm('Anda yakin ingin logout ?')" class="page-scroll">Logout</a></li>
          </ul>
        <?php endif; ?>

      <?php endif; ?>
    </div>
    <!-- /.navbar-collapse --> 