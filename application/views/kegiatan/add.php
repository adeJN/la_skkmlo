<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Tambah Kegiatan</h6>
                </div>
                <div class="card-body">
                  <?php
                  $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
                  ?>
                  <?php echo validation_errors(); ?>
                  <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
                  <?php echo form_open_multipart( 'kegiatan/add', array('class' => 'needs-validation', 'novalidate' => '') ); ?>
                  <div class="box-body">
                    <div class="row clearfix">
						<div class="col-md-6">
							<label for="nama_kegiatan" class="control-label">Nama Kegiatan</label>
							<div class="form-group">
								<input type="text" name="nama_kegiatan" value="<?php echo $this->input->post('nama_kegiatan'); ?>" class="form-control" id="nama_kegiatan" required/>
								<div class="invalid-feedback">Isi tipe dulu ya</div>
							</div>
						</div>
						<div class="col-md-6">
							<label for="fk_kategori_kegiatan" class="control-label">Kategori Kegiatan</label>
							<div class="form-group">
								<?php echo form_dropdown('fk_kategori_kegiatan', $kategori, set_value('id_kategori_point'), 'class="form-control" required' ); ?>
							</div>
						</div>
						<div class="col-md-6">
							<label for="tggl_kegiatan" class="control-label">Tanggal Kegiatan</label>
							<div class="form-group">
								<input type="date" name="tggl_kegiatan" value="<?php echo $this->input->post('tggl_kegiatan'); ?>" class="has-datepicker form-control" id="tggl_kegiatan" />
							</div>
						</div>
						<div class="col-md-6">
							<label for="kuota" class="control-label">Kuota</label>
							<div class="form-group">
								<input type="text" name="kuota" value="<?php echo $this->input->post('kuota'); ?>" class="form-control" id="kuota" />
							</div>
						</div>
						<div class="col-md-6">
							<label for="terbit" class="control-label">Terbit</label>
							<div class="form-group">
								<select class="form-control" name="terbit">
									<option>Pilih</option>
									<option value="y">Ya</option>
									<option value="t">Tidak</option>
								</select>
							</div>
						</div>
                    	<div class="col-md-6">
							<label for="dibuat" class="control-label">--</label>
							<div class="form-group">
								<input type="hidden" name="dibuat" value="<?php echo ( $user->fk_level_id );?>" class="form-control" id="nama_kegiatan"/>
								<h3>Penerbit
								<font color="#14B9D5">
								<?php 
									if($user->fk_level_id==1){
										echo "Administrator";
									}else if($user->fk_level_id==3){
										echo "BEM";
									}else if($user->fk_level_id==4){
										echo "HIMPUNAN";
									}
								?>	
								</font>
								</h3>
							</div>
						</div>
						<div class="col-md-6">
							<label for="gambar" class="control-label">Gambar</label>
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