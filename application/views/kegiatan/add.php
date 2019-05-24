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
							<label for="terbit" class="control-label">Jenis Kegiatan</label>
							<div class="form-group">
								<select class="form-control" id="kategori" name="kode_kategori_induk" required>
                            	<option></option>
                            	<option disabled="disabled" style="font-style:italic;">--WAJIB--</option>
								<?php foreach($all_kategori_induk_wajib->result() as $row):?>
	                    		<option value="<?php echo $row->kode_kategori_induk;?>"><?php echo $row->jenis_kegiatan;?></option>
	                    		<?php endforeach;?>
                            	<option disabled="disabled" style="font-style:italic;">--TIDAK WAJIB--</option>
								<?php foreach($all_kategori_induk_tidak_wajib->result() as $row):?>
	                    		<option value="<?php echo $row->kode_kategori_induk;?>"><?php echo $row->jenis_kegiatan;?></option>
	                    		<?php endforeach;?>
                        		</select>
								<div class="invalid-feedback">Isi jenis kegiatan</div>
							</div>
						</div>
						<div class="col-md-6">
							<label for="fk_kategori_kegiatan" class="control-label">Kategori Kegiatan (*setelah jenis kegiatan)</label>
							<div class="form-group">
								<select class='subkategori form-control' id='subkategori' name="kode_kategori" required="">
									<option></option>
								</select>
								<div class="invalid-feedback">Isi kategori setelah jenis kegiatan</div>
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