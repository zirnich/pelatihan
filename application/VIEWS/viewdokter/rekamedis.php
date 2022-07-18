    <?php 
        $data=$this->session->flashdata('sukses');
        if ($data!="") { ?>
          <div id="notifikasi" class="alert alert-success">
          <strong>Sukses! </strong> <?=$data;?> </div>
      <?php } ?>

      <?php  
        $data=$this->session->flashdata('error');
        if ($data!="") { ?>
          <div id="notifikasi" class="alert alert-danger">
          <strong>Error! </strong> <?=$data;?> </div>
      <?php } ?>

      <!-- Begin Page Content -->
    <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?php echo $judul ?></h6>
            </div>
            <div class="card-body">
              <form class="form-horizontal" action="<?php echo base_url('index.php/puskesdokter/aksi_tambah_rm') ?>" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                  <label class="col-md-3">Nama Pasien | alamat</label>
                  <div class="col-md-8">
                    <select name="kd_pasien" class="form-control">
                            <option selected="selected" disabled="disabled">Pilih Kode</option>
                    <?php
                     $no=1;
                     foreach ($getpasien as $key) {
                     
                     ?>
                            <option value="<?php echo $key->kd_pasien ?>"><?php echo $key->nama; echo" | ";  echo $key->alamat; ?></option>
                    <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3">keluhan</label>
                  <div class="col-md-8">
                    <textarea type="text" name="keluhan" class="form-control" placeholder="Masukkan keluhan"></textarea> 
                  </div>
                </div>          
                <div class="form-group">
                  <label class="col-md-3">penyakit</label>
                  <div class="col-md-8">
                    <textarea type="text" name="penyakit" class="form-control" placeholder="penyakit"></textarea> 
                  </div>
                </div>               
         
                <button type="submit" class="btn btn-success">
                  Simpan Data
                </button>
              </form>
            </div>
          </div>
        
        <!-- /.container-fluid -->
        </div>
      </div>
      <!-- End of Main Content -->