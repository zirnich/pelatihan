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
              <form class="form-horizontal" action="<?php echo base_url('index.php/puskes/aksi_tambah_dokter') ?>" enctype="multipart/form-data" method="post">
                <div class="form-group">
                  <label class="col-md-3">Nama Dokter</label>
                  <div class="col-md-8">
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama">
                  </div>
                </div>          
                <div class="form-group">
                  <label class="col-md-3">Jenis kelamin</label>
                  <div class="col-md-8">
                    <input type="text" name="jk" class="form-control" placeholder="jenis kelamin">
                  </div>
                </div>               
                <div class="form-group">
                  <label class="col-md-3">Alamat</label>
                  <div class="col-md-8">
                    <input type="text" name="alamat" class="form-control" placeholder="Masukkan alamat">
                  </div>
                </div>
                     <div class="form-group">
                  <label class="col-md-3">poli </label>
                  <div class="col-md-8">
                    <select name="kd_poli" class="form-control">
                            <option selected="selected" disabled="disabled">Pilih poli</option>
                    <?php
                     $no=1;
                     foreach ($getpoli as $key) {
                     
                     ?>
                            <option value="<?php echo $key->id_poli ?>"><?php echo $key->nama_poli;?></option>
                    <?php } ?>
                    </select>
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