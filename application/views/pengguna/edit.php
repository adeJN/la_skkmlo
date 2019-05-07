<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Pengguna</h6>
                </div>
                <div class="card-body">
                  <?php
                  $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
                  ?>
                  <?php echo validation_errors(); ?>
                  <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
                  <?php echo form_open_multipart( current_url(), array('class' => 'needs-validation', 'novalidate' => '') ); ?>
                  <div class="box-body">
                    <div class="row clearfix">
						<div class="col-md-6">
							<label for="username" class="control-label">Username</label>
							<div class="form-group">
								<input type="text" name="username" value="<?php echo set_value('username', $pengguna->username) ?>" class="form-control" id="username" required/>
							</div>
						</div>
						<div class="col-md-6">
							<label for="password" class="control-label">Password</label>
							<div class="form-group">
								<input type="password" name="password" value="<?php echo set_value('password') ?>" class="form-control" id="password" required/>
								<div class="invalid-feedback">Isi password baru</div>
							</div>
						</div>
						<div class="col-md-6">
							<label for="nim" class="control-label">NIM</label>
							<div class="form-group">
								<input type="text" name="nim" value="<?php echo set_value('nim', $pengguna->nim) ?>" class="form-control" id="nim" required/>
							</div>
						</div>
						<div class="col-md-6">
							<label for="nim" class="control-label">Nama Lengkap</label>
							<div class="form-group">
								<input type="text" name="nama_lengkap" value="<?php echo set_value('nama_lengkap', $pengguna->nama_lengkap) ?>" class="form-control" id="nim" required/>
							</div>
						</div>
						<div class="col-md-6">
							<label for="fk_kategori_kegiatan" class="control-label">Jurusan</label>
							<div class="form-group">
								<?php echo form_dropdown('fk_id_jurusan', $jurusan, set_value('fk_id_jurusan', $pengguna->fk_id_jurusan), 'class="form-control" required' ); ?>
							</div>
						</div>
						<div class="col-md-6">
							<label for="fk_kategori_kegiatan" class="control-label">Prodi</label>
							<div class="form-group">
								<?php echo form_dropdown('fk_id_prodi', $prodi, set_value('fk_id_prodi', $pengguna->fk_id_prodi), 'class="form-control" required' ); ?>
							</div>
						</div>
						<div class="col-md-6">
							<label for="nim" class="control-label">Tahun masuk</label>
							<div class="form-group">
								<select class="form-control" name="tahun_masuk">
					                <option value="<?php echo set_value('tahun_masuk', $pengguna->tahun_masuk) ?>"><?php echo set_value('tahun_masuk', $pengguna->tahun_masuk) ?></option>
					                <?php
					                $thn_skr = date('Y');
					                for ($x = $thn_skr; $x >= 2010; $x--) {
					                ?>
					                    <option value="<?php echo $x ?>"><?php echo $x ?></option>
					                <?php
					                }
					                ?>
					            </select>
							</div>
						</div>
						<div class="col-md-6">
							<label for="nim" class="control-label">Telepon</label>
							<div class="form-group">
								<input type="number" name="telepon" value="<?php echo set_value('telepon', $pengguna->telpon) ?>" class="form-control" id="nim" required/>
							</div>
						</div>
						<div class="col-md-6">
							<label for="terbit" class="control-label">Status</label>
							<div class="form-group">
								<select class="form-control" name="status">
									<option>Pilih</option>
									<option value="0" <?php if($pengguna->status=='0'){echo "selected";}?>>Aktif</option>
									<option value="1" <?php if($pengguna->status=='1'){echo "selected";}?>>Tidak aktif</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<label for="gambar" class="control-label">Foto</label>
							<div class="form-group">
								<?php if( $pengguna->foto ) : ?>
								<img class="card-img-top" src="<?php echo base_url() .'assets/img/pengguna/'. $pengguna->foto ?>" alt="Card image cap" width=300>
								<?php ; else : ?>
	                              <img  style="height:300px"  src="<?php echo base_url() .'assets/img/pengguna/default.jpg' ?>" alt="Card image cap">
	                              <?php endif; ?>
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