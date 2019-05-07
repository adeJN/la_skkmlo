<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SKKM - Register</title>

  <!-- Custom fonts for this template-->
<link rel="stylesheet" type="text/css"  href="<?php echo site_url('assets/bikin/css/bootstrap.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/bikin/css/fonts/font-awesome/css/font-awesome.css')?>">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="<?php echo site_url('assets/bikin/css/style.css')?>">

</head>

<body style="background-color: #14B9D5">

  <div class="container" style="background-color: white; border-radius: 10px 10px 0px 0px;margin-top:60px;width:70%">
      <div class="col-xl-4 col-lg-6 col-md-offset-3 col-md-9">
        <!-- Nested Row within Card Body -->
              <br>
              <br>
              <div class="text-center">
                <h2>Buat Akun</h1>
              </div>
              <br>
              <?php
                $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
              ?>
              <?php echo validation_errors(); ?>
              <?php echo form_open('home/register', array('class' => 'needs-validation', 'novalidate' => '')); ?>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="number" class="form-control form-control-user" placeholder="Masukkan NIM" name="nim">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" placeholder="Masukkan Username" name="username">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" placeholder="Masukkan Nama Lengkap" name="nama">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" placeholder="Masukkan Password" name="password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" placeholder="Ulangi Password" name="password2">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6" >
                    <?php echo form_dropdown('id_jurusan', $jurusan, set_value('id_jurusan'), 'class="form-control form-control-user" required' ); ?>
                  </div>
                  <div class="col-sm-6">
                    <?php echo form_dropdown('id_prodi', $prodi, set_value('id_prodi'), 'class="form-control form-control-user" required' ); ?>
                  </div>
                </div>
                <center>
                <button type="submit" class="btn btn-primary">Register</button>
                </center> 
              <?php echo form_close(); ?>
              <br>
              <div class="text-center" >
                <a class="small" style="color:grey" href="<?php echo site_url('')?>">Sudah punya akun? Login!</a>
              </div>
              <br>
        </div>
        </div>
  <div class="container" style="background-color: #f9f9f9;border-radius: 0px 0px 10px 10px;
  width:70%">
    <center>
      <p class="small">Copyright &copy; 2019 SKKM (Satuan Kredit Kegiatan Mahasiswa). design by ade riska</p>
    </center>
  </div>
</body>

</html>
