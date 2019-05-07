<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Timeline</h6>
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
							<label for="nama_kegiatan" class="control-label">Judul</label>
							<div class="form-group">
								<input type="text" name="judul" value="<?php echo set_value('judul', $timeline->judul) ?>" class="form-control" id="nama_kegiatan" required/>
							</div>
						</div>
						<div class="col-md-6">
						</div>
						<div class="col-md-6">
							<label for="gambar" class="control-label">Gambar</label>
							<div class="form-group">
								<?php if( $timeline->gambar ) : ?>
								<img class="card-img-top" src="<?php echo base_url() .'assets/img/timeline/'. $timeline->gambar ?>" alt="Card image cap" width=300>
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