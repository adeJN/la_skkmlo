<div class="container">
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Kegiatan Pengguna Add</h3>
            </div>
            <?php echo form_open('kegiatan_pengguna/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_id_keg" class="control-label">Fk Id Keg</label>
						<div class="form-group">
							<?php echo form_dropdown('fk_id_keg', $kegiatan, set_value('id_kegiatan'), 'class="form-control" required' ); ?>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_mhs" class="control-label">Nama Mhs</label>
						<div class="form-group">
							<?php echo form_dropdown('nama_mhs', $pengguna, set_value('id_user'), 'class="form-control" required' ); ?>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tggl_daftar" class="control-label">Tggl Daftar</label>
						<div class="form-group">
							<input type="date" name="tggl_daftar" value="<?php echo $this->input->post('tggl_daftar'); ?>" class="form-control" id="tggl_daftar	" />
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