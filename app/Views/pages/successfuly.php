<?= $this->extend('layouts/admin'); ?>
<?= $this->section('content'); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-warning py-2 static-top shadow">
   <div class="container-fluid">
      <a href="<?= base_url('home') ?>">
         <img src="/assets/icon/sd.png" class="icon" width="80px" height="80px"></a>
      <div class="container fluid">
         <a class="navbar-brand"><span class="fw-bolder text-primary" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
               PENERIMAAN PESERTA DIDIK BARU<br>SDN MARGAHAYU VIII</span></a>
      </div>
      <ul class="navbar-nav ml-auto">
         <div class="topbar-divider d-none d-sm-block"></div>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 medium  fw-bolder">
               <li class="nav-item"> <a class="nav-link" href="<?= base_url('home') ?>"> Home </a></li>
               <li class="nav-item"> <a class="nav-link" href="<?= base_url('contact'); ?>"> Contact </a></li>
            </ul>
         </div>
      </ul>
</nav>


<div class="col-md-6 mx-auto mt-5">
   <div class="container-fluid mt-5">
      <!-- Head Content-->
      <h5 class="mb-0 text-black" style="font-family:'Times New Roman', Times, serif; text-align:center">
         SELAMAT !!! <br><br>ANDA TELAH BERHASIL MENDAFTAR SEBAGAI <br> CALON PESERTA DIDIK SDN MARGAHAYU VIII
         <br>KOTA BEKASI
      </h5>
      <div class="container-fluid mt-4" style="text-align: center;">
         <a href="<?= base_url('pengumuman') ?>">Silahkan cek pengumuman disini</a>

      </div>
   </div>
</div>

<?= $this->endSection(); ?>