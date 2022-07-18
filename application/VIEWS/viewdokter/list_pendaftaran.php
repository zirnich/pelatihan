<?php $this->load->view('templatedokter/HEADER') ?>
<?php $this->load->view('templatedokter/NAVBAR') ?>

      <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">pendaftaran</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>id pasien</th>
                       <th>tanggal</th>
                      <th>umur</th>
                     
                      <th>id poli</th>                      
                    
                    </tr>
                  </thead>
                  <tfoot>
                    
                  </tfoot>
                  <tbody>
                    <?php  
                        $no=1;
                        foreach ($getpendaftaran as $key) { ?>
                        <tr>
                          <td><?php echo $key->kd_pasien ?></td>
                          <td><?php echo $key->tanggal ?></td>
                          <td><?php echo $key->umur ?></td>
                         
                          <td><?php echo $key->kd_poli?></td>
                         
                      <!--    <td colspan="2">
                            
                          <a href="<?php echo base_url('index.php/puskes/delete/'.$key->kd_pasien) ?>" title=" Hapus Data" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-trash"></i></a> 
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
      <?php $this->load->view('templatedokter/FOOTER') ?>