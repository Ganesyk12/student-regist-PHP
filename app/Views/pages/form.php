<?= $this->extend('layouts/admin'); ?>
<?= $this->section('content'); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-warning py-2 static-top shadow">
    <div class="container-fluid">
        <a href="<?= base_url('home') ?>">
            <img src="assets/icon/sd.png" class="icon" width="80px" height="80px"></a>
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

<!-- Begining Content -->
<div class="card-hidden" style="width: 400px;">
    <div class=" col-sm mx-auto mt-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Pendaftaran</li>
        </ol>
    </div>
</div>

<div class="col-md-6 mx-auto mt-1">
    <div class="container-fluid">
        <!-- Head Content-->
        <h5 class="mb-0 text-black" style="font-family:'Times New Roman', Times, serif; text-align:center">
            FORM PENDAFTARAN CALON SISWA / SISWI <br> SDN MARGAHAYU VIII</h5>
    </div>
</div>

<!-- Body Content -->
<div class="container">
    <div class="col-md-6 mx-auto mt-3">

        <!-- FORM-->
        <form action="saveFormData" method="post">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label for="tahun_ajaran">Tahun Ajaran</label>
                <select id="tahun_ajaran" class="form-control w-100" aria-label="Default select example" name="tahun_ajaran">
                    <option value="2023-2024" selected>2023-2024</option>
                </select>
            </div>
            <div class="form-group">
                <label><span>Nama Lengkap</span></label>
                <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" autofocus minlength="2">
            </div>
            <!-- Row 2-->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label><span>Tempat Lahir</span></label>
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" minlength="5">
                </div>
                <div class="form-group col-md-6">
                    <label><span>Tanggal Lahir</span></label>
                    <input type="date" class="form-control" name="tgl_lahir">
                </div>
            </div>
            <!-- Row 3 -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label><span>Jenis Kelamin</span></label>
                    <select name="jenis_kelamin" class="form-control">
                        <option selected>Jenis Kelamin</option>
                        <option value="Laki-laki">Laki - laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label><span>Agama</span></label>
                    <input type="text" class="form-control" name="agama" placeholder="Agama">
                </div>
            </div>
            <!-- Row 4 -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label><span>Anak Urut</span></label>
                    <input type="number" class="form-control" name="anak" placeholder="Anak Ke-" min="1">
                </div>
                <div class="form-group col-md-6">
                    <label><span>Jumlah Saudara</span></label>
                    <input type="number" class="form-control" name="jum_sdr" placeholder="Jumlah saudara" min="0">
                </div>
            </div>
            <!-- Row 5 -->
            <div class="form-group">
                <label><span>Alamat Tempat Tinggal</span></label>
                <input type="text" class="form-control" name="alamat" placeholder="Alamat Tempat Tinggal" minlength="5">
            </div>
            <!-- Row 6 -->
            <div class="form-group">
                <label><span>No. Telepon yang bisa dihubungi</span></label>
                <input type="text" class="form-control" name="telp" placeholder="No. Telepon yang bisa dihubungi">
            </div>
            <!-- Row 7 -->
            <div class="form-group">
                <label><span>Nama Orang tua atau Wali</span></label>
                <input type="text" class="form-control" name="nama_ortu" placeholder="Nama Orang tua / Wali" minlength="2">
            </div>
            <!-- Row 8 -->
            <div class="form-group">
                <label><span>Pekerjaan Orang tua atau Wali</span></label>
                <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan Orang tua / Wali" minlength="2">
            </div>
            <!-- Row 9 -->
            <div class="form-group">
                <label><span>Alamat Orang tua atau Wali</span></label>
                <input type="text" class="form-control" name="alamat_ortu" placeholder="Alamat Orang tua / Wali" minlength="5">
            </div>
            <!-- Submit -->
            <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah data yang Anda input sudah benar ?')">Daftar</button>
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