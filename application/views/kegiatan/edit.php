<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Kegiatan</h6>
                </div>
                <div class="card-body">
                  <?php
                  $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
                  ?>
                  <?php echo validation_errors(); ?>
                  <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
                  <?php echo form_open_multipart(current_url(), array('class' => 'needs-validation', 'novalidate' => '') ); ?>
                  <div class="box-body">
                    <div class="row clearfix">
						<div class="col-md-6">
							<label for="nama_kegiatan" class="control-label">Nama Kegiatan</label>
							<div class="form-group">
								<input type="text" name="nama_kegiatan" value="<?php echo set_value('nama_kegiatan', $kegiatan->nama_kegiatan) ?>" class="form-control" id="nama_kegiatan" required/>
							</div>
						</div>
						<div class="col-md-6">
							<label for="fk_kategori_kegiatan" class="control-label">Kategori Kegiatan</label>
							<div class="form-group">
								<?php echo form_dropdown('fk_kategori_kegiatan', $kategori, set_value('fk_kategori_kegiatan', $kegiatan->fk_kategori_kegiatan), 'class="form-control" required' ); ?>
							</div>
						</div>
						<div class="col-md-6">
							<label for="tggl_kegiatan" class="control-label">Tanggal Kegiatan</label>
							<div class="form-group">
								<input type="date" name="tggl_kegiatan" value="<?php echo set_value('tggl_kegiatan', $kegiatan->tggl_kegiatan) ?>" class="has-datepicker form-control" id="tggl_kegiatan" />
							</div>
						</div>
						<div class="col-md-6">
							<label for="kuota" class="control-label">Kuota</label>
							<div class="form-group">
								<input type="text" name="kuota" value="<?php echo set_value('kuota', $kegiatan->kuota) ?>" class="form-control" id="kuota" />
							</div>
						</div>
						<div class="col-md-6">
							<label for="terbit" class="control-label">Terbit</label>
							<div class="form-group">
								<select class="form-control" name="terbit">
									<option>Pilih</option>
									<option value="y" <?php if($kegiatan->terbit=='y'){echo "selected";}?>>Ya</option>
									<option value="t" <?php if($kegiatan->terbit=='t'){echo "selected";}?>>Tidak</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<label for="gambar" class="control-label">Gambar</label>
							<div class="form-group">
								<?php if( $kegiatan->gambar ) : ?>
								<img class="card-img-top" src="<?php echo base_url() .'assets/img/kegiatan/'. $kegiatan->gambar ?>" alt="Card image cap" width=300>
								<?php endif; ?>
								<input type="file" class="form-controsl" name="thumbnail">
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