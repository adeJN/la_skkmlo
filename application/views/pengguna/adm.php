<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="box">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pengguna sudah terdaftar</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr style="background-color:#6495ed;color:white;">
                      <th>Id</th>
                      <th>Username</th>
                      <th>Nama</th>
                      <th>Jurusan</th>
                      <th>Peran</th>
                      <th>Status</th>
					  <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr style="background-color:#6495ed;color:white;">
                      <th>Id</th>
                      <th>Username</th>
                      <th>Nama</th>
                      <th>Jurusan</th>
                      <th>Peran</th>
                      <th>Status</th>
					  <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  	<?php foreach($pengguna as $p){ ?>
                    <tr>
                      <td><?php echo $p->id_user; ?></td>
                      <td><?php echo $p->username; ?></td>
                      <td><?php echo $p->nama_lengkap; ?></td>
          					  <td><?php echo $p->nama_jurusan; ?></td>
                      <td><?php echo $p->nama_level; ?></td>
          					  <td>
                        <?php if($p->status==0){
                          echo "Aktif";
                        }else if($p->status==1){
                          echo "Tidak aktif";
                        }
                        ?>     
                      </td>
					            <td> 
                        <a href="<?php echo site_url('pengguna/edit/'.$p->id_user); ?>" class="btn btn-info btn-xs" ><span class="fa fa-cogs"></span> Edit</a> 
                        <a href="<?php echo site_url('pengguna/remove/'.$p->id_user); ?>" onClick="return confirm('Hapus pengguna?')" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
