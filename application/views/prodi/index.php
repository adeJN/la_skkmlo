<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Data Prodi</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                            <th>Id Prodi</th>
                            <th>Fk Id Jurusan</th>
                            <th>Nama Prodi</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                            <th>Id Prodi</th>
                            <th>Fk Id Jurusan</th>
                            <th>Nama Prodi</th>
                            <th>Actions</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <?php foreach($prodi as $p){ ?>
                        <tr>
                            <td><?php echo $p['id_prodi']; ?></td>
                            <td><?php echo $p['fk_id_jurusan']; ?></td>
                            <td><?php echo $p['nama_prodi']; ?></td>
                            <td>
                                <a href="<?php echo site_url('prodi/edit/'.$p['id_prodi']); ?>" class="btn btn-info btn-xs"><span class="fa fa-cogs"></span> Edit</a> 
                                <a href="<?php echo site_url('prodi/remove/'.$p['id_prodi']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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

