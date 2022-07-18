      <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">resep</h6>
            </div>           
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>kd resep</th>
                      <th>nama pasien</th>
                      <th>resep</th> 
                      <th>aksi</th> 
                                            
                      <!-- <th>Aksi</th> -->
                    </tr>
                  </thead>
                  <tfoot>
                    
                  </tfoot>
                  <tbody>
                    <?php  
                        $no=1;
                        foreach ($getresep as $key) { ?>
                        <tr>
                          <td><?php echo $key->kd_resep?></td>
                          <td><?php echo $key->nama_pasien ?></td>
                           <td><?php echo $key->resep ?></td>
                       
                        
                          <td colspan="2">
                            <a href="javascript:window.print()" class="btn btninverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                           <!-- <a href="<?php echo base_url('index.php/puskes/delete/'.$key->kd_dokter) ?>" title=" Hapus Data" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-trash"></i></a>
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
