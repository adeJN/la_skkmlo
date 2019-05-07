<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Jurusan</h6>
                </div>
                <div class="card-body">
                  <?php
                  $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
                  ?>
                  <?php echo validation_errors(); ?>
                  <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
                  <?php echo form_open('Jurusan/edit/'.$jurusan['id_jurusan']); ?>
                  <div class="box-body">
                    <div class="row clearfix">
                      <div class="col-md-6">
                        <label for="point" class="control-label">Nama Jurusan</label>
                        <div class="form-group">
                          <input type="text" name="nama_jurusan" value="<?php echo ($this->input->post('nama_jurusan') ? $this->input->post('nama_jurusan') : $jurusan['nama_jurusan']); ?>" class="form-control" id="nama_jurusan" required/>
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

