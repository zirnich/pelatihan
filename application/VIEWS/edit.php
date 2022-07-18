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
        <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?php echo $judul ?></h6>
            </div>
            <div class="card-body">

  <form action="<?php echo base_url() ?>index.php/anggota/update/" method="post">
  <input type="hidden" name="id_anggota" value="<?php echo $id_anggota ?>" >
  <div class="form-group">
    <label>Nama Anggota</label><br>
    <input type="text" name="nama_anggota" class="form-control" placeholder="Nama Anggota" value="<?php echo $nama_anggota ?>" required> 
  </div>
  <div class="form-group">
    <label>No Telepon</label><br>
    <input type="text" name="no_telp" class="form-control" placeholder="No Telepom" value="<?php echo $no_telp ?>" required> 
  </div>
  <div class="form-group">
    <label>NIK</label><br>
    <input type="text" name="no_ktp" class="form-control" placeholder="NIK" value="<?php echo $no_ktp ?>" required> 
  </div>
  <div class="form-group">
    <label>Jenis Kelamin</label><br>
    <input type="text" name="jenis_kelamin" class="form-control" placeholder="Laki Or Cowo" value="<?php echo $jenis_kelamin ?>" required> 
  </div>
  <div class="form-group">
    <label>Alamat</label><br>
    <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?php echo $alamat ?>" required>
  </div>
  <div class="form-group">
    <input type="submit" name="update" class="btn btn-primary" value="update">
  </div>
</form>