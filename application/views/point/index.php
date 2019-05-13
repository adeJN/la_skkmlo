<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="box">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Point
              <?php if ($this->session->userdata('fk_level_id')=='1' ||$this->session->userdata('fk_level_id')=='2' ||$this->session->userdata('fk_level_id')=='3' ||$this->session->userdata('fk_level_id')=='4' ) :?> id pengguna : 
                <a href="<?php echo site_url('pengguna/edit/'.$pengguna->id_user); ?>">
                <?php echo ( $pengguna->id_user );?></h6>
                </a>
              <?php endif; ?>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>No sertifikat</th>
                        <th>Nama Sertifikat</th>
                        <th>Kategori</th>
                        <!-- <th>tingkat</th> -->
                        <th>Foto Sertifikat</th>
                        <th>point </th>
                        <th>Verifikasi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>No</th>
                        <th>No sertifikat</th>
                        <th>Nama Sertifikat</th>
                        <th>Kategori</th>
                        <!-- <th>tingkat</th> -->
                        <th>Foto Sertifikat</th>
                        <th>point </th>
                        <th>Verifikasi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php $no=1; 
                    foreach($point as $p){ ?>
                    <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $p->no_sertifikat; ?></td>
                        <td><?php echo $p->nama_kegiatan; ?></td>
                        <td><?php echo $p->nama_kategori ; ?></td>
                        <td>
                            <?php if( $p->foto_sertifikat ) : ?><center>
                              <img class="card-img-top" style="height:100px;width:70px"  src="<?php echo base_url() .'assets/img/point/'. $p->foto_sertifikat ?>" alt="Card image cap" title="<?php echo $p->foto_sertifikat; ?>">
                              
                              <!-- Jika tidak ada thumbnail, gunakan holder.js -->
                              <?php ; else : ?>
                              <img class="card-img-top" style="height:100px"  src="<?php echo base_url() .'assets/img/default.jpg' ?>" alt="Card image cap">
                              <?php endif; ?>
                        </td>
                        <td><?php echo $p->point ; ?></td>
                        <td>
                            <a href="<?php echo site_url('point/edit/'.$p->id_point); ?>" class="btn btn-info btn-xs"><span class="fa fa-check"></span> hmp</a> 
                            <a href="<?php echo site_url('point/edit/'.$p->id_point); ?>" class="btn btn-info btn-xs"><span class="fa fa-check"></span> bem</a> 
                            <a href="<?php echo site_url('point/edit/'.$p->id_point); ?>" class="btn btn-info btn-xs"><span class="fa fa-check"></span> dpk</a> 
                        </td>
                    </tr>
                    <?php $no++; } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
    </div>
</div>
</div>

