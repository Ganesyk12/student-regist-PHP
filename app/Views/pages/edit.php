<?= $this->extend('layouts/admin'); ?>
<?= $this->section('content'); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-warning py-2 static-top shadow">
   <div class="container-fluid">
      <a href="<?= base_url('home') ?>">
         <img src="/assets/icon/sd.png" class="icon" width="80px" height="80px"></a>
      <div class="col">
         <a class="navbar-brand"><span class="fw-bolder text-primary" style="text-align:left ;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
               PENERIMAAN PESERTA DIDIK BARU<br>SDN MARGAHAYU VIII</span></a>
      </div>
      <ul class="navbar-nav ml-auto">
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 medium  fw-bolder">
               <a class="nav-link" href="<?= base_url('contact'); ?>"> Layanan Telepon </a>
               <a class="nav-link" href="<?= base_url('login'); ?>"> Logout </a>
            </ul>
         </div>
      </ul>
   </div>
</nav>

<!-- Begining Content -->
<div class="card-hidden" style="width: 400px;">
   <div class=" col-sm mx-auto mt-4" aria-label="breadcrumb">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="<?= base_url('datasiswa') ?>">Data Regist</a></li>
         <li class="breadcrumb-item active" aria-current="page">Form Edit</li>
      </ol>
   </div>
</div>

<div class="col-md-6 mx-auto mt-1">
   <div class="container-fluid">
      <!-- Head Content-->
      <h5 class="mb-0 text-black" style="font-family:'Times New Roman', Times, serif; text-align:center">
         FORM EDIT DATA SISWA / SISWI <br> SDN MARGAHAYU VIII</h5>
   </div>
</div>

<!-- Body Content -->
<div class="container">
   <div class="col-md-6 mx-auto mt-3">

      <!-- FORM-->
      <form action="<?= base_url('submitedit'); ?>" method="post">
         <?= csrf_field(); ?>
         <div class="form-group">
            <label><span>Nama Lengkap</span></label>
            <input type="text" class="form-control" name="nama_lengkap" autofocus minlength="2" value="<?= $siswa['nama_lengkap'] ?>">
         </div>
         <!-- Row 2-->
         <div class="form-row">
            <div class="form-group col-md-6">
               <label><span>Tempat Lahir</span></label>
               <input type="text" class="form-control" name="tempat_lahir" minlength="5" value="<?= $siswa['tempat_lahir'] ?>>
            </div>
            <div class=" form-group col-md-6">
               <label><span>Tanggal Lahir</span></label>
               <input type="date" class="form-control" name="tgl_lahir" value="<?= $siswa['tgl_lahir'] ?>>
            </div>
         </div>

         <!-- <div class=" form-row"> -->
               <div class="form-group col-md-6">
                  <label><span>Jenis Kelamin</span></label>
                  <select name="jenis_kelamin" class="form-control" value="<?= $siswa['jenis_kelamin'] ?>>
                     <option selected>Jenis Kelamin</option>
                     <option value=" Laki-laki">Laki - laki</option>
                     <option value="Perempuan">Perempuan</option>
                  </select>
               </div>
               <div class="form-group col-md-6">
                  <label><span>Agama</span></label>
                  <input type="text" class="form-control" name="agama" value="<?= $siswa['agama'] ?>>
               </div>
               <!-- </div> -->
               <!-- Row 4 -->
               <div class=" form-row">
                  <div class="form-group col-md-6">
                     <label><span>Anak Urut</span></label>
                     <input type="number" class="form-control" name="anak" min="1" value="<?= $siswa['anak'] ?>>
                  </div>
                  <div class=" form-group col-md-6">
                     <label><span>Jumlah Saudara</span></label>
                     <input type="number" class="form-control" name="jum_sdr" min="0" value="<?= $siswa['jum_sdr'] ?>>
                  </div>
               </div>
               <!-- Row 5 -->
               <div class=" form-group">
                     <label><span>Alamat Tempat Tinggal</span></label>
                     <input type="text" class="form-control" name="alamat" minlength=" 5" value="<?= $siswa['alamat'] ?>>
               </div>
               <!-- Row 6 -->
               <div class=" form-group">
                     <label><span>No. Telepon yang bisa dihubungi</span></label>
                     <input type="text" class="form-control" name="telp" value="<?= $siswa['telp'] ?>>
               </div>
               <!-- Row 7 -->
               <div class=" form-group">
                     <label><span>Nama Orang tua atau Wali</span></label>
                     <input type="text" class="form-control" name="nama_ortu" minlength="2" value="<?= $siswa['nama_ortu'] ?>>
               </div>
               <!-- Row 8 -->
               <div class=" form-group">
                     <label><span>Pekerjaan Orang tua atau Wali</span></label>
                     <input type="text" class="form-control" name="pekerjaan" minlength="2" value="<?= $siswa['pekerjaan'] ?>>
               </div>
               <!-- Row 9 -->
               <div class=" form-group">
                     <label><span>Alamat Orang tua atau Wali</span></label>
                     <input type="text" class="form-control" name="alamat_ortu" minlength="5" value="<?= $siswa['alamat_ortu'] ?>>
               </div>
               <!-- Submit -->
               <button type=" submit" class="btn btn-primary">Daftar</button>
      </form>
      <!-- END OF FORM -->

      <?php if (session()->getFlashdata('pesan')) : ?>
         <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
         </div>
      <?php endif; ?>
   </div>
</div>

<?= $this->endSection(); ?>