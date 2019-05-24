<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Data Kategori Induk</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Jenis kegiatan</th>
                            <th>Wajib</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                            <th>Kode</th>
                            <th>Jenis kegiatan</th>
                            <th>Wajib</th>
                            <th>Actions</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <?php foreach($kategori_induk as $k){ ?>
                        <tr>
                            <td><?php echo $k['kode_kategori_induk']; ?></td>
                            <td><?php echo $k['jenis_kegiatan']; ?></td>
                            <td><?php if($k['wajib']==1){echo "wajib";}else{echo "tidak wajib";}?></td>
                            <td>
                                <a href="<?php echo site_url('kategori_induk/edit/'.$k['kode_kategori_induk']); ?>" class="btn btn-info btn-xs"><span class="fa fa-cogs"></span> Edit</a> 
                                <a href="<?php echo site_url('kategori_induk/remove/'.$k['kode_kategori_induk']); ?>" onClick="return confirm('Hapus data?')" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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

