<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Data Level Pengguna</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                            <th>Id Level</th>
                            <th>Nama Level</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                            <th>Id Level</th>
                            <th>Nama Level</th>
                            <th>Actions</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <?php foreach($level as $l){ ?>
                        <tr>
                            <td><?php echo $l['id_level']; ?></td>
                            <td><?php echo $l['nama_level']; ?></td>
                            <td>
                                <a href="<?php echo site_url('level/edit/'.$l['id_level']); ?>" class="btn btn-info btn-xs"><span class="fa fa-cogs"></span> Edit</a> 
                                <a href="<?php echo site_url('level/remove/'.$l['id_level']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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

