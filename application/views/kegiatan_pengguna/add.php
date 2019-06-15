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
            <h1 class="h3 mb-0 text-gray-800">Daftar Kegiatan</h1><!-- 
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>
              <!-- timeline -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h3 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-fw fa-calendar"></i>
                    Daftar
                  </h3>
                </div>
                <div class="card-body">
                  <div class="">
                    <p class="bg-gray-200 p-3 m-0 text-center" style="font-size:40px"><b><?php echo $kegiatan->nama_kegiatan;?></b></p><br>
                    <div class="row">
	            	<div class="col-md-7 text-center">
	                    <?php if( $kegiatan->gambar ) : ?>
	                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" src="<?php echo base_url() .'assets/img/kegiatan/'. $kegiatan->gambar ?>" alt="Card image cap" width=600>
	                    <?php endif; ?>
	           		</div>
	           		<div class="col-md-5">
	           			<br>
	           			<h1><b>DETAIL :</b></h1>
	                    <br>
	                    <h3>Tanggal Kegiatan : 
	                    <br>
	                    	<b><?php echo $kegiatan->tggl_kegiatan?></b> <br>
	                    <br>
	                    Dibuat oleh : 
	                    <br>
	                    	<b><?php echo $kegiatan->nama_level; echo " ".$kegiatan->nama_lengkap; ?></b>
	                    <br>
	                    <br>
	                    Kuota Peserta : 
	                    <br>
	                    	<b><?php echo $kegiatan->kuota?></b> <br>
	                    <br>
	                    
	                     <?php
			                  $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
			                  ?>
			                  <?php echo validation_errors(); ?>
			                  <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
			                  <?php echo form_open('mhs/daftar_keg'); ?>
			                        <input type="hidden" name="id_keg" value="<?php echo $kegiatan->id_kegiatan; ?>" class="form-control" id="nama_prodi" />
			                        <input type="hidden" name="id_user" value="<?php echo $user->id_user; ?>" class="form-control" id="nama_prodi" />
			                    <button type="submit" onClick="return confirm('Daftar kegiatan ini ?')" class="btn btn-success">
			                      <i class="fa fa-arrow-right"></i> Daftar
			                    </button>
			                  <?php echo form_close(); ?>

	           		</div>
		           	</div>
                  </div>
                </div>
              </div>
      </div>
      <!-- End of Main Content -->
