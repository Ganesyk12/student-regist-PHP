<?= $this->extend('layouts/admin') ?>
<?php $this->section('styles') ?>
<!-- Custom styles for this page -->
<link href="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.css') ?> " rel="stylesheet">
<?= $this->endSection() ?>
<?= $this->section('content') ?>


<!-- NAVBAR CONTENT -->
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
               <li class="breadcrumb-item active" aria-current="page">Pengumuman</li>
            </ol>
         </div>
         <div class="col-md mx-auto">
            <a class="btn btn-danger btn-lg" href="<?= base_url('login'); ?>" data-toggle="modal" data-target="#logoutModal">Logout</a>
            <a class="btn btn-success btn-lg" href="<?= base_url('report'); ?>">Cetak</a>
         </div>
         <div class="col"></div>
      </div>

   </div>

   <div class="row">
      <div class="col">
         <h4 class="col-md-6 h4 mb-2 text-gray-800" style="text-align:left; font-family:'Times New Roman', Times, serif;">
            DATA CALON SISWA / SISWI</h4>
      </div>
   </div>


   <?php
   if (session()->getFlashData('success')) {
   ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
         <?= session()->getFlashData('success') ?>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
      </div>
   <?php
   }
   ?>

   <!-- DATA TABLES-->
   <div class="card shadow mb-4">
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0" style="overflow:auto;">
               <thead class="thead-dark">
                  <tr>
                     <th>No</th>
                     <th>Nama Lengkap</th>
                     <th>Tahun Ajaran</th>
                     <th>Tempat Lahir</th>
                     <th>Tanggal Lahir</th>
                     <th>Jenis Kelamin</th>
                     <th>Agama</th>
                     <th>Anak</th>
                     <th>Jumlah Sodara</th>
                     <th>Alamat</th>
                     <th>Telepon</th>
                     <th>Nama Ortu</th>
                     <th>Pekerjaan</th>
                     <th>Alamat Ortu</th>
                     <th>Tanggal Input</th>
                     <th>Aksi</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $x = 0; ?>
                  <?php foreach ($siswa as $key) : ?>
                     <tr>
                        <td><?= ++$x ?></td>
                        <td><?= $key['nama_lengkap'] ?></td>
                        <td><?= $key['tahun_ajaran'] ?></td>
                        <td><?= $key['tempat_lahir'] ?></td>
                        <td><?= $key['tgl_lahir'] ?></td>
                        <td><?= $key['jenis_kelamin'] ?></td>
                        <td><?= $key['agama'] ?></td>
                        <td><?= $key['anak'] ?></td>
                        <td><?= $key['jum_sdr'] ?></td>
                        <td><?= $key['alamat'] ?></td>
                        <td><?= $key['telp'] ?></td>
                        <td><?= $key['nama_ortu'] ?></td>
                        <td><?= $key['pekerjaan'] ?></td>
                        <td><?= $key['alamat_ortu'] ?></td>
                        <td><?= $key['tanggal_input'] ?></td>
                        <td>
                           <a href="<?= base_url('editSiswa/') . $key['id'] ?>" class="btn btn-warning">Edit</a>
                           <a onclick="confirm('Apakah anda yakin ingin menghapus data?')" class="btn btn-danger" href="<?= base_url('remove/') . $key['id'] ?>">Hapus</a>
                        </td>

                     </tr>
                  <?php endforeach; ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
<!-- Add Contact Modal -->
<!-- RemoveModel -->



<?= $this->endSection() ?>
<?php $this->extend('scripts') ?>