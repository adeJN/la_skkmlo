<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="box">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold"><font class="text-primary" size="5">Data Point</font>
                <?php if ($this->session->userdata('fk_level_id')=='5') :?>
                <!-- tambah data point sebelum dan sesudah batas timeline -->
                <?php 
                $data['timeline'] = $this->pengumuman_model->get_all_timeline_row();
                $data['timeline']->tggl_trakhir_upload;

                $tggl_akhir = $data['timeline']->tggl_trakhir_upload;;
                $tggl_skarang = date('Y-m-d');

                if($tggl_skarang<$tggl_akhir){
                 ?>
                <a class="btn btn-info btn-xs" style="float:right;" href="<?php echo site_url('mhs/tp');?>"><i class="fas fa-fw fa-plus"></i> Tambah</a>
                <?php } else {?>
                <a class="btn btn-info btn-xs" style="float:right;" href="#" data-toggle="modal" data-target="#tambah"><i class="fas fa-fw fa-plus"></i> Tambah </a>
                <?php }?>
                <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        Maaf batas akhir penguploadan secara online telah berakhir
                                    </div>
                                    <div class="modal-footer">
                                        Terimakasih
                                    </div>
                                  </div>
                                </div>
                              </div>

                <!-- end tambah data poin -->
                <!-- cetak form mahasiswa -->
                <?php if(($pengguna->verif_all)==1) {?>
                    <a class="btn btn-success btn-xs" style="float:right;margin-right:10px " href="<?php echo site_url('mhs/tp');?>"><i class="fas fa-fw fa-print"></i> Cetak</a>
                <?php } else { ?>
                    <a class="btn btn-success btn-xs" style="float:right;margin-right:10px " href="#" data-toggle="modal" data-target="#cetak"><i class="fas fa-fw fa-print"></i> Cetak</a>
                <?php } ?>

                            <div class="modal fade" id="cetak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        Form anda baru bisa dicetak jika point point anda sudah diverifikasi dan disetujui oleh DPK
                                    </div>
                                    <div class="modal-footer">
                                        Terimakasih
                                    </div>
                                  </div>
                                </div>
                              </div>
                <!-- end cetak form mahasiswa -->
                <?php endif; ?>

              <?php if ($this->session->userdata('fk_level_id')=='1' ||$this->session->userdata('fk_level_id')=='2' ||$this->session->userdata('fk_level_id')=='3' ||$this->session->userdata('fk_level_id')=='4' ) :?> id pengguna : 
                <a href="<?php echo site_url('pengguna/edit/'.$pengguna->id_user); ?>">
                <?php echo ( $pengguna->id_user );?></h6>
                </a>
              <?php endif; ?></font>
            </div>

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-default text-right">
                <table>
                <tr>
                    <td style="width:70%" class="text-right">
                    <a class="dropdown-item m-0 font-weight-bold text-default" href="#" data-toggle="modal" data-target="#keterangan">Keterangan <i class="fa fa-question-circle"></i> Total poin = 
                    </a>

                            <div class="modal fade" id="keterangan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-question-circle"></i> Keterangan</h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                      </button>
                                    </div>
                                    <div class="modal-body text-left" style="margin:20px">
                                        Minimal poin : prodi <b>MI = 13.0</b> atau prodi <b>TI = 15.0</b><br><br>
                                        <button class="btn btn-warning btn-xs"><b>?</button> -> total point sebelum di verifikasi<br><br>
                                        <button class="btn btn-info btn-xs"><b>?</button> -> total point setelah diverifikasi HMJ <br><br>
                                        <button class="btn btn-primary btn-xs"><b>?</button> -> total point setelah diverifikasi BEM <br><br>
                                        <button class="btn btn-success btn-xs"><b>?</button> -> total point setelah diverifikasi DPK<br>
                                    </div>
                                    <div class="modal-footer">

                                    </div>
                                  </div>
                                </div>
                            </div>

                    </td>
                    <td style="width:30%">
                    <!-- Total NILAI -->
                    <button class="btn btn-warning btn-xs" style="border-radius: 20px" readonly><?php echo $total_point_mah; if($total_point_mah==0){echo "0";}?></button>

                    <?php if(($pengguna->verif_him_sdh)==1) :?>
                    <button class="btn btn-info btn-xs" style="border-radius: 20px" readonly><?php echo $total_point_mah_drhim; if($total_point_mah_drhim==0){echo "0";}?></button>
                    <?php endif; ?>
                    <?php if(($pengguna->verif_him_sdh)==0) :?>
                    <button class="btn btn-info btn-xs" style="border-radius: 20px" disabled="" >0</button>
                    <?php endif; ?>

                    <?php if(($pengguna->verif_bem_sdh)==1) :?>
                    <button class="btn btn-primary btn-xs" style="border-radius: 20px" readonly><?php echo $total_point_mah_drbem; if($total_point_mah_drbem==0){echo "0";}?></button>
                    <?php endif; ?>
                    <?php if(($pengguna->verif_bem_sdh)==0) :?>
                    <button class="btn btn-primary btn-xs" style="border-radius: 20px" disabled="">0</button>
                    <?php endif; ?>

                    <?php if(($pengguna->verif_all)==1) :?>
                    <button class="btn btn-success btn-xs" style="border-radius: 20px" readonly><?php echo $total_point_mah_drdpk; if($total_point_mah_drdpk==0){echo "0";}?></button>
                    <?php endif; ?>
                    <?php if(($pengguna->verif_all)==0) :?>
                    <button class="btn btn-success btn-xs" style="border-radius: 20px" disabled="">0</button>
                    <?php endif; ?>
                    <!--end Total NILAI -->
                    <td>
                </tr>
                </table>
                </h6>
            </div>

            <?php if ($this->session->userdata('fk_level_id')=='2') :?>
                <?php if(($pengguna->verif_all)==0) :?>
                    <?php if($total_point==$total_point_dpk) :?>
                        <a href="<?php echo site_url('point/dpk_setuju/'.$pengguna->id_user); ?>" onClick="return confirm('Anda yakin?')" class="btn btn-danger btn-xs">
                            Setujui
                        </a>
                    <?php endif; ?>
                    <hr>
                <?php endif; ?>
                <?php if(($pengguna->verif_all)==1) :?>
                    <a href="<?php echo site_url('point/btl_dpk_setuju/'.$pengguna->id_user); ?>" onClick="return confirm('Batalkan persetujuan?')" class="btn btn-success btn-xs">
                        Data sudah terverifikasi
                    </a>
                    <hr>
                <?php endif; ?>
                
                    <a href="<?php echo site_url('point/verif_all_satu_mah/'.$pengguna->id_user); ?>" onClick="return confirm('Verifikasi semua?')" class="btn btn-success btn-xs">
                        Verifikasi semua
                    </a>
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
                    <a href="<?php echo site_url('point/btl_krm_dpk/'.$pengguna->id_user); ?>" onClick="return confirm('Batalkan pengiriman data poin ke DPK?')" class="btn btn-success btn-xs">
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
                    <a href="<?php echo site_url('point/btl_krm_bem/'.$pengguna->id_user); ?>" onClick="return confirm('Batalkan pengiriman data poin ke bem?')" class="btn btn-success btn-xs">
                        Data sudah di BEM
                    </a>
                <?php endif; ?>
            <?php endif; ?>

            <div class="card-body">
                <?php if ($this->session->userdata('fk_level_id')=='5') :?>
                      <div class="alert alert-primary" role="alert">
                       Berikut ini adalah tabel data poin milik anda. Untuk menambahkan data poin baru klik tombol TAMBAH. Untuk menampilkan data poin klik tombol pada kolom Verifikasi. Proses verifikasi dan validasi data poin meliputi tahap 1.Verifikasi oleh HMJ, 2.Verifikasi oleh Kesma, 3.Validasi oleh PresBEM, dan 4.Validasi oleh DPK. Dan untuk mencetak data poin ini klik tombol Cetak Form jika sudah di validasi oleh DPK.<br> <b>Minimal poin</b> untuk prodi<b> MI = 13.0</b> dan jika prodi <b>TI = 15.0</b> 
                      </div>
                <?php endif; ?>
              <div class="table-responsive">
                <table class="table table-bordered" style="font-size: 13px" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr style="background-color:#6495ed;color:white;">
                        <th>No</th>
                        <th>No/sertifikat</th>
                        <th>Nama Kegiatan</th>
                        <th>Kode Poin</th>
                        <th>tingkat</th>
                        <th>Jabatan/prestasi</th>
                        <th>Foto Sertifikat</th>
                        <th>point </th>
                        <th>Verifikasi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr style="background-color:#6495ed;color:white;">
                        <th>No</th>
                        <th>No/sertifikat</th>
                        <th>Nama Kegiatan</th>
                        <th>Kode Poin</th>
                        <th>tingkat</th>
                        <th>Jabatan/prestasi</th>
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
                        <td><?php echo $p->kode_kategori ; ?></td>
                        <td><?php echo $p->tingkat_kegiatan ; ?></td>
                        <td><?php echo $p->jabatan ; ?></td>

                        <td>
                            <?php if( $p->foto_sertifikat ) : ?><center>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#a">
                              <img class="card-img-top" style="height:100px;width:130px"  src="<?php echo base_url() .'assets/img/point/'. $p->foto_sertifikat ?>" alt="Card image cap" title="<?php echo $p->foto_sertifikat; ?>">
                            </a>                              
                              <!-- Jika tidak ada thumbnail, gunakan holder.js -->
                              <?php ; else : ?>
                              <img class="card-img-top" style="width: 100px"  src="<?php echo base_url() .'assets/img/default.jpg' ?>" alt="Card image cap">
                              <?php endif; ?>
                        </td>
                        <td><?php echo $p->point ; ?></td>
                        <td>
                            <?php if ($this->session->userdata('fk_level_id')=='2') :?>
                                <center>
                                <?php if(($p->verif_dpka)==0) :?>
                                    <a onClick="return confirm('Verifikasi poin?')" href="<?php echo site_url('point/verif_dpk/'.$p->id_point); ?>" style="font-size: 13px" class="btn btn-danger btn-xs" >
                                        <span class="fa fa-play-circle"></span> verifikasi
                                    </a>
                                <?php endif; ?> 
                                <?php if(($p->verif_dpka)==1) :?>
                                    <a href="<?php echo site_url('point/no_verif_dpk/'.$p->id_point); ?>" onClick="return confirm('Tidak verifikasi poin?')" style="font-size: 13px" class="btn btn-success btn-xs" >
                                        <span class="fa fa-check"></span> terverifikasi
                                    </a>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php if ($this->session->userdata('fk_level_id')=='3') :?>
                                <center>
                                <?php if(($p->verif_bemm)==0) :?>
                                    <a onClick="return confirm('Verifikasi poin?')" style="font-size: 13px" href="<?php echo site_url('point/verif_bem/'.$p->id_point); ?>" class="btn btn-danger btn-xs" >
                                        <span class="fa fa-play-circle"></span> verifikasi
                                    </a>
                                <?php endif; ?> 
                                <?php if(($p->verif_bemm)==1) :?>
                                    <a href="<?php echo site_url('point/no_verif_bem/'.$p->id_point); ?>" style="font-size: 13px" onClick="return confirm('Tidak verifikasi poin?')" class="btn btn-success btn-xs" >
                                        <span class="fa fa-check"></span> terverifikasi
                                    </a>
                                <?php endif; ?>
                                <hr style="margin: 2px">
                                <a href="<?php echo site_url('pengguna/edit/'.$p->id_user); ?>" style="font-size: 13px" class="btn btn-info btn-xs" ><span class="fa fa-cogs"></span> Edit</a> <br>
                                <hr style="margin: 2px">
                                <a href="<?php echo site_url('point/remove/'.$p->id_point); ?>" style="font-size: 13px" onClick="return confirm('Hapus poin?')" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            <?php endif; ?>
                            <?php if ($this->session->userdata('fk_level_id')=='4') :?>
                                <center>
                                <?php if(($p->verif_himp)==0) :?>
                                    <a onClick="return confirm('Verifikasi poin?')" style="font-size: 13px"  href="<?php echo site_url('point/verif_himp/'.$p->id_point); ?>" class="btn btn-danger btn-xs" >
                                        <span class="fa fa-play-circle"></span> verifikasi
                                    </a>
                                <?php endif; ?> 
                                <?php if(($p->verif_himp)==1) :?>
                                    <a href="<?php echo site_url('point/no_verif_himp/'.$p->id_point); ?>" style="font-size: 13px"  onClick="return confirm('Tidak verifikasi poin?')" class="btn btn-success btn-xs" >
                                        <span class="fa fa-check"></span> terverifikasi
                                    </a>
                                <?php endif; ?>
                                <hr style="margin: 2px">
                                <a href="<?php echo site_url('pengguna/edit/'.$p->id_user); ?>" class="btn btn-info btn-xs" style="font-size: 13px"  ><span class="fa fa-cogs"></span> Edit</a> <br>
                                <hr style="margin: 2px">
                                <a href="<?php echo site_url('point/remove/'.$p->id_point); ?>" style="font-size: 13px"  onClick="return confirm('Hapus poin?')" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            <?php endif; ?>

                            <?php if ($this->session->userdata('fk_level_id')=='5' || $this->session->userdata('fk_level_id')=='1') :?>
                                <center>
                                <?php if(($p->verif_himp)==0) :?>
                                    <button class="btn btn-danger btn-xs" style="font-size: 13px" disabled=""><span class="fa fa-play-circle"></span> HMJ</button>
                                <?php endif; ?> 
                                <?php if(($p->verif_himp)==1) :?>
                                    <button class="btn btn-info btn-xs" style="font-size: 13px"><span class="fa fa-check"></span> HMJ</button>
                                <?php endif; ?> 
                                <hr style="margin: 2px">
                                <?php if(($p->verif_bemm)==0) :?>
                                    <button class="btn btn-danger btn-xs" style="font-size: 13px" disabled=""><span class="fa fa-play-circle"></span> BEM</button>
                                <?php endif; ?> 
                                <?php if(($p->verif_bemm)==1) :?>
                                    <button class="btn btn-primary btn-xs" style="font-size: 13px"><span class="fa fa-check"></span> BEM</button>
                                <?php endif; ?> 
                                <hr style="margin: 2px">
                                <?php if(($p->verif_dpka)==0) :?>
                                    <button class="btn btn-danger btn-xs" style="font-size: 13px" disabled=""><span class="fa fa-play-circle"></span> DPK</button>
                                <?php endif; ?> 
                                <?php if(($p->verif_dpka)==1) :?>
                                    <button class="btn btn-success btn-xs" style="font-size: 13px"><span class="fa fa-check"></span> DPK</button>
                                <?php endif; ?> 
                                <hr style="margin: 2px">
                                <!-- desable button hapus setelah diverif -->
                                <?php if(($p->verif_himp)==0) :?>
                                    <a href="<?php echo site_url('point/remove/'.$p->id_point); ?>" style="font-size: 13px" onClick="return confirm('Hapus poin?')" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Hapus</a>
                                <?php ; ?> 
                                <?php else :?>
                                    <button style="font-size: 13px" class="btn btn-danger btn-xs" disabled=""><span class="fa fa-trash" ></span> Hapus</button>
                                <?php endif; ?> 
                            <?php endif; ?>

                        </td>
                    </tr>
                    <?php $no++; } ?>
                  </tbody>
                </table>
              </div>
            </div>

                              <div class="modal fade" id="a" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

        </div>
    </div>
</div>
</div>

