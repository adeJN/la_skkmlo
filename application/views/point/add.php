<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Tambah Point anda</h6>
                </div>
                <div class="card-body">
                  <?php
                  $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
                  ?>
                  <?php echo validation_errors(); ?>
                  <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
                  <?php echo form_open_multipart( 'mhs/tp', array('class' => 'needs-validation', 'novalidate' => '') ); ?>
                  <div class="box-body">
                    <div class="row clearfix">
						<div class="col-md-6">
							<label for="kuota" class="control-label">No sertifikat</label>
							<div class="form-group">
								<input type="hidden" name="id_user" value="<?php echo $user->id_user; ?>" class="form-control" id="kuota" />
								<input type="text" name="no_sertifikat" value="<?php echo $this->input->post('no_sertifikat'); ?>" class="form-control" id="kuota" />
							</div>
						</div>
						<div class="col-md-6">
							<label for="nama_kegiatan" class="control-label">Nama Kegiatan</label>
							<div class="form-group">
								<input type="text" name="nama_kegiatan" value="<?php echo $this->input->post('nama_kegiatan'); ?>" class="form-control" id="nama_kegiatan" required/>
								<div class="invalid-feedback">Isi nama dulu ya</div>
							</div>
						</div>
						<div class="col-md-6">
							<label for="fk_kategori_kegiatan" class="control-label">Kategori Kegiatan</label>
							<div class="form-group">
								<?php echo form_dropdown('fk_kategori_kegiatan', $kategori, set_value('id_kategori_point'), 'class="form-control" required' ); ?>
							</div>
						</div>
						<div class="col-md-6">
							<label for="terbit" class="control-label">Tingkat</label>
							<div class="form-group">
								<select class="form-control" name="tingkat">
									<option>Pilih</option>
									<option value="nasional">Nasional</option>
									<option value="internasional">Internasional</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<label for="gambar" class="control-label">Masukkan Foto</label>
							<div class="form-group">
								<input type="file" class="form-control" name="thumbnail">
							</div>
						</div>
					</div>
                  </div>
                  <br>
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