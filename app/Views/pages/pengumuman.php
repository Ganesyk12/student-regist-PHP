<?= $this->extend('layouts/admin'); ?>
<?php $this->section('styles') ?>
<!-- Custom styles for this page -->
<link href="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.css') ?> " rel="stylesheet">
<?= $this->endSection() ?>
<?= $this->section('content'); ?>


<div class="container-fluid">
      <!-- Page Heading -->
      <div class="col md-4  mt-3 align-items-center justify-content-between mb-2">
            <div class="row">
                  <div class=" col-sm-3 mx-auto " aria-label="breadcrumb" style="width: 320px;">
                        <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Pengumuman</li>
                        </ol>
                  </div>

                  <div class="col"></div>
            </div>
      </div>
</div>

<div class="container-fluid">

      <div class="row">
            <div class="col">
                  <h4 class="col-md-6 h4 mb-2 text-gray-800" style="text-align:left; font-family:'Times New Roman', Times, serif;">
                        DATA PENDAFTAR CALON SISWA / SISWI</h4>
            </div>
      </div>

      <div class="col mx-auto">
            <div class="card shadow mb-4">
                  <div class="card-body">
                        <div class="table-responsive">
                              <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0" style="overflow:auto;">
                                    <thead class="align-middle thead-dark" style="text-align: center;">
                                          <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Lengkap</th>
                                                <th scope="col">Tempat Lahir</th>
                                                <th scope="col">Tanggal Lahir</th>
                                                <th scope="col">Jenis Kelamin</th>
                                                <th scope="col">Agama</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">No. Telepon</th>
                                                <th scope="col">Nama Orangtua</th>
                                                <th scope="col">Pekerjaan Orangtua</th>
                                                <th scope="col">Alamat Orangtua</th>
                                                <th scope="col">Tanggal Input</th>
                                                <th scope="col">Tahun Ajaran</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                          <?php $i = 1; ?>
                                          <?php foreach ($siswa as $idx) : ?>
                                                <tr>
                                                      <th scope="row"><?= $i++; ?></th>
                                                      <td><?= $idx['nama_lengkap']; ?></td>
                                                      <td><?= $idx['tempat_lahir']; ?></td>
                                                      <td><?= $idx['tgl_lahir']; ?></td>
                                                      <td><?= $idx['jenis_kelamin']; ?></td>
                                                      <td><?= $idx['agama']; ?></td>
                                                      <td><?= $idx['alamat']; ?></td>
                                                      <td><?= $idx['telp']; ?></td>
                                                      <td><?= $idx['nama_ortu']; ?></td>
                                                      <td><?= $idx['pekerjaan']; ?></td>
                                                      <td><?= $idx['alamat_ortu']; ?></td>
                                                      <td><?= $idx['tanggal_input']; ?></td>
                                                      <td><?= $idx['tahun_ajaran'] ?></td>
                                                </tr>
                                          <?php endforeach; ?>
                              </table>
                        </div>
                  </div>
            </div>
      </div>

</div>
<?= $this->endSection(); ?>
<?= $this->RenderSection('script'); ?>