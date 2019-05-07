<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Pengumuman</h6>
                </div>
                <div class="card-body">
                  <?php
                  $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
                  ?>
                  <?php echo validation_errors(); ?>
                  <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
                  <?php echo form_open( current_url(), array('class' => 'needs-validation', 'novalidate' => '') ); ?>
                  <div class="box-body">
                    <div class="row clearfix">
                      <div class="col-md-12">
                        <label for="point" class="control-label">Judul</label>
                        <div class="form-group">
                          <input type="text" name="judul" value="<?php echo set_value('judul', $pengumuman->judul) ?>" class="form-control" id="nama_jurusan" required/>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <label for="point" class="control-label">Isi</label>
                        <div class="form-group">
                          <textarea class="form-control" name="isi" style="resize:none;height:300px;"><?php echo set_value('judul', $pengumuman->isi) ?></textarea>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-success">
                      <i class="fa fa-check"></i> Simpan
                    </button>
                  </div>
                  <?php echo form_close(); ?>
                </div>
              </div>

            </div>
        </div>
    </div>
</div>

