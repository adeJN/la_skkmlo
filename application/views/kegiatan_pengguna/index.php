<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="box">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Mahasiswa yang sudah mendaftar kegiatan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>Id Daftar Kegiatan</th>
                        <th>id Kegiatan</th>
                        <th>Nama Mahasiswa</th>
                        <th>Tanggal Daftar</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Id Daftar Kegiatan</th>
                        <th>id Kegiatan</th>
                        <th>Nama Mahasiswa</th>
                        <th>Tanggal Daftar</th>
                        <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach($kegiatan_pengguna as $k){ ?>
                    <tr>
                        <td><?php echo $k['id_daftar_keg']; ?></td>
                        <td><?php echo $k['fk_id_keg']; ?></td>
                        <td><?php echo $k['nama_mhs']; ?></td>
                        <td><?php echo $k['tggl_daftar']; ?></td>
                      <td>
                        <a href="<?php echo site_url('pengguna/edit/'.$p['id_user']); ?>" class="btn btn-info btn-xs" ><span class="fa fa-check"></span> Terima</a> 
                        <a href="<?php echo site_url('pengguna/remove/'.$p['id_user']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-times"></span> Tolak</a>
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
