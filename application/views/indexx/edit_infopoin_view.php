<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Info Poin</h3>
            </div>
			<?php echo form_open('Tatacarainfo/edit/'.$info_poin['kode_poin']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="kode_poin" class="control-label">Kode Poin</label>
						<div class="form-group">
							<input type="text" name="kode_poin" value="<?php echo ($this->input->post('kode_poin') ? $this->input->post('kode_poin') : $info_poin['kode_poin']); ?>" class="form-control" id="kode_poin" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tingkat_kegiatan" class="control-label">Tingkat Kegiatan</label>
						<div class="form-group">
							<input type="text" name="tingkat_kegiatan" value="<?php echo ($this->input->post('tingkat_kegiatan') ? $this->input->post('tingkat_kegiatan') : $info_poin['tingkat_kegiatan']); ?>" class="form-control" id="tingkat_kegiatan" />
					</div>
					<div class="col-md-6">
						<label for="prestasi" class="control-label">Prestasi</label>
						<div class="form-group">
						<input type="text" name="prestasi" value="<?php echo ($this->input->post
							('prestasi') ? $this->input->post('prestasi') : $info_poin['prestasi']); ?>" class="form-control" id="prestasi" />
					</div>
					<div class="col-md-6">
						<label for="angka_kredit" class="control-label">Angka Kredit</label>
						<div class="form-group">
							<input type="text" name="angka_kredit" value="<?php echo ($this->input->post('angka_kredit') ? $this->input->post('angka_kredit') : $info_poin['angka_kredit']); ?>" class="form-control" id="angka_kredit" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dasar_penilaian" class="control-label">Dasar Penilaian</label>
						<div class="form-group">
							<input type="text" name="dasar_penilaian" value="<?php echo ($this->input->post('dasar_penilaian') ? $this->input->post('dasar_penilaian') : $info_poin['dasar_penilaian']); ?>" class="form-control" id="dasar_penilaian" />
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