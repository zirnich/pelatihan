      <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">rekamedis</h6>
            </div>           
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>kd rm</th>
                      <th>kd pasien</th>
                      <th>keluhan</th> 
                       <th>penyakit</th>                      
                      <!-- <th>Aksi</th> -->
                    </tr>
                  </thead>
                  <tfoot>
                    
                  </tfoot>
                  <tbody>
                    <?php  
                        $no=1;
                        foreach ($getrm as $key) { ?>
                        <tr>
                          <td><?php echo $key->kd_rm?></td>
                          <td><?php echo $key->kd_pasien ?></td>
                          <td><?php echo $key->keluhan?></td>
                          <td><?php echo $key->penyakit?></td>
                        
                      <!--    <td colspan="2">
                            <a href="<?php echo base_url('index.php/puskes/edit/'.$key->kd_dokter) ?>" title=" Lihat Data Peminjam" class="btn bn-sm btn-warning"><i class="fas fa-fw fa-edit"></i></a>
                            <a href="<?php echo base_url('index.php/puskes/delete/'.$key->kd_dokter) ?>" title=" Hapus Data" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-trash"></i></a>
                          </td> -->
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
  