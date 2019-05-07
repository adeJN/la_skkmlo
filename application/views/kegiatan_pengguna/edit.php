<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Kegiatan Pengguna Edit</h3>
            </div>
			<?php echo form_open('kegiatan_pengguna/edit/'.$kegiatan_pengguna['id_daftar_keg']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_id_keg" class="control-label">Fk Id Keg</label>
						<div class="form-group">
							<input type="text" name="fk_id_keg" value="<?php echo ($this->input->post('fk_id_keg') ? $this->input->post('fk_id_keg') : $kegiatan_pengguna['fk_id_keg']); ?>" class="form-control" id="fk_id_keg" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_mhs" class="control-label">Nama Mhs</label>
						<div class="form-group">
							<input type="text" name="nama_mhs" value="<?php echo ($this->input->post('nama_mhs') ? $this->input->post('nama_mhs') : $kegiatan_pengguna['nama_mhs']); ?>" class="form-control" id="nama_mhs" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tggl_daftar" class="control-label">Tggl Daftar</label>
						<div class="form-group">
							<input type="text" name="tggl_daftar" value="<?php echo ($this->input->post('tggl_daftar') ? $this->input->post('tggl_daftar') : $kegiatan_pengguna['tggl_daftar']); ?>" class="form-control" id="tggl_daftar" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>