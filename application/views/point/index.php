<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="box">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Point Mahasiswa</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>Id Point</th>
                        <th>Fk Id User</th>
                        <th>Nama Sertifikat</th>
                        <th>Foto Sertifikat</th>
                        <th>Fk Id Kategori</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Id Point</th>
                        <th>Fk Id User</th>
                        <th>Nama Sertifikat</th>
                        <th>Foto Sertifikat</th>
                        <th>Fk Id Kategori</th>
                        <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach($point as $p){ ?>
                    <tr>
                        <td><?php echo $p['id_point']; ?></td>
                        <td><?php echo $p['fk_id_user']; ?></td>
                        <td><?php echo $p['nama_sertifikat']; ?></td>
                        <td><?php echo $p['foto_sertifikat']; ?></td>
                        <td><?php echo $p['fk_id_kategori']; ?></td>
                        <td>
                            <a href="<?php echo site_url('point/edit/'.$p['id_point']); ?>" class="btn btn-info btn-xs"><span class="fa fa-cogs"></span> Edit</a> 
                            <a href="<?php echo site_url('point/remove/'.$p['id_point']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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

