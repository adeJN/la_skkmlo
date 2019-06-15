<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="box">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pengguna sudah terdaftar</h6>
            </div>
              <?php if ($this->session->userdata('fk_level_id')=='2' ) :?>
                <input type="button" onclick="verifyAll();" class="btn btn-success btn-xs" value="Verifikasi Semua!" />
              <?php endif; ?>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr style="background-color:#6495ed;color:white;">
                      <th>Id</th>
                      <th>Username</th>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Jurusan</th>
                      <th>Prodi</th>
                      <th>Telepon</th>
                      <th>Tahun masuk</th>
                      <th>Jabatan</th>
					            <th>Verifikasi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr style="background-color:#6495ed;color:white;">
                      <th>Id</th>
                      <th>Username</th>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Jurusan</th>
                      <th>Prodi</th>
                      <th>Telepon</th>
                      <th>Tahun masuk</th>
                      <th>Jabatan</th>
					            <th>Verifikasi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach($pengguna as $p){ 
                      if ($this->session->userdata('fk_level_id')=='4'|| $this->session->userdata('fk_level_id')=='2'):
                        //jika nama jurusan user himpunan sama dengan nama jurusan mahasiswa
                        if($p->nama_jurusan==$user->nama_jurusan){
                        ?>
                    <tr>
                      <td name="id_user"><?php echo $p->id_user; ?></td>
                      <td><?php echo $p->username; ?></td>
                      <td><?php echo $p->nim; ?></td>
                      <td><?php echo $p->nama_lengkap; ?></td>
                      <td><?php echo $p->nama_jurusan; ?></td>
                      <td><?php echo $p->nama_prodi; ?></td>
                      <td><?php echo $p->telpon; ?></td>
                      <td><?php echo $p->tahun_masuk; ?></td>
                      <td><?php echo $p->nama_level; ?></td>
                      <td>   <center>
                        <?php if ($this->session->userdata('fk_level_id')=='4' ) :?>
                          <?php if($p->verif_him_sdh==0) :?>
                            <a style="font-size: 13px" href="<?php echo site_url('point/lihat/'.$p->id_user); ?>" class="btn btn-danger btn-xs" ><span class="fa fa-play-circle"></span> Belum</a>
                          <?php endif; ?>
                          <?php if($p->verif_him_sdh==1) :?>
                            <a style="font-size: 13px" href="<?php echo site_url('point/lihat/'.$p->id_user); ?>" class="btn btn-success btn-xs" ><span class="fa fa-check"></span> Sudah</a>
                          <?php endif; ?>
                          <hr style="margin: 2px">
                        <?php endif; ?>
                        <?php if ($this->session->userdata('fk_level_id')=='3' ) :?>
                          <?php if($p->verif_bem_sdh==0) :?>
                            <a style="font-size: 13px" href="<?php echo site_url('point/lihat/'.$p->id_user); ?>" class="btn btn-danger btn-xs" ><span class="fa fa-play-circle"></span> Belum</a>
                          <?php endif; ?>
                          <?php if($p->verif_bem_sdh==1) :?>
                            <a style="font-size: 13px" href="<?php echo site_url('point/lihat/'.$p->id_user); ?>" class="btn btn-success btn-xs" ><span class="fa fa-check"></span> Sudah</a>
                          <?php endif; ?>
                          <hr style="margin: 2px">
                        <?php endif; ?>
                        <?php if ($this->session->userdata('fk_level_id')=='2' ) :?>
                          <?php if($p->verif_all==0) :?>
                            <a style="font-size: 13px" href="<?php echo site_url('point/lihat/'.$p->id_user); ?>" class="btn btn-danger btn-xs" ><span class="fa fa-play-circle"></span> Belum</a>
                          <?php endif; ?>
                          <?php if($p->verif_all==1) :?>
                            <a style="font-size: 13px" href="<?php echo site_url('point/lihat/'.$p->id_user); ?>" class="btn btn-success btn-xs" ><span class="fa fa-check"></span> Sudah</a>
                          <?php endif; ?>
                          <hr style="margin: 2px">
                        <?php endif; ?>


                        <?php if ($this->session->userdata('fk_level_id')=='1' ) :?>
                        <a style="font-size: 13px" href="<?php echo site_url('pengguna/edit/'.$p->id_user); ?>" class="btn btn-info btn-xs" ><span class="fa fa-cogs"></span> Edit</a> 
                        <hr style="margin: 2px">
                        <a style="font-size: 13px" href="<?php echo site_url('pengguna/remove/'.$p->id_user); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        <?php endif; ?>
                       </td>
                    </tr>
                    <?php }
                    endif;
                    if ($this->session->userdata('fk_level_id')=='1'|| $this->session->userdata('fk_level_id')=='3'):
                        ?>
                    <tr>
                      <td name="id_user"><?php echo $p->id_user; ?></td>
                      <td><?php echo $p->username; ?></td>
                      <td><?php echo $p->nim; ?></td>
                      <td><?php echo $p->nama_lengkap; ?></td>
                      <td><?php echo $p->nama_jurusan; ?></td>
                      <td><?php echo $p->nama_prodi; ?></td>
                      <td><?php echo $p->telpon; ?></td>
                      <td><?php echo $p->tahun_masuk; ?></td>
                      <td><?php echo $p->nama_level; ?></td>
                      <td>   <center>
                        <?php if ($this->session->userdata('fk_level_id')=='4' ) :?>
                          <?php if($p->verif_him_sdh==0) :?>
                            <a style="font-size: 13px" href="<?php echo site_url('point/lihat/'.$p->id_user); ?>" class="btn btn-danger btn-xs" ><span class="fa fa-play-circle"></span> Belum</a>
                          <?php endif; ?>
                          <?php if($p->verif_him_sdh==1) :?>
                            <a style="font-size: 13px" href="<?php echo site_url('point/lihat/'.$p->id_user); ?>" class="btn btn-success btn-xs" ><span class="fa fa-check"></span> Sudah</a>
                          <?php endif; ?>
                          <hr style="margin: 2px">
                        <?php endif; ?>
                        <?php if ($this->session->userdata('fk_level_id')=='3' ) :?>
                          <?php if($p->verif_bem_sdh==0) :?>
                            <a style="font-size: 13px" href="<?php echo site_url('point/lihat/'.$p->id_user); ?>" class="btn btn-danger btn-xs" ><span class="fa fa-play-circle"></span> Belum</a>
                          <?php endif; ?>
                          <?php if($p->verif_bem_sdh==1) :?>
                            <a style="font-size: 13px" href="<?php echo site_url('point/lihat/'.$p->id_user); ?>" class="btn btn-success btn-xs" ><span class="fa fa-check"></span> Sudah</a>
                          <?php endif; ?>
                          <hr style="margin: 2px">
                        <?php endif; ?>
                        <?php if ($this->session->userdata('fk_level_id')=='2' ) :?>
                          <?php if($p->verif_all==0) :?>
                            <a style="font-size: 13px" href="<?php echo site_url('point/lihat/'.$p->id_user); ?>" class="btn btn-danger btn-xs" ><span class="fa fa-play-circle"></span> Belum</a>
                          <?php endif; ?>
                          <?php if($p->verif_all==1) :?>
                            <a style="font-size: 13px" href="<?php echo site_url('point/lihat/'.$p->id_user); ?>" class="btn btn-success btn-xs" ><span class="fa fa-check"></span> Sudah</a>
                          <?php endif; ?>
                          <hr style="margin: 2px">
                        <?php endif; ?>


                        <?php if ($this->session->userdata('fk_level_id')=='1' ) :?>
                        <a style="font-size: 13px" href="<?php echo site_url('pengguna/edit/'.$p->id_user); ?>" class="btn btn-info btn-xs" ><span class="fa fa-cogs"></span> Edit</a> 
                        <hr style="margin: 2px">
                        <a style="font-size: 13px" href="<?php echo site_url('pengguna/remove/'.$p->id_user); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        <?php endif; ?>
                       </td>
                    </tr>
                    <?php
                    endif;
                    } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
    </div>
</div>
</div>
