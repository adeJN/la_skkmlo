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
            <?php if ($this->session->userdata('fk_level_id')=='2') :?>
                <?php if(($pengguna->verif_all)==0) :?>
                    <?php if($total_point==$total_point_dpk) :?>
                        <a href="<?php echo site_url('point/dpk_setuju/'.$pengguna->id_user); ?>" onClick="return confirm('Anda yakin?')" class="btn btn-danger btn-xs">
                            Setujui
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if(($pengguna->verif_all)==1) :?>
                    <a href="" class="btn btn-success btn-xs">
                        Data sudah terverifikasi
                    </a>
                <?php endif; ?>
            <?php endif; ?>

            <?php if ($this->session->userdata('fk_level_id')=='3') :?>
                <?php if(($pengguna->verif_bem_sdh)==0) :?>
                    <?php if($total_point==$total_point_bem) :?>
                        <a href="<?php echo site_url('point/krm_dpk/'.$pengguna->id_user); ?>" onClick="return confirm('Mengirim data ke poin ke dpk?')" class="btn btn-danger btn-xs">
                            Kirim untuk diverifikasi DPK
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if(($pengguna->verif_bem_sdh)==1) :?>
                    <a href="" class="btn btn-success btn-xs">
                        Data sudah di DPK
                    </a>
                <?php endif; ?>
            <?php endif; ?>

            <?php if ($this->session->userdata('fk_level_id')=='4') :?>
                <?php if(($pengguna->verif_him_sdh)==0) :?>
                    <?php if($total_point==$total_point_him) :?>
                        <a href="<?php echo site_url('point/krm_bem/'.$pengguna->id_user); ?>" onClick="return confirm('Mengirim data ke poin ke bem?')" class="btn btn-danger btn-xs">
                            Kirim untuk diverifikasi bem
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if(($pengguna->verif_him_sdh)==1) :?>
                    <a href="" class="btn btn-success btn-xs">
                        Data sudah di BEM
                    </a>
                <?php endif; ?>
            <?php endif; ?>

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
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ambilfoto">
                              <img class="card-img-top" style="height:100px;width:130px"  src="<?php echo base_url() .'assets/img/point/'. $p->foto_sertifikat ?>" alt="Card image cap" title="<?php echo $p->foto_sertifikat; ?>">
                            </a>                              
                              <!-- Jika tidak ada thumbnail, gunakan holder.js -->
                              <?php ; else : ?>
                              <img class="card-img-top" style="width: 100px"  src="<?php echo base_url() .'assets/img/default.jpg' ?>" alt="Card image cap">
                              <?php endif; ?>


                              <div class="modal fade" id="ambilfoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Foto Sertifikat</h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        <img class="card-img-top" style="width:400px"  src="<?php echo base_url() .'assets/img/point/'. $p->foto_sertifikat ?>" alt="Card image cap" title="<?php echo $p->foto_sertifikat; ?>">
                                    </div>
                                    <div class="modal-footer">

                                    </div>
                                  </div>
                                </div>
                              </div>

                        </td>
                        <td><?php echo $p->point ; ?>
                        </td>
                        <td>
                            <?php if ($this->session->userdata('fk_level_id')=='2') :?>
                                <center>
                                <?php if(($p->verif_dpka)==0) :?>
                                    <a onClick="return confirm('Verifikasi poin?')" href="<?php echo site_url('point/verif_dpk/'.$p->id_point); ?>" class="btn btn-danger btn-xs" >
                                        <span class="fa fa-times"></span> verifikasi
                                    </a>
                                <?php endif; ?> 
                                <?php if(($p->verif_dpka)==1) :?>
                                    <a href="<?php echo site_url('point/no_verif_dpk/'.$p->id_point); ?>" onClick="return confirm('Tidak verifikasi poin?')" class="btn btn-success btn-xs" >
                                        <span class="fa fa-check"></span> terverifikasi
                                    </a>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php if ($this->session->userdata('fk_level_id')=='3') :?>
                                <center>
                                <?php if(($p->verif_bemm)==0) :?>
                                    <a onClick="return confirm('Verifikasi poin?')" href="<?php echo site_url('point/verif_bem/'.$p->id_point); ?>" class="btn btn-danger btn-xs" >
                                        <span class="fa fa-times"></span> verifikasi
                                    </a>
                                <?php endif; ?> 
                                <?php if(($p->verif_bemm)==1) :?>
                                    <a href="<?php echo site_url('point/no_verif_bem/'.$p->id_point); ?>" onClick="return confirm('Tidak verifikasi poin?')" class="btn btn-success btn-xs" >
                                        <span class="fa fa-check"></span> terverifikasi
                                    </a>
                                <?php endif; ?>
                                <hr style="margin: 2px">
                                <a href="<?php echo site_url('pengguna/edit/'.$p->id_user); ?>" class="btn btn-info btn-xs" ><span class="fa fa-cogs"></span> Edit</a> <br>
                                <hr style="margin: 2px">
                                <a href="<?php echo site_url('point/remove/'.$p->id_point); ?>" onClick="return confirm('Hapus poin?')" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            <?php endif; ?>
                            <?php if ($this->session->userdata('fk_level_id')=='4') :?>
                                <center>
                                <?php if(($p->verif_himp)==0) :?>
                                    <a onClick="return confirm('Verifikasi poin?')" href="<?php echo site_url('point/verif_himp/'.$p->id_point); ?>" class="btn btn-danger btn-xs" >
                                        <span class="fa fa-times"></span> verifikasi
                                    </a>
                                <?php endif; ?> 
                                <?php if(($p->verif_himp)==1) :?>
                                    <a href="<?php echo site_url('point/no_verif_himp/'.$p->id_point); ?>" onClick="return confirm('Tidak verifikasi poin?')" class="btn btn-success btn-xs" >
                                        <span class="fa fa-check"></span> terverifikasi
                                    </a>
                                <?php endif; ?>
                                <hr style="margin: 2px">
                                <a href="<?php echo site_url('pengguna/edit/'.$p->id_user); ?>" class="btn btn-info btn-xs" ><span class="fa fa-cogs"></span> Edit</a> <br>
                                <hr style="margin: 2px">
                                <a href="<?php echo site_url('point/remove/'.$p->id_point); ?>" onClick="return confirm('Hapus poin?')" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            <?php endif; ?>
                            <?php if ($this->session->userdata('fk_level_id')=='5' || $this->session->userdata('fk_level_id')=='1') :?>
                                <center>
                                <?php if(($p->verif_himp)==0) :?>
                                    <button class="btn btn-danger btn-xs"><span class="fa fa-times"></span> HMJ</button>
                                <?php endif; ?> 
                                <?php if(($p->verif_himp)==1) :?>
                                    <button class="btn btn-warning btn-xs"><span class="fa fa-check"></span> HMJ</button>
                                <?php endif; ?> 
                                <hr style="margin: 2px">
                                <?php if(($p->verif_bemm)==0) :?>
                                    <button class="btn btn-danger btn-xs"><span class="fa fa-times"></span> BEM</button>
                                <?php endif; ?> 
                                <?php if(($p->verif_bemm)==1) :?>
                                    <button class="btn btn-success btn-xs"><span class="fa fa-check"></span> BEM</button>
                                <?php endif; ?> 
                                <hr style="margin: 2px">
                                <?php if(($p->verif_dpka)==0) :?>
                                    <button class="btn btn-danger btn-xs"><span class="fa fa-times"></span> DPK</button>
                                <?php endif; ?> 
                                <?php if(($p->verif_dpka)==1) :?>
                                    <button class="btn btn-info btn-xs"><span class="fa fa-check"></span> DPK</button>
                                <?php endif; ?> 
                            <?php endif; ?>

 
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

