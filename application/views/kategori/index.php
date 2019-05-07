<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Data Kategori Point</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                            <th>Id Kategori Point</th>
                            <th>Nama Kategori</th>
                            <th>Point</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                            <th>Id Kategori Point</th>
                            <th>Nama Kategori</th>
                            <th>Point</th>
                            <th>Actions</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <?php foreach($kategori as $k){ ?>
                        <tr>
                            <td><?php echo $k['id_kategori_point']; ?></td>
                            <td><?php echo $k['nama_kategori']; ?></td>
                            <td><?php echo $k['point']; ?></td>
                            <td>
                                <a href="<?php echo site_url('kategori/edit/'.$k['id_kategori_point']); ?>" class="btn btn-info btn-xs"><span class="fa fa-cogs"></span> Edit</a> 
                                <a href="<?php echo site_url('kategori/remove/'.$k['id_kategori_point']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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

