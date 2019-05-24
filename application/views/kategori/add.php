<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Tambah Kategori Point</h6>
                </div>
                <div class="card-body">
                  <?php
                  $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
                  ?>
                  <?php echo validation_errors(); ?>
                  <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
                  <?php echo form_open('kategori/add'); ?>
                  <div class="box-body">
                    <div class="row clearfix">
                      <div class="col-md-6">
                        <label for="nama_kategori" class="control-label">Jenis Kegiatan</label>
                        <div class="form-group">
                          <select class="form-control" id="kategori" name="fk_kode_kategori_induk" required>
                              <option></option>
                              <option disabled="disabled" style="font-style:italic;">--WAJIB--</option>
                            <?php foreach($all_kategori_induk_wajib->result() as $row):?>
                              <option value="<?php echo $row->kode_kategori_induk;?>"><?php echo $row->jenis_kegiatan;?> (<?php echo $row->kode_kategori_induk;?>)</option>
                            <?php endforeach;?>
                              <option disabled="disabled" style="font-style:italic;">--TIDAK WAJIB--</option>
                            <?php foreach($all_kategori_induk_tidak_wajib->result() as $row):?>
                              <option value="<?php echo $row->kode_kategori_induk;?>"><?php echo $row->jenis_kegiatan;?> (<?php echo $row->kode_kategori_induk;?>)</option>
                            <?php endforeach;?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="nama_kategori" class="control-label">Kode Kategori</label>
                        <div class="form-group">
                          <input type="text" name="kode_kategori" value="<?php echo set_value('nama_kategori') ?>" class="form-control" id="nama_kategori" required/>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="nama_kategori" class="control-label">Tingkat Kegiatan</label>
                        <div class="form-group">
                          <input type="text" name="tingkat_kegiatan" value="<?php echo set_value('nama_kategori') ?>" class="form-control" id="nama_kategori" required/>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="nama_kategori" class="control-label">Jabatan</label>
                        <div class="form-group">
                          <input type="text" name="jabatan" value="<?php echo set_value('nama_kategori') ?>" class="form-control" id="nama_kategori" required/>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="point" class="control-label">Point</label>
                        <div class="form-group">
                          <input type="text" name="point" value="<?php echo set_value('point') ?>" class="form-control" id="point" required />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="nama_kategori" class="control-label">Dasar Penilaian</label>
                        <div class="form-group">
                          <input type="text" name="dasar_penilaian" value="<?php echo set_value('nama_kategori') ?>" class="form-control" id="nama_kategori" required/>
                        </div>
                      </div>
                    </div>
                  </div>
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

