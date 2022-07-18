      <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-dark">Data Pasien</h6>
            </div> 
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID Pasien</th>
                      <th>Nama Pasien</th>                    
                      <th>Jenis Kelamin</th>                     
                      <th>alamat</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    
                    <?php  
                        $no=1;
                        foreach ($databrg as $key) { ?>
                        <tr>
                          <td><?php echo $key->kd_pasien ?></td>
                          <td><?php echo $key->nama ?></td>                  
                          <td><?php echo $key->jenis_kelamin ?></td>                        
                          <td><?php echo $key->alamat ?></td>
                          <td colspan="2">
                            <a href="<?php echo base_url('index.php/puskes/edit/'.$key->kd_pasien) ?>" title=" Rubah Data" class="btn bn-sm btn-warning"><i class="fas fa-fw fa-edit"></i></a>
                            <a href="<?php echo base_url('index.php/puskes/delete/'.$key->kd_pasien) ?>" title=" Hapus Data" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-trash"></i></a>
                          </td>
                        </tr>
                    <?php 
                     
                        
                      } ?>
                        
      
                  </tbody>
                </table>
              </div>

            </div>
          </div>
        
        <!-- /.container-fluid -->
        </div>
      </div>
      <!-- End of Main Content -->