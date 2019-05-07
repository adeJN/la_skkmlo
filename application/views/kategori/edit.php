<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Kategori Point</h6>
                </div>
                <div class="card-body">
                  <?php
                  $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
                  ?>
                  <?php echo validation_errors(); ?>
                  <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
                  <?php echo form_open('kategori/edit/'.$kategori['id_kategori_point']); ?>
                  <div class="box-body">
					<div class="row clearfix">
						<div class="col-md-6">
							<label for="nama_kategori" class="control-label">Nama Kategori</label>
							<div class="form-group">
								<input type="text" name="nama_kategori" value="<?php echo ($this->input->post('nama_kategori') ? $this->input->post('nama_kategori') : $kategori['nama_kategori']); ?>" class="form-control" id="nama_kategori" required/>
							</div>
						</div>
						<div class="col-md-6">
							<label for="point" class="control-label">Point</label>
							<div class="form-group">
								<input type="text" name="point" value="<?php echo ($this->input->post('point') ? $this->input->post('point') : $kategori['point']); ?>" class="form-control" id="point" required />
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

