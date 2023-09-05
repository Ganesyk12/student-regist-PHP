<?= $this->extend('layouts/admin'); ?>
<?= $this->section('content'); ?>
<!-- Beginning of content-->
<div class="container-fluid">

   <!-- Head Content --><br>
   <h4 class="h4 mb-0 text-gray-800" style="text-align:center; font-family:'Times New Roman', Times, serif;">
      SELAMAT DATANG DI WEBSITE <br>SDN MARGAHAYU VIII KOTA BEKASI</h4><br>

   <div class="button">
      <a href="<?= base_url('login') ?>" class="btn btn-success"> Admin </a>
   </div><br>

   <!-- Body Content -->
   <div class="d-sm-flex  justify-content-between mb-4">
      <div class="card-hidden content-center">
         <div class="row">
            <div class="col">
               <div class="card-hidden" style="width: 400px">
                  <a href="<?= base_url('Home') ?>" class="btn btn-primary btn-lg navbar-nav  sidebar-dark-md" style="padding: 20px;" tabindex="-1" role="button" aria-disabled="true">Dasboard</a><br>
                  <a href="<?= base_url('info') ?>" class="btn btn-primary btn-lg navbar-nav  sidebar-dark-md" style="padding: 20px;" tabindex="-1" role="button" aria-disabled="true">Tata Cara dan <br>Syarat Pendaftaran</a><br>
                  <a href="<?= base_url('regist') ?>" class="btn btn-primary btn-lg navbar-nav  sidebar-dark-md" style="padding: 20px;" tabindex="-1" role="button" aria-disabled="true">Formulir Pendaftaran</a><br>
                  <a href="<?= base_url('pengumuman') ?>" class="btn btn-primary btn-lg navbar-nav  sidebar-dark-md" style="padding: 20px;" tabindex="-1" role="button" aria-disabled="true">Data Pendaftar</a><br>
                  </ul>
               </div>
            </div>
            <!-- Image Content -->
            <div class="col" style="width: 120px;"></div>
            <div class="col-lg-auto">
               <img src="assets/icon/belajar.png" class="img-thumbnail" width="720px" ; height="420px">
            </div>
         </div>
      </div>
   </div>
</div>
<?= $this->endSection(); ?>