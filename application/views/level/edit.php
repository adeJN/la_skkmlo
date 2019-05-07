<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Level</h6>
                </div>
                <div class="card-body">
                  <?php
                  $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
                  ?>
                  <?php echo validation_errors(); ?>
                  <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
                  <?php echo form_open('level/edit/'.$level['id_level']); ?>
                  <div class="box-body">
                    <div class="row clearfix">
                      <div class="col-md-6">
                        <label for="nama_level" class="control-label">Nama Level</label>
                        <div class="form-group">
                          <div class="form-group">
							<input type="text" name="nama_level" value="<?php echo ($this->input->post('nama_level') ? $this->input->post('nama_level') : $level['nama_level']); ?>" class="form-control" id="nama_level" />
						</div>
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

