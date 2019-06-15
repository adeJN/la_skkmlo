<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="box">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Riwayat daftar kegiatan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <?php if ($this->session->userdata('fk_level_id')=='5'){?>
                    <tr style="background-color:#6495ed;color:white;">
                        <th>No</th>
                        <th>Nama Kegiatan</th>
                        <th>Jurusan </th>
                        <th>Prodi </th>
                        <th>Tanggal Daftar</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr style="background-color:#6495ed;color:white;">
                        <th>No</th>
                        <th>Nama Kegiatan</th>
                        <th>Jurusan</th>
                        <th>Prodi</th>
                        <th>Tanggal Daftar</th>
                        <th>Actions</th>
                    </tr>
                    <?php } ?>

                    <?php if ($this->session->userdata('fk_level_id')=='1' || $this->session->userdata('fk_level_id')=='3'){?>
                    <tr style="background-color:#6495ed;color:white;">
                        <th>No</th>
                        <th>NIM Mahasiswa</th>
                        <th>Nama Kegiatan</th>
                        <th>Jurusan </th>
                        <th>Prodi </th>
                        <th>Tanggal Kegiatan</th>
                        <th>Tanggal Daftar</th>
                        <th>Terdaftar</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr style="background-color:#6495ed;color:white;">
                        <th>No</th>
                        <th>NIM Mahasiswa</th>
                        <th>Nama Kegiatan</th>
                        <th>Jurusan</th>
                        <th>Prodi</th>
                        <th>Tanggal Kegiatan</th>
                        <th>Tanggal Daftar</th>
                        <th>Terdaftar</th>
                    </tr>
                    <?php } ?>
                  </tfoot>
                  <tbody>
                    <?php foreach($kegiatan_pengguna as $k){ ?>
                    <?php if ($this->session->userdata('fk_level_id')=='5'){?>
                    <tr>
                        <td><?php echo $k['id_keg_pengguna']; ?></td>
                        <td><?php echo $k['nama_kegiatan']; ?></td>
                        <td><?php echo $k['nama_jurusan']; ?></td>
                        <td><?php echo $k['nama_prodi']; ?></td>
                        <td><?php echo $k['tggl_daftar']; ?></td>
                        <td>
                          <?php
                            if($k['terdaftar']==0){
                              echo "<button class='btn btn-danger btn-xs'>Belum</button>";
                            }else{
                              echo "<button class='btn btn-success btn-xs'>Sudah</button>";
                            }
                          ?> 
                        </td>
                    </tr>
                    <?php } ?>
                      <?php if ($this->session->userdata('fk_level_id')=='1'||$this->session->userdata('fk_level_id')=='3'){?>
                    <tr>
                        <td><?php echo $k['id_keg_pengguna']; ?></td>
                        <td><?php echo $k['nim']; ?></td>
                        <td><?php echo $k['nama_kegiatan']; ?></td>
                        <td><?php echo $k['nama_jurusan']; ?></td>
                        <td><?php echo $k['nama_prodi']; ?></td>
                        <td><?php echo $k['tggl_kegiatan']; ?></td>
                        <td><?php echo $k['tggl_daftar']; ?></td>
                        <td>
                          <?php if(($k['terdaftar'])==0) :?>
                              <a onClick="return confirm('Daftarkan mahasiswa?')" href="<?php echo site_url('kegiatan_pengguna/daftar_keg_mah/'.$k['id_keg_pengguna']); ?>" class="btn btn-danger btn-xs" >
                                <span class="fa fa-play-circle"></span> Belum terdaftar
                              </a>
                          <?php endif; ?> 
                          <?php if(($k['terdaftar'])==1) :?>
                              <a onClick="return confirm('Batalkan pendaftaran pengguna?')" href="<?php echo site_url('kegiatan_pengguna/btl_daftar_keg_mah/'.$k['id_keg_pengguna']); ?>" class="btn btn-success btn-xs" >
                                <span class="fa fa-check"></span> Terdaftar
                              </a>
                          <?php endif; ?> 
                              <hr style="margin: 2px">
                              <a href="<?php echo site_url('point/remove/'.$k['id_keg_pengguna']); ?>" onClick="return confirm('Hapus kegiatan pengguna?')" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
    </div>
</div>
</div>
