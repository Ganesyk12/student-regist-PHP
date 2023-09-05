<?= $this->extend('layouts/admin') ?>
<?php $this->section('styles') ?>
<!-- Custom styles for this page -->
<link href="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.css') ?> " rel="stylesheet">
<?= $this->endSection() ?>
<?= $this->section('content') ?>

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

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col">
            <h4 class="col-md-6 mt-5 h4 mb-2 text-gray-800" style="text-align:left; font-family:'Times New Roman', Times, serif;">
                FORM EDIT DATA</h4>
        </div>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="width:150%;overflow:auto;">
                    <thead style="text-align: center;">
                        <tr>
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
                    <form action="<?= base_url('submitEditSiswa') ?>" method="post">
                        <!-- Input type hidden untuk mengirim id siswa yang diedit -->
                        <input value="<?= $siswa['id'] ?>" type="hidden" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="id">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="input-group mb-3">
                                        <input value="<?= $siswa['nama_lengkap'] ?>" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="nama_lengkap">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group mb-3 mt-2">
                                        <select id="tahun_ajaran" class="form-select w-100" aria-label="Default select example" name="tahun_ajaran">
                                            <option value="2023-2024" selected>2023-2024</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group mb-3">
                                        <input value="<?= $siswa['tempat_lahir'] ?>" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="tempat_lahir">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group mb-3">
                                        <input value="<?= $siswa['tgl_lahir'] ?>" type="date" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="tgl_lahir">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group mb-3">
                                        <input value="<?= $siswa['jenis_kelamin'] ?>" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="jenis_kelamin">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group mb-3">
                                        <input value="<?= $siswa['agama'] ?>" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="agama">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group mb-3">
                                        <input value="<?= $siswa['anak'] ?>" type="number" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="anak">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group mb-3">
                                        <input value="<?= $siswa['jum_sdr'] ?>" type="number" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="jum_sdr">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group mb-3">
                                        <input value="<?= $siswa['alamat'] ?>" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="alamat">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group mb-3">
                                        <input value="<?= $siswa['telp'] ?>" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="telp">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group mb-3">
                                        <input value="<?= $siswa['nama_ortu'] ?>" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="nama_ortu">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group mb-3">
                                        <input value="<?= $siswa['pekerjaan'] ?>" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="pekerjaan">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group mb-3">
                                        <input value="<?= $siswa['alamat_ortu'] ?>" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="alamat_ortu">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group mb-3">
                                        <input value="<?= $siswa['tanggal_input'] ?>" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="tanggal_input">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group mb-3">
                                        <button type="submit" href="" class="btn btn-primary">Simpan</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </form>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Add Contact Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('contact') ?>" method="post">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Contact Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Contact Email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Contact Number" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Contact Address" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?php $this->section('scripts') ?>
<!-- Page level plugins -->
<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
<!-- Page level custom scripts -->
<script>
    // Call the dataTables jQuery plugin
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
<?php $this->endSection() ?>