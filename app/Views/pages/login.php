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
            </ul>
         </div>
      </ul>
   </div>
</nav>

<!-- PAGE CONTENT -->
<div class="container-fluid mt-4">
   <!-- Page Heading -->
   <div class="col md-4 align-items-center justify-content-between mb-2">
      <div class="row">
         <div class=" col-sm-3 mx-auto " aria-label="breadcrumb" style="width: 320px;">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">Authorization</li>
            </ol>
         </div>

         <div class="col"></div>
      </div>
   </div>


   <div class="container">
      <div class="col-md-6 mx-auto mt-5">
         <div class="card-hidden" style="text-align: center;">
            <h1>
               Masuk Sebagai Admin
            </h1>
         </div>
         <!-- FORM LOGIN -->
         <div class="col mb-5">
            <form action="" method="post">
               <?php if (session()->getFlashdata('error')) { ?>
                  <div class="alert alert-danger">
                     <?php echo session()->getFlashdata('error') ?>
                  </div>
               <?php }
               ?>
               <div class="mb-3">
                  <label for="InputForEmail" class="form-label">Username</label>
                  <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
               </div>
               <div class=" mb-3">
                  <label for="InputForPassword" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
               </div>
               <input type="submit" name="login" class="btn btn-primary" value="Login">
            </form>
         </div>
         <!-- END LOGIN -->
      </div>
   </div>

   <?= $this->endSection(); ?>
   <?= $this->renderSection('scripts') ?>