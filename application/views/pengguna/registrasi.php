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
                      <th>Level</th>
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
                      <th>Level</th>
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
					  <td><?php echo $p['fk_id_jurusan']; ?></td>
					  <td><?php echo $p['fk_id_prodi']; ?></td>
            <td><?php echo $p['fk_level_id']; ?></td>
            <td><?php echo $p['status']; ?></td>
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
