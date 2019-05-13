<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="box">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Kegiatan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Dibuat</th>
                        <th>Tanggal Keg</th>
                        <th>Kuota</th>
                        <th>Gambar</th>
                        <th>Tanggal Buat</th>
                        <th>Terbit</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Dibuat</th>
                        <th>Tanggal Keg</th>
                        <th>Kuota</th>
                        <th>Gambar</th>
                        <th>Tanggal Buat</th>
                        <th>Terbit</th>
                        <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach($kegiatan as $k){ ?>
                    <tr>
                        <td><?php echo $k->id_kegiatan; ?></td>
                        <td><?php echo $k->nama_kegiatan; ?></td>
                        <td><?php echo $k->nama_kategori; ?></td>
                        <td><?php echo $k->nama_level; ?></td>
                        <td><?php echo $k->tggl_kegiatan; ?></td>
                        <td><?php echo $k->kuota; ?></td>
                        <td>
                              <?php if( $k->gambar ) : ?><center>
                              <img class="card-img-top" style="height:100px;width:70px"  src="<?php echo base_url() .'assets/img/kegiatan/'. $k->gambar ?>" alt="Card image cap" title="<?php echo $k->gambar; ?>">
                              
                              <!-- Jika tidak ada thumbnail, gunakan holder.js -->
                              <?php ; else : ?>
                              <img class="card-img-top" style="height:100px"  src="<?php echo base_url() .'assets/img/default.jpg' ?>" alt="Card image cap">
                              <?php endif; ?>
                        </td>
                        <td><?php echo $k->tggl_buat; ?></td>
                        <td><?php echo $k->terbit; ?></td>
                        <td>
                            <?php if ($this->session->userdata('fk_level_id')=='1' ||$this->session->userdata('fk_level_id')=='3' ||$this->session->userdata('fk_level_id')=='4' ) :?>
                            <a href="<?php echo site_url('kegiatan/edit/'.$k->id_kegiatan); ?>" class="btn btn-info btn-xs"><span class="fa fa-cogs"></span> Edit</a> 
                            <a href="<?php echo site_url('kegiatan/remove/'.$k->id_kegiatan); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            <?php endif; ?>
                            <?php if ($this->session->userdata('fk_level_id')=='5') :?>
                              <a href="<?php echo site_url('kegiatan/edit/'.$k->id_kegiatan); ?>" class="btn btn-info btn-xs"><span class="fa fa-arrow-right"></span> Daftar</a> 
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
    </div>
</div>
</div>
