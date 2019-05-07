<div class="container">
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Point Add</h3>
            </div>
            <?php echo form_open('point/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_id_user" class="control-label">Fk Id User</label>
						<div class="form-group">
							<input type="text" name="fk_id_user" value="<?php echo $this->input->post('fk_id_user'); ?>" class="form-control" id="fk_id_user" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_sertifikat" class="control-label">Nama Sertifikat</label>
						<div class="form-group">
							<input type="text" name="nama_sertifikat" value="<?php echo $this->input->post('nama_sertifikat'); ?>" class="form-control" id="nama_sertifikat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="foto_sertifikat" class="control-label">Foto Sertifikat</label>
						<div class="form-group">
							<input type="text" name="foto_sertifikat" value="<?php echo $this->input->post('foto_sertifikat'); ?>" class="form-control" id="foto_sertifikat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_id_kategori" class="control-label">Fk Id Kategori</label>
						<div class="form-group">
							<input type="text" name="fk_id_kategori" value="<?php echo $this->input->post('fk_id_kategori'); ?>" class="form-control" id="fk_id_kategori" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="angka_kredit" class="control-label">Angka Kredit</label>
						<div class="form-group">
							<input type="text" name="angka_kredit" value="<?php echo $this->input->post('angka_kredit'); ?>" class="form-control" id="angka_kredit" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="jumlah_point" class="control-label">Jumlah Point</label>
						<div class="form-group">
							<input type="text" name="jumlah_point" value="<?php echo $this->input->post('jumlah_point'); ?>" class="form-control" id="jumlah_point" />
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
</div>