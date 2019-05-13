<!-- pengumuman -->

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Tata Cara</h6>
                </div>
                <div class="card-body">
                  <div class="alert alert-primary" role="alert">
                   Halaman ini menampilkan informasi tentang tatacara upload sertifikat skkm. terdapat ketentuan pengumpulan berkas dan flowchart/ alur birokrasi SKKM.
                  </div>
                  <table class="table table-bordered">
                    <thead>
                      <th>No</th>
                      <th>Keterangan</th>
                      <th>Downloads</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Ketentuan Map Plastik</td>
                        <td>4.319x</td>
                        <td>
                          <button type="button" data-toggle="modal" data-target="#ViewImage" class="btn btn-primary">View</button>
                          <a href="<?php echo base_url('Tatacarainfo/download_img')?>">
                            <button type="button" class="btn btn-success">Downloads</button>
                          </a>
                        </td>
                      </tr>
                      
                    </tbody>
                      <tr>
                        <td>2</td>
                        <td>Flowchart/Alur Birokrasi SKKM</td>
                        <td>4.319x</td>
                        <td>
                          <button type="button" data-toggle="modal" data-target="#ViewImage2" class="btn btn-primary">View</button>
                          <a href="<?php echo base_url('Tatacarainfo/download_img')?>">
                            <button type="button" class="btn btn-success">Downloads</button>
                          </a>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>


                  <!-- Modal Image -->
                  <div class="modal fade" id="ViewImage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Ketentuan Map Plastik</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <p align="center">
                          <img class="img-thumbnail" src="<?php echo base_url('img/avenger.jpg')?>" width="800px" height="800px">
                        </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Modal Image -->

                  <!--Modal Image1-->
                   <div class="modal fade" id="ViewImage2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Flowchart/Alur Birokrasi SKKM</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <p align="center">
                          <img class="img-thumbnail" src="<?php echo base_url('img/avenger.jpg')?>" width="800px" height="800px">
                        </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--End Modal Image1-->

                 <!-- <p class="mb-0">BeforeSDSDS working with this theme, you should become familiar with the Bootstrap framework, especially the utility classes. Before working with this theme, you should become familiar with the Bootstrap framework, especially the utility classes.</p>
                </div>
              </div> -->
            <!-- timeline -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Info Poin</h6>
                </div>
                 <div class="card-body">
                  <div class="alert alert-primary" role="alert">
                   Halaman ini menampilkan informasi tentang jenis-jenis kegiatan yang ada di SKKM. untuk melihat keterangan lebih detail dari tiap tiap kegiatan tersebut.
                  </div>
                <div class="card-body">
                <?php if($this->session->userdata('logged_in')) : ?>
                  <?php if ($this->session->userdata('fk_level_id')=='3'||$this->session->userdata('fk_level_id')=='1') :?>
                    <p align="right">
                      <button data-toggle="modal" data-target="#tambahData" class="btn btn-primary">Tambah Data</button>
                    </p>
                  <?php endif; ?>
                <?php endif; ?>
                </div>
                 <table class="table table-bordered">
                    <thead>
                      <th>Kode Poin</th>
                      <th>Tingkat Kegiatan</th>
                      <th>Prestasi</th>
                      <th>Angka Kredit</th>
                      <th>Dasar Penilaian</th>
          <?php if($this->session->userdata('logged_in')) : ?>
            <?php if ($this->session->userdata('fk_level_id')=='3') :?>
                      <th>Aksi</th>
            <?php endif; ?>
          <?php endif; ?>

                    </thead>
                    <tbody>
                      <?php foreach($infopoin as $k){ ?>
                      <tr>
                        <td><?php echo $k['kode_poin']; ?></td>
                        <td><?php echo $k['tingkat_kegiatan']; ?></td>
                        <td><?php echo $k['prestasi']; ?></td>
                        <td><?php echo $k['angka_kredit']; ?></td>
                        <td><?php echo $k['dasar_penilaian']; ?></td>
          <?php if($this->session->userdata('logged_in')) : ?>
            <?php if ($this->session->userdata('fk_level_id')=='3') :?>
                        <td>
                          <a href="<?php echo site_url('Tatacarainfo/edit/'.$k['kode_poin']); ?>"  class="btn btn-info btn-xs"><span class="fa fa-cogs"></span> Edit</a> 
                          <a href="<?php echo site_url('Tatacarainfo/remove/'.$k['kode_poin']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
            <?php endif; ?> 

          <?php endif; ?> 
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                
              </div>    

                <!--Modal Tambah-->
                   <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <p align="left">
                          <div class="col-md-12">
                            <div class="box box-info">
                                <?php echo form_open('Tatacarainfo/add'); ?>
                                <div class="box-body">
                                  <div class="row clearfix">
                              <div class="col-md-12">
                              <label for="kode_poin" class="control-label">Kode Poin</label>
                              <div class="form-group">
                              <input type="text" name="kode_poin" class="form-control" id="kode_poin " />
                              <label for="tingkat_kegiatan" class="control-label">Tingkat Kegiatan</label>
                              <div class="form-group">
                              <input type="text" name="tingkat_kegiatan" class="form-control" id="tingkat_kegiatan " />
                              <label for="tggl_daftar" class="control-label">Prestasi/jabatan</label>
                              <div class="form-group">
                              <input type="text" name="prestasi" class="form-control" id="prestasi " />
                              <label for="tggl_daftar" class="control-label">Angka Kredit</label>
                                <div class="form-group">
                                  <input type="text" name="angka_kredit" class="form-control" id="angka_kredit " />
                                  <label for="tggl_daftar" class="control-label">Dasar Penilaian</label>
                                <div class="form-group">
                                  <input type="text" name="dasar_penilaian" class="form-control" id="dasar_penilaian " />
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
                        </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--End Modal Tambah-->
