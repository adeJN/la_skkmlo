<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Kategori Induk</h6>
                </div>
                <div class="card-body">
                  <?php
                  $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
                  ?>
                  <?php echo validation_errors(); ?>
                  <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
                  <?php echo form_open('kategori_induk/edit/'.$kategori_induk['kode_kategori_induk']); ?>
                  <div class="box-body">
					<div class="row clearfix">
						<div class="col-md-6">
							<label for="nama_kategori" class="control-label">Kode</label>
							<div class="form-group">
								<input type="text" name="kode_kategori_induk" value="<?php echo ($this->input->post('kode_kategori_induk') ? $this->input->post('kode_kategori_induk') : $kategori_induk['kode_kategori_induk']); ?>" class="form-control" id="kode_kategori_induk" required/>
							</div>
						</div>
            <div class="col-md-6">
              <label for="point" class="control-label">Jenis kegiatan</label>
              <div class="form-group">
                <input type="text" name="jenis_kegiatan" value="<?php echo ($this->input->post('jenis_kegiatan') ? $this->input->post('jenis_kegiatan') : $kategori_induk['jenis_kegiatan']); ?>" class="form-control" id="point" required />
              </div>
            </div>
            <div class="col-md-6">
              <label for="point" class="control-label">Wajib</label>
              <div class="form-group">
                <select class="form-control" name="wajib">
                  <option>Pilih</option>
                  <option value="1" <?php if($kategori_induk['wajib']=='1'){echo "selected";}?>>Ya</option>
                  <option value="0" <?php if($kategori_induk['wajib']=='0'){echo "selected";}?>>Tidak</option>
                </select>
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

