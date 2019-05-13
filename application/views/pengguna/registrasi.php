<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="box">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa ingin daftar</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Username</th>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Jurusan</th>
                      <th>Prodi</th>
                      <th>Status</th>
					             <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Username</th>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Jurusan</th>
                      <th>Prodi</th>
                      <th>Status</th>
					            <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  	<?php foreach($pengguna as $p){ ?>
                    <tr>
                      <td><?php echo $p['id_user']; ?></td>
                      <td><?php echo $p['username']; ?></td>
                      <td><?php echo $p['nim']; ?></td>
                      <td><?php echo $p['nama_lengkap']; ?></td>
          					  <td><?php echo $p['nama_jurusan']; ?></td>
          					  <td><?php echo $p['nama_prodi']; ?></td>
                      <td>
                        <?php
                          if($p['status']==1){
                            echo "Tidak aktif";
                          }
                        ?>
                      </td>
          					  <td><?php echo form_open('pengguna/terima/'.$p['id_user']); ?>
                        <button type="submit" class="btn btn-success"><span class="fa fa-check"></span> Terima</button>
                        </form>
                        <a href="#" href="#" data-toggle="modal" data-target="#tolak" class="btn btn-danger btn-xs"><span class="fa fa-times"></span> Tolak</a>
                        <!-- modal tolak -->
                        <div class="modal fade" id="tolak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel" style="color:red">Peringatan !!!</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                                </button>
                              </div>
                              <div class="modal-body">Anda yakin ingin menolak pengguna ?</div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                <a class="btn btn-danger" href="<?php echo site_url('pengguna/remove/'.$p['id_user']); ?>">Tolak</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- endmodal -->
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
